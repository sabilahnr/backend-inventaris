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
            $table->string('id_koleksi')->nullable();
            $table->string('dhapur');
            $table->string('jenis_pusaka');
            $table->string('ruang');
            $table->string('kode_jenis');
            $table->string('tanggal_regis');
            $table->string('desk_benda')->nullable();
            $table->string('sejarah');
            $table->string('tempat_pembuatan')->nullable();
            $table->string('tempat_diperoleh')->nullable();
            $table->string('cara_diperoleh')->nullable();
            $table->string('status_cagar_budaya')->nullable();
            $table->string('sk_cagar_budaya')->nullable();
            $table->string('keaslian');
            $table->string('kondisi_koleksi');
            $table->string('sub_kondisi_koleksi');
            $table->string('panjang');
            $table->string('lebar_ganja');
            $table->string('tinggi');
            $table->string('berat');
            $table->string('karat');
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
            $table->string('nama_benda');
            $table->string('tahun_abad_masa');
            $table->string('keterangan');
            $table->string('ukuran_d');    
            $table->string('ukuran_tb');
            $table->string('ukuran_pj');       
            $table->string('ukuran_i');
            $table->string('ukuran_ti');
            $table->string('ukuran_br');
            $table->string('tempat_simpan');
            $table->string('no_inv');
            $table->string('no_reg');
            $table->string('no_foto');
            $table->string('no_slide');
            $table->string('jenis_koleksi');
            $table->string('sub_koleksi');
            $table->string('ur_warna');
            $table->string('ur_ornamen');
            $table->string('ur_tanda');
            $table->string('ur_asesori');
            $table->string('ur_fungsi');
            $table->string('ur_tangguh');
            $table->string('ur_kelengkapan');
            $table->string('ukuran');
            $table->string('tgl_pembuatan');
            $table->string('tgl_masuk');
            $table->string('dicatat_oleh');
            $table->string('tgl_pencatatan');
            $table->string('sumber_literatur');
            $table->string('sumber_narasumber');
            $table->string('ket_lain');
            $table->string('tgl_tahun_masuk');
            $table->string('ket_reg');
            $table->string('harga');
            $table->string('uraian_singkat');
            $table->string('tahun_perolehan');
            $table->string('tgl_masuk');
            $table->string('tgl_keluar');
            $table->string('penempatan_lokasi');
            $table->string('penempatan_lemari');
            $table->string('penempatan_kunci');
            $table->string('dibawa_ke');
            $table->string('untuk_keperluan');
            $table->string('petugas_nama');
            $table->string('petugas_paraf');
            $table->string('id_buku');
            $table->string('kode_buku');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->string('bahasa');
            $table->string('halaman');
            $table->string('ket_buku');
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
