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
        Menu::insert([
            [
                'id' => 1,
                'name' => 'Pizza Margherita',
                'description' => 'Tomatensaus, kaas',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_MARGHERITA.png',
                'price' => '7.99'
            ],
            [
                'id' => 2,
                'name' => 'Pizza Pepperoni',
                'description' => 'Tomatensaus, kaas, pepperoni',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_PEPPERONI.png',
                'price' => '8.99'
            ],
            [
                'id' => 3,
                'name' => 'Pizza BBQ Chicken',
                'description' => 'Tomatensaus, kaas, kip, ui, paprika, mais, BBQ saus',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_BBQ_CHICKEN.png',
                'price' => '9.99'
            ],
            [
                'id' => 4,
                'name' => 'Pizza Shoarma',
                'description' => 'Tomatensaus, kaas, shoarma, ui, paprika, knoflooksaus',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_SHOARMA.png',
                'price' => '10.99'
            ],
            [
                'id' => 5,
                'name' => 'Pizza Hawaii',
                'description' => 'Tomatensaus, kaas, ham, ananas',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_HAWAII.png',
                'price' => '11.99'
            ],
            [
                'id' => 6,
                'name' => 'Pizza Veggi',
                'description' => 'Tomatensaus, kaas, champignons, paprika, ui, mais, olijven',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_VEGGI.png',
                'price' => '12.99'
            ],
            [
                'id' => 7,
                'name' => 'Pizza Meatlovers',
                'description' => 'Tomatensaus, kaas, pepperoni, ham, bacon, gehakt',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_MEATLOVERS.png',
                'price' => '13.99'
            ],
            [
                'id' => 8,
                'name' => 'Pizza BBQ Meatlovers',
                'description' => 'Tomatensaus, kaas, pepperoni, ham, bacon, gehakt, BBQ saus',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_BBQ_MEATLOVERS.png',
                'price' => '14.99'
            ],
            [
                'id' => 9,
                'name' => 'Pizza BBQ Chicken Shoarma',
                'description' => 'Tomatensaus, kaas, kip, shoarma, ui, paprika, mais, BBQ saus, knoflooksaus',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_BBQ_CHICKEN_SHOARMA.png',
                'price' => '15.99'
            ],
            [
                'id' => 10,
                'name' => 'Pizza BBQ Chicken Shoarma',
                'description' => 'Tomatensaus, kaas, kip, shoarma, ui, paprika, mais, BBQ saus, knoflooksaus',
                'image' => 'https://www.dominos.nl/ManagedAssets/FRANCHISE/_img/products/PIZZA/PIZZA_BBQ_CHICKEN_SHOARMA.png',
                'price' => '15.99'
            ]
        ]);
    }
}
