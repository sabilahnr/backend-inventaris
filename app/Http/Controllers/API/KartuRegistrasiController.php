<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kartu_registrasi;

use App\Exports\karturegistrasiExport;

use Maatwebsite\Excel\Facades\Excel;

class KartuRegistrasiController extends Controller
{
    public function store_keris(Request $request)
    {
        $kartu_registrasi = new kartu_registrasi;
        $kartu_registrasi->no_reg = $request->input('no_reg');
        $kartu_registrasi->no_inv = $request->input('no_inv');
        $kartu_registrasi->nama_kol = $request->input('nama_kol');
        $kartu_registrasi->tempat_pembuatan = $request->input('tempat_pembuatan');
        $kartu_registrasi->cara_perolehan = $request->input('cara_perolehan');
        $kartu_registrasi->ukuran = $request->input('ukuran');
        $kartu_registrasi->tgl_tahun_masuk = $request->input('tgl_tahun_masuk');
        $kartu_registrasi->ket = $request->input('ket');
        $kartu_registrasi->harga = $request->input('harga');
        $kartu_registrasi->uraian_singkat = $request->input('uraian_singkat');
        $kartu_registrasi->foto = $request->input('foto');
        $kartu_registrasi->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'kartu registrasi sukses ditambahkan',
        ]);
    }

    public function show()
    {
        $kartu_registrasi = kartu_registrasi::all();
        return response()->json([
            'status' => 200,
            'kartu_registrasi' => $kartu_registrasi,
        ]);
    }

    public function destroy($id_karturegitrasi)
    {
            $kartu_registrasi = kartu_registrasi::find($id_karturegitrasi);
    
           
            if($kartu_registrasi)
            {
                $kartu_registrasi->delete();
                return response()->json([
                    'status'=> 200,
                    'message'=>'kartu_registrasi Berhasil Dihapus',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'Tidak ada ID kartu_registrasi',
                ]);
            }
        }
    
        public function edit_show($id_karturegitrasi) 
        {
            $kartu_registrasi = kartu_registrasi::find($id_karturegitrasi);
            
            if($kartu_registrasi)
            {
                return response()->json([
                    'status'=> 200,
                    'kartu_registrasi' => $kartu_registrasi,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No kartu_registrasi Id Found',
                ]);
            }
    
        }

        public function show_detail($id_karturegitrasi) 
        {
            $kartu_registrasi = kartu_registrasi::find($id_karturegitrasi);
            
            if($kartu_registrasi)
            {
                return response()->json([
                    'status'=> 200,
                    'kartu_registrasi' => $kartu_registrasi,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No kartu_registrasi Id Found',
                ]);
            }
    
        }

    public function show_kartu_registrasi()
    {
        $kartu_registrasi = kartu_registrasi::all();
        return response()->json([
            'status'=> 200,
            'kartu_registrasi'=>$kartu_registrasi,
        ]);
    }

    public function update(Request $request,$id_karturegitrasi)
    {
        
        $kartu_registrasi = kartu_registrasi::find($id_karturegitrasi);
        $kartu_registrasi->no_reg = $request->input('no_reg');
        $kartu_registrasi->no_inv = $request->input('no_inv');
        $kartu_registrasi->nama_kol = $request->input('nama_kol');
        $kartu_registrasi->tempat_pembuatan = $request->input('tempat_pembuatan');
        $kartu_registrasi->cara_perolehan = $request->input('cara_perolehan');
        $kartu_registrasi->ukuran = $request->input('ukuran');
        $kartu_registrasi->tgl_tahun_masuk = $request->input('tgl_tahun_masuk');
        $kartu_registrasi->ket = $request->input('ket');
        $kartu_registrasi->harga = $request->input('harga');
        $kartu_registrasi->uraian_singkat = $request->input('uraian_singkat');
        $kartu_registrasi->foto = $request->input('foto');
        $kartu_registrasi->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update kartu_registrasi'  ,
        ]);
    }

    public function karturegistrasiExport()
    {
        return Excel::download(new karturegistrasiExport, 'karturegistrasi.xlsx');
    }

}
