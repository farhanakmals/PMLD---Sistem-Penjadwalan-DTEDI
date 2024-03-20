<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftar_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('jabatan_akademik');
            $table->string('nidn_nidk')->unique();
            $table->string('unit_kerja');
            $table->string('unit_kecil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_daftar_dosen');
    }
};
