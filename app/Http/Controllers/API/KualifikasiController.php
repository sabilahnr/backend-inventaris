<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kualifikasi;

class KualifikasiController extends Controller
{
    public function store_kualifikasi(Request $request)
    {
        $kualifikasi = new kualifikasi();
        $kualifikasi->nama_kualifikasi = $request->input('nama_kualifikasi');
        $kualifikasi->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Kualifikasi sukses ditambahkan',
        ]);

    }

    public function edit_show($id_kualifikasi) 
        {
            $kualifikasi = kualifikasi::find($id_kualifikasi);
            
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
                    'message' => 'No  Id Found',
                ]);
            }
    
        }

        public function update(Request $request,$id_kualifikasi)
    {
        $kualifikasi = kualifikasi::find($id_kualifikasi);

        $kualifikasi->nama_kualifikasi = $request->input('nama_kualifikasi');
        $kualifikasi->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update Museum',
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

    public function destroy($id_kualifikasi)
        {
            $kualifikasi = kualifikasi::find($id_kualifikasi);
    
           
            if($kualifikasi)
            {
                $kualifikasi->delete();
                return response()->json([
                    'status'=> 200,
                    'message'=>'kategori Berhasil Dihapus',
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


        public function show_detail($id_kualifikasi) 
        {
            $kualifikasi = kualifikasi::find($id_kualifikasi);
            
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

    // public function update(Request $request,$id_kualifikasi)
    // {
        
    //     $kualifikasi = kualifikasi::find($id_kualifikasi);
    //     $kualifikasi->kualifikasi = $request->input('kualifikasi');
    //     $kualifikasi->update();

    //     return response()->json([
    //         'status'=> 200,
    //         'message'=>'Berhasil Update kualifikasi'  ,
    //     ]);
    // }

}


