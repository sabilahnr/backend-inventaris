<?php

namespace Database\Seeders;
use App\Models\kartu_registrasi as ModelsKarturegistrasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class karturegistrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsKarturegistrasi::create([
            'id' => 1,
            'id_koleksi' => 3,
            'id_buku' => 1,
            'no_reg' => '223',
            'no_inv' => '334',
            'nama_kol' => '456',
            'tempat_pembuatan' => 'jawa tengah',
            'cara_perolehan' => 'hibah',
            'ukuran' => '-',
            'tgl_tahun_masuk' => '-',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);

        ModelsKarturegistrasi::create([
            'id' => 2,
            'id_koleksi' => 3,
            'id_buku' => 1,
            'no_reg' => '223',
            'no_inv' => '334',
            'nama_kol' => '456',
            'tempat_pembuatan' => 'jawa tengah',
            'cara_perolehan' => 'hibah',
            'ukuran' => '-',
            'tgl_tahun_masuk' => '-',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);

        ModelsKarturegistrasi::create([
            'id' => 3,
            'id_koleksi' => 3,
            'id_buku' => 1,
            'no_reg' => '223',
            'no_inv' => '334',
            'nama_kol' => '456',
            'tempat_pembuatan' => 'jawa tengah',
            'cara_perolehan' => 'hibah',
            'ukuran' => '-',
            'tgl_tahun_masuk' => '-',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);

        ModelsKarturegistrasi::create([
            'id' => 4,
            'id_koleksi' => 3,
            'id_buku' => 1,
            'no_reg' => '223',
            'no_inv' => '334',
            'nama_kol' => '456',
            'tempat_pembuatan' => 'jawa tengah',
            'cara_perolehan' => 'hibah',
            'ukuran' => '-',
            'tgl_tahun_masuk' => '-',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);

        ModelsKarturegistrasi::create([
            'id' => 5,
            'id_koleksi' => 3,
            'id_buku' => 1,
            'no_reg' => '223',
            'no_inv' => '334',
            'nama_kol' => '456',
            'tempat_pembuatan' => 'jawa tengah',
            'cara_perolehan' => 'hibah',
            'ukuran' => '-',
            'tgl_tahun_masuk' => '-',
            'ket' => '-',
            'harga' => '-',
            'uraian_singkat' => '-',
            'foto_regis' => '-',
        ]);
    }
}
