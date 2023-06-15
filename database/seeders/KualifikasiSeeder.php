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
    }
}
