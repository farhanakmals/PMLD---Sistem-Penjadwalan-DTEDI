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
        Schema::create('kurikulum', function (Blueprint $table) {
            $table->id();
            $table->string('prodi');
            $table->string('kode_mk')->unique();
            $table->string('mata_kuliah_idn');
            $table->string('mata_kuliah_en');
            $table->string('sks');
            $table->string('kelompok');
            $table->string('jenis');
            $table->string('semester');
            $table->string('P/T');
            $table->string('afiliasi_lab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_kurikulum');
    }
};
