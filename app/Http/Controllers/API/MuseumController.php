<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\museum;
use App\Models\Permintaan;
use App\Models\Perubahan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
            $user = User::find(Auth::id());
            $roleName = $user->roles->first()->name;

            if($roleName === 'admin')
        {

            $perubahan = new Perubahan();
            $perubahan->nama_museum = $request->input('nama_museum');
            $perubahan->alamat_museum = $request->input('alamat_museum');
            $perubahan->nama_kepala_museum = $request->input('nama_kepala_museum');
            $perubahan->save();

            $permintaan = new Permintaan();
            $permintaan-> entitas = "museum";
            $permintaan-> status_perubahan = "diajukan";
            $permintaan-> jenis_permintaan = "tambah";
            $permintaan-> id_data = '';
            $permintaan-> id_perubahan = $perubahan->id;
            $permintaan-> id_admin = Auth::id();
            $permintaan->save();

            return response()->json([
                'status'=> 200,
                'message'=>'Berhasil Menambahkan Data perubahan',
            ]);
        }

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
            $user = User::find(Auth::id());
            $roleName = $user->roles->first()->name;

            if($roleName === 'admin')
        {
            $perubahan = new Perubahan();
            $perubahan->save();

            $permintaan = new Permintaan();
            $permintaan-> entitas = "museum";
            $permintaan-> status_perubahan = "diajukan";
            $permintaan-> jenis_permintaan = "hapus";
            $permintaan-> id_perubahan = $perubahan->id;
            $permintaan-> id_data = $id_museum;
            $permintaan-> id_admin = Auth::id();
            $permintaan->save();

            return response()->json([
                'status'=> 200,
                'message'=>'Berhasil Menambahkan Data perubahan',
            ]);

            
        }
    
           
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

        $user = User::find(Auth::id());
        $roleName = $user->roles->first()->name;

        if($roleName === 'admin')
        {

            $perubahan = new Perubahan();
            $perubahan->nama_museum = $request->input('nama_museum');
            $perubahan->alamat_museum = $request->input('alamat_museum');
            $perubahan->nama_kepala_museum = $request->input('nama_kepala_museum');
            $perubahan->save();

            $permintaan = new Permintaan();
            $permintaan-> entitas = "museum";
            $permintaan-> status_perubahan = "diajukan";
            $permintaan-> jenis_permintaan = "ubah";
            $permintaan-> id_perubahan = $perubahan->id;
            $permintaan-> id_data = $id_museum;
            $permintaan-> id_admin = Auth::id();
            $permintaan->save();

            return response()->json([
                'status'=> 200,
                'message'=>'Berhasil Menambahkan Data perubahan',
            ]);

            
        }else if($roleName === 'superadmin'){
            $museum->nama_museum = $request->input('nama_museum');
            $museum->alamat_museum = $request->input('alamat_museum');
            $museum->nama_kepala_museum = $request->input('nama_kepala_museum');
            $museum->update();

            return response()->json([
                'status'=> 200,
                'message'=>'Berhasil Update Museum',
            ]);
        }

        

        
        


        
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
