<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function store_buku(Request $request)
    {
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

    public function destroy($id)
    {
        $files = Buku::find($id);
        if($files)
        {
            $files->delete();
            return response()->json([
                'status'=> 200,
                'message'=>'Berhasil Delete File',
            ]);
        }
        else
        {
            return response()->json([
                'status'=> 404,
                'message' => 'No Data ID Found',
            ]);
        }
    }

    public function show_kategori()
    {
        $kategori = buku::all();
        return response()->json([
            'status'=> 200,
            'kategori'=>$kategori,
        ]);
    }


}
