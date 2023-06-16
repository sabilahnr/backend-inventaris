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

    public function destroy($id_ruang)
        {
            $ruang = ruang::find($id_ruang);
    
           
            if($ruang)
            {
                $ruang->delete();
                return response()->json([
                    'status'=> 200,
                    'message'=>'ruang Berhasil Dihapus',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'Tidak ada ID ruang',
                ]);
            }
        }
    
        public function edit_show($id_ruang) 
        {
            $ruang = ruang::find($id_ruang);
            
            if($ruang)
            {
                return response()->json([
                    'status'=> 200,
                    'ruang' => $ruang,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No ruang Id Found',
                ]);
            }
    
        }

        public function show_detail($id_ruang) 
        {
            $ruang = ruang::find($id_ruang);
            
            if($ruang)
            {
                return response()->json([
                    'status'=> 200,
                    'ruang' => $ruang,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No ruang Id Found',
                ]);
            }
    
        }

    public function show_ruang()
    {
        $ruang = ruang::all();
        return response()->json([
            'status'=> 200,
            'ruang'=>$ruang,
        ]);
    }

    public function update(Request $request,$id_ruang)
    {
        
        $ruang = ruang::find($id_ruang);
        $ruang->judul_ruang = $request->input('ruang');
        $ruang->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update ruang'  ,
        ]);
    }

}


