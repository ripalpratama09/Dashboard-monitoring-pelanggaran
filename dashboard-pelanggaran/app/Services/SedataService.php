<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\DataPelanggaran;

class SedataService
{
    private string $baseUrl;
    private string $instansiCode;

    public function __construct()
    {
        $this->baseUrl = config('services.sedata.base_url');
        $this->instansiCode = config('services.sedata.instansi_code');
    }

    /**
     * Ambil daftar instansi
     */
    public function getInstansi()
    {
        $response = Http::get($this->baseUrl . '/instansi');

        return $response->json();
    }

    /**
     * Ambil daftar indikator
     */
    public function getIndikator()
    {
        $response = Http::withHeaders([
            'X-instansi-Code' => 11300,
        ])->get($this->baseUrl . '/indikator');

        return [
            'status_code' => $response->status(),
            'body' => $response->json(),
        ];
    }

    /**
     * ============================================================
     * DASHBOARD UTAMA
     * ============================================================
     *
     * Dashboard utama menggunakan data tingkat Kapanewon.
     */
    public function getDashboard($selectedKapanewon = 'Semua Kapanewon')
    {
        /*
        |--------------------------------------------------------------------------
        | QUERY DASAR
        |--------------------------------------------------------------------------
        */

        $query = DataPelanggaran::where(
            'tingkat_wilayah',
            'Kapanewon'
        );


        /*
        |--------------------------------------------------------------------------
        | FILTER KAPANEWON
        |--------------------------------------------------------------------------
        */

        if ($selectedKapanewon !== 'Semua Kapanewon') {

            $query->where(
                'wilayah',
                $selectedKapanewon
            );
        }


        /*
        |--------------------------------------------------------------------------
        | TOTAL PELANGGARAN
        |--------------------------------------------------------------------------
        */

        $totalPelanggaran = (clone $query)
            ->sum('nilai');


        /*
        |--------------------------------------------------------------------------
        | JENIS PELANGGARAN DOMINAN
        |--------------------------------------------------------------------------
        */

        $jenisDominan = (clone $query)
            ->where(
                'jenis_pelanggaran',
                'not like',
                '%trantibum%'
            )
            ->selectRaw(
                'jenis_pelanggaran, SUM(nilai) as total'
            )
            ->groupBy('jenis_pelanggaran')
            ->orderByDesc('total')
            ->first();


        /*
        |--------------------------------------------------------------------------
        | DATA PER KAPANEWON
        |--------------------------------------------------------------------------
        */

        $kapanewonData = DataPelanggaran::where(
            'tingkat_wilayah',
            'Kapanewon'
        )
            ->selectRaw(
                'wilayah, SUM(nilai) as total'
            )
            ->groupBy('wilayah')
            ->orderByDesc('total')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | KAPANEWON TERTINGGI
        |--------------------------------------------------------------------------
        */

        $kapanewonTertinggi = $kapanewonData->first();


        /*
        |--------------------------------------------------------------------------
        | TOP 10 KAPANEWON
        |--------------------------------------------------------------------------
        */

        $top10 = $kapanewonData
            ->take(10);


        /*
        |--------------------------------------------------------------------------
        | TOP 5 KAPANEWON
        |--------------------------------------------------------------------------
        */

        $top5 = $kapanewonData
            ->take(5);


        /*
        |--------------------------------------------------------------------------
        | TREN PELANGGARAN PER TAHUN
        |--------------------------------------------------------------------------
        */

        $trenTahunan = (clone $query)
            ->selectRaw(
                'tahun, SUM(nilai) as total'
            )
            ->groupBy('tahun')
            ->orderBy('tahun')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | DATA JENIS PELANGGARAN
        |--------------------------------------------------------------------------
        */

        $jenisData = (clone $query)
            ->where(
                'jenis_pelanggaran',
                'not like',
                '%trantibum%'
            )
            ->selectRaw(
                'jenis_pelanggaran, SUM(nilai) as total'
            )
            ->groupBy('jenis_pelanggaran')
            ->orderByDesc('total')
            ->get();

        $mapJenisData = DataPelanggaran::where(
            'tingkat_wilayah',
            'Kapanewon'
        )
            ->where(
                'jenis_pelanggaran',
                'not like',
                '%trantibum%'
            )
            ->selectRaw(
                'wilayah, jenis_pelanggaran, SUM(nilai) as total'
            )
            ->groupBy('wilayah', 'jenis_pelanggaran')
            ->orderBy('wilayah')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | RETURN DATA DASHBOARD
        |--------------------------------------------------------------------------
        */

        return [

            /*
            |--------------------------------------------------------------------------
            | CARDS
            |--------------------------------------------------------------------------
            */

            'cards' => [

                'totalPelanggaran' => $totalPelanggaran,

                'jenisDominan' => [

                    'nama' => $jenisDominan
                        ? $this->formatJenisPelanggaran($jenisDominan->jenis_pelanggaran)
                        : 'Tidak ada data',

                    'jumlah' => $jenisDominan
                        ? (float) $jenisDominan->total
                        : 0,

                ],

                'kapanewon' => [

                    'nama' => $kapanewonTertinggi
                        ? $kapanewonTertinggi->wilayah
                        : '-',

                    'jumlah' => $kapanewonTertinggi
                        ? $kapanewonTertinggi->total
                        : 0,

                ],

            ],


            /*
            |--------------------------------------------------------------------------
            | CHARTS
            |--------------------------------------------------------------------------
            */

            'charts' => [

                /*
                | Grafik tren tahunan
                */

                'line' => [

                    'labels' => $trenTahunan
                        ->pluck('tahun')
                        ->values(),

                    'data' => $trenTahunan
                        ->pluck('total')
                        ->values(),

                ],


                /*
                | Grafik Top 10 Kapanewon
                */

                'bar' => [

                    'labels' => $top10
                        ->pluck('wilayah')
                        ->values(),

                    'data' => $top10
                        ->pluck('total')
                        ->values(),

                ],


                /*
                | Grafik jenis pelanggaran
                */

                'jenis' => [

                    'labels' => $jenisData
                        ->map(function ($item) {
                            return $this->formatJenisPelanggaran(
                                $item->jenis_pelanggaran
                            );
                        })
                        ->values()
                        ->toArray(),

                    'data' => $jenisData
                        ->pluck('total')
                        ->map(
                            fn($value) => (float) $value
                        )
                        ->values()
                        ->toArray(),

                ],

            ],


            /*
            |--------------------------------------------------------------------------
            | RANKING TOP 5 KAPANEWON
            |--------------------------------------------------------------------------
            */

            'ranking' => $top5
                ->map(function ($item) {

                    return [

                        'nama' => $item->wilayah,

                        'jumlah' => $item->total,

                    ];
                })
                ->values()
                ->toArray(),


            /*
            |--------------------------------------------------------------------------
            | DATA PETA CHOROPLETH
            |--------------------------------------------------------------------------
            */

            'map' => $mapJenisData
                ->groupBy('wilayah')
                ->map(function ($jenisWilayah, $wilayah) {
                    $jenis = $jenisWilayah
                        ->map(function ($item) {
                            return [
                                'nama' => $this->formatJenisPelanggaran($item->jenis_pelanggaran),
                                'jumlah' => (float) $item->total,
                            ];
                        })
                        ->values();

                    return [
                        'nama' => $wilayah,
                        'jumlah' => $jenis->sum('jumlah'),
                        'jenis' => $jenis,
                    ];
                })
                ->values()
                ->toArray(),

        ];
    }


    /**
     * ============================================================
     * STATISTIK
     * ============================================================
     *
     * Statistik dapat menggunakan:
     *
     * - Tahun
     * - Jenis Pelanggaran
     * - Tingkat Wilayah
     * - Wilayah
     *
     * Tingkat wilayah:
     *
     * - Kapanewon
     * - Kalurahan
     */
    public function getStatistik(
        ?int $tahun = null,
        ?string $jenis = null,
        string $tingkatWilayah = 'Kapanewon',
        ?string $wilayah = null
    ) {

        /*
        |--------------------------------------------------------------------------
        | QUERY DASAR
        |--------------------------------------------------------------------------
        */

        $query = DataPelanggaran::query()
            ->where(
                'tingkat_wilayah',
                $tingkatWilayah
            );


        /*
        |--------------------------------------------------------------------------
        | FILTER TAHUN
        |--------------------------------------------------------------------------
        */

        if ($tahun) {

            $query->where(
                'tahun',
                $tahun
            );
        }


        /*
        |--------------------------------------------------------------------------
        | FILTER JENIS PELANGGARAN
        |--------------------------------------------------------------------------
        */

        if ($jenis) {

            /*
            Jika user memilih jenis tertentu,
            gunakan indikator tersebut.
            */

            $query->where(
                'jenis_pelanggaran',
                $jenis
            );
        } else {

            /*
            Jika user memilih "Semua Jenis Pelanggaran",
            indikator Trantibum tidak ikut dijumlahkan.

            Alasannya:
            Trantibum merupakan angka agregat dari
            kategori pelanggaran lainnya.

            Jika ikut dijumlahkan, data akan double counting.
            */

            $query->where(
                'jenis_pelanggaran',
                'not like',
                '%trantibum%'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | FILTER WILAYAH
        |--------------------------------------------------------------------------
        */

        if ($wilayah) {

            $query->where(
                'wilayah',
                $wilayah
            );
        }


        /*
        |--------------------------------------------------------------------------
        | TOTAL PELANGGARAN
        |--------------------------------------------------------------------------
        */

        $totalPelanggaran = (clone $query)
            ->sum('nilai');


        /*
        |--------------------------------------------------------------------------
        | DATA PER WILAYAH
        |--------------------------------------------------------------------------
        */

        $wilayahData = (clone $query)
            ->selectRaw(
                'wilayah, SUM(nilai) as total'
            )
            ->groupBy('wilayah')
            ->orderByDesc('total')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | DATA PER TAHUN
        |--------------------------------------------------------------------------
        */

        $trenTahunan = (clone $query)
            ->selectRaw(
                'tahun, SUM(nilai) as total'
            )
            ->groupBy('tahun')
            ->orderBy('tahun')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | DATA PER JENIS
        |--------------------------------------------------------------------------
        */

        $jenisData = (clone $query)
            ->selectRaw(
                'jenis_pelanggaran, SUM(nilai) as total'
            )
            ->groupBy('jenis_pelanggaran')
            ->orderByDesc('total')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | WILAYAH TERTINGGI
        |--------------------------------------------------------------------------
        */

        $wilayahTertinggi = $wilayahData->first();


        $minTahun = DataPelanggaran::min('tahun');
        $maxTahun = DataPelanggaran::max('tahun');
        $rentangTahun = ($minTahun && $maxTahun && $minTahun !== $maxTahun)
            ? "{$minTahun}–{$maxTahun}"
            : ($minTahun ?: '');

        /*
        |--------------------------------------------------------------------------
        | RETURN DATA STATISTIK
        |--------------------------------------------------------------------------
        */

        return [

            /*
            |--------------------------------------------------------------------------
            | FILTER
            |--------------------------------------------------------------------------
            */

            'filter' => [

                'tahun' => $tahun,

                'jenis' => $jenis,

                'tingkatWilayah' => $tingkatWilayah,

                'wilayah' => $wilayah,

            ],


            /*
            |--------------------------------------------------------------------------
            | CARDS
            |--------------------------------------------------------------------------
            */

            'cards' => [

                'totalPelanggaran' => (float) $totalPelanggaran,

                'wilayahTertinggi' => [

                    'nama' => $wilayahTertinggi
                        ? $wilayahTertinggi->wilayah
                        : '-',

                    'jumlah' => $wilayahTertinggi
                        ? (float) $wilayahTertinggi->total
                        : 0,

                ],

                'tahun' => $tahun
                    ? "Tahun {$tahun}"
                    : ($rentangTahun ? "Data tahun {$rentangTahun}" : ''),

            ],


            /*
            |--------------------------------------------------------------------------
            | CHARTS
            |--------------------------------------------------------------------------
            */

            'charts' => [

                /*
                |--------------------------------------------------------------------------
                | GRAFIK TREN
                |--------------------------------------------------------------------------
                */

                'line' => [

                    'labels' => $trenTahunan
                        ->pluck('tahun')
                        ->values()
                        ->toArray(),

                    'data' => $trenTahunan
                        ->pluck('total')
                        ->map(
                            fn($value) => (float) $value
                        )
                        ->values()
                        ->toArray(),

                ],


                /*
                |--------------------------------------------------------------------------
                | GRAFIK WILAYAH
                |--------------------------------------------------------------------------
                */

                'bar' => [

                    'labels' => $wilayahData
                        ->pluck('wilayah')
                        ->values()
                        ->toArray(),

                    'data' => $wilayahData
                        ->pluck('total')
                        ->map(
                            fn($value) => (float) $value
                        )
                        ->values()
                        ->toArray(),

                ],


                /*
                |--------------------------------------------------------------------------
                | GRAFIK JENIS
                |--------------------------------------------------------------------------
                */

                'jenis' => [

                    'labels' => $jenisData
                        ->map(function ($item) {

                            return $this->formatJenisPelanggaran(
                                $item->jenis_pelanggaran
                            );
                        })
                        ->values()
                        ->toArray(),

                    'data' => $jenisData
                        ->pluck('total')
                        ->map(
                            fn($value) => (float) $value
                        )
                        ->values()
                        ->toArray(),

                ],

            ],


            /*
            |--------------------------------------------------------------------------
            | RANKING WILAYAH
            |--------------------------------------------------------------------------
            */

            'ranking' => $wilayahData
                ->take(10)
                ->map(function ($item) {

                    return [

                        'nama' => $item->wilayah,

                        'jumlah' => (float) $item->total,

                    ];
                })
                ->values()
                ->toArray(),

        ];
    }


    /**
     * ============================================================
     * FORMAT NAMA JENIS PELANGGARAN
     * ============================================================
     *
     * Mengubah nama indikator yang panjang
     * menjadi nama yang lebih mudah dibaca user.
     */
    private function formatJenisPelanggaran(
        string $jenis
    ): string {
        $normalizedJenis = strtolower($jenis);

        if (str_contains(
            $normalizedJenis,
            'gelandangan dan pengemis'
        )) {

            return 'Gelandangan & Pengemis';
        }


        if (str_contains(
            $normalizedJenis,
            'lingkungan'
        )) {

            return 'Lingkungan';
        }


        if (str_contains(
            $normalizedJenis,
            'minuman berakohol'
        ) || str_contains(
            $normalizedJenis,
            'minuman beralkohol'
        )) {

            return 'Minuman Beralkohol';
        }


        if (str_contains(
            $normalizedJenis,
            'pedagang kaki lima'
        )) {

            return 'Pedagang Kaki Lima';
        }


        if (str_contains(
            $normalizedJenis,
            'pelacuran'
        )) {

            return 'Pelacuran';
        }


        if (str_contains(
            $normalizedJenis,
            'reklame'
        )) {

            return 'Reklame';
        }


        if (str_contains(
            $normalizedJenis,
            'sampah'
        )) {

            return 'Sampah';
        }


        if (str_contains(
            $normalizedJenis,
            'trantibum'
        )) {

            return 'Trantibum';
        }


        return $jenis;
    }
}
