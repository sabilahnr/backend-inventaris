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
            'name' => 'Admin Role',
            'email' => 'admin@role.test',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');
       
        $admin = User::create([
            'name' => 'Admin sabila',
            'email' => 'adminsabila@role.test',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $superadmin = User::create([
            'name' => 'Super Admin Role',
            'email' => 'bilasuperadmin@role.test',
            'password' => bcrypt('12345678')
        ]);
        $superadmin->assignRole('superadmin');

        $superadmin = User::create([
            'name' => 'rozy Super Admin Role',
            'email' => 'rozysuperadminudin@role.test',
            'password' => bcrypt('12345678')
        ]);

        $superadmin->assignRole('superadmin');

        $kepalauptmuseum = User::create([
            'name' => 'Kepala UPT Museum',
            'email' => 'kepalauptmuseum@role.test',
            'password' => bcrypt('12345678')
        ]);

        $kepalauptmuseum->assignRole('kepalauptmuseum');
    }
}