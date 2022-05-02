<?php

namespace Database\Seeders;

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
        //Creates the admin role
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A user that is the adminastrator';
        $role_admin->save();

        //Creates the user role
        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'An user thats a member of the golf club';
        $role_user->save();



    }
}
