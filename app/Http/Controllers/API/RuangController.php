<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ruang;

class MuseumController extends Controller
{
    public function store_ruang(Request $request)
    {
        $ruang = new ruang;
        $ruang->nama_museum = $request->input('nama_museum');
        $ruang->alamat_museum = $request->input('alamat_museum');
        $ruang->nama_kepala_museum = $request->input('nama_kepala_museum');
        $ruang->logo = $request->input('logo');
        $ruang->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Ruang sukses ditambahkan',
        ]);


    }
}
