<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Player::truncate();


        Player::create([
            'mezszam' => 18,
            'klubid' => 11,
            'posztid' => 4,
            'utonev' => 'Attila',
            'vezeteknev' => 'Haris',
            'szulido' => '1997.01.23',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 31,
            'klubid' => 6,
            'posztid' => 12,
            'utonev' => 'Márió',
            'vezeteknev' => 'Németh',
            'szulido' => '1995.05.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 77,
            'klubid' => 4,
            'posztid' => 2,
            'utonev' => 'Aleksandar',
            'vezeteknev' => 'Jovanovic',
            'szulido' => '1984.10.26',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 14,
            'klubid' => 4,
            'posztid' => 8,
            'utonev' => 'Krisztián',
            'vezeteknev' => 'Kuti',
            'szulido' => '1992.12.04',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 3,
            'posztid' => 10,
            'utonev' => 'Ulysse',
            'vezeteknev' => 'Diallo',
            'szulido' => '1992.10.26',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 12,
            'klubid' => 3,
            'posztid' => 4,
            'utonev' => 'Balázs',
            'vezeteknev' => 'Balogh',
            'szulido' => '1990.06.11',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 33,
            'klubid' => 3,
            'posztid' => 7,
            'utonev' => 'Gábor',
            'vezeteknev' => 'Molnár',
            'szulido' => '1994.05.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 7,
            'posztid' => 1,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Báló',
            'szulido' => '1984.01.12',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 12,
            'posztid' => 4,
            'utonev' => 'Máté',
            'vezeteknev' => 'Pátkai',
            'szulido' => '1988.03.06',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 750
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 8,
            'posztid' => 4,
            'utonev' => 'Bence',
            'vezeteknev' => 'Iszlai',
            'szulido' => '1990.05.29',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 28,
            'klubid' => 2,
            'posztid' => 12,
            'utonev' => 'Joseph',
            'vezeteknev' => 'Paintsil',
            'szulido' => '1998.02.01',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 12,
            'klubid' => 6,
            'posztid' => 6,
            'utonev' => 'Bence',
            'vezeteknev' => 'Kiss',
            'szulido' => '1999.07.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 9,
            'posztid' => 9,
            'utonev' => 'Erik',
            'vezeteknev' => 'Bukrán',
            'szulido' => '1996.12.06',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 71,
            'klubid' => 11,
            'posztid' => 2,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Orovecz',
            'szulido' => '1997.10.23',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 11,
            'posztid' => 7,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Kovács',
            'szulido' => '1991.04.14',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 27,
            'klubid' => 1,
            'posztid' => 7,
            'utonev' => 'Benedek',
            'vezeteknev' => 'Murka',
            'szulido' => '1997.09.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 19,
            'klubid' => 9,
            'posztid' => 8,
            'utonev' => 'Tibor',
            'vezeteknev' => 'Nagy',
            'szulido' => '1991.08.14',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 22,
            'klubid' => 7,
            'posztid' => 12,
            'utonev' => 'Áron',
            'vezeteknev' => 'Fejős',
            'szulido' => '1997.04.17',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 56,
            'klubid' => 11,
            'posztid' => 10,
            'utonev' => 'Miklós',
            'vezeteknev' => 'Belényesi',
            'szulido' => '1983.05.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 3,
            'posztid' => 9,
            'utonev' => 'Balázs',
            'vezeteknev' => 'Tóth',
            'szulido' => '1997.09.04',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 4,
            'posztid' => 8,
            'utonev' => 'Balázs',
            'vezeteknev' => 'Bényei',
            'szulido' => '1990.01.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 6,
            'posztid' => 3,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Kiss',
            'szulido' => '2000.11.24',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 25,
            'klubid' => 4,
            'posztid' => 10,
            'utonev' => 'Haris',
            'vezeteknev' => 'Tabakovic',
            'szulido' => '1994.06.20',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 14,
            'klubid' => 10,
            'posztid' => 6,
            'utonev' => 'Alassane',
            'vezeteknev' => 'Diallo',
            'szulido' => '1995.02.19',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 94,
            'klubid' => 7,
            'posztid' => 10,
            'utonev' => 'Bence',
            'vezeteknev' => 'Daru',
            'szulido' => '1994.06.05',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 99,
            'klubid' => 8,
            'posztid' => 12,
            'utonev' => 'Márk',
            'vezeteknev' => 'Murai',
            'szulido' => '1996.07.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 25
        ]);


        Player::create([
            'mezszam' => 40,
            'klubid' => 1,
            'posztid' => 10,
            'utonev' => 'István',
            'vezeteknev' => 'Ferenczi',
            'szulido' => '1977.09.14',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 3,
            'klubid' => 6,
            'posztid' => 8,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Tóth',
            'szulido' => '1998.07.09',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 4,
            'klubid' => 9,
            'posztid' => 11,
            'utonev' => 'Márk',
            'vezeteknev' => 'Tamás',
            'szulido' => '1993.10.28',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 74,
            'klubid' => 12,
            'posztid' => 9,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Kovácsik',
            'szulido' => '1991.04.04',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 450
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 10,
            'posztid' => 13,
            'utonev' => 'Viktor',
            'vezeteknev' => 'Angelov',
            'szulido' => '1994.03.27',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 31,
            'klubid' => 12,
            'posztid' => 5,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Barczi',
            'szulido' => '1989.02.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 26,
            'klubid' => 11,
            'posztid' => 5,
            'utonev' => 'Sándor',
            'vezeteknev' => 'Vajda',
            'szulido' => '1991.12.14',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 30,
            'klubid' => 7,
            'posztid' => 1,
            'utonev' => 'János',
            'vezeteknev' => 'Szabó',
            'szulido' => '1989.07.11',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 25,
            'klubid' => 12,
            'posztid' => 1,
            'utonev' => 'Krisztián',
            'vezeteknev' => 'Tamás',
            'szulido' => '1995.04.18',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 11,
            'posztid' => 11,
            'utonev' => 'Krisztián',
            'vezeteknev' => 'Póti',
            'szulido' => '1988.05.28',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 14,
            'klubid' => 8,
            'posztid' => 10,
            'utonev' => 'Lazar',
            'vezeteknev' => 'Veselinovic',
            'szulido' => '1986.08.04',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 9,
            'posztid' => 10,
            'utonev' => 'Patrik',
            'vezeteknev' => 'Bacsa',
            'szulido' => '1992.06.03',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 11,
            'posztid' => 9,
            'utonev' => 'Gergő',
            'vezeteknev' => 'Szécsi',
            'szulido' => '1989.02.07',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 2,
            'klubid' => 5,
            'posztid' => 11,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Bobál',
            'szulido' => '1995.08.31',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 450
        ]);


        Player::create([
            'mezszam' => 2,
            'klubid' => 8,
            'posztid' => 8,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Farkas',
            'szulido' => '1993.01.13',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 225
        ]);


        Player::create([
            'mezszam' => 87,
            'klubid' => 9,
            'posztid' => 11,
            'utonev' => 'Róbert',
            'vezeteknev' => 'Tucsa',
            'szulido' => '1998.03.17',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 29,
            'klubid' => 2,
            'posztid' => 10,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Priskin',
            'szulido' => '1986.09.27',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 500
        ]);


        Player::create([
            'mezszam' => 55,
            'klubid' => 11,
            'posztid' => 6,
            'utonev' => 'István',
            'vezeteknev' => 'Bódis',
            'szulido' => '1997.01.19',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 97,
            'klubid' => 2,
            'posztid' => 7,
            'utonev' => 'Roland',
            'vezeteknev' => 'Varga',
            'szulido' => '1990.01.23',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 1000
        ]);


        Player::create([
            'mezszam' => 16,
            'klubid' => 5,
            'posztid' => 6,
            'utonev' => 'Zsolt',
            'vezeteknev' => 'Pölöskei',
            'szulido' => '1991.02.19',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 5,
            'klubid' => 12,
            'posztid' => 8,
            'utonev' => 'Attila',
            'vezeteknev' => 'Fiola',
            'szulido' => '1990.02.17',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 700
        ]);


        Player::create([
            'mezszam' => 13,
            'klubid' => 6,
            'posztid' => 8,
            'utonev' => 'Kristóf',
            'vezeteknev' => 'Polgár',
            'szulido' => '1996.11.28',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 42,
            'klubid' => 4,
            'posztid' => 7,
            'utonev' => 'Norbert',
            'vezeteknev' => 'Könyves',
            'szulido' => '1989.06.10',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 1,
            'posztid' => 4,
            'utonev' => 'Máté',
            'vezeteknev' => 'Vida',
            'szulido' => '1996.03.08',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 700
        ]);


        Player::create([
            'mezszam' => 86,
            'klubid' => 10,
            'posztid' => 10,
            'utonev' => 'Soma',
            'vezeteknev' => 'Novothny',
            'szulido' => '1994.06.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 4,
            'klubid' => 1,
            'posztid' => 11,
            'utonev' => 'Kire',
            'vezeteknev' => 'Ristevski',
            'szulido' => '1990.10.22',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 700
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 7,
            'posztid' => 9,
            'utonev' => 'Péter',
            'vezeteknev' => 'Molnár',
            'szulido' => '1983.12.14',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 28,
            'klubid' => 10,
            'posztid' => 6,
            'utonev' => 'Obinna',
            'vezeteknev' => 'Nwobodo',
            'szulido' => '1996.11.29',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 55,
            'klubid' => 12,
            'posztid' => 11,
            'utonev' => 'Bence',
            'vezeteknev' => 'Tóth',
            'szulido' => '1998.05.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 86,
            'klubid' => 5,
            'posztid' => 1,
            'utonev' => 'Zsolt',
            'vezeteknev' => 'Laczkó',
            'szulido' => '1986.12.18',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 10,
            'posztid' => 7,
            'utonev' => 'Donát',
            'vezeteknev' => 'Zsótér',
            'szulido' => '1996.01.06',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 13,
            'klubid' => 2,
            'posztid' => 10,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Böde',
            'szulido' => '1986.10.21',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 600
        ]);


        Player::create([
            'mezszam' => 90,
            'klubid' => 8,
            'posztid' => 9,
            'utonev' => 'Tomas',
            'vezeteknev' => 'Tujvel',
            'szulido' => '1983.09.19',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 8,
            'posztid' => 11,
            'utonev' => 'Róbert',
            'vezeteknev' => 'Pillár',
            'szulido' => '1991.05.27',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 20,
            'klubid' => 5,
            'posztid' => 4,
            'utonev' => 'Mihály',
            'vezeteknev' => 'Csábi',
            'szulido' => '1995.03.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 6,
            'posztid' => 11,
            'utonev' => 'Stef',
            'vezeteknev' => 'Wils',
            'szulido' => '1982.08.02',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 225
        ]);


        Player::create([
            'mezszam' => 31,
            'klubid' => 2,
            'posztid' => 9,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Holczer',
            'szulido' => '1988.03.28',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 10,
            'posztid' => 9,
            'utonev' => 'Filip',
            'vezeteknev' => 'Pajovic',
            'szulido' => '1993.07.30',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 30,
            'klubid' => 9,
            'posztid' => 6,
            'utonev' => NULL,
            'vezeteknev' => 'Nono',
            'szulido' => '1993.03.30',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 94,
            'klubid' => 9,
            'posztid' => 8,
            'utonev' => 'Gábor',
            'vezeteknev' => 'Eperjesi',
            'szulido' => '1994.01.12',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 30,
            'klubid' => 2,
            'posztid' => 12,
            'utonev' => 'Rui',
            'vezeteknev' => 'Pedro',
            'szulido' => '1988.07.02',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 750
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 4,
            'posztid' => 10,
            'utonev' => 'Tibor',
            'vezeteknev' => 'Tisza',
            'szulido' => '1984.11.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 20,
            'klubid' => 3,
            'posztid' => 11,
            'utonev' => 'Vilmos',
            'vezeteknev' => 'Vanczák',
            'szulido' => '1983.06.20',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 16,
            'klubid' => 6,
            'posztid' => 12,
            'utonev' => 'Barnabás',
            'vezeteknev' => 'Rácz',
            'szulido' => '1996.04.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 90,
            'klubid' => 2,
            'posztid' => 9,
            'utonev' => 'Dénes',
            'vezeteknev' => 'Dibusz',
            'szulido' => '1990.11.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 750
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 12,
            'posztid' => 4,
            'utonev' => 'Anel',
            'vezeteknev' => 'Hadzic',
            'szulido' => '1989.08.16',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 800
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 7,
            'posztid' => 8,
            'utonev' => 'András',
            'vezeteknev' => 'Vági',
            'szulido' => '1988.12.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 24,
            'klubid' => 8,
            'posztid' => 3,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Cseri',
            'szulido' => '1988.01.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 28,
            'klubid' => 3,
            'posztid' => 6,
            'utonev' => 'Stipe',
            'vezeteknev' => 'Bacelic-Grgic',
            'szulido' => '1988.02.16',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 8,
            'posztid' => 10,
            'utonev' => 'Csanád',
            'vezeteknev' => 'Novák',
            'szulido' => '1994.09.24',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 18,
            'klubid' => 5,
            'posztid' => 9,
            'utonev' => 'András',
            'vezeteknev' => 'Horváth',
            'szulido' => '1988.02.23',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 20,
            'klubid' => 1,
            'posztid' => 4,
            'utonev' => 'Márk',
            'vezeteknev' => 'Kleisz',
            'szulido' => '1998.07.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 44,
            'klubid' => 3,
            'posztid' => 9,
            'utonev' => 'Branislav',
            'vezeteknev' => 'Danilovic',
            'szulido' => '1988.06.24',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 33,
            'klubid' => 4,
            'posztid' => 4,
            'utonev' => 'Richárd',
            'vezeteknev' => 'Csősz',
            'szulido' => '1997.04.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 92,
            'klubid' => 5,
            'posztid' => 10,
            'utonev' => 'Kristóf',
            'vezeteknev' => 'Herjeczki',
            'szulido' => '1998.06.29',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 91,
            'klubid' => 2,
            'posztid' => 10,
            'utonev' => 'Balázs',
            'vezeteknev' => 'Lovrencsics',
            'szulido' => '1991.08.30',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 20,
            'klubid' => 9,
            'posztid' => 6,
            'utonev' => 'Attila',
            'vezeteknev' => 'Busai',
            'szulido' => '1989.01.21',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 9,
            'posztid' => 4,
            'utonev' => 'Bálint',
            'vezeteknev' => 'Oláh',
            'szulido' => '1994.12.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 15,
            'klubid' => 9,
            'posztid' => 4,
            'utonev' => 'Barnabás',
            'vezeteknev' => 'Tóth',
            'szulido' => '1994.07.28',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 22,
            'klubid' => 10,
            'posztid' => 1,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Mohl',
            'szulido' => '1985.04.28',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 69,
            'klubid' => 11,
            'posztid' => 10,
            'utonev' => 'Roland',
            'vezeteknev' => 'Vólent',
            'szulido' => '1992.09.23',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 3,
            'klubid' => 1,
            'posztid' => 4,
            'utonev' => 'Manjrekar',
            'vezeteknev' => 'James',
            'szulido' => '1993.08.05',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 12,
            'posztid' => 12,
            'utonev' => 'István',
            'vezeteknev' => 'Kovács',
            'szulido' => '1992.03.27',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 66,
            'klubid' => 5,
            'posztid' => 9,
            'utonev' => 'Attila',
            'vezeteknev' => 'Berla',
            'szulido' => '1999.04.08',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 1,
            'posztid' => 10,
            'utonev' => 'Martin',
            'vezeteknev' => 'Ádám',
            'szulido' => '1994.11.06',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 11,
            'klubid' => 2,
            'posztid' => 12,
            'utonev' => 'István',
            'vezeteknev' => 'Bognár',
            'szulido' => '1991.05.06',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 16,
            'klubid' => 10,
            'posztid' => 4,
            'utonev' => 'Anton',
            'vezeteknev' => 'Jönsson Salétros',
            'szulido' => '1996.04.12',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 22,
            'klubid' => 12,
            'posztid' => 1,
            'utonev' => NULL,
            'vezeteknev' => 'Stopira',
            'szulido' => '1988.05.20',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 750
        ]);


        Player::create([
            'mezszam' => 66,
            'klubid' => 6,
            'posztid' => 9,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Rózsa',
            'szulido' => '1984.11.24',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 39,
            'klubid' => 8,
            'posztid' => 11,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Hudák',
            'szulido' => '1993.03.21',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 275
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 1,
            'posztid' => 2,
            'utonev' => 'Botond',
            'vezeteknev' => 'Király',
            'szulido' => '1994.10.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 15,
            'klubid' => 8,
            'posztid' => 12,
            'utonev' => 'Marek',
            'vezeteknev' => 'Strestik',
            'szulido' => '1987.02.01',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 1,
            'posztid' => 1,
            'utonev' => 'Szilveszter',
            'vezeteknev' => 'Hangya',
            'szulido' => '1994.01.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 600
        ]);


        Player::create([
            'mezszam' => 24,
            'klubid' => 4,
            'posztid' => 4,
            'utonev' => 'Danilo',
            'vezeteknev' => 'Sekulic',
            'szulido' => '1990.04.18',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 3,
            'klubid' => 2,
            'posztid' => 10,
            'utonev' => 'Norbert',
            'vezeteknev' => 'Kundrák',
            'szulido' => '1999.05.18',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 5,
            'posztid' => 10,
            'utonev' => 'Márton',
            'vezeteknev' => 'Eppel',
            'szulido' => '1991.10.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 650
        ]);


        Player::create([
            'mezszam' => 14,
            'klubid' => 3,
            'posztid' => 11,
            'utonev' => 'Jonathan',
            'vezeteknev' => 'Heris',
            'szulido' => '1990.09.03',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 600
        ]);


        Player::create([
            'mezszam' => 19,
            'klubid' => 10,
            'posztid' => 11,
            'utonev' => 'Mijusko',
            'vezeteknev' => 'Bojovic',
            'szulido' => '1988.08.09',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 14,
            'klubid' => 2,
            'posztid' => 11,
            'utonev' => 'Zsombor',
            'vezeteknev' => 'Takács',
            'szulido' => '1999.02.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 96,
            'klubid' => 7,
            'posztid' => 11,
            'utonev' => 'Bence',
            'vezeteknev' => 'Lenzsér',
            'szulido' => '1996.04.09',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 3,
            'posztid' => 6,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Márkvárt',
            'szulido' => '1994.09.20',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 2,
            'posztid' => 3,
            'utonev' => 'Lukács',
            'vezeteknev' => 'Bőle',
            'szulido' => '1990.03.27',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 800
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 10,
            'posztid' => 7,
            'utonev' => 'Krisztián',
            'vezeteknev' => 'Simon',
            'szulido' => '1991.06.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 5,
            'klubid' => 7,
            'posztid' => 11,
            'utonev' => 'Zsolt',
            'vezeteknev' => 'Gévay',
            'szulido' => '1987.11.19',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 225
        ]);


        Player::create([
            'mezszam' => 11,
            'klubid' => 6,
            'posztid' => 10,
            'utonev' => 'David',
            'vezeteknev' => 'Williams',
            'szulido' => '1988.02.26',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 450
        ]);


        Player::create([
            'mezszam' => 39,
            'klubid' => 7,
            'posztid' => 3,
            'utonev' => 'László',
            'vezeteknev' => 'Bartha',
            'szulido' => '1987.02.09',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 4,
            'klubid' => 4,
            'posztid' => 4,
            'utonev' => 'Ioan',
            'vezeteknev' => 'Filip',
            'szulido' => '1989.05.20',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 9,
            'posztid' => 4,
            'utonev' => 'Miklós',
            'vezeteknev' => 'Kitl',
            'szulido' => '1997.06.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 28,
            'klubid' => 7,
            'posztid' => 12,
            'utonev' => 'Márk',
            'vezeteknev' => 'Nikházi',
            'szulido' => '1989.02.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 11,
            'posztid' => 7,
            'utonev' => 'Ervin',
            'vezeteknev' => 'Zsiga',
            'szulido' => '1991.07.11',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 5,
            'klubid' => 10,
            'posztid' => 11,
            'utonev' => 'Róbert',
            'vezeteknev' => 'Litauszki',
            'szulido' => '1990.03.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 6,
            'posztid' => 10,
            'utonev' => 'Miroslav',
            'vezeteknev' => 'Grumic',
            'szulido' => '1984.06.29',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 19,
            'klubid' => 3,
            'posztid' => 9,
            'utonev' => 'Lajos',
            'vezeteknev' => 'Hegedüs',
            'szulido' => '1987.12.19',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 7,
            'posztid' => 7,
            'utonev' => 'Zsolt',
            'vezeteknev' => 'Haraszti',
            'szulido' => '1991.11.04',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 225
        ]);


        Player::create([
            'mezszam' => 70,
            'klubid' => 4,
            'posztid' => 7,
            'utonev' => 'Kevin',
            'vezeteknev' => 'Nagy',
            'szulido' => '1995.09.11',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 92,
            'klubid' => 6,
            'posztid' => 10,
            'utonev' => NULL,
            'vezeteknev' => 'Myke',
            'szulido' => '1992.10.30',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 4,
            'klubid' => 2,
            'posztid' => 4,
            'utonev' => 'Stefan',
            'vezeteknev' => 'Spirovski',
            'szulido' => '1990.08.23',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 600
        ]);


        Player::create([
            'mezszam' => 4,
            'klubid' => 11,
            'posztid' => 11,
            'utonev' => 'Adrián',
            'vezeteknev' => 'Rus',
            'szulido' => '1996.03.18',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 26,
            'klubid' => 7,
            'posztid' => 12,
            'utonev' => 'Lajos',
            'vezeteknev' => 'Bertus',
            'szulido' => '1990.09.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 16,
            'klubid' => 2,
            'posztid' => 11,
            'utonev' => NULL,
            'vezeteknev' => 'Leandro',
            'szulido' => '1982.03.19',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 4,
            'posztid' => 6,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Tőzsér',
            'szulido' => '1985.05.12',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 700
        ]);


        Player::create([
            'mezszam' => 35,
            'klubid' => 6,
            'posztid' => 1,
            'utonev' => 'Predrag',
            'vezeteknev' => 'Bosnjak',
            'szulido' => '1985.11.13',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 14,
            'klubid' => 1,
            'posztid' => 10,
            'utonev' => 'Bálint',
            'vezeteknev' => 'Gaál',
            'szulido' => '1991.07.14',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 2,
            'posztid' => 12,
            'utonev' => 'Kornél',
            'vezeteknev' => 'Csernik',
            'szulido' => '1998.07.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 16,
            'klubid' => 4,
            'posztid' => 10,
            'utonev' => 'Péter',
            'vezeteknev' => 'Bíró',
            'szulido' => '1997.07.04',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 99,
            'klubid' => 4,
            'posztid' => 5,
            'utonev' => 'Bence',
            'vezeteknev' => 'Sós',
            'szulido' => '1994.05.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 36,
            'klubid' => 5,
            'posztid' => 11,
            'utonev' => 'Botond',
            'vezeteknev' => 'Baráth',
            'szulido' => '1992.04.21',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 98,
            'klubid' => 6,
            'posztid' => 12,
            'utonev' => 'Máté',
            'vezeteknev' => 'Tóth',
            'szulido' => '1998.06.20',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 13,
            'klubid' => 1,
            'posztid' => 6,
            'utonev' => 'Zsombor',
            'vezeteknev' => 'Berecz',
            'szulido' => '1995.12.13',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 800
        ]);


        Player::create([
            'mezszam' => 3,
            'klubid' => 8,
            'posztid' => 1,
            'utonev' => 'Dominik',
            'vezeteknev' => 'Fótyik',
            'szulido' => '1990.06.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 10,
            'posztid' => 9,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Banai',
            'szulido' => '1994.05.09',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 16,
            'klubid' => 8,
            'posztid' => 2,
            'utonev' => 'István',
            'vezeteknev' => 'Csirmaz',
            'szulido' => '1995.05.04',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 90,
            'klubid' => 1,
            'posztid' => 9,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Póser',
            'szulido' => '1990.01.12',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 5,
            'klubid' => 9,
            'posztid' => 11,
            'utonev' => 'Zoltán',
            'vezeteknev' => 'Lipták',
            'szulido' => '1984.12.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 79,
            'klubid' => 6,
            'posztid' => 5,
            'utonev' => 'Péter',
            'vezeteknev' => 'Halmosi',
            'szulido' => '1979.09.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 30,
            'klubid' => 11,
            'posztid' => 5,
            'utonev' => 'Aladár',
            'vezeteknev' => 'Virág',
            'szulido' => '1983.02.19',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 77,
            'klubid' => 7,
            'posztid' => 8,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Kulcsár',
            'szulido' => '1988.02.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 33,
            'klubid' => 12,
            'posztid' => 4,
            'utonev' => 'József',
            'vezeteknev' => 'Varga',
            'szulido' => '1988.06.06',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 500
        ]);


        Player::create([
            'mezszam' => 49,
            'klubid' => 12,
            'posztid' => 3,
            'utonev' => 'Krisztián',
            'vezeteknev' => 'Géresi',
            'szulido' => '1994.06.14',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 88,
            'klubid' => 11,
            'posztid' => 9,
            'utonev' => 'László',
            'vezeteknev' => 'Horváth',
            'szulido' => '1988.02.23',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 70,
            'klubid' => 1,
            'posztid' => 13,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Kulcsár',
            'szulido' => '1982.10.13',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 26,
            'klubid' => 10,
            'posztid' => 12,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Nagy',
            'szulido' => '1991.03.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 1,
            'posztid' => 9,
            'utonev' => 'Gergely',
            'vezeteknev' => 'Nagy',
            'szulido' => '1994.05.27',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 13,
            'klubid' => 4,
            'posztid' => 1,
            'utonev' => 'Szabolcs',
            'vezeteknev' => 'Barna',
            'szulido' => '1996.04.27',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 41,
            'klubid' => 8,
            'posztid' => 11,
            'utonev' => 'Attila',
            'vezeteknev' => 'Szalai',
            'szulido' => '1998.01.20',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 12,
            'klubid' => 1,
            'posztid' => 10,
            'utonev' => 'Nikolaos',
            'vezeteknev' => 'Vergos',
            'szulido' => '1996.01.13',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 13,
            'klubid' => 11,
            'posztid' => 6,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Sigér',
            'szulido' => '1990.11.30',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 2,
            'posztid' => 11,
            'utonev' => 'Bence',
            'vezeteknev' => 'Batik',
            'szulido' => '1993.11.08',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 12,
            'posztid' => 11,
            'utonev' => 'Roland',
            'vezeteknev' => 'Juhász',
            'szulido' => '1983.07.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 500
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 8,
            'posztid' => 12,
            'utonev' => 'Jakub',
            'vezeteknev' => 'Brasen',
            'szulido' => '1989.05.02',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 24,
            'klubid' => 3,
            'posztid' => 11,
            'utonev' => 'Patrik',
            'vezeteknev' => 'Poór',
            'szulido' => '1993.11.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 9,
            'posztid' => 10,
            'utonev' => 'Roland',
            'vezeteknev' => 'Ugrai',
            'szulido' => '1992.11.13',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 26,
            'klubid' => 8,
            'posztid' => 1,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Vadnai',
            'szulido' => '1989.02.19',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 5,
            'posztid' => 10,
            'utonev' => 'Davide',
            'vezeteknev' => 'Lanzafame',
            'szulido' => '1987.02.09',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 1200
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 6,
            'posztid' => 10,
            'utonev' => 'Patrik',
            'vezeteknev' => 'Pinte',
            'szulido' => '1997.01.06',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 27,
            'klubid' => 10,
            'posztid' => 4,
            'utonev' => 'Bence',
            'vezeteknev' => 'Pávkovics',
            'szulido' => '1997.03.27',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 99,
            'klubid' => 12,
            'posztid' => 3,
            'utonev' => 'Asmir',
            'vezeteknev' => 'Suljic',
            'szulido' => '1991.09.11',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 700
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 11,
            'posztid' => 8,
            'utonev' => 'Yuri',
            'vezeteknev' => 'Gabovda',
            'szulido' => '1989.05.06',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 11,
            'klubid' => 4,
            'posztid' => 5,
            'utonev' => 'János',
            'vezeteknev' => 'Ferenczi',
            'szulido' => '1991.04.03',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 77,
            'klubid' => 5,
            'posztid' => 6,
            'utonev' => 'Gergő',
            'vezeteknev' => 'Nagy',
            'szulido' => '1993.01.07',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 71,
            'klubid' => 3,
            'posztid' => 8,
            'utonev' => 'Attila',
            'vezeteknev' => 'Osváth',
            'szulido' => '1995.12.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 33,
            'klubid' => 6,
            'posztid' => 11,
            'utonev' => 'Szilárd',
            'vezeteknev' => 'Devecseri',
            'szulido' => '1990.02.13',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 32,
            'klubid' => 10,
            'posztid' => 9,
            'utonev' => 'Zoltán',
            'vezeteknev' => 'Kovács',
            'szulido' => '1984.10.29',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 6,
            'posztid' => 8,
            'utonev' => 'Szabolcs',
            'vezeteknev' => 'Schimmer',
            'szulido' => '1984.02.24',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 49,
            'klubid' => 10,
            'posztid' => 2,
            'utonev' => 'Branko',
            'vezeteknev' => 'Pauljevic',
            'szulido' => '1989.06.12',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 4,
            'posztid' => 13,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Bereczki',
            'szulido' => '1995.06.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 13,
            'klubid' => 8,
            'posztid' => 8,
            'utonev' => 'Pál',
            'vezeteknev' => 'Lázár',
            'szulido' => '1988.03.11',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 9,
            'posztid' => 1,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Forgács',
            'szulido' => '1995.09.29',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 5,
            'posztid' => 8,
            'utonev' => 'Patrick',
            'vezeteknev' => 'Ikenne-King',
            'szulido' => '1991.10.29',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 11,
            'posztid' => 7,
            'utonev' => 'Máté',
            'vezeteknev' => 'Schmid',
            'szulido' => '1996.07.08',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 44,
            'klubid' => 12,
            'posztid' => 10,
            'utonev' => 'Marko',
            'vezeteknev' => 'Scepovic',
            'szulido' => '1991.05.23',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 1200
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 12,
            'posztid' => 10,
            'utonev' => 'Ezekiel',
            'vezeteknev' => 'Henty',
            'szulido' => '1993.05.13',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 1100
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 4,
            'posztid' => 3,
            'utonev' => 'Kevin',
            'vezeteknev' => 'Varga',
            'szulido' => '1996.03.30',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 4,
            'klubid' => 6,
            'posztid' => 1,
            'utonev' => 'Gábor',
            'vezeteknev' => 'Jánvári',
            'szulido' => '1990.04.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 12,
            'posztid' => 13,
            'utonev' => 'Danko',
            'vezeteknev' => 'Lazovic',
            'szulido' => '1983.05.17',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 500
        ]);


        Player::create([
            'mezszam' => 15,
            'klubid' => 3,
            'posztid' => 4,
            'utonev' => 'Patrick',
            'vezeteknev' => 'Mevoungou',
            'szulido' => '1986.02.15',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 8,
            'posztid' => 4,
            'utonev' => 'Paul',
            'vezeteknev' => 'Keita',
            'szulido' => '1992.06.23',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 98,
            'klubid' => 5,
            'posztid' => 10,
            'utonev' => 'Bálint',
            'vezeteknev' => 'Tömösvári',
            'szulido' => '1998.06.14',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 87,
            'klubid' => 7,
            'posztid' => 9,
            'utonev' => 'István',
            'vezeteknev' => 'Verpecz',
            'szulido' => '1987.02.04',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 5,
            'klubid' => 2,
            'posztid' => 1,
            'utonev' => 'Marcos',
            'vezeteknev' => 'Pedroso',
            'szulido' => '1993.10.04',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 900
        ]);


        Player::create([
            'mezszam' => 20,
            'klubid' => 12,
            'posztid' => 11,
            'utonev' => 'Attila',
            'vezeteknev' => 'Mocsi',
            'szulido' => '2000.05.29',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 99,
            'klubid' => 5,
            'posztid' => 9,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Gróf',
            'szulido' => '1989.04.17',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 14,
            'klubid' => 6,
            'posztid' => 7,
            'utonev' => 'Zoltán',
            'vezeteknev' => 'Medgyes',
            'szulido' => '1995.07.23',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 5,
            'klubid' => 5,
            'posztid' => 10,
            'utonev' => 'Gergely',
            'vezeteknev' => 'Bobál',
            'szulido' => '1995.08.31',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 9,
            'posztid' => 4,
            'utonev' => 'Gergő',
            'vezeteknev' => 'Kocsis',
            'szulido' => '1994.03.07',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 18,
            'klubid' => 12,
            'posztid' => 12,
            'utonev' => 'Bence',
            'vezeteknev' => 'Szabó',
            'szulido' => '1998.01.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 9,
            'posztid' => 2,
            'utonev' => 'Diego',
            'vezeteknev' => 'Vela',
            'szulido' => '1991.11.27',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 24,
            'klubid' => 5,
            'posztid' => 4,
            'utonev' => 'Djordje',
            'vezeteknev' => 'Kamber',
            'szulido' => '1983.11.20',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 5,
            'posztid' => 3,
            'utonev' => 'Ákos',
            'vezeteknev' => 'Bíró',
            'szulido' => '1998.04.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 3,
            'posztid' => 1,
            'utonev' => 'Csaba',
            'vezeteknev' => 'Spandler',
            'szulido' => '1996.03.07',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 51,
            'klubid' => 2,
            'posztid' => 4,
            'utonev' => 'András',
            'vezeteknev' => 'Csonka',
            'szulido' => '2000.05.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 7,
            'posztid' => 6,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Kecskés',
            'szulido' => '1986.01.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 10,
            'posztid' => 4,
            'utonev' => 'József',
            'vezeteknev' => 'Windecker',
            'szulido' => '1992.12.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 11,
            'posztid' => 10,
            'utonev' => 'Bachana',
            'vezeteknev' => 'Arabuli',
            'szulido' => '1994.01.05',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 8,
            'posztid' => 9,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Dombó',
            'szulido' => '1993.02.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 29,
            'klubid' => 11,
            'posztid' => 1,
            'utonev' => 'Áron',
            'vezeteknev' => 'Schmid',
            'szulido' => '1998.09.29',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 27,
            'klubid' => 9,
            'posztid' => 10,
            'utonev' => 'Ákos',
            'vezeteknev' => 'Szarka',
            'szulido' => '1990.11.24',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 8,
            'posztid' => 1,
            'utonev' => 'Gergő',
            'vezeteknev' => 'Gohér',
            'szulido' => '1987.06.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 6,
            'posztid' => 9,
            'utonev' => 'Gábor',
            'vezeteknev' => 'Király',
            'szulido' => '1976.04.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 2,
            'klubid' => 4,
            'posztid' => 11,
            'utonev' => 'Ákos',
            'vezeteknev' => 'Kinyik',
            'szulido' => '1993.05.12',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 1,
            'posztid' => 10,
            'utonev' => 'Evgen',
            'vezeteknev' => 'Pavlov',
            'szulido' => '1991.03.12',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 19,
            'klubid' => 2,
            'posztid' => 4,
            'utonev' => 'Julian',
            'vezeteknev' => 'Koch',
            'szulido' => '1990.11.11',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 2,
            'posztid' => 8,
            'utonev' => 'Endre',
            'vezeteknev' => 'Botka',
            'szulido' => '1994.04.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 450
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 3,
            'posztid' => 13,
            'utonev' => 'András',
            'vezeteknev' => 'Radó',
            'szulido' => '1993.09.09',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 98,
            'klubid' => 1,
            'posztid' => 6,
            'utonev' => 'Bálint',
            'vezeteknev' => 'Vogyicska',
            'szulido' => '1998.02.27',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 12,
            'posztid' => 1,
            'utonev' => 'András',
            'vezeteknev' => 'Fejes',
            'szulido' => '1988.08.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 74,
            'klubid' => 9,
            'posztid' => 5,
            'utonev' => 'Patrik',
            'vezeteknev' => 'Ternován',
            'szulido' => '1997.06.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 1,
            'posztid' => 2,
            'utonev' => 'Donát',
            'vezeteknev' => 'Szivacski',
            'szulido' => '1997.01.18',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 12,
            'posztid' => 9,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Horváth',
            'szulido' => '1987.06.18',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 2,
            'klubid' => 10,
            'posztid' => 8,
            'utonev' => 'Kristóf',
            'vezeteknev' => 'Szűcs',
            'szulido' => '1997.01.03',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 7,
            'posztid' => 4,
            'utonev' => 'Kristóf',
            'vezeteknev' => 'Papp',
            'szulido' => '1993.05.14',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 70,
            'klubid' => 6,
            'posztid' => 4,
            'utonev' => 'András',
            'vezeteknev' => 'Jancsó',
            'szulido' => '1996.04.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 67,
            'klubid' => 11,
            'posztid' => 4,
            'utonev' => 'Irakli',
            'vezeteknev' => 'Maisuradze',
            'szulido' => '1988.08.22',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 68,
            'klubid' => 3,
            'posztid' => 11,
            'utonev' => 'János',
            'vezeteknev' => 'Hegedűs',
            'szulido' => '1996.10.04',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 4,
            'klubid' => 10,
            'posztid' => 11,
            'utonev' => 'Dávid',
            'vezeteknev' => 'Kálnoki Kis',
            'szulido' => '1991.08.06',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 27,
            'klubid' => 3,
            'posztid' => 2,
            'utonev' => 'Liridon',
            'vezeteknev' => 'Latifi',
            'szulido' => '1994.02.06',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 750
        ]);


        Player::create([
            'mezszam' => 37,
            'klubid' => 2,
            'posztid' => 1,
            'utonev' => 'Janek',
            'vezeteknev' => 'Sternberg',
            'szulido' => '1992.10.19',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 29,
            'klubid' => 7,
            'posztid' => 2,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Koltai',
            'szulido' => '1987.04.30',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 15,
            'klubid' => 1,
            'posztid' => 11,
            'utonev' => 'Máté',
            'vezeteknev' => 'Czingráber',
            'szulido' => '1997.06.13',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 99,
            'klubid' => 9,
            'posztid' => 9,
            'utonev' => 'Botond',
            'vezeteknev' => 'Antal',
            'szulido' => '1991.08.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 15,
            'klubid' => 11,
            'posztid' => 11,
            'utonev' => 'Bence',
            'vezeteknev' => 'Jagodics',
            'szulido' => '1994.03.31',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 8,
            'posztid' => 12,
            'utonev' => 'Bence',
            'vezeteknev' => 'Tóth',
            'szulido' => '1989.07.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 3,
            'posztid' => 10,
            'utonev' => 'Márk',
            'vezeteknev' => 'Szécsi',
            'szulido' => '1994.05.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 5,
            'posztid' => 10,
            'utonev' => NULL,
            'vezeteknev' => 'Danilo',
            'szulido' => '1986.11.12',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 11,
            'klubid' => 12,
            'posztid' => 8,
            'utonev' => 'Loïc',
            'vezeteknev' => 'Nego',
            'szulido' => '1991.01.15',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 900
        ]);


        Player::create([
            'mezszam' => 25,
            'klubid' => 10,
            'posztid' => 3,
            'utonev' => 'Remzifaik',
            'vezeteknev' => 'Selmani',
            'szulido' => '1997.05.05',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 6,
            'posztid' => 3,
            'utonev' => 'Funsho',
            'vezeteknev' => 'Bamgboye',
            'szulido' => '1999.01.09',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 81,
            'klubid' => 9,
            'posztid' => 11,
            'utonev' => 'Patrik',
            'vezeteknev' => 'Ivánka',
            'szulido' => '1998.08.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 41,
            'klubid' => 11,
            'posztid' => 7,
            'utonev' => 'Ferenc',
            'vezeteknev' => 'Rácz',
            'szulido' => '1991.03.28',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 1,
            'posztid' => 12,
            'utonev' => 'Mohamed',
            'vezeteknev' => 'Remili',
            'szulido' => '1985.05.31',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 29,
            'klubid' => 10,
            'posztid' => 4,
            'utonev' => 'Gergő',
            'vezeteknev' => 'Németh',
            'szulido' => '1999.03.03',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 3,
            'klubid' => 12,
            'posztid' => 11,
            'utonev' => NULL,
            'vezeteknev' => 'Vinícius',
            'szulido' => '1990.02.21',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 1000
        ]);


        Player::create([
            'mezszam' => 29,
            'klubid' => 4,
            'posztid' => 4,
            'utonev' => 'Erik',
            'vezeteknev' => 'Kusnyír',
            'szulido' => '2000.02.07',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 30,
            'klubid' => 12,
            'posztid' => 8,
            'utonev' => 'Roland',
            'vezeteknev' => 'Szolnoki',
            'szulido' => '1992.01.21',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 22,
            'klubid' => 9,
            'posztid' => 9,
            'utonev' => 'Ivan',
            'vezeteknev' => 'Rados',
            'szulido' => '1984.02.21',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 20,
            'klubid' => 7,
            'posztid' => 11,
            'utonev' => 'Péter',
            'vezeteknev' => 'Zachán',
            'szulido' => '1997.12.12',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 2,
            'klubid' => 11,
            'posztid' => 9,
            'utonev' => 'Krisztián',
            'vezeteknev' => 'Pogacsics',
            'szulido' => '1985.10.17',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 7,
            'posztid' => 12,
            'utonev' => 'Dénes',
            'vezeteknev' => 'Szakály',
            'szulido' => '1988.03.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 35,
            'klubid' => 10,
            'posztid' => 9,
            'utonev' => 'Bence',
            'vezeteknev' => 'Gundel-Takács',
            'szulido' => '1998.04.06',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 77,
            'klubid' => 12,
            'posztid' => 8,
            'utonev' => 'Bendegúz',
            'vezeteknev' => 'Bolla',
            'szulido' => '1999.11.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 10,
            'posztid' => 6,
            'utonev' => 'Benjámin',
            'vezeteknev' => 'Cseke',
            'szulido' => '1994.07.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 19,
            'klubid' => 8,
            'posztid' => 3,
            'utonev' => 'Márk',
            'vezeteknev' => 'Koszta',
            'szulido' => '1996.09.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 19,
            'klubid' => 4,
            'posztid' => 7,
            'utonev' => 'Justin',
            'vezeteknev' => 'Mengolo',
            'szulido' => '1993.06.24',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 12,
            'klubid' => 4,
            'posztid' => 9,
            'utonev' => 'Ján',
            'vezeteknev' => 'Novota',
            'szulido' => '1983.11.29',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 25,
            'klubid' => 5,
            'posztid' => 11,
            'utonev' => 'Ivan',
            'vezeteknev' => 'Lovric',
            'szulido' => '1985.07.11',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 38,
            'klubid' => 7,
            'posztid' => 4,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Hajdú',
            'szulido' => '1993.01.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 46,
            'klubid' => 7,
            'posztid' => 4,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Simon',
            'szulido' => '1990.03.30',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 275
        ]);


        Player::create([
            'mezszam' => 19,
            'klubid' => 11,
            'posztid' => 3,
            'utonev' => 'Nemanja',
            'vezeteknev' => 'Andric',
            'szulido' => '1987.06.13',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 44,
            'klubid' => 6,
            'posztid' => 9,
            'utonev' => 'Márton',
            'vezeteknev' => 'Gyurján',
            'szulido' => '1995.05.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 40,
            'klubid' => 2,
            'posztid' => 3,
            'utonev' => 'Moutari',
            'vezeteknev' => 'Amadou',
            'szulido' => '1994.01.19',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 700
        ]);


        Player::create([
            'mezszam' => 80,
            'klubid' => 8,
            'posztid' => 4,
            'utonev' => 'Máté',
            'vezeteknev' => 'Köböl',
            'szulido' => '1992.04.14',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 10,
            'posztid' => 2,
            'utonev' => 'Benjámin',
            'vezeteknev' => 'Balázs',
            'szulido' => '1990.04.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 10,
            'posztid' => 10,
            'utonev' => 'Patrik',
            'vezeteknev' => 'Tischler',
            'szulido' => '1991.07.30',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 27,
            'klubid' => 2,
            'posztid' => 6,
            'utonev' => 'Fernando',
            'vezeteknev' => 'Gorriarán',
            'szulido' => '1994.11.27',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 1100
        ]);


        Player::create([
            'mezszam' => 1,
            'klubid' => 4,
            'posztid' => 9,
            'utonev' => 'Oleksandr',
            'vezeteknev' => 'Nad',
            'szulido' => '1985.09.02',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 42,
            'klubid' => 6,
            'posztid' => 9,
            'utonev' => 'Gergely',
            'vezeteknev' => 'Lévay',
            'szulido' => '1993.08.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 48,
            'klubid' => 9,
            'posztid' => 11,
            'utonev' => 'Dejan',
            'vezeteknev' => 'Karan',
            'szulido' => '1988.08.25',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 55,
            'klubid' => 3,
            'posztid' => 12,
            'utonev' => 'Péter',
            'vezeteknev' => 'Szakály',
            'szulido' => '1986.08.17',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 11,
            'klubid' => 11,
            'posztid' => 12,
            'utonev' => 'Carlo',
            'vezeteknev' => 'Erdei',
            'szulido' => '1996.03.22',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 80,
            'klubid' => 3,
            'posztid' => 12,
            'utonev' => 'Márk',
            'vezeteknev' => 'Madarász',
            'szulido' => '1995.11.24',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 15,
            'klubid' => 2,
            'posztid' => 12,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Hajnal',
            'szulido' => '1981.03.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 20,
            'klubid' => 4,
            'posztid' => 10,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Takács',
            'szulido' => '1991.02.20',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 14,
            'klubid' => 9,
            'posztid' => 3,
            'utonev' => 'Zsolt',
            'vezeteknev' => 'Óvári',
            'szulido' => '1997.03.29',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 28,
            'klubid' => 11,
            'posztid' => 8,
            'utonev' => 'Tibor',
            'vezeteknev' => 'Bokros',
            'szulido' => '1988.08.28',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 51,
            'klubid' => 12,
            'posztid' => 9,
            'utonev' => 'András',
            'vezeteknev' => 'Hársfalvi',
            'szulido' => '1996.11.12',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 33,
            'klubid' => 11,
            'posztid' => 1,
            'utonev' => 'Eke',
            'vezeteknev' => 'Uzoma',
            'szulido' => '1989.08.11',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 25,
            'klubid' => 2,
            'posztid' => 11,
            'utonev' => 'Miha',
            'vezeteknev' => 'Blazic',
            'szulido' => '1993.05.08',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 450
        ]);


        Player::create([
            'mezszam' => 3,
            'klubid' => 4,
            'posztid' => 11,
            'utonev' => 'Csaba',
            'vezeteknev' => 'Szatmári',
            'szulido' => '1994.06.14',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 32,
            'klubid' => 1,
            'posztid' => 11,
            'utonev' => 'Vit',
            'vezeteknev' => 'Benes',
            'szulido' => '1988.08.12',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 2,
            'posztid' => 7,
            'utonev' => 'Gergő',
            'vezeteknev' => 'Lovrencsics',
            'szulido' => '1988.09.01',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 900
        ]);


        Player::create([
            'mezszam' => 18,
            'klubid' => 10,
            'posztid' => 4,
            'utonev' => 'Bojan',
            'vezeteknev' => 'Sankovic',
            'szulido' => '1993.11.21',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 77,
            'klubid' => 3,
            'posztid' => 10,
            'utonev' => 'Antonio',
            'vezeteknev' => 'Perosevic',
            'szulido' => '1992.03.06',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 450
        ]);


        Player::create([
            'mezszam' => 22,
            'klubid' => 1,
            'posztid' => 11,
            'utonev' => 'Jan',
            'vezeteknev' => 'Simunek',
            'szulido' => '1987.02.20',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 22,
            'klubid' => 4,
            'posztid' => 9,
            'utonev' => 'Péter',
            'vezeteknev' => 'Kovács',
            'szulido' => '2000.02.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 11,
            'klubid' => 5,
            'posztid' => 10,
            'utonev' => 'Kadima',
            'vezeteknev' => 'Kabangu',
            'szulido' => '1993.06.15',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 5,
            'klubid' => 11,
            'posztid' => 11,
            'utonev' => 'László',
            'vezeteknev' => 'Tamás',
            'szulido' => '1988.01.18',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 24,
            'klubid' => 6,
            'posztid' => 12,
            'utonev' => 'Benjámin',
            'vezeteknev' => 'Tóth',
            'szulido' => '1995.01.24',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 20,
            'klubid' => 2,
            'posztid' => 6,
            'utonev' => 'Zoltán',
            'vezeteknev' => 'Gera',
            'szulido' => '1979.04.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 8,
            'klubid' => 8,
            'posztid' => 10,
            'utonev' => 'Roland',
            'vezeteknev' => 'Baracskai',
            'szulido' => '1992.04.11',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 10,
            'klubid' => 6,
            'posztid' => 7,
            'utonev' => 'Karol',
            'vezeteknev' => 'Mészáros',
            'szulido' => '1993.07.25',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 11,
            'posztid' => 10,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Fekete',
            'szulido' => '1988.01.22',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 22,
            'klubid' => 8,
            'posztid' => 9,
            'utonev' => 'Martin',
            'vezeteknev' => 'Krnac',
            'szulido' => '1985.01.30',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 97,
            'klubid' => 4,
            'posztid' => 9,
            'utonev' => 'István',
            'vezeteknev' => 'Szabados',
            'szulido' => '1997.11.08',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 80,
            'klubid' => 6,
            'posztid' => 12,
            'utonev' => 'Balázs',
            'vezeteknev' => 'Petró',
            'szulido' => '1997.07.07',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 3,
            'klubid' => 5,
            'posztid' => 1,
            'utonev' => 'Bence',
            'vezeteknev' => 'Gergényi',
            'szulido' => '1998.03.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 38,
            'klubid' => 8,
            'posztid' => 10,
            'utonev' => 'Tomas',
            'vezeteknev' => 'Majtan',
            'szulido' => '1987.03.30',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 19,
            'klubid' => 1,
            'posztid' => 11,
            'utonev' => 'Felix',
            'vezeteknev' => 'Burmeister',
            'szulido' => '1990.03.09',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 42,
            'klubid' => 2,
            'posztid' => 9,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Varga',
            'szulido' => '1999.02.12',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 75
        ]);


        Player::create([
            'mezszam' => 29,
            'klubid' => 6,
            'posztid' => 1,
            'utonev' => 'Milán',
            'vezeteknev' => 'Németh',
            'szulido' => '1988.05.29',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 7,
            'klubid' => 9,
            'posztid' => 10,
            'utonev' => 'Gábor',
            'vezeteknev' => 'Makrai',
            'szulido' => '1996.06.26',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 4,
            'posztid' => 11,
            'utonev' => 'Norbert',
            'vezeteknev' => 'Mészáros',
            'szulido' => '1980.08.19',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 15,
            'klubid' => 5,
            'posztid' => 11,
            'utonev' => 'Stefan',
            'vezeteknev' => 'Deák',
            'szulido' => '1991.03.23',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 125
        ]);


        Player::create([
            'mezszam' => 57,
            'klubid' => 5,
            'posztid' => 3,
            'utonev' => 'Filip',
            'vezeteknev' => 'Holender',
            'szulido' => '1994.07.27',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 21,
            'klubid' => 11,
            'posztid' => 4,
            'utonev' => 'Ante',
            'vezeteknev' => 'Batarelo',
            'szulido' => '1984.11.21',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 27,
            'klubid' => 6,
            'posztid' => 4,
            'utonev' => 'Lóránt',
            'vezeteknev' => 'Kovács',
            'szulido' => '1993.06.06',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 27,
            'klubid' => 4,
            'posztid' => 2,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Bódi',
            'szulido' => '1990.10.18',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 400
        ]);


        Player::create([
            'mezszam' => 28,
            'klubid' => 1,
            'posztid' => 11,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Vaskó',
            'szulido' => '1984.02.20',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 250
        ]);


        Player::create([
            'mezszam' => 33,
            'klubid' => 9,
            'posztid' => 10,
            'utonev' => 'Nikolaos',
            'vezeteknev' => 'Ioannidis',
            'szulido' => '1994.04.26',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 450
        ]);


        Player::create([
            'mezszam' => 13,
            'klubid' => 3,
            'posztid' => 8,
            'utonev' => 'Ádám',
            'vezeteknev' => 'Csilus',
            'szulido' => '1996.11.18',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 17,
            'klubid' => 3,
            'posztid' => 4,
            'utonev' => 'László',
            'vezeteknev' => 'Zsidai',
            'szulido' => '1986.07.16',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 30,
            'klubid' => 3,
            'posztid' => 12,
            'utonev' => 'Josip',
            'vezeteknev' => 'Knezevic',
            'szulido' => '1988.10.03',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 600
        ]);


        Player::create([
            'mezszam' => 4,
            'klubid' => 8,
            'posztid' => 4,
            'utonev' => 'Frano',
            'vezeteknev' => 'Mlinar',
            'szulido' => '1992.03.30',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 350
        ]);


        Player::create([
            'mezszam' => 26,
            'klubid' => 6,
            'posztid' => 11,
            'utonev' => 'Márk',
            'vezeteknev' => 'Jagodics',
            'szulido' => '1992.04.10',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 11,
            'klubid' => 3,
            'posztid' => 7,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Prosser',
            'szulido' => '1994.06.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 300
        ]);


        Player::create([
            'mezszam' => 31,
            'klubid' => 7,
            'posztid' => 9,
            'utonev' => 'Gergő',
            'vezeteknev' => 'Rácz',
            'szulido' => '1995.11.20',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 50
        ]);


        Player::create([
            'mezszam' => 6,
            'klubid' => 5,
            'posztid' => 6,
            'utonev' => 'Dániel',
            'vezeteknev' => 'Gazdag',
            'szulido' => '1996.03.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 450
        ]);


        Player::create([
            'mezszam' => 9,
            'klubid' => 7,
            'posztid' => 10,
            'utonev' => 'János',
            'vezeteknev' => 'Hahn',
            'szulido' => '1995.05.15',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 200
        ]);


        Player::create([
            'mezszam' => 22,
            'klubid' => 2,
            'posztid' => 11,
            'utonev' => 'Kenny',
            'vezeteknev' => 'Otigba',
            'szulido' => '1992.08.29',
            'magyar' => 1,
            'kulfoldi' => 1,
            'ertek' => 1300
        ]);


        Player::create([
            'mezszam' => 88,
            'klubid' => 8,
            'posztid' => 11,
            'utonev' => 'Tamás',
            'vezeteknev' => 'Szeles',
            'szulido' => '1993.12.07',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 150
        ]);


        Player::create([
            'mezszam' => 23,
            'klubid' => 5,
            'posztid' => 12,
            'utonev' => 'Bence',
            'vezeteknev' => 'Banó-Szabó',
            'szulido' => '1999.07.25',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 100
        ]);


        Player::create([
            'mezszam' => 89,
            'klubid' => 5,
            'posztid' => 8,
            'utonev' => 'Balázs',
            'vezeteknev' => 'Villám',
            'szulido' => '1989.06.02',
            'magyar' => 1,
            'kulfoldi' => 0,
            'ertek' => 175
        ]);


        Player::create([
            'mezszam' => 87,
            'klubid' => 1,
            'posztid' => 9,
            'utonev' => 'Lubos',
            'vezeteknev' => 'Kamenar',
            'szulido' => '1987.06.17',
            'magyar' => 0,
            'kulfoldi' => 1,
            'ertek' => 250
        ]);
    }
}
