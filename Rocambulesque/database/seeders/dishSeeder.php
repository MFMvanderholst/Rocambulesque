<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dish_category;

class dishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        dish_category::create([
            'name' => 'broodjes'
        ]);
        dish_category::create([
            'name' => 'Soep'
        ]);
        dish_category::create([
            'name' => 'Salade'
        ]);
        dish_category::create([
            'name' => 'Vlees'
        ]);
        dish_category::create([
            'name' => 'Vis'
        ]);
    }
}
