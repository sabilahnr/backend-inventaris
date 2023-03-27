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
            'name' => 'superadmin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin_mkn',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin_mrp',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'kepalauptmuseum',
            'guard_name' => 'web'
        ]);
    }
} 
