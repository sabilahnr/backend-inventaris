<?php

namespace Database\Seeders;

use App\Models\ruang as Modelsruang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ruangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelsruang::create([
            'id' => 1,
            'lokasi' => 'lantai 1',
            'lemari' => 'lemari 1',
            'kunci' => 'kunci 1',
        ]);

        Modelsruang::create([
            'id' => 2,
            'lokasi' => 'lantai 1',
            'lemari' => 'lemari 2',
            'kunci' => 'kunci 2',
        ]);

        Modelsruang::create([
            'id' => 3,
            'lokasi' => 'lantai 2',
            'lemari' => 'lemari 1',
            'kunci' => 'kunci 1',
        ]);

        Modelsruang::create([
            'id' => 4,
            'lokasi' => 'lantai 3',
            'lemari' => 'lemari 1',
            'kunci' => 'kunci 3',
        ]);

        Modelsruang::create([
            'id' => 5,
            'lokasi' => 'lantai 4',
            'lemari' => 'lemari 3',
            'kunci' => 'kunci 4',
        ]);

    }
}
