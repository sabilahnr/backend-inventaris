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
        'ket',
        'foto_buku',
    ];

    public function kualifikasi(){
        return $this->belongsTo('id_kualifikasi');
    }

    public function ruang(){
        return $this->belongsTo('id_ruang');
    }
}
