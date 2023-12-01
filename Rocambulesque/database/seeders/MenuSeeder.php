<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name' => 'pannenkoek',
            'description' => 'lekkere pannenkoek',
            'image' => 'pannenkoek.jpg',
            'price' => 10,
            'menu_category_id' => 1,
            'dish_id' => 1
        ]);
        Menu::create([
            'name' => 'Soep',
            'description' => 'lekkere soep',
            'image' => 'soep.jpg',
            'price' => 10,
            'menu_category_id' => 1,
            'dish_id' => 2
        ]);
        Menu::create([
            'name' => 'Salade',
            'description' => 'lekkere salade',
            'image' => 'salade.jpg',
            'price' => 10,
            'menu_category_id' => 1,
            'dish_id' => 3
        ]);
    }
}
