<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kartu_simpan;

class KartuSimpanController extends Controller
{
    public function store_kartusimpan(Request $request)
    {
        $kartu_simpan = new kartu_simpan;
        $kartu_simpan->no_reg = $request->input('no_reg');
        $kartu_simpan->no_inv = $request->input('no_inv');
        $kartu_simpan->nama_kol = $request->input('nama_kol');
        $kartu_simpan->tahun_perolehan = $request->input('tahun_perolehan');
        $kartu_simpan->tgl_masuk = $request->input('tgl_masuk');
        $kartu_simpan->tgl_keluar = $request->input('tgl_keluar');
        $kartu_simpan->penempatan_lokasi = $request->input('penempatan_lokasi');
        $kartu_simpan->penempatan_lemari = $request->input('penempatan_lemari');
        $kartu_simpan->penempatan_kunci = $request->input('penempatan_kunci');
        $kartu_simpan->dibawa_ke = $request->input('dibawa_ke');
        $kartu_simpan->untuk_keperluan = $request->input('untuk_keperluan');
        $kartu_simpan->petugas_nama = $request->input('petugas_nama');
        $kartu_simpan->petugas_paraf = $request->input('petugas_paraf');
        $kartu_simpan->foto_simpan = $request->input('foto_simpan');
        $kartu_simpan->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'kartu simpan sukses ditambahkan',
        ]);


    }

    public function show_kartusimpan()
    {
        $kartu_simpan = kartu_simpan::all();
        return response()->json([
            'status'=> 200,
            'kartu_simpan'=>$kartu_simpan,
        ]);
    }
}
