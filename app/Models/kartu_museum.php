<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu_museum extends Model
{
    use HasFactory;
    protected $table = 'kartu_museums';
    protected $fillable = [
        'id_koleksi' ,
        'id_buku',
        'nama_benda',
        'bahan',
        'asal_ditemukan',
        'tempat_pembuatan',
        'cara_didapat',
        'tahun_abad_masa',
        'desk_benda',
        'keterangan',
        'ukuran_d',
        'ukuran_tb',
        'ukuran_pj',
        'ukuran_l',
        'ukuran_ti',
        'ukuran_br',
        'tempat_simpan',
        'no_inv',
        'no_reg',
        'no_foto',
        'no_slide',
    ];

    public function koleksi(){
        return $this->belongsTo('id_koleksi');
    }

    public function buku(){
        return $this->belongsTo('id_buku');
    }
}
