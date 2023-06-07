<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kartu_registrasi;

class KartuRegistrasiController extends Controller
{
    public function store_keris(Request $request)
    {
        $kartu_registrasi = new kartu_registrasi;
        $kartu_registrasi->no_reg = $request->input('no_reg');
        $kartu_registrasi->no_inv = $request->input('no_inv');
        $kartu_registrasi->nama_kol = $request->input('nama_kol');
        $kartu_registrasi->tempat_pembuatan = $request->input('tempat_pembuatan');
        $kartu_registrasi->cara_perolehan = $request->input('cara_perolehan');
        $kartu_registrasi->ukuran = $request->input('ukuran');
        $kartu_registrasi->tgl_tahun_masuk = $request->input('tgl_tahun_masuk');
        $kartu_registrasi->ket = $request->input('ket');
        $kartu_registrasi->harga = $request->input('harga');
        $kartu_registrasi->uraian_singkat = $request->input('uraian_singkat');
        $kartu_registrasi->foto = $request->input('foto');
        $kartu_registrasi->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'kartu registrasi sukses ditambahkan',
        ]);


    }
}
