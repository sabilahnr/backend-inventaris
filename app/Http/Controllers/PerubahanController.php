<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kartu_inv;
use App\Models\kartu_museum;
use App\Models\kartu_registrasi;
use App\Models\kartu_simpan;
use App\Models\koleksi;
use App\Models\kualifikasi;
use App\Models\museum;
use App\Models\Permintaan;
use App\Models\Perubahan;
use Illuminate\Http\Request;

class PerubahanController extends Controller
{
    public function show()
    {
        $permintaans = Permintaan::join('perubahans', 'permintaans.id_perubahan', '=', 'perubahans.id')
            ->select('permintaans.*', 'perubahans.*')
            ->get();
        
        return response()->json([
            'status'=> 200,
            'perubahan'=>$permintaans,
        ]);
    }

    public function store(Request $request)
    {
        $entitas = $request->input('entitas');
        $permintaan = Permintaan::where('id_perubahan',$request->input('id'))->first();
        $perubahan = $request->except(['id', 'entitas', 'jenis_permintaan', 'id_data', 'created_at']);

        // Tentukan model yang sesuai dengan entitas
        $model = $this->getModel($entitas);

        if (!$model) {
            return response()->json(['message' => 'Entitas tidak valid'], 400);
        }

        // Buat data baru
        $newData = $model::create($perubahan);


        $permintaan-> status_perubahan = "diterima";
        $permintaan->update();

        return response()->json(['message' => 'Data berhasil dibuat', 'data' => $newData], 201);
        
        
    }

    public function update(Request $request)
    {
        $entitas = $request->input('entitas');
        $id = $request->input('id_data');
        $permintaan = Permintaan::where('id_perubahan',$request->input('id'))->first();
        $perubahan = $request->except(['id', 'entitas', 'jenis_permintaan', 'id_data', 'created_at']);
    
        // Tentukan model yang sesuai dengan entitas
        $model = $this->getModel($entitas);
        
        if (!$model) {
            return response()->json(['message' => 'Entitas tidak valid'], 400);
        }
    
        // Cari data berdasarkan ID
        $existingData = $model::find($id);
    
        if (!$existingData) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
    
        // Update data
        $existingData->update($perubahan);
    
        $permintaan->status_perubahan = "diterima";
        $permintaan->save();
    
        return response()->json(['message' => 'Data berhasil diperbarui', 'data' => $existingData], 200);
    }
    

    public function destroy(Request $request)
    {

        $entitas = $request->input('entitas');     
        $id = $request->input('id_data');
        $permintaan = Permintaan::where('id_perubahan',$request->input('id'))->first();

        // Tentukan model yang sesuai dengan entitas
        $model = $this->getModel($entitas);

        if (!$model) {
            return response()->json(['message' => 'Entitas tidak valid'], 400);
        }

        // Cari data berdasarkan ID
        $existingData = $model::find($id);

        if (!$existingData) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $permintaan-> status_perubahan = "diterima";
        $permintaan->update();

        // Hapus data
        $existingData->delete();

        return response()->json(['message' => 'Data berhasil dihapus'], 200);
        
        return response()->json([
            'status'=> 200,
            'perubahan'=>$request,
        ]);
    }

    private function getModel($entitas)
    {
        // Definisikan mapping antara entitas dengan model
        $modelMapping = [
            'buku' => buku::class,
            'kartu_inv' => kartu_inv::class,
            'kartu_museum' => kartu_museum::class,
            'kartu_registrasi' => kartu_registrasi::class,
            'kartu_simpan' => kartu_simpan::class,
            'koleksi' => koleksi::class,
            'kualifikasi' => kualifikasi::class,
            'museum' => museum::class,
            // Tambahkan entitas dan model yang lain sesuai kebutuhan Anda
        ];

        // Cek apakah entitas ada di dalam mapping
        if (array_key_exists($entitas, $modelMapping)) {
            return $modelMapping[$entitas];
        }

        return null;
    }
}
