<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlayersTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MenuSeeder::class);
    }
}
