<?php

namespace App\Http\Controllers\API;

use App\Models\Buku;
use App\Models\kualifikasi;
use App\Models\museum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    // public function store_buku(Request $request)
    // {
    //     // Validasi data yang diterima
    //     $request->validate([
    //         'foto_buku' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Menyatakan bahwa `foto` harus berupa file gambar dengan format yang diizinkan dan ukuran maksimal 2MB
    //     ]);

    //     $foto_buku = $request->file('foto_buku');
    //     $fotoName = time() . '_' . $foto_buku->getClientOriginalName();
    //     $foto_buku->move(public_path('images'), $fotoName);

    //     // Melakukan operasi lainnya dengan data dan foto yang diterima 
    //     $id_kualifikasi = $request->input('id_kualifikasi');
    //     $id_museum = $request->input('id_museum');
    //     $kode_buku = $request->input('kode_buku');
    //     $judul_buku = $request->input('judul_buku');
    //     $pengarang = $request->input('pengarang');
    //     $penerbit = $request->input('penerbit');
    //     $tahun_terbit = $request->input('tahun_terbit');
    //     $bahasa = $request->input('bahasa');
    //     $halaman = $request->input('halaman');
    //     $ket = $request->input('ket');
    //     $tanggal_inventaris = $request->input('tanggal_inventaris');
    //     $foto_buku = $request->input('foto_buku');

    //     // Menyimpan data ke dalam database
    //     $buku = new buku();
    //         $buku->id_kualifikasi = $id_kualifikasi;
    //         $buku->id_museum = $id_museum;
    //         $buku->kode_buku = $kode_buku;
    //         $buku->judul_buku = $judul_buku;
    //         $buku->pengarang = $pengarang;
    //         $buku->penerbit = $penerbit;
    //         $buku->tahun_terbit = $tahun_terbit;
    //         $buku->bahasa = $bahasa;
    //         $buku->halaman = $halaman;
    //         $buku->ket = $ket;
    //         $buku->tanggal_inventaris = $tanggal_inventaris;
    //         $buku->foto_buku = $foto_buku;

    //         // Menyimpan data ke dalam database
    //         // $buku = new buku;
    //         // $buku->id_kualifikasi = $request->input('id_kualifikasi');
    //         // $buku->id_museum = $request->input('id_museum');
    //         // $buku->kode_buku = $request->input('kode_buku');
    //         // $buku->judul_buku = $request->input('judul_buku');
    //         // $buku->pengarang = $request->input('pengarang');
    //         // $buku->penerbit = $request->input('penerbit');
    //         // $buku->tahun_terbit = $request->input('tahun_terbit');
    //         // $buku->bahasa = $request->input('bahasa');
    //         // $buku->halaman = $request->input('halaman');
    //         // $buku->ket = $request->input('ket');
    //         // $buku->tanggal_inventaris = $request->input('tanggal_inventaris');
    //         // $buku->foto_buku = $request->input('foto_buku');

    //         // Mengembalikan response sukses
    //         $buku->save();
    //         return response()->json([ 
    //         'status'=> 200,
    //         'message'=> 'Buku sukses ditambahkan',
    //     ]);
            

        // }

        public function store_buku(Request $request)
    {
         // Validasi data yang diterima
        $request->validate([
            'foto_buku' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Menyatakan bahwa `foto` harus berupa file gambar dengan format yang diizinkan dan ukuran maksimal 2MB
        ]);
        
        $buku = new buku;
        $buku->id_kualifikasi = $request->input('id_kualifikasi');
        $buku->id_museum = $request->input('id_museum');
        $buku->kode_buku = $request->input('kode_buku');
        $buku->judul_buku = $request->input('judul_buku');
        $buku->pengarang = $request->input('pengarang');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->bahasa = $request->input('bahasa');
        $buku->halaman = $request->input('halaman');
        $buku->ket = $request->input('ket');
        $buku->tanggal_inventaris = $request->input('tanggal_inventaris');
        $buku->foto_buku = $request->input('foto_buku');
        if ($request->hasFile('foto_buku')) {
            $file = $request->file('foto_buku');
            
            // Mengambil ekstensi file
            $extension = $file->getClientOriginalExtension();
            
            // Membuat nama unik untuk file
            $fileName = time().'.'.$extension;
            
            // Menyimpan file ke folder yang ditentukan (misalnya public/uploads)
            $file->storeAs('public/uploads', $fileName);

            $buku->foto_buku = $fileName;
        }

        $buku->save();
        

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil simpan buku' ,
        ]);
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

    // public function update(Request $request,$id_buku)
    // {
        
    //     $buku = buku::find($id_buku);

    //     $databuku = [
    //         'id_museum' => $request->id_museum,
    //         'id_kualifikasi' => $request->id_kualifikasi,
    //         'kode_buku' => $request->kode_buku,
    //         'judul_buku' => $request->judul_buku,
    //         'pengarang' => $request->pengarang,
    //         'penerbit' => $request->penerbit,
    //         'tahun_terbit' => $request->tahun_terbit,
    //         'bahasa' => $request->bahasa,
    //         'halaman' => $request->halaman,
    //         'ket' => $request->ket,
    //         'tanggal_inventaris' => $request->tanggal_inventaris,
    //     ];
       

    //     $databuku['foto_buku'] = $buku->foto_buku;

    //     if ($request->hasFile('foto_buku')) {
    //         $image = $request->file('foto_buku');
    //         $ubah_nama_image = time() . '_' . 'buku' . '.' . $image->getClientOriginalExtension();
    //         $image->move('foto_buku', $ubah_nama_image);

    //         $buku->foto_buku = $ubah_nama_image;

    //     }
    //     $buku->update();

    //     return response()->json([
    //         'status'=> 200,
    //         'message'=>'Berhasil Update kategori' ,
    //     ]);
    // }

    public function update(Request $request,$id_buku)
    {
        
        $buku = buku::findOrFail($id_buku);
        // $buku->id_kualifikasi = $request->input('id_kualifikasi');
        // $buku->id_museum = $request->input('id_museum');
        $buku->kode_buku = $request->input('kode_buku');
        $buku->judul_buku = $request->input('judul_buku');
        $buku->pengarang = $request->input('pengarang');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->bahasa = $request->input('bahasa');
        $buku->halaman = $request->input('halaman');
        $buku->ket = $request->input('ket');
        $buku->tanggal_inventaris = $request->input('tanggal_inventaris');
        $buku->foto_buku = $request->input('foto_buku');
        if ($request->hasFile('foto_buku')) {
            $file = $request->file('foto_buku');
            
            // Mengambil ekstensi file
            $extension = $file->getClientOriginalExtension();
            
            // Membuat nama unik untuk file
            $fileName = time().'.'.$extension;
            
            // Menyimpan file ke folder yang ditentukan (misalnya public/uploads)
            $file->storeAs('public/uploads', $fileName);

            $buku->foto_buku = $fileName;
        }

        $buku->update();
        

        return response()->json([
            'status'=> 200,
            'message'=>'Berhasil Update buku' ,
        ]);
    }
}
