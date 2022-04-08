<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get the admin and member roles to attach to the users
        $role_admin = Role::where('name','admin')->first();
        $role_member = Role::where('name','member')->first();

        $admin = new User();
        $admin->name = 'Manu Jose';
        $admin->email = 'MJose@dlgc.ie';
        $admin->phone = '555 4540646';
        $admin->password = Hash::make('password');
        $admin->save();
        //Attach the admin role to the admin user
        $admin->roles()->attach($role_admin);

        $member = new User();
        $member->name = 'Steve Harvey';
        $member->email = 'Sharvey@dlgc.ie';
        $member->phone = '555 4540646';
        $member->password = Hash::make('password');
        //Attach the member role to the member user
        $member->roles()->attach($role_member);
    }
}
