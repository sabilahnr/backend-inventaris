<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kualifikasi extends Model
{
    use HasFactory;
    protected $table = 'kualifikasis';
    protected $fillable = [
        'nama_kualifikasi',
    ];

    public function museum(){
        return $this->belongsTo('id_museum');
    }

    public function buku(){
        return $this->hasMany('id_buku');
    }

    public function koleksi(){
        return $this->hasMany('id_koleksi');
    }
}
