<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_pelanggaran', function (Blueprint $table) {

            $table->id();

            // Kode data dari Sedata Bantul
            $table->string('kode')->nullable();

            // Nama data asli dari dataset
            $table->text('nama_data')->nullable();

            // Jenis/kategori pelanggaran
            // Contoh: Sampah, Reklame, PKL, Miras, dll.
            $table->string('jenis_pelanggaran')->nullable();

            // Tingkatan wilayah
            // Kapanewon atau Kalurahan
            $table->string('tingkat_wilayah')->nullable();

            // Nama wilayah
            $table->string('wilayah')->nullable();

            // Tahun data
            $table->year('tahun');

            // Jumlah/nilai pelanggaran
            $table->decimal('nilai', 15, 2)->nullable();

            // Satuan data
            $table->string('satuan')->nullable();

            // Nama file CSV asal
            $table->text('sumber_file')->nullable();

            $table->timestamps();

            // Index agar pencarian/filter lebih cepat
            $table->index('jenis_pelanggaran');
            $table->index('tingkat_wilayah');
            $table->index('wilayah');
            $table->index('tahun');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_pelanggaran');
    }
};
