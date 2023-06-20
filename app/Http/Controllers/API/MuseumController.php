<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\museum;
use Illuminate\Support\Facades\DB;

class MuseumController extends Controller
{
    public function store_museum(Request $request)
    {

        $nama_museum = DB::table('museums')->where('nama_museum',$request->nama_museum)->first();
        if($nama_museum)
        {
            return response()->json([
                'status'=> 205,
                'message'=>'Museum Sudah Ada',
            ]);
        }
        else
        {
            $museum = new museum();
            $museum-> nama_museum = $request->input('nama_museum');
            $museum-> alamat_museum = $request->input('alamat_museum');
            $museum-> nama_kepala_museum = $request->input('nama_kepala_museum');
            $museum->save();

            return response()->json([
                'status'=> 200,
                'message'=>'Museum di tambahkan',
            ]);
        }

    }

    public function destroy($id_museum)
        {
            $museum = museum::find($id_museum);
    
           
            if($museum)
            {
                $museum->delete();
                return response()->json([
                    'status'=> 200,
                    'message'=>'kategori Berhasil Dihapus',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'Tidak ada ID kategori',
                ]);
            }
        }

        public function edit_show($id_museum) 
        {
            $museum = museum::find($id_museum);
            
            if($museum)
            {
                return response()->json([
                    'status'=> 200,
                    'museum' => $museum,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No Museum Id Found',
                ]);
            }
    
        }

        public function update(Request $request,$id_museum)
    {
        $museum = museum::find($id_museum);

        $museum->nama_museum = $request->input('nama_museum');
        $museum->alamat_museum = $request->input('alamat_museum');
        $museum->nama_kepala_museum = $request->input('nama_kepala_museum');
        $museum->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update Museum',
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
