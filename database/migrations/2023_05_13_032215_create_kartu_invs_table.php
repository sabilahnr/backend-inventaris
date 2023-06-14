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
            $table->string('no_inv')->nullable();
            $table->string('no_reg')->nullable();
            $table->string('no_reg_foto')->nullable();
            $table->string('nama_kol');
            $table->string('ur_bagian')->nullable();
            $table->string('ur_bentuk')->nullable();
            $table->string('ur_bahan')->nullable();
            $table->string('ur_teknik')->nullable();
            $table->string('ur_warna')->nullable();
            $table->string('ur_dekorasi')->nullable();
            $table->string('ur_ornamen')->nullable();
            $table->string('ur_tenda')->nullable();
            $table->string('ur_asesori')->nullable();
            $table->string('ur_fungsi')->nullable();
            $table->string('ur_simbol')->nullable();
            $table->string('ur_arti')->nullable();
            $table->string('ur_gaya')->nullable();
            $table->string('ur_kelengkapan')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('tempat_asal_pembuatan')->nullable();
            $table->string('tgl_pembuatan')->nullable();
            $table->string('cara_perolehan')->nullable();
            $table->string('tgl_masuk')->nullable();
            $table->string('kondisi_benda')->nullable();
            $table->string('tempat_penyimpanan')->nullable();
            $table->string('dicatat_oleh')->nullable();
            $table->string('tgl_pencatatan')->nullable();
            $table->string('sumber_literatur')->nullable();
            $table->string('sumber_narasumber')->nullable();
            $table->string('ket_lain')->nullable();
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
