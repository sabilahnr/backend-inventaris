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
        Schema::create('kartu_registrasis', function (Blueprint $table) {
            $table->id();
            $table->string('no_reg');
            $table->string('no_inv');
            $table->string('nama_kol');
            $table->string('tempat_pembuatan');
            $table->string('cara_perolehan');
            $table->string('ukuran');
            $table->string('tgl_tahun_masuk');
            $table->string('ket')->nullable();
            $table->string('harga');
            $table->string('uraian_singkat')->nullable();
            $table->string('foto_regis')->nullable();
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
        Schema::dropIfExists('kartu_registrasis');
    }
};
