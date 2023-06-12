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
            $table->foreignId('id_museum')->references('id')->on('museum')->constrained();
            $table->string('kode_buku');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->string('bahasa');
            $table->string('halaman');
            $table->string('ket');
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
