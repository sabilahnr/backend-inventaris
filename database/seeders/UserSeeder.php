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
        $admin_mkn = User::create([
            'name' => 'admin_mkn',
            'email' => 'adminmkn@role.test',
            'password' => bcrypt('12345678')
        ]);

        $admin_mkn->assignRole('admin_mkn');

        $admin_mrp = User::create([
            'name' => 'admin_mrp',
            'email' => 'adminmrp@role.test',
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
