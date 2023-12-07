<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\menu_category;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        menu_category::create([
            'name' => 'Voorgerecht'
        ]);
        menu_category::create([
            'name' => 'Hoofdgerecht'
        ]);
        menu_category::create([
            'name' => 'Nagerecht'
        ]);
        menu_category::create([
            'name' => 'Dranken'
        ]);
    }
}
