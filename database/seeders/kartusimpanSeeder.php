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
            'tahun_perolehan' => '2007',
            'tgl_masuk' => '17-02-2001',
            'tgl_keluar' => '-',
            'penempatan_lokasi' => 'lantai 1',
            'penempatan_lemari' => 'lemari 2',
            'penempatan_kunci' => 'kunci 1',
            'dibawa_ke' => '-',
            'untuk_keperluan' => '-',
            'petugas_nama' => '-',
            'foto_simpan' => '-',
        ]);

        ModelsKartusimpan::create([
            'id' => 2,
            'no_reg' => '329',
            'no_inv' => '521',
            'nama_kol' => 'keris jawa',
            'tahun_perolehan' => '2007',
            'tgl_masuk' => '17-02-2001',
            'tgl_keluar' => '-',
            'penempatan_lokasi' => 'lantai 1',
            'penempatan_lemari' => 'lemari 2',
            'penempatan_kunci' => 'kunci 1',
            'dibawa_ke' => '-',
            'untuk_keperluan' => '-',
            'petugas_nama' => '-',
            'foto_simpan' => '-',
        ]);

        ModelsKartusimpan::create([
            'id' => 3,
            'no_reg' => '123',
            'no_inv' => '321',
            'nama_kol' => 'keris jawa',
            'tahun_perolehan' => '2007',
            'tgl_masuk' => '17-02-2001',
            'tgl_keluar' => '-',
            'penempatan_lokasi' => 'lantai 1',
            'penempatan_lemari' => 'lemari 2',
            'penempatan_kunci' => 'kunci 1',
            'dibawa_ke' => '-',
            'untuk_keperluan' => '-',
            'petugas_nama' => '-',
            'foto_simpan' => '-',
        ]);

        ModelsKartusimpan::create([
            'id' => 4,
            'no_reg' => '123',
            'no_inv' => '321',
            'nama_kol' => 'keris jawa',
            'tahun_perolehan' => '2007',
            'tgl_masuk' => '17-02-2001',
            'tgl_keluar' => '-',
            'penempatan_lokasi' => 'lantai 1',
            'penempatan_lemari' => 'lemari 2',
            'penempatan_kunci' => 'kunci 1',
            'dibawa_ke' => '-',
            'untuk_keperluan' => '-',
            'petugas_nama' => '-',
            'foto_simpan' => '-',
        ]);

        ModelsKartusimpan::create([
            'id' => 5,
            'no_reg' => '123',
            'no_inv' => '321',
            'nama_kol' => 'keris jawa',
            'tahun_perolehan' => '2007',
            'tgl_masuk' => '17-02-2001',
            'tgl_keluar' => '-',
            'penempatan_lokasi' => 'lantai 1',
            'penempatan_lemari' => 'lemari 2',
            'penempatan_kunci' => 'kunci 1',
            'dibawa_ke' => '-',
            'untuk_keperluan' => '-',
            'petugas_nama' => '-',
            'foto_simpan' => '-',
        ]);
    }
}
