<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu_inv extends Model
{
    use HasFactory;
    protected $table = 'kartu_invs';
    protected $fillable = [
        'id_koleksi',
        'id_buku',
        'jenis_koleksi',
        'sub_koleksi',
        'no_inv',
        'no_reg',
        'no_reg_foto',
        'nama_kol',
        'ur_bagian',
        'ur_bentuk',
        'ur_bahan',
        'ur_teknik',
        'ur_warna',
        'ur_dekorasi',
        'ur_ornamen',
        'ur_tenda',
        'ur_asesori',
        'ur_fungsi',
        'ur_simbol',
        'ur_arti',
        'ur_gaya',
        'ur_kelengkapan',
        'ukuran',
        'tempat_asal_pembuatan',
        'tgl_pembuatan',
        'cara_perolehan',
        'tgl_masuk',
        'kondisi_benda',
        'tempat_penyimpanan',
        'dicatat_oleh',
        'tgl_pencatatan',
        'sumber_literatur',
        'sumber_narasumber',
        'ket_lain',
        'foto_inv',
    ];

    public function koleksi(){
        return $this->belongsTo('id_koleksi');
    }

    public function buku(){
        return $this->belongsTo('id_buku');
    }
}
