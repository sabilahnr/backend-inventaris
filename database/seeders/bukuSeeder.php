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
            'id_museum' => 1,
            'id_kualifikasi' => 1,
            'kode_buku' => 1,
            'judul_buku' => 'Ensiklopedia keris',
            'pengarang' => 'Bambang H',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2004',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'ket' => 'stok lama',
            'tanggal_inventaris' => '16-10-2019',
            'deskripsi' => 'Penamaan para tokoh, seperti Amba, Bhisma, atau Shalwa, Laksmi banyak terinspirasi dari kisah Mahabarata katanya.'
        ]);

        Modelsbuku::create([
            'id' => 2,
            'id_museum' => 2,
            'id_kualifikasi' => 1,
            'kode_buku' => 2,
            'judul_buku' => 'Keris nusantara',
            'pengarang' => 'Bambang H',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2004',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'ket' => 'stok lama',
            'tanggal_inventaris' => '17-10-2020',
            'deskripsi' => 'Nina H. Lubis, doktor sejarah pertama di Jawa Barat karena ia bisa memberikan pemahaman sejarah secara lebih mendalam,” kata Nina Lubis.'
        ]);

        Modelsbuku::create([
            'id' => 3,
            'id_museum' => 2,
            'id_kualifikasi' => 1,
            'kode_buku' => 3,
            'judul_buku' => 'Amba Laksmi Pamuntjak',
            'pengarang' => 'Goenawan Mohamad',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2012',
            'bahasa' => 'Indonesia',
            'halaman' => '482 hal',
            'ket' => 'stok lama',
            'tanggal_inventaris' => '16-10-2019',
            'deskripsi' => 'Amba, adalah sebuah novel sejarah yang berkisah tentang para tahanan politik pasca peristiwa Gerakan 30 September 1965 di Yogyakarta.'
        ]);

        Modelsbuku::create([
            'id' => 4,
            'id_museum' => 2,
            'id_kualifikasi' => 1,
            'kode_buku' => 4,
            'judul_buku' => 'Max Havelaar',
            'pengarang' => 'Multatuli',
            'penerbit' => 'Sampul Lunak',
            'tahun_terbit' => '1860',
            'bahasa' => 'Bahasa Indonesia dan Bahasa Belanda',
            'halaman' => '- hal',
            'ket' => 'stok lama',
            'tanggal_inventaris' => '16-10-2019',
            'deskripsi' => 'Novel ini terbit dalam bahasa Belanda dengan judul asli "Max Havelaar, of de koffij-veilingen der Nederlandsche Handel-Maatschappij"'
        ]);

        Modelsbuku::create([
            'id' => 5,
            'id_museum' => 2,
            'id_kualifikasi' => 1,
            'kode_buku' => 5,
            'judul_buku' => 'Ronggeng Dukuh Paruk',
            'pengarang' => 'Ahmad Tohari',
            'penerbit' => 'ISBN',
            'tahun_terbit' => '1982',
            'bahasa' => 'Bahasa Indonesia dan Bahasa Jawa Banyumasan',
            'halaman' => '174 hal',
            'ket' => 'stok lama',
            'tanggal_inventaris' => '16-10-2019',
            'deskripsi' => 'Ronggeng Dukuh Paruk adalah sebuah novel yang ditulis oleh penulis Indonesia asal Banyumas, Ahmad Tohari, dan diterbitkan pertama kali tahun 1982. '
        ]);

        Modelsbuku::create([
            'id' => 6,
            'id_museum' => 2,
            'id_kualifikasi' => 2,
            'kode_buku' => 3,
            'judul_buku' => 'Keris Jawa',
            'pengarang' => 'MT Arifin',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2004',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'tanggal_inventaris' => '16-10-2019',
            'ket' => 'stok lama'
        ]);

        Modelsbuku::create([
            'id' => 7,
            'id_museum' => 2,
            'id_kualifikasi' => 1,
            'kode_buku' => 4,
            'judul_buku' => 'Keris Jawa Tengah',
            'pengarang' => 'Hadi',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2008',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'tanggal_inventaris' => '16-10-2019',
            'ket' => 'stok lama'
        ]);

        Modelsbuku::create([
            'id' => 8,
            'id_museum' => 2,
            'id_kualifikasi' => 2,
            'kode_buku' => 5,
            'judul_buku' => 'Budaya Nasional',
            'pengarang' => 'Ardi',
            'penerbit' => 'Gramedia',
            'tahun_terbit' => '2010',
            'bahasa' => 'Indonesia',
            'halaman' => '630 hal',
            'tanggal_inventaris' => '16-10-2019',
            'ket' => 'stok lama'
        ]);

        Modelsbuku::create([
            'id' => 9,
            'id_museum' => 2,
            'id_kualifikasi' => 12,
            'kode_buku' => '001/LAMA/RP/2015',
            'judul_buku' => 'Ludwig Feurbach dan Achir Filsafat Klasik Djerman',
            'pengarang' => 'F. Engels',
            'penerbit' => '',
            'tahun_terbit' => '1888',
            'bahasa' => 'Indonesia',
            'halaman' => '79 hal',
            'tanggal_inventaris' => '7 Agustus 2015',
            'ket' => '2 halaman awal hilang'
        ]);

        Modelsbuku::create([
            'id' => 10,
            'id_museum' => 2,
            'id_kualifikasi' => 12,
            'kode_buku' => '002/LAMA/RP/2015',
            'judul_buku' => 'Prihal Goenanja dan Penanemja Kalapa',
            'pengarang' => 'Tirto Adi Winoto',
            'penerbit' => 'Landsdrukkerij',
            'tahun_terbit' => '1904',
            'bahasa' => 'Indonesia',
            'halaman' => '54 hal',
            'tanggal_inventaris' => '7 Agustus 2015',
            'ket' => 'kurang bagus'
        ]);
    }
}
