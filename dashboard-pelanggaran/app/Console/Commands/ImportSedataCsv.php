<?php

namespace App\Console\Commands;

use App\Models\DataPelanggaran;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportSedataCsv extends Command
{
    /**
     * Nama command:
     * php artisan sedata:import
     */
    protected $signature = 'sedata:import';

    protected $description = 'Import seluruh data CSV Sedata Bantul ke database';

    public function handle()
    {
        $folder = storage_path('app/data/sedata');

        // Pastikan folder tersedia
        if (!File::exists($folder)) {
            $this->error("Folder tidak ditemukan: {$folder}");
            return Command::FAILURE;
        }

        // Ambil semua file CSV
        $files = File::allFiles($folder);

        $csvFiles = collect($files)
            ->filter(function ($file) {
                return strtolower($file->getExtension()) === 'csv';
            })
            ->values();

        if ($csvFiles->isEmpty()) {
            $this->warn('Tidak ada file CSV ditemukan.');
            return Command::SUCCESS;
        }

        $this->info("Ditemukan {$csvFiles->count()} file CSV.");
        $this->newLine();

        $totalInserted = 0;

        foreach ($csvFiles as $file) {

            $fileName = $file->getFilename();

            $this->line("Memproses: {$fileName}");

            try {

                $inserted = $this->importFile(
                    $file->getPathname(),
                    $fileName
                );

                $totalInserted += $inserted;

                $this->info("  ✓ {$inserted} data berhasil dimasukkan.");
            } catch (\Throwable $e) {

                $this->error("  ✗ Gagal: {$e->getMessage()}");
            }
        }

        $this->newLine();

        $this->info("==========================================");
        $this->info("IMPORT SELESAI");
        $this->info("Total data dimasukkan: {$totalInserted}");
        $this->info("==========================================");

        return Command::SUCCESS;
    }

    /**
     * Memproses satu file CSV
     */
    private function importFile(string $path, string $fileName): int
    {
        $handle = fopen($path, 'r');

        if (!$handle) {
            throw new \Exception('File tidak dapat dibuka.');
        }

        // ==========================================
        // BACA HEADER
        // ==========================================

        $headers = fgetcsv($handle);

        if (!$headers) {
            fclose($handle);
            throw new \Exception('Header CSV tidak ditemukan.');
        }

        // Bersihkan BOM dan spasi
        $headers = array_map(function ($header) {
            return trim(
                preg_replace('/^\xEF\xBB\xBF/', '', $header)
            );
        }, $headers);

        // ==========================================
        // CARI KOLOM TAHUN
        // ==========================================

        $yearColumns = [];

        foreach ($headers as $index => $header) {

            if (preg_match('/^\d{4}$/', $header)) {
                $yearColumns[$header] = $index;
            }
        }

        if (empty($yearColumns)) {
            fclose($handle);
            throw new \Exception(
                'Kolom tahun tidak ditemukan.'
            );
        }

        // ==========================================
        // BACA SEMUA BARIS
        // ==========================================

        $rows = [];

        while (($row = fgetcsv($handle)) !== false) {

            // Lewati baris kosong
            if (count($row) < 2) {
                continue;
            }

            $rows[] = $row;
        }

        fclose($handle);

        if (empty($rows)) {
            return 0;
        }

        // ==========================================
        // NAMA DATA UTAMA
        // Biasanya berada pada baris pertama
        // ==========================================

        $namaDataUtama = trim($rows[0][1] ?? '');

        if ($namaDataUtama === '') {
            $namaDataUtama = pathinfo(
                $fileName,
                PATHINFO_FILENAME
            );
        }

        // ==========================================
        // JENIS PELANGGARAN
        // ==========================================

        $jenisPelanggaran = $this->cleanText(
            $namaDataUtama
        );

        // ==========================================
        // HAPUS DATA LAMA DARI FILE YANG SAMA
        // Supaya import ulang tidak menggandakan data
        // ==========================================

        DataPelanggaran::where(
            'sumber_file',
            $fileName
        )->delete();

        $inserted = 0;

        // ==========================================
        // MASUKKAN DATA KE DATABASE
        // ==========================================

        DB::transaction(function () use (
            $rows,
            $yearColumns,
            $namaDataUtama,
            $jenisPelanggaran,
            $fileName,
            &$inserted
        ) {

            foreach ($rows as $row) {

                $kode = trim($row[0] ?? '');
                $namaWilayah = trim($row[1] ?? '');
                $satuan = trim($row[2] ?? '');

                // Lewati jika tidak memiliki wilayah
                if ($namaWilayah === '') {
                    continue;
                }

                // Tentukan tingkat wilayah
                $tingkatWilayah =
                    $this->tentukanTingkatWilayah(
                        $namaWilayah
                    );

                // Bersihkan nama wilayah
                $wilayah = $this->bersihkanNamaWilayah(
                    $namaWilayah
                );

                // ==================================
                // LOOP SETIAP TAHUN
                // ==================================

                foreach ($yearColumns as $tahun => $index) {

                    $nilaiRaw = trim(
                        $row[$index] ?? ''
                    );

                    // n/a, kosong, -, dll → NULL
                    $nilai = $this->parseNilai(
                        $nilaiRaw
                    );

                    DataPelanggaran::create([

                        'kode' =>
                        $kode !== ''
                            ? $kode
                            : null,

                        'nama_data' =>
                        $namaDataUtama,

                        'jenis_pelanggaran' =>
                        $jenisPelanggaran,

                        'tingkat_wilayah' =>
                        $tingkatWilayah,

                        'wilayah' =>
                        $wilayah,

                        'tahun' =>
                        (int) $tahun,

                        'nilai' =>
                        $nilai,

                        'satuan' =>
                        $satuan !== ''
                            ? $satuan
                            : null,

                        'sumber_file' =>
                        $fileName,

                    ]);

                    $inserted++;
                }
            }
        });

        return $inserted;
    }

    /**
     * Mengubah nilai CSV menjadi angka.
     *
     * Contoh:
     * 24,00 → 24
     * 1,00  → 1
     * n/a   → null
     */
    private function parseNilai(?string $value): ?float
    {
        if ($value === null) {
            return null;
        }

        $value = trim($value);

        if (
            $value === '' ||
            strtolower($value) === 'n/a' ||
            strtolower($value) === 'na' ||
            $value === '-'
        ) {
            return null;
        }

        // Hilangkan tanda kutip
        $value = trim($value, '"');

        // Format Indonesia: 24,00 → 24.00
        $value = str_replace('.', '', $value);
        $value = str_replace(',', '.', $value);

        return is_numeric($value)
            ? (float) $value
            : null;
    }

    /**
     * Menentukan tingkat wilayah.
     */
    private function tentukanTingkatWilayah(
        string $nama
    ): string {

        $namaLower = strtolower($nama);

        if (
            str_starts_with(
                $namaLower,
                'kapanewon'
            )
        ) {
            return 'Kapanewon';
        }

        if (
            str_starts_with(
                $namaLower,
                'kalurahan'
            )
        ) {
            return 'Kalurahan';
        }

        if (
            str_starts_with(
                $namaLower,
                'desa'
            )
        ) {
            return 'Desa';
        }

        return 'Wilayah';
    }

    /**
     * Menghilangkan kata Kapanewon/Kalurahan/Desa
     * dari nama wilayah.
     */
    private function bersihkanNamaWilayah(
        string $nama
    ): string {

        return trim(
            preg_replace(
                '/^(Kapanewon|Kalurahan|Desa)\s+/i',
                '',
                $nama
            )
        );
    }

    /**
     * Membersihkan teks.
     */
    private function cleanText(
        ?string $text
    ): ?string {

        if ($text === null) {
            return null;
        }

        return trim(
            preg_replace(
                '/\s+/',
                ' ',
                $text
            )
        );
    }
}
