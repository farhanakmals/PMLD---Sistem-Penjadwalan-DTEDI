<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarDosen extends Model
{
    use HasFactory;

    protected $table = 'daftar_dosen';
    
    protected $fillable = [
        'Dosen_Team_Teaching',
        'Jabatan_Akademik',
        'kode_JA',
        'NIDN_NIDK',
        'Unit_Kerja',
        'UNIT_KECIL'
    ];

    public function kurikulum() {
        return $this->belongsTo(Kurikulum::class, 'kurikulum_id', 'id');
    }
}
