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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_museum')->references('id')->on('museums')->constrained();
            $table->foreignId('id_kualifikasi')->references('id')->on('kualifikasis')->constrained();
            $table->string('kode_buku')->nullable();
            $table->string('judul_buku')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('halaman')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('ket')->nullable();
            $table->string('tanggal_inventaris')->nullable();
            $table->string('foto_buku')->nullable();
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
        Schema::dropIfExists('bukus');
    }
};
