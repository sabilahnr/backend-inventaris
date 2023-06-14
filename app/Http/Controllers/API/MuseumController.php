<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\museum;

class MuseumController extends Controller
{
    public function store_museum(Request $request)
    {
        $museum = new museum;
        $museum->nama_museum = $request->input('nama_museum');
        $museum->alamat_museum = $request->input('alamat_museum');
        $museum->nama_kepala_museum = $request->input('nama_kepala_museum');
        $museum->logo = $request->input('logo');
        $museum->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Kualifikasi sukses ditambahkan',
        ]);

        


    }

    public function show_museum()
    {
        $museum = museum::all();
        return response()->json([
            'status'=> 200,
            'museum'=>$museum,
        ]);
    }
}
