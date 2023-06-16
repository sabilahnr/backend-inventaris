<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kartu_inv;

class BukuController extends Controller
{
    public function store_keris(Request $request)
    {
        $kartu_inv = new kartu_inv;
        $kartu_inv->jenis_koleksi = $request->input('jenis_koleksi');
        $kartu_inv->sub_koleksi = $request->input('sub_koleksi');
        $kartu_inv->no_inv = $request->input('no_inv');
        $kartu_inv->no_reg = $request->input('no_reg');
        $kartu_inv->no_reg_foto = $request->input('no_reg_foto');
        $kartu_inv->nama_kol = $request->input('nama_kol');
        $kartu_inv->ur_bagian = $request->input('ur_bagian');
        $kartu_inv->ur_bentuk = $request->input('ur_brntuk');
        $kartu_inv->ur_bahan = $request->input('ur_bahan');
        $kartu_inv->ur_teknik = $request->input('ur_teknik');
        $kartu_inv->ur_warna = $request->input('ur_warna');
        $kartu_inv->ur_dekorasi = $request->input('ur_dekorasi');
        $kartu_inv->ur_ornamen = $request->input('ur_ornamen');
        $kartu_inv->ur_tenda = $request->input('ur_tenda');
        $kartu_inv->ur_asesori = $request->input('ur_asesori');
        $kartu_inv->ur_fungsi = $request->input('ur_fungsi');
        $kartu_inv->ur_simbol = $request->input('ur_simbol');
        $kartu_inv->ur_arti = $request->input('ur_arti');
        $kartu_inv->ur_gaya = $request->input('ur_gaya');
        $kartu_inv->ur_kelengkapan = $request->input('ur_kelengkapan');
        $kartu_inv->ukuran = $request->input('ukuran');
        $kartu_inv->tempat_asal_pembuatan = $request->input('tempat_asal_pembuatan');
        $kartu_inv->tgl_pembuatan = $request->input('tgl_pembuatan');
        $kartu_inv->cara_perolehan = $request->input('cara_perolehan');
        $kartu_inv->tgl_masuk = $request->input('tgl_masuk');
        $kartu_inv->kondisi_benda = $request->input('kondisi_benda');
        $kartu_inv->tempat_penyimpanan = $request->input('tempat_penyimpanan');
        $kartu_inv->dicatat_oleh = $request->input('dicatat_oleh');
        $kartu_inv->tgl_pencatatan = $request->input('tgl_pencatatan');
        $kartu_inv->umber_literatur = $request->input('sumber_literatur');
        $kartu_inv->sumber_narasumber  = $request->input('sumber_narasumber');
        $kartu_inv->ket_lain = $request->input('ket_lain');
        $kartu_inv->foto = $request->input('foto');
        $kartu_inv->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Kartu Inventaris sukses ditambahkan',
        ]);
    }

    public function show()
    {
        $kartu_inv = kartu_inv::all();
        return response()->json([
            'status' => 200,
            'kartu_inv' => $kartu_inv,
        ]);
    }

    public function destroy($id_inv)
    {
        $kartu_inv = kartu_inv::find($id_inv);

       
        if($kartu_inv)
        {
            $kartu_inv->delete();
            return response()->json([
                'status'=> 200,
                'message'=>'kartu inventaris Berhasil Dihapus',
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

    public function edit_show($id_inv) 
    {
        $kartu_inv = kartu_inv::find($id_inv);
        
        if($kartu_inv)
        {
            return response()->json([
                'status'=> 200,
                'kartu_inv' => $kartu_inv,
            ]);
        }
        else
        {
            return response()->json([
                'status'=> 404,
                'message' => 'No kartu inven Found',
            ]);
        }

    }

    public function update(Request $request,$id_inv)
    {
        // $harga = harga::select('harga.*')->where('id', $id_category)->get();
        $kartu_inv = kartu_inv::find($id_inv);
        $kartu_inv->jenis_koleksi = $request->input('jenis-koleksi');
        $kartu_inv->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update kartu inventaris'  ,
        ]);
    }
}