<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu_simpan extends Model
{
    use HasFactory;
    protected $table = 'kartu_simpans';
    protected $fillable = [
        'no_reg',
        'no_inv',
        'nama_kol',
        'tahun_perolehan',
        'tgl',
        'tgl_masuk',
        'tgl_keluar',
        'penempatan_lokasi',
        'penempatan_lemari',
        'penempatan_kunci',
        'dibawa_ke',
        'untuk_keperluan',
        'petugas_nama',
        'petugas_paraf',
        'foto_simpan',
    ];

    public function koleksi(){
        return $this->belongsTo('id_koleksi');
    }

    public function ruang(){
        return $this->belongsTo('id_ruang');
    }

    public function kualifikasi(){
        return $this->belongsTo('id_kualifikasi');
    }

    public function buku(){
        return $this->belongsTo('id_buku');
    }
}