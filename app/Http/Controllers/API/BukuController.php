<?php

namespace App\Http\Controllers\API;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{



    public function store_buku(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'foto_buku' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]
        );

        if($validator->fails()) {
            return response()->json(["status" => "failed", "message" => "Validation error", "errors" => $validator->errors()]);
        }
        
        $judul_buku = buku::where('id_museum',$request->id_museum)->where('judul_buku',$request->kategori)->first();
        
        if($judul_buku !== null)
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
                $buku->tanggal_inventarisasi = $request->input('tanggal_inventarisasi');
                if ($request->hasFile('foto_buku')) {
                    $image = $request->file('foto_buku');
                    $ubah_nama_image = time() . '_' . 'buku' . '.' . $image->getClientOriginalExtension();
                    $image->move('foto_buku', $ubah_nama_image);

                    $buku->move('foto_buku', $ubah_nama_image);
                }
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
                    'message'=>'buku Berhasil Dihapus',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=> 404,
                    'message' => 'Tidak ada ID buku',
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
                    'message' => 'No buku Id Found',
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
                    'message' => 'No buku Id Found',
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

        $databuku = [
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'bahasa' => $request->bahasa,
            'halaman' => $request->halaman,
            'ket_buku' => $request->ket_buku,
            'tanggal_inventarisasi' => $request->tanggal_inventarisasi,
        ];
       

        $databuku['foto_buku'] = $buku->foto_buku;

        if ($request->hasFile('foto_buku')) {
            $image = $request->file('foto_buku');
            $ubah_nama_image = time() . '_' . 'buku' . '.' . $image->getClientOriginalExtension();
            $image->move('foto_buku', $ubah_nama_image);

            $buku->move('foto_buku', $ubah_nama_image);

        }
        $buku->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update kategori'  ,
        ]);
    }

}
