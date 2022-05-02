<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get the admin and user roles and attach them to the user
        $role_admin = Role::where('name','admin')->first();
        $role_user = Role::where('name','user')->first();

        // Creates a user with the admin role
        $admin = new User();
        $admin->name = 'Manu Jose';
        $admin->email = 'MJose@example.ie';
        $admin->password = Hash::make('password');
        $admin->save();
        //attach the role of admin to the admin user
        $admin->roles()->attach($role_admin);

        //Creates a user with the user role
        $user = new User();
        $user->name = 'James May';
        $user->email = 'JMays@example.ie';
        $user->password = Hash::make('password');
        $user->save();
        //attach the user role to the user
        $user->roles()->attach($role_user);
    }
}
