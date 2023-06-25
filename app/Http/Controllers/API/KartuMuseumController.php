<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kartu_museum;

use App\Exports\kartumuseumExport;

use Maatwebsite\Excel\Facades\Excel;

class KartuMuseumController extends Controller
{
    public function store_keris(Request $request)
    {
        $kartu_museum = new kartu_museum;
        $kartu_museum->nama_benda = $request->input('nama_benda');
        $kartu_museum->bahan = $request->input('bahan');
        $kartu_museum->asal_ditemukan = $request->input('asal_ditemukan');
        $kartu_museum->tempat_pembuatan = $request->input('tempat_pembuatan');
        $kartu_museum->cara_didapat = $request->input('cara_didapat');
        $kartu_museum->tahun_abad_masa = $request->input('tahun_abad_masa');
        $kartu_museum->desk_benda = $request->input('desk_benda');
        $kartu_museum->keterangan = $request->input('keterangan');
        $kartu_museum->ukuran_d = $request->input('ukuran_d');
        $kartu_museum->ukuran_tb = $request->input('ukuran_tb');
        $kartu_museum->ukuran_pj = $request->input('ukuran_pj');
        $kartu_museum->ukuran_l = $request->input('ukuran_l');
        $kartu_museum->ukuran_ti = $request->input('ukuran_ti');
        $kartu_museum->ukuran_br = $request->input('ukuran_br');
        $kartu_museum->tempat_simpan = $request->input('tempat_simpan');
        $kartu_museum->no_inv = $request->input('no_inv');
        $kartu_museum->no_reg = $request->input('no_reg');
        $kartu_museum->no_foto = $request->input('no_foto');
        $kartu_museum->no_slide = $request->input('no_slide');
        $kartu_museum->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Kartu Museum sukses ditambahkan',
        ]);
    }

    public function show()
    {
        $kartu_museum = kartu_museum::all();
        return response()->json([
            'status' => 200,
            'kartu_museum' => $kartu_museum,
        ]);
    }

    public function destroy($id_kartumuseum)
    {
        $kartu_museum = kartu_museum::find($id_kartumuseum);

       
        if($kartu_museum)
        {
            $kartu_museum->delete();
            return response()->json([
                'status'=> 200,
                'message'=>'kartu museum Berhasil Dihapus',
            ]);
        }
        else
        {
            return response()->json([
                'status'=> 404,
                'message' => 'Tidak ada kartu museum',
            ]);
        }
    }

    public function edit_show($id_kartumuseum) 
    {
        $kartu_museum = kartu_museum::find($id_kartumuseum);
        
        if($kartu_museum)
        {
            return response()->json([
                'status'=> 200,
                'kartu_museum' => $kartu_museum,
            ]);
        }
        else
        {
            return response()->json([
                'status'=> 404,
                'message' => 'No kartu museum Id Found',
            ]);
        }

    }

    public function update(Request $request,$id_kartumuseum)
    {
        // $harga = harga::select('harga.*')->where('id', $id_category)->get();
        $kartu_museum = kartu_museum::find($id_kartumuseum);
        $kartu_museum->nama_benda = $request->input('nama_benda');
        $kartu_museum->bahan = $request->input('bahan');
        $kartu_museum->asal_ditemukan = $request->input('asal_ditemukan');
        $kartu_museum->tempat_pembuatan = $request->input('tempat_pembuatan');
        $kartu_museum->cara_didapat = $request->input('cara_didapat');
        $kartu_museum->tahun_abad_masa = $request->input('tahun_abad_masa');
        $kartu_museum->desk_benda = $request->input('desk_benda');
        $kartu_museum->keterangan = $request->input('keterangan');
        $kartu_museum->ukuran_d = $request->input('ukuran_d');
        $kartu_museum->ukuran_tb = $request->input('ukuran_tb');
        $kartu_museum->ukuran_pj = $request->input('ukuran_pj');
        $kartu_museum->ukuran_l = $request->input('ukuran_l');
        $kartu_museum->ukuran_ti = $request->input('ukuran_ti');
        $kartu_museum->ukuran_br = $request->input('ukuran_br');
        $kartu_museum->tempat_simpan = $request->input('tempat_simpan');
        $kartu_museum->no_inv = $request->input('no_inv');
        $kartu_museum->no_reg = $request->input('no_reg');
        $kartu_museum->no_foto = $request->input('no_foto');
        $kartu_museum->no_slide = $request->input('no_slide');
        $kartu_museum->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update kartu museum'  ,
        ]);
    }

    public function kartumuseumExport()
    {
        return Excel::download(new kartumuseumExport, 'kartumuseum.xlsx');
    }

}

