<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu_registrasi extends Model
{
    use HasFactory;
    protected $table = 'kartu_registrasis';
    protected $fillable = [
        'no_reg',
        'no_inv',
        'nama_kol',
        'tempat_pembuatan',
        'cara_perolehan',
        'ukuran',
        'tgl_tahun_masuk',
        'ket',
        'harga',
        'uraian_singkat',
        'foto_regis',
    ];

    public function koleksi(){
        return $this->belongsTo('id_koleksi');
    }
}
