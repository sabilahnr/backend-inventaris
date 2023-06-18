<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kartu_simpan;

class KartuSimpanController extends Controller
{
    public function store_keris(Request $request)
    {
        $kartu_simpan = new kartu_simpan;
        $kartu_simpan->no_reg = $request->input('no_reg');
        $kartu_simpan->no_inv = $request->input('no_inv');
        $kartu_simpan->nama_kol = $request->input('nama_kol');
        $kartu_simpan->tahun_perolehan = $request->input('tahun_perolehan');
        $kartu_simpan->tgl_masuk = $request->input('tgl_masuk');
        $kartu_simpan->tgl_keluar = $request->input('tgl_keluarga');
        $kartu_simpan->penempatan_lokasi = $request->input('penempatan_lokasi');
        $kartu_simpan->penempatan_lemari = $request->input('penempatan_lemari');
        $kartu_simpan->penempatan_kunci = $request->input('penempatan_kunci');
        $kartu_simpan->dibawa_ke = $request->input('dibawa_ke');
        $kartu_simpan->untuk_keperluan = $request->input('untuk_keperluan');
        $kartu_simpan->petugas_nama = $request->input('petugas_nama');
        $kartu_simpan->petugas_paraf = $request->input('petugas_paraf');
        $kartu_simpan->foto = $request->input('foto');
        $kartu_simpan->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'kartu simpan sukses ditambahkan',
        ]);
    }

    public function show()
    {
        $kartu_museum = kartu_simpan::all();
        return response()->json([
            'status' => 200,
            'kartu_museum' => $kartu_museum,
        ]);
    }

    public function destroy($id_kartusimpan)
    {
            $kartu_simpan = kartu_simpan::find($id_kartusimpan);
    
           
            if($kartu_simpan)
            {
                $kartu_simpan->delete();
                return response()->json([
                    'status'=> 200,
                    'message'=>'kartu_simpan Berhasil Dihapus',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'Tidak ada ID kartu_simpan',
                ]);
            }
    }
    
        public function edit_show($id_kartusimpan) 
        {
            $kartu_simpan = kartu_simpan::find($id_kartusimpan);
            
            if($kartu_simpan)
            {
                return response()->json([
                    'status'=> 200,
                    'kartu_simpan' => $kartu_simpan,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No kartu_simpan Id Found',
                ]);
            }
    
        }

        public function show_detail($id_kartusimpan) 
        {
            $kartu_simpan = kartu_simpan::find($id_kartusimpan);
            
            if($kartu_simpan)
            {
                return response()->json([
                    'status'=> 200,
                    'kartu_simpan' => $kartu_simpan,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No kartu_simpan Id Found',
                ]);
            }
    
        }

    public function show_kartu_simpan()
    {
        $kartu_simpan = kartu_simpan::all();
        return response()->json([
            'status'=> 200,
            'kartu_simpan'=>$kartu_simpan,
        ]);
    }

    public function update(Request $request,$id_kartusimpan)
    {
        
        $kartu_simpan = kartu_simpan::find($id_kartusimpan);
        $kartu_simpan->no_reg = $request->input('no_reg');
        $kartu_simpan->no_inv = $request->input('no_inv');
        $kartu_simpan->nama_kol = $request->input('nama_kol');
        $kartu_simpan->tahun_perolehan = $request->input('tahun_perolehan');
        $kartu_simpan->tgl_masuk = $request->input('tgl_masuk');
        $kartu_simpan->tgl_keluar = $request->input('tgl_keluarga');
        $kartu_simpan->penempatan_lokasi = $request->input('penempatan_lokasi');
        $kartu_simpan->penempatan_lemari = $request->input('penempatan_lemari');
        $kartu_simpan->penempatan_kunci = $request->input('penempatan_kunci');
        $kartu_simpan->dibawa_ke = $request->input('dibawa_ke');
        $kartu_simpan->untuk_keperluan = $request->input('untuk_keperluan');
        $kartu_simpan->petugas_nama = $request->input('petugas_nama');
        $kartu_simpan->petugas_paraf = $request->input('petugas_paraf');
        $kartu_simpan->foto = $request->input('foto');
        $kartu_simpan->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update kartu_simpan'  ,
        ]);
    }

}
