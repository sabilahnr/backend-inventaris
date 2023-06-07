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
        Schema::create('kartu_invs', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_koleksi');
            $table->string('sub_koleksi');
            $table->string('no_inv');
            $table->string('no_reg');
            $table->string('no_reg_foto');
            $table->string('nama_kol');
            $table->string('ur_bagian');
            $table->string('ur_bentuk');
            $table->string('ur_bahan');
            $table->string('ur_teknik');
            $table->string('ur_warna');
            $table->string('ur_dekorasi');
            $table->string('ur_ornamen');
            $table->string('ur_tenda');
            $table->string('ur_asesori');
            $table->string('ur_fungsi');
            $table->string('ur_simbol');
            $table->string('ur_arti');
            $table->string('ur_gaya');
            $table->string('ur_kelengkapan');
            $table->string('ukuran');
            $table->string('tempat_asal_pembuatan');
            $table->string('tgl_pembuatan');
            $table->string('cara_perolehan');
            $table->string('tgl_masuk');
            $table->string('kondisi_benda');
            $table->string('tempat_penyimpanan');
            $table->string('dicatat_oleh');
            $table->string('tgl_pencatatan');
            $table->string('sumber_literatur');
            $table->string('sumber_narasumber');
            $table->string('ket_lain');
            $table->string('foto');
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
        Schema::dropIfExists('kartu_invs');
    }
};
