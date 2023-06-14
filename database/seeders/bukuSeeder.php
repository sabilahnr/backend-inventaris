<?php

namespace Database\Seeders;

use App\Models\buku as Modelsbuku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelsbuku::create([
            'id' => 1,
            'id_museum' => 2,
            'judul_buku' => 'Ensiklopedia keris',
            'kode_buku' => 1,
            'pengarang' => 'Bambang H',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2004',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'ket' => 'stok lama'
        ]);

        Modelsbuku::create([
            'id' => 2,
            'id_museum' => 2,
            'kode_buku' => 2,
            'judul_buku' => 'Keris nusantara',
            'pengarang' => 'Bambang H',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2004',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'ket' => 'stok lama'
        ]);
    }
}
