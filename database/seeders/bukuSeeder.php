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
            'ket' => 'stok lama',
            'deskripsi' => 'Penamaan para tokoh, seperti Amba, Bhisma, atau Shalwa, Laksmi banyak terinspirasi dari kisah Mahabarata. “Saya memang terpesona terhadap mitologi jawa, misalnya Mahabarata. Yang masing-masing menautkan manusia yang berkarakter kompleks, kisah-kisah yang mengandung pesan bahwa tidak ada manusia yang benar-benar sempurna,” katanya.'
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
            'ket' => 'stok lama',
            'deskripsi' => 'Nina H. Lubis, doktor sejarah pertama di Jawa Barat, berterima kasih pada Laksmi karena telah menginspirasi para sejarawan untuk membuat teks sejarah yang enak di baca. “Mbak laksmi jelas tidak menulis buku sejarah. Tapi ini adalah novel sejarah. Namanya Histografi. Ia punya arti penting, karena ia bisa memberikan pemahaman sejarah secara lebih mendalam,” kata Nina Lubis.'
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
            'ket' => 'stok lama',
            'deskripsi' => 'Amba, adalah sebuah novel sejarah yang berkisah tentang para tahanan politik pasca peristiwa Gerakan 30 September 1965 di Yogyakarta. Diwarnai kisah fiktif seorang wanita bernama Amba, yang mencari cinta lamanya, yaitu Bisma. Kekasihnya itu hilang ditangkap pemerintah Orde Baru dan kabarnya dibuang ke Pulau Buru.  '
        ]);
    }
}
