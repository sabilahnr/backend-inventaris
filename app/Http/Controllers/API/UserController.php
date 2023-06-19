<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store_user(Request $request)
    {
        $user = new user();
        $user->name = $request->input('name');
        $user->instansi = $request->input('instansi');
        $user->role = $request->input('role');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'user sukses ditambahkan',
        ]);

    }

    public function edit_show($id_user) 
        {
            $user = user::find($id_user);
            
            if($user)
            {
                return response()->json([
                    'status'=> 200,
                    'museum' => $id_user,
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

        public function update(Request $request,$id_user)
    {
        $user = user::find($id_user);

        $user->nama_user = $request->input('nama_user');
        $user->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update Museum',
        ]);
    }

    

    public function show_user()
    {
        $user = user::all();
        return response()->json([
            'status'=> 200,
            'user'=>$user,
        ]);
    }

    public function destroy($id_user)
        {
            $user = user::find($id_user);
    
           
            if($user)
            {
                $user->delete();
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
}
