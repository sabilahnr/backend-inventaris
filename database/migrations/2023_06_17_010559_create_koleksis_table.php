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
        Schema::create('koleksis', function (Blueprint $table) {
            $table->id();
            //$table->string('id_koleksi')->nullable();
            // $table->foreignId('id_museum')->references('id')->on('museums')->constrained();
            $table->foreignId('id_ruang')->references('id')->on('ruangs')->constrained();
            $table->foreignId('id_kualifikasi')->references('id')->on('kualifikasis')->constrained();
            $table->string('nama_koleksi');
            $table->string('dhapur');
            $table->string('klasifikasi');
            $table->string('kode_jenis');
            $table->string('tanggal_regis');
            $table->string('desk_benda');
            $table->string('sejarah');
            $table->string('tempat_pembuatan');
            $table->string('tempat_diperoleh');
            $table->string('cara_diperoleh');
            $table->string('status_cagar_budaya');
            $table->string('sk_cagar_budaya');
            $table->string('keaslian');
            $table->string('kondisi_koleksi');
            $table->string('sub_kondisi_koleksi');
            $table->string('panjang');
            $table->string('lebar_ganja');
            $table->string('tinggi');
            $table->string('berat');
            $table->string('karat')->nullable();
            $table->string('tebal');
            $table->string('bahan');
            $table->string('warna');
            $table->string('foto');
            $table->string('sumber_literasi');
            $table->string('pamor');
            $table->string('warangka');
            $table->string('pendhok');
            $table->string('mendhak');
            $table->string('hibah_dari');
            $table->string('hulu');
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
        Schema::dropIfExists('koleksis');
    }
};
