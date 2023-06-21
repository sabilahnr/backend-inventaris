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
        Schema::create('perubahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_museum')->nullable();
            $table->string('alamat_museum')->nullable();
            $table->string('nama_kepala_museum')->nullable();
            $table->string('logo')->nullable();
            $table->string('nama_kualifikasi')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('lemari')->nullable();
            $table->string('kunci')->nullable();
            $table->foreignId('id_museum')->nullable()->constrained('museums')->onDelete('set null');
            $table->foreignId('id_kualifikasi')->nullable()->constrained('kualifikasis')->onDelete('set null');
            $table->string('kode_buku')->nullable();
            $table->string('judul_buku')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('halaman')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('tanggal_inventaris')->nullable();
            $table->string('foto_buku')->nullable();
            $table->foreignId('id_ruang')->nullable()->constrained('ruangs')->onDelete('set null');
            $table->string('nama_koleksi')->nullable();
            $table->string('dhapur')->nullable();
            $table->string('klasifikasi')->nullable();
            $table->string('kode_jenis')->nullable();
            $table->string('tanggal_regis')->nullable();
            $table->string('desk_benda')->nullable();
            $table->string('sejarah')->nullable();
            $table->string('tempat_pembuatan')->nullable();
            $table->string('tempat_diperoleh')->nullable();
            $table->string('cara_diperoleh')->nullable();
            $table->string('status_cagar_budaya')->nullable();
            $table->string('sk_cagar_budaya')->nullable();
            $table->string('keaslian')->nullable();
            $table->string('kondisi_koleksi')->nullable();
            $table->string('sub_kondisi_koleksi')->nullable();
            $table->string('panjang')->nullable();
            $table->string('lebar_ganja')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('berat')->nullable();
            $table->string('karat')->nullable();
            $table->string('tebal')->nullable();
            $table->string('warna')->nullable();
            $table->string('foto')->nullable();
            $table->string('sumber_literasi')->nullable();
            $table->string('pamor')->nullable();
            $table->string('warangka')->nullable();
            $table->string('pendhok')->nullable();
            $table->string('mendhak')->nullable();
            $table->string('hibah_dari')->nullable();
            $table->string('hulu')->nullable();
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
        Schema::dropIfExists('perubahans');
    }
};