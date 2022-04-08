<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'Managers have access to this role';
        $role_admin->save();

        $role_member = new Role();
        $role_member->name = 'member';
        $role_member->description = 'Golf Club members have this role';
        $role_member->save();
    }
}
