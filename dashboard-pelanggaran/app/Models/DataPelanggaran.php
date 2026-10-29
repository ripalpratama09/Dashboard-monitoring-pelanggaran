<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPelanggaran extends Model
{
    protected $table = 'data_pelanggaran';

    protected $fillable = [
        'kode',
        'nama_data',
        'jenis_pelanggaran',
        'tingkat_wilayah',
        'wilayah',
        'tahun',
        'nilai',
        'satuan',
        'sumber_file',
    ];

    protected $casts = [
        'tahun' => 'integer',
        'nilai' => 'decimal:2',
    ];
}
