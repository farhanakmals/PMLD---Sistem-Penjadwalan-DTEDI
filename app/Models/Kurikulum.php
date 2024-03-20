<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kurikulum extends Model
{
    use HasFactory;

    protected $table = 'kurikulum';
    protected $fillable = [
        'id',
        'prodi',
        'kode_mk',
        'mata_kuliah_idn',
        'mata_kuliah_en',
        'sks',
        'kelompok',
        'jenis',
        'semester',
        'P/T',
        'afiliasi_lab',
    ];
    
}
