<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function store_buku(Request $request)
    {
        $buku = new Buku;
        $buku->kode_buku = $request->input('kode_buku');
        $buku->judul_buku = $request->input('judul_buku');
        $buku->pengarang = $request->input('pengarang');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->bahasa = $request->input('bahasa');
        $buku->halaman = $request->input('halaman');
        $buku->ket_buku = $request->input('ket_buku');
        $buku->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Buku sukses ditambahkan',
        ]);


    }
}
