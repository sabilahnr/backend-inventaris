<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PermintaanController extends Controller
{
    public function show()
    {
        $permintaans = DB::table('permintaans')
        ->leftJoin('perubahans', 'permintaans.id_perubahan', '=', 'perubahans.id')
        ->select('permintaans.id', 'permintaans.entitas', 'permintaans.jenis_permintaan', 'permintaans.status_perubahan', 'permintaans.id_perubahan', 'permintaans.id_data', 'permintaans.id_admin', 'permintaans.created_at', 'permintaans.updated_at', 'perubahans.*')
        ->get();

        $filteredPermintaans = $permintaans->map(function ($item) {
            return (object) array_filter((array) $item, function ($value) {
                return $value !== null;
            });
        });

        return response()->json([
            'status' => 200,
            'perubahan' => $filteredPermintaans,
        ]);
    }
    public function show_admin()
    {
        $user = User::find(Auth::id());
        $roleName = $user->id;

        // $permintaan = Permintaan::where('id_admin',$roleName)->get();
        $permintaan = DB::table('permintaans')
                        ->where('id_admin',$roleName)
                        ->get();

        return response()->json([
            'status' => 200,
            'perubahan' => $permintaan,
        ]);
    }
}
