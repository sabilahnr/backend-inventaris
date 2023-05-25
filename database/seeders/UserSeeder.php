<?php

namespace Database\Seeders;
Use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@role.test',
            'password' => bcrypt('12345678')
        ]);

        $admin_mrp->assignRole('admin_mrp');

        $superadmin = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@role.test',
            'password' => bcrypt('12345678')
        ]);

        $superadmin->assignRole('superadmin');

        $kepalauptmuseum = User::create([
            'name' => 'kepalauptmuseum',
            'email' => 'kepalauptmuseum@role.test',
            'password' => bcrypt('12345678')
        ]);

        $kepalauptmuseum->assignRole('kepalauptmuseum');

       
    }
}
