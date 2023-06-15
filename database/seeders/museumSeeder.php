<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\museum as ModelsMuseum;
use Illuminate\Support\Facades\DB;

class museumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsMuseum::create([
            'id' => 1,
            'nama_museum' => 'Museum Keris Nusantara',
            'alamat_museum' => 'Jl. Bhayangkara No.2, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141',
            'nama_kepala_museum' => 'Pak Fariz',
        ]);
        ModelsMuseum::create([
            'id' => 2,
            'nama_museum' => 'Museum Radya Pustaka',
            'alamat_museum' => 'Jl. Slamet Riyadi No.275, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141',
            'nama_kepala_museum' => 'Mbak Windy'
        ]);
    }
}