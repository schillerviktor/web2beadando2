<?php

namespace Database\Seeders;

use App\Models\Club;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Let's truncate our existing records to start from scratch.
        Club::truncate();

        $clubs = [
            'Vasas FC',
            'Ferencvárosi TC',
            'Puskás Akadémia FC',
            'Debreceni VSC',
            'Budapest Honvéd FC',
            'Szombathelyi Haladás',
            'Paksi FC',
            'Mezőkövesd Zsóry FC',
            'Diósgyőri VTK',
            'Újpest FC',
            'Balmazújváros FC',
            'Videoton FC',
        ];


        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 12; $i++) {
            Club::create([
                'csapatnev' => $clubs[$i],
            ]);
        }
    }
}
