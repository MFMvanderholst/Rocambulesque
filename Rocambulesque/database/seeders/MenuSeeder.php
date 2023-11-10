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
            'id' => 1,
            'name' => 'Pizza Margherita',
            'description' => 'Tomatensaus, kaas',
            'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_MARGHERITA.png',
            'price' => '7.99'
        ]);
    }
}
