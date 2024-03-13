<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kurikulum extends Model
{
    use HasFactory;

    protected $table = 'kurikulum';
    protected $fillable = [
        'prodi_kode_mk',
        'prodi',
        'kode_mk',
        'mata_kuliah_ind',
        'mata_kuliah_en',
        'sks',
        'kelompok',
        'jenis',
        'semester',
        'P/T',
        'afiliasi_lab',
    ];

    public function DaftarDosen() {
        return $this->hasMany(DaftarDosen::class, 'kurikulum_id', 'id');
    }
    
}
