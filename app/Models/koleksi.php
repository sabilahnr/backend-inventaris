<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{
    use HasFactory;
    protected $table = 'koleksis';
    protected $fillable = [
        'id_koleksi',
        'nama_koleksi',
        'dhapur',
        'klasifikasi',
        'ruang',
        'kode_jenis',
        'tanggal_regis',
        'desk_benda',
        'sejarah',
        'tempat_pembuatan',
        'tempat_diperoleh',
        'cara_diperoleh',
        'status_cagar_budaya',
        'sk_cagar_budaya',
        'keaslian',
        'kondisi_koleksi',
        'sub_kondisi_koleksi',
        'panjang',
        'lebar_ganja',
        'tinggi',
        'berat',
        'karat',
        'tebal',
        'bahan',
        'warna',
        'foto',
        'sumber_literasi',
        'pamor',
        'warangka',
        'pendhok',
        'mendhak',
        'hibah_dari',
        'hulu',
    ];

    public function kualifikasi(){
        return $this->belongsTo('id_kualifikasi');
    }

    public function ruang(){
        return $this->belongsTo('id_ruang');
    }

    public function buku(){
        return $this->hasOne('id_buku');
    }

    public function kartu_inv(){
        return $this->hasOne('id_kartu_inv');
    }

    public function kartu_museum(){
        return $this->hasOne('id_kartu_museum');
    }


    public function kartu_registrasi(){
        return $this->hasOne('id_kartu_registrasi');
    }

    public function kartu_simpan(){
        return $this->hasOne('id_kartu_registrasi');
    }
}
