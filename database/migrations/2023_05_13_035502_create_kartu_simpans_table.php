<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_simpans', function (Blueprint $table) {
            $table->id();
            $table->string('no_reg');
            $table->string('no_inv');
            $table->string('nama_kol');
            $table->string('tahun_perolehan');
            $table->string('tgl_masuk');
            $table->string('tgl_keluar');
            $table->string('penempatan_lokasi');
            $table->string('penempatan_lemari');
            $table->string('penempatan_kunci');
            $table->string('dibawa_ke');
            $table->string('untuk_keperluan');
            $table->string('petugas_nama');
            $table->string('foto_simpan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartu_simpans');
    }
};
