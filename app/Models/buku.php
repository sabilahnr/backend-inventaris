<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'pengarang',
        'penerbit',
        'tahun terbit',
        'bahasa',
        'halaman',
        'tanggal_inventaris',
        'ket',
        'foto_buku',
    ];

    public function kualifikasi(){
        return $this->belongsTo('id_kualifikasi');
    }

    public function ruang(){
        return $this->belongsTo('id_ruang');
    }

    public function kartu_museum(){
        return $this->hasOne('id_kartu_museum');
    }

    public function kartu_inv(){
        return $this->hasOne('id_kartu_inv');
    }

    public function kartu_registrasi(){
        return $this->hasOne('id_kartu_registrasi');
    }

    public function kartu_simpan(){
        return $this->hasOne('id_kartu_registrasi');
    }
}
