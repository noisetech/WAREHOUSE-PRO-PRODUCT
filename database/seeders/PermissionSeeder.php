<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'permission.index',
            'guard_name' => 'web'
        ]);


        Permission::create([
            'name' => 'role.index',
            'guard_name' => 'web'
        ]);


        Permission::create([
            'name' => 'user.index',
            'guard_name' => 'web'
        ]);
    }
}
