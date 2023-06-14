<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function store_buku(Request $request)
    {

        $judul_buku = buku::where('id_museum',$request->id_museum)->where('judul_buku',$request->kategori)->first();
        
        if($judul_buku !== null)
            {
                return response()->json([
                    'status'=> 205,
                    'message'=>'Judul Sudah Ada',
                ]);
            }
            else  
            {
                $buku = new buku;
                $buku->kode_buku = $request->input('kode_buku');
                $buku->judul_buku = $request->input('judul_buku');
                $buku->pengarang = $request->input('pengarang');
                $buku->penerbit = $request->input('penerbit');
                $buku->tahun_terbit = $request->input('tahun_terbit');
                $buku->bahasa = $request->input('bahasa');
                $buku->halaman = $request->input('halaman');
                $buku->ket_buku = $request->input('ket_buku');
                $buku->save();

                return response()->json([
                    'status'=> 200,
                    'message'=> 'Buku sukses ditambahkan',
                ]);
            }

        }

        public function destroy($id_buku)
        {
            $buku = buku::find($id_buku);
    
           
            if($buku)
            {
                $buku->delete();
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
    
        public function edit_show($id_buku) 
        {
            $buku = buku::find($id_buku);
            
            if($buku)
            {
                return response()->json([
                    'status'=> 200,
                    'buku' => $buku,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No kategori Id Found',
                ]);
            }
    
        }

        public function show_detail($id_buku) 
        {
            $buku = buku::find($id_buku);
            
            if($buku)
            {
                return response()->json([
                    'status'=> 200,
                    'buku' => $buku,
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'No kategori Id Found',
                ]);
            }
    
        }

    public function show_buku()
    {
        $buku = buku::all();
        return response()->json([
            'status'=> 200,
            'buku'=>$buku,
        ]);
    }

    public function update(Request $request,$id_buku)
    {
        
        $buku = buku::find($id_buku);

        $buku->nama_kategori = $request->input('buku');
        $buku->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update kategori'  ,
        ]);
    }

}
