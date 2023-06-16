<?php

namespace Database\Seeders;

use App\Models\kualifikasi as Modelskualifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KualifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelskualifikasi::create([
            'id' => 1,
            'nama_kualifikasi' => 'keris',
        ]);

        Modelskualifikasi::create([
            'id' => 2,
            'nama_kualifikasi' => 'arca',
        ]);

        Modelskualifikasi::create([
            'id' => 3,
            'nama_kualifikasi' => 'pustaka',
        ]);

        Modelskualifikasi::create([
            'id' => 4,
            'nama_kualifikasi' => 'tombak',
        ]);

        Modelskualifikasi::create([
            'id' => 5,
            'nama_kualifikasi' => 'wayang',
        ]);

        Modelskualifikasi::create([
            'id' => 6,
            'nama_kualifikasi' => 'Buku Asing',
        ]);

        Modelskualifikasi::create([
            'id' => 7,
            'nama_kualifikasi' => 'Buku Balai Pustaka (Depdikbud)',
        ]);

        Modelskualifikasi::create([
            'id' => 6,
            'nama_kualifikasi' => 'Buku Balai Pustaka Bary 2023',
        ]);

        Modelskualifikasi::create([
            'id' => 6,
            'nama_kualifikasi' => 'Buku Baru (Th 2000)',
        ]);

        Modelskualifikasi::create([
            'id' => 6,
            'nama_kualifikasi' => 'Buku Fotocopy',
        ]);

        Modelskualifikasi::create([
            'id' => 6,
            'nama_kualifikasi' => 'Buku Hibah Bapak Fuad',
        ]);

        Modelskualifikasi::create([
            'id' => 6,
            'nama_kualifikasi' => 'Buku Lama',
        ]);
    }
}
