<?php

namespace Database\Seeders;

use App\Models\koleksi as ModelsKoleksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KoleksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsKoleksi::create([
            'id'=> 1,
            // 'id_koleksi' => 1,
            'id_ruang' => 2,
            'id_kualifikasi' => 1,
            'nama_koleksi' => 'Keris Mpu Gandring',
            'dhapur' => '-',
            'klasifikasi' => 'Keris Lama',
            'kode_jenis' => '01',
            'tanggal_regis' => '12-07-2016',
            'desk_benda' => 'Keris',
            'sejarah' => 'Keris',
            'tempat_pembuatan'=>'Rumah Singgah',
            'tempat_diperoleh' => 'Museum',
            'cara_diperoleh' => 'Hibah',
            'status_cagar_budaya' => 'Aktif',
            'sk_cagar_budaya' => 'file',
            'keaslian' => 'Asli',
            'kondisi_koleksi' => 'Baik',
            'sub_kondisi_koleksi' => 'Baik',
            'panjang' => '12,1',
            'lebar_ganja' => '2,7',
            'tinggi' => '12,1',
            'berat' => '3,25',
            'karat' => '1,01',
            'tebal' => '3,74',
            'bahan' => 'Tembaga',
            'warna'=> 'Abu-abu',
            'foto' => '-',
            'sumber_literasi' => '-',
            'pamor' => '-',
            'warangka' => '-',
            'pendhok' => '-',
            'mendhak' => '-',
            'hibah_dari' => '-',
            'hulu' => '-',
            

        ]);

        ModelsKoleksi::create([
            'id'=> 2,
            // 'id_koleksi' => 2,
            'id_ruang' => 2,
            'id_kualifikasi' => 1,
            'nama_koleksi' => 'Keris Gandang Suling',
            'dhapur' => 'Mama',
            'klasifikasi' => 'Purba',
            'kode_jenis' => '02',
            'tanggal_regis' => '18-05-2002',
            'desk_benda' => 'Keris',
            'sejarah' => 'Keris',
            'tempat_pembuatan'=>'Gua Sipuden',
            'tempat_diperoleh' => 'Tanah Abang',
            'cara_diperoleh' => 'Penelitian',
            'status_cagar_budaya' => 'Aktif',
            'sk_cagar_budaya' => 'file',
            'keaslian' => 'Asli',
            'kondisi_koleksi' => 'Sedang',
            'sub_kondisi_koleksi' => 'Sedang',
            'panjang' => '15',
            'lebar_ganja' => '7',
            'tinggi' => '5',
            'berat' => '5,25',
            'karat' => '14,01',
            'tebal' => '3,74',
            'bahan' => 'Emas',
            'warna'=> 'Emas',
            'foto' => '-',
            'sumber_literasi' => '-',
            'pamor' => '-',
            'warangka' => '-',
            'pendhok' => '-',
            'mendhak' => '-',
            'hibah_dari' => '-',
            'hulu' => '-',

        ]);

        ModelsKoleksi::create([
            'id'=> 3,
            // 'id_koleksi' => 3,
            'id_ruang' => 2,
            'id_kualifikasi' => 1,
            'nama_koleksi' => 'Tombak',
            'dhapur' => '-',
            'klasifikasi' => 'Tombak Lama',
            'kode_jenis' => '03',
            'tanggal_regis' => '06-07-2014',
            'desk_benda' => 'Tombak',
            'sejarah' => 'Tombak',
            'tempat_pembuatan'=>'Kerajaan Budha',
            'tempat_diperoleh' => 'Kastil',
            'cara_diperoleh' => 'Penggalian',
            'status_cagar_budaya' => 'Aktif',
            'sk_cagar_budaya' => 'file',
            'keaslian' => 'Asli',
            'kondisi_koleksi' => 'Baik',
            'sub_kondisi_koleksi' => 'Baik',
            'panjang' => '17,50',
            'lebar_ganja' => '5',
            'tinggi' => '7',
            'berat' => '5',
            'karat' => '2.5',
            'tebal' => '5,75',
            'bahan' => 'Perak',
            'warna'=> 'Abu-abu',
            'foto' => '-',
            'sumber_literasi' => '-',
            'pamor' => '-',
            'warangka' => '-',
            'pendhok' => '-',
            'mendhak' => '-',
            'hibah_dari' => '-',
            'hulu' => '-',

        ]);
    }
}
