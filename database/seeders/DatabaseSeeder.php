<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\kualifikasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(museumSeeder::class);
        $this->call(KualifikasiSeeder::class);
        $this->call(ruangSeeder::class);
        $this->call(KoleksiSeeder::class);
        $this->call(bukuSeeder::class);
        $this->call(kartumuseumSeeder::class);
        $this->call(kartuinvSeeder::class);
        $this->call(karturegistrasiSeeder::class);
        $this->call(kartusimpanSeeder::class);
    }
}
