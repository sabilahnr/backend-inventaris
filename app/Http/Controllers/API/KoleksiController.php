<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\koleksi;

class KoleksiController extends Controller
{
    public function store(Request $request)
    {

        $koleksi = new koleksi;
        // $koleksi->id_koleksi = $request->input('id_koleksi');
        $koleksi->nama_koleksi = $request->input('nama_koleksi');
        $koleksi->dhapur = $request->input('dhapur');
        $koleksi->klasifikasi = $request->input('klasifikasi');
        $koleksi->kode_jenis = $request->input('kode_jenis');
        $koleksi->tanggal_regis = $request->input('tanggal_regis');
        $koleksi->desk_benda = $request->input('desk_benda');
        $koleksi->sejarah = $request->input('sejarah');
        $koleksi->tempat_pembuatan = $request->input('tempat_pembuatan');
        $koleksi->tempat_diperoleh = $request->input('tempat_diperoleh');
        $koleksi->cara_diperoleh = $request->input('cara_diperoleh');
        $koleksi->status_cagar_budaya = $request->input('status_cagar_budaya');
        $koleksi->sk_cagar_budaya = $request->input('sk_cagar_budaya');
        $koleksi->keaslian = $request->input('keaslian');
        $koleksi->kondisi_koleksi = $request->input('kondisi_koleksi');
        $koleksi->sub_kondisi_koleksi = $request->input('sub_kondisi_koleksi');
        $koleksi->panjang = $request->input('panjang');
        $koleksi->lebar_ganja = $request->input('lebar_ganja');
        $koleksi->tinggi = $request->input('tinggi');
        $koleksi->berat = $request->input('berat');
        $koleksi->karat = $request->input('karat');
        $koleksi->tebal = $request->input('tebal');
        $koleksi->bahan = $request->input('bahan');
        $koleksi->warna = $request->input('warna');
        $koleksi->foto = $request->input('foto');
        $koleksi->sumber_literasi= $request->input('sumber_literasi');
        $koleksi->pamor = $request->input('pamor');
        $koleksi->warangka = $request->input('warangka');
        $koleksi->pendhok = $request->input('pendhok');
        $koleksi->mendhak = $request->input('mendhak');
        $koleksi->hibah_dari = $request->input('hibah_dari');
        $koleksi->hulu = $request->input('hulu');
        $koleksi->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'koleksi sukses ditambahkan',
        ]);


    }

    public function index()
    {
        $koleksi = koleksi::all();
        return response()->json([
            'status'=> 200,
            'koleksi'=>$koleksi,
        ]);
    }

    public function show()
    {
        $koleksi = koleksi::all();
        return response()->json([
            'status' => 200,
            'koleksi' => $koleksi,
        ]);
    }

    public function destroy($id_koleksi)
        {
            $koleksi = koleksi::find($id_koleksi);
    
           
            if($koleksi)
            {
                $koleksi->delete();
                return response()->json([
                    'status'=> 200,
                    'message'=>'koleksi Berhasil Dihapus',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'Tidak ada ID koleksi',
                ]);
            }
        }
    
        public function edit_show($id_koleksi) 
        {
            $koleksi = koleksi::find($id_koleksi);
            
            if($koleksi)
            {
                return response()->json([
                    'status'=> 200,
                    'koleksi' => $koleksi,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No koleksi Id Found',
                ]);
            }
    
        }

        public function show_detail($id_koleksi) 
        {
            $koleksi = koleksi::find($id_koleksi);
            
            if($koleksi)
            {
                return response()->json([
                    'status'=> 200,
                    'koleksi' => $koleksi,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No koleksi Id Found',
                ]);
            }
    
        }

    public function show_koleksi()
    {
        $koleksi = koleksi::all();
        return response()->json([
            'status'=> 200,
            'koleksi'=>$koleksi,
        ]);
    }

    public function update(Request $request,$id_koleksi)
    {
        
        $koleksi = koleksi::find($id_koleksi);
        $koleksi->lokasi = $request->input('lokasi');
        $koleksi->lemari = $request->input('lemari');
        $koleksi->kunci = $request->input('kunci');
        $koleksi->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update koleksi'  ,
        ]);
    }

}
