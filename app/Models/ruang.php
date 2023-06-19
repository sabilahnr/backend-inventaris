<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
    use HasFactory;
    protected $table = 'ruangs';
    protected $fillable = [
        'lokasi',
        'lemari',
        'kunci',
    ];

    public function museum (){
        return $this->belongsTo('id_museum');
    }

    public function buku(){
        return $this->hasMany('id_buku');
    }
}