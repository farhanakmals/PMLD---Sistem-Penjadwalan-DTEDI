<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarDosen extends Model
{
    use HasFactory;

    protected $table = 'daftar_dosen';
    
    protected $fillable = [
        'id',
        'jabatan_akademik',
        'nama_dosen',
        'nidn_nidk',
        'unit_kecil',
        'unit_kerja'
    ];

}
