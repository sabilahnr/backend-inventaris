<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class museum extends Model
{
    use HasFactory;
    protected $table = 'museums';
    protected $fillable = [
        'nama_museum',
        'alamat_museum',
        'nama_kepala_museum',
        'logo',
    ];

    public function user(){
        return $this->belongsTo('id_user');
    }

    public function kualifikasi(){
        return $this->hasMany('id_kualifikasi');
    }

    public function ruang(){
        return $this->hasMany('id_ruang');
    }
}
