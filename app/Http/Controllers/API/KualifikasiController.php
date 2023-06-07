<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kualifikasi;

class KartuSimpanController extends Controller
{
    public function store_kualifikasi(Request $request)
    {
        $kualifikasi = new kualifikasi;
        $kualifikasi->nama_kualifikasi = $request->input('nama_kualifikasi');
        $kualifikasi->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Kualifikasi sukses ditambahkan',
        ]);


    }
}
