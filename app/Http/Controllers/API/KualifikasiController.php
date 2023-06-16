<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kualifikasi;

class KualifikasiController extends Controller
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

    public function show_kualifikasi()
    {
        $kualifikasi = kualifikasi::all();
        return response()->json([
            'status'=> 200,
            'kualifikasi'=>$kualifikasi,
        ]);
    }

    public function destroy($kualifikasi)
        {
            $buku = kualifikasi::find($kualifikasi);
    
           
            if($kualifikasi)
            {
                $buku->delete();
                return response()->json([
                    'status'=> 200,
                    'message'=>'kualifikasi Berhasil Dihapus',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'Tidak ada ID kualifikasi',
                ]);
            }
        }
    
        public function edit_show($kualifikasi) 
        {
            $kualifikasi = kualifikasi::find($kualifikasi);
            
            if($kualifikasi)
            {
                return response()->json([
                    'status'=> 200,
                    'buku' => $kualifikasi,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No kualifikasi Id Found',
                ]);
            }
    
        }

        public function show_detail($kualifikasi) 
        {
            $kualifikasi = kualifikasi::find($kualifikasi);
            
            if($kualifikasi)
            {
                return response()->json([
                    'status'=> 200,
                    'kualifikasi' => $kualifikasi,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'no kualifikasi Id Found',
                ]);
            }
    
        }

    public function show()
    {
        $kualifikasi = kualifikasi::all();
        return response()->json([
            'status'=> 200,
            'kualifikasi'=>$kualifikasi,
        ]);
    }

    public function update(Request $request,$kualifikasi)
    {
        
        $kualifikasi = kualifikasi::find($kualifikasi);
        $kualifikasi->kualifikasi = $request->input('kualifikasi');
        $kualifikasi->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update kualifikasi'  ,
        ]);
    }

}


