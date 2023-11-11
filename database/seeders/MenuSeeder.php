<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $menus = [
            ['menu_title' => 'Hírek', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/'],
            ['menu_title' => 'Játékosok', 'parent_id' => 0, 'sort_order' => 1, 'slug' => '/players'],
            ['menu_title' => 'Részletes keresés', 'parent_id' => 2, 'sort_order' => 0, 'slug' => '/players/details'],
            ['menu_title' => 'Tabella', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/players/table']
        ];
        foreach ($menus as $menu) {
            Menu::Create($menu);
        }
    }
}
