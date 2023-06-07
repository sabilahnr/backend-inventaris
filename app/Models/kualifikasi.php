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
}
