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
        Schema::create('perubahan_kartu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_benda')->nullable();
            $table->string('bahan')->nullable();
            $table->string('asal_ditemukan')->nullable();
            $table->string('cara_didapat')->nullable();
            $table->string('tahun_abad_masa')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('ukuran_d')->nullable();
            $table->string('ukuran_tb')->nullable();
            $table->string('ukuran_pj')->nullable();
            $table->string('ukuran_l')->nullable();
            $table->string('ukuran_ti')->nullable();
            $table->string('ukuran_br')->nullable();
            $table->string('tempat_simpan')->nullable();
            $table->string('no_inv')->nullable();
            $table->string('no_foto')->nullable();
            $table->string('no_slide')->nullable();
            $table->string('jenis_koleksi')->nullable();
            $table->string('sub_koleksi')->nullable();
            $table->string('no_reg_foto')->nullable();
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
            $table->string('foto_inv')->nullable();
            $table->string('no_reg')->nullable();
            $table->string('nama_kol')->nullable();
            $table->string('tgl_tahun_masuk')->nullable();
            $table->string('ket')->nullable();
            $table->string('harga')->nullable();
            $table->string('uraian_singkat')->nullable();
            $table->string('foto_regis')->nullable();
            $table->foreignId('id_koleksi')->nullable()->constrained('koleksis')->onDelete('set null');
            $table->foreignId('id_buku')->nullable()->constrained('bukus')->onDelete('set null');
            $table->string('tahun_perolehan')->nullable();
            $table->string('tgl_keluar')->nullable();
            $table->string('dibawa_ke')->nullable();
            $table->string('untuk_keperluan')->nullable();
            $table->string('petugas_nama')->nullable();
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
        Schema::dropIfExists('perubahans');
    }
};