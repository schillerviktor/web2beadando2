<?php

namespace Database\Seeders;

use App\Models\Position;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Let's truncate our existing records to start from scratch.
        Position::truncate();

        $positions = [
            'bal oldali védő',
            'jobb oldali középpályás',
            'bal szélső',
            'védekező középpályás',
            'bal oldali középpályás',
            'belső középpályás',
            'jobb szélső',
            'jobb oldali védő',
            'kapus',
            'középcsatár',
            'középső védő',
            'támadó középpályás',
            'hátravont csatár',
            'jobboldali védő'
        ];

        for ($i = 0; $i < 14; $i++) {
            Position::create([
                'nev' => $positions[$i],
            ]);
        }
    }
}
