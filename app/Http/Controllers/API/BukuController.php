<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{

//     public function validasi(Request $request)
//    {
//     $validator = Validator::make($request->all(),[
//         'nama'=>'required|max:191',
//         'kota'=>'required|max:191',
//         'negara'=>'nullable|max:191',
//         'phone'=>'required|min:10|max:13',
//         'jumlah'=>'required|max:191',
//         'museum'=>'required|max:191',
//         'kategori'=>'required|max:191',
//         'tanggal'=>'required|max:191',       
//         //'attachment.*'=>'nullable|image|mimes:jpg,png,jpeg,gif,svg',
        
//     ],[
//         'nama.required' => 'Kolom nama wajib diisi',
//         'kota.required' => 'Kolom kota wajib diisi',
//         'phone.required' => 'Kolom phone wajib diisi',
//         'jumlah.required' => 'Kolom jumlah wajib diisi',
//         // 'foto.required' => 'Kolom Foto wajib diisi',
//     ]);

//     if($validator->fails())
//     {
//         return response()->json([
//             'status'=> 422,
//             'validate_err'=> $validator->messages(),
//         ]);
//     }
//     else
//     {
//         return response()->json([
//             'status'=> 200,
//             'message'=>'Tervalidasi',
//         ]);
//     }

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
        $buku->judul_buku = $request->input('buku');
        $buku->update();

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update kategori'  ,
        ]);
    }

}
