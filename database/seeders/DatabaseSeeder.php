<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Role::truncate();
        $adminRole =  Role::create(["name"=>"admin"]);

        $admin = User::create([
 		
 			'name'=>'admin',
 			'email'=>'admin@gmail.com',
 			'password' => Hash::make('password123'),
 			'email_verified_at'=>NOW()

        ]);

        $admin->roles()->attach($adminRole);
    }
}
