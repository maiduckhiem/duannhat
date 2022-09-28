<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        Role::create(['name' => 'member']);
        Role::create(['name' => 'sale']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'it']);
        Role::create(['name' => 'staff']);
        Role::create(['name' => 'maketting']);
        Role::create(['name' => 'shipper']);

        // Permission::create(['name' => 'edit'])->assignRole('admin', 'staff');
        // Permission::create(['name' => 'add'])->assignRole('admin', 'staff', 'member');
        // Permission::create(['name' => 'delete'])->assignRole('admin');

    }
}
