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
            'kode_buku' => 1,
            'judul_buku' => 'Ensiklopedia keris',
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

        Modelsbuku::create([
            'id' => 2,
            'id_museum' => 2,
            'kode_buku' => 3,
            'judul_buku' => 'Keris Jawa',
            'pengarang' => 'MT Arifin',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2004',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'ket' => 'stok lama'
        ]);

        Modelsbuku::create([
            'id' => 2,
            'id_museum' => 2,
            'kode_buku' => 4,
            'judul_buku' => 'Keris Jawa Tengah',
            'pengarang' => 'Hadi',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2008',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'ket' => 'stok lama'
        ]);

        Modelsbuku::create([
            'id' => 2,
            'id_museum' => 2,
            'kode_buku' => 5,
            'judul_buku' => 'Budaya Nasional',
            'pengarang' => 'Ardi',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2010',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'ket' => 'stok lama'
        ]);
    }
}
