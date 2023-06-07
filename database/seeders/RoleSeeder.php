<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'superadmin',
            'guard_name' => 'web'
        ]);

        Role::create([
<<<<<<< HEAD
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
=======
>>>>>>> adff2959e7046a395e516035004fa14830984c45
            'name' => 'kepalauptmuseum',
            'guard_name' => 'web'
        ]);
    }
}