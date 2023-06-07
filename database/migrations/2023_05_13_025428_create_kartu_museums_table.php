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
        Schema::create('kartu_museums', function (Blueprint $table) {
            $table->id();
            $table->string('nama_benda');
            $table->string('bahan');
            $table->string('asal_ditemukan');
            $table->string('tempat_pembuatan');
            $table->string('cara_didapat');
            $table->string('tahun_abad_masa');
            $table->string('desk_benda');
            $table->string('keterangan');
            $table->string('ukuran_d');
            $table->string('ukuran_tb');
            $table->string('ukuran_pj');
            $table->string('ukuran_l');
            $table->string('ukuran_ti');
            $table->string('ukuran_br');
            $table->string('tempat_simpan');
            $table->string('no_inv');
            $table->string('no_reg');
            $table->string('no_foto');
            $table->string('no_slide'); 
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
        Schema::dropIfExists('kartu_museums');
    }
};
