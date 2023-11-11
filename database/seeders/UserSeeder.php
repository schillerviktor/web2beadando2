<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(
            [
                'username' => 'administrator',
                'email' => 'admin@nb1.io',
                'role' => 'admin',
                'password' => Hash::make('$AdministratoR')
            ]
        );
        DB::table('users')->insert(
            [
                'username' => 'manager',
                'email' => 'manager@nb1.io',
                'role' => 'manager',
                'password' => Hash::make('$ManageR')
            ]
        );
        DB::table('users')->insert(
            [
                'username' => 'user',
                'email' => 'user@nb1.io',
                'role' => 'user',
                'password' => Hash::make('$UseR')
            ]
        );

    }
}
