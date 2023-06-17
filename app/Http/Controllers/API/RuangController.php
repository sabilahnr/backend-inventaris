<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ruang;

class RuangController extends Controller
{
    public function store_ruang(Request $request)
    {
        $ruang = new ruang();
        $ruang->lokasi = $request->input('lokasi');
        $ruang->lemari = $request->input('lemari');
        $ruang->kunci = $request->input('kunci');
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
        $ruang->lokasi = $request->input('lokasi');
        $ruang->lemari = $request->input('lemari');
        $ruang->kunci = $request->input('kunci');
        $ruang->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update ruang'  ,
        ]);
    }

}


