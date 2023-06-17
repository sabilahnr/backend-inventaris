<?php

namespace Database\Seeders;
use App\Models\kartu_simpan as ModelsKartusimpan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kartusimpanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsKartusimpan::create([
            'id' => 1,
            'no_reg' => '123',
            'no_inv' => '321',
            'nama_kol' => 'keris jawa',
            'tempat_pembuatan' => '-',
            'cara_perolehan' => 'hibah',
            'ukuran' => '25',
            'tgl_tahun_masuk' => '27-08-19',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);

        ModelsKartusimpan::create([
            'id' => 2,
            'no_reg' => '123',
            'no_inv' => '453',
            'nama_kol' => 'keris jawa 3',
            'tempat_pembuatan' => '-',
            'cara_perolehan' => '-',
            'ukuran' => '-',
            'tgl_tahun_masuk' => '-',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);

        ModelsKartusimpan::create([
            'id' => 3,
            'no_reg' => '126',
            'no_inv' => '679',
            'nama_kol' => 'keris jawa 2',
            'tempat_pembuatan' => '-',
            'cara_perolehan' => 'hibah',
            'ukuran' => '50',
            'tgl_tahun_masuk' => '12-09-2017',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);

        ModelsKartusimpan::create([
            'id' => 4,
            'no_reg' => '456',
            'no_inv' => '987',
            'nama_kol' => 'keris jawa 4',
            'tempat_pembuatan' => '-',
            'cara_perolehan' => '-',
            'ukuran' => '-',
            'tgl_tahun_masuk' => '-',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);

        ModelsKartusimpan::create([
            'id' => 5,
            'no_reg' => '-',
            'no_inv' => '-',
            'nama_kol' => '-',
            'tempat_pembuatan' => '-',
            'cara_perolehan' => '-',
            'ukuran' => '-',
            'tgl_tahun_masuk' => '-',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);
    }
}
