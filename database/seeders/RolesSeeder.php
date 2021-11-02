<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'customer'
        ]);
                Role::create([
            'name'=>'provider services'
        ]);
        $user = User::create([


            'name'=>'super admin',
            'email'=>'admin@aa.net',
            'password'=>bcrypt('123456789')
        ]);
        $user->assignRole('admin');
        $user = User::create([


            'name'=>'provider services',
            'email'=>'provider@aa.net',
            'password'=>bcrypt('123456789')
        ]);
        $user->assignRole('provider services');
    }
}
