<?php

namespace Database\Seeders;
use App\Models\kartu_museum as ModelsKartumuseum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kartumuseumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsKartumuseum::create([
            'id' => 1,
            'id_koleksi' => 2,
            'id_buku' => 1,
            'nama_benda' => 'keris',
            'bahan' => 'besi',
            'asal_ditemukan' => '-',
            'tempat_pembuatan' => '-',
            'cara_didapat' => '-',
            'tahun_abad_masa' => '-',
            'desk_benda' => '-',
            'keterangan' => '-',
            'ukuran_d' => '-',
            'ukuran_tb' => '-',
            'ukuran_pj' => '-',
            'ukuran_l' => '-',
            'ukuran_ti' => '-',
            'ukuran_br' => '-',
            'tempat_simpan' => 'museum keris',
            'no_inv' => '-',
            'no_reg' => '-',
            'no_foto' => '-',
            'no_slide' => '-',
        ]);

        ModelsKartumuseum::create([
            'id' => 2,
            'id_koleksi' => 3,
            'id_buku' => 3,
            'nama_benda' => 'keris',
            'bahan' => 'besi',
            'asal_ditemukan' => '-',
            'tempat_pembuatan' => '-',
            'cara_didapat' => '-',
            'tahun_abad_masa' => '-',
            'desk_benda' => '-',
            'keterangan' => '-',
            'ukuran_d' => '-',
            'ukuran_tb' => '-',
            'ukuran_pj' => '-',
            'ukuran_l' => '-',
            'ukuran_ti' => '-',
            'ukuran_br' => '-',
            'tempat_simpan' => 'museum keris',
            'no_inv' => '-',
            'no_reg' => '-',
            'no_foto' => '-',
            'no_slide' => '-',
        ]);

        ModelsKartumuseum::create([
            'id' => 3,
            'id_koleksi' => 1,
            'id_buku' => 1,
            'nama_benda' => 'keris',
            'bahan' => 'besi',
            'asal_ditemukan' => '-',
            'tempat_pembuatan' => '-',
            'cara_didapat' => '-',
            'tahun_abad_masa' => '-',
            'desk_benda' => '-',
            'keterangan' => '-',
            'ukuran_d' => '-',
            'ukuran_tb' => '-',
            'ukuran_pj' => '-',
            'ukuran_l' => '-',
            'ukuran_ti' => '-',
            'ukuran_br' => '-',
            'tempat_simpan' => 'museum keris',
            'no_inv' => '-',
            'no_reg' => '-',
            'no_foto' => '-',
            'no_slide' => '-',
        ]);

        ModelsKartumuseum::create([
            'id' => 4,
            'id_koleksi' => 2,
            'id_buku' => 2,
            'nama_benda' => 'keris',
            'bahan' => 'besi',
            'asal_ditemukan' => '-',
            'tempat_pembuatan' => '-',
            'cara_didapat' => '-',
            'tahun_abad_masa' => '-',
            'desk_benda' => '-',
            'keterangan' => '-',
            'ukuran_d' => '-',
            'ukuran_tb' => '-',
            'ukuran_pj' => '-',
            'ukuran_l' => '-',
            'ukuran_ti' => '-',
            'ukuran_br' => '-',
            'tempat_simpan' => 'museum keris',
            'no_inv' => '-',
            'no_reg' => '-',
            'no_foto' => '-',
            'no_slide' => '-',
        ]);

        ModelsKartumuseum::create([
            'id' => 5,
            'id_koleksi' => 3,
            'id_buku' => 1,
            'nama_benda' => 'keris',
            'bahan' => 'besi',
            'asal_ditemukan' => '-',
            'tempat_pembuatan' => '-',
            'cara_didapat' => '-',
            'tahun_abad_masa' => '-',
            'desk_benda' => '-',
            'keterangan' => '-',
            'ukuran_d' => '-',
            'ukuran_tb' => '-',
            'ukuran_pj' => '-',
            'ukuran_l' => '-',
            'ukuran_ti' => '-',
            'ukuran_br' => '-',
            'tempat_simpan' => 'museum keris',
            'no_inv' => '-',
            'no_reg' => '-',
            'no_foto' => '-',
            'no_slide' => '-',
        ]);
    }
}
