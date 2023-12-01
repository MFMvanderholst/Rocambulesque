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
                'name' => 'Coquilles',
                'description' => 'Sappige coquilles met een vleugje citrus en verse kruiden. Oceanische uitmuntendheid',
                'image' => 'images/pre1.jpg',
                'price' => '11'
            ],
            [
                'id' => 2,
                'name' => 'Escargots',
                'description' => 'Geniet van Franse luxe met onze Escargots: dikke slakken in knoflook-peterselieboter. Een symfonie van smaken in elke hap.',
                'image' => 'images/pre2.jpg',
                'price' => '10'
            ],
            [
                'id' => 3,
                'name' => 'Steak Tartare',
                'description' => 'Eersteklas rauw rundvlees, kappertjes, uien en pittige mosterddressing. Een culinair genot voor uw zintuigen.',
                'image' => 'images/pre3.jpg',
                'price' => '13'
            ],
            [
                'id' => 4,
                'name' => 'Waterzooi',
                'description' => 'Romige kip- of visstoofpot met groenten in een fluweelzachte bouillon.',
                'image' => 'images/pre4.avif',
                'price' => '13'
            ],
            [
                'id' => 5,
                'name' => 'Moules Frites',
                'description' => 'Mollige mosselen, aromatische bouillon en knapperige frietjes.',
                'image' => 'images/pre5.webp',
                'price' => '14'
            ],
            [
                'id' => 6,
                'name' => 'Franse uiensoep',
                'description' => 'Gekarameliseerde uien, rijke runderbouillon, gesmolten Gruyère en geroosterd stokbrood.',
                'image' => 'images/pre6.jpg',
                'price' => '12'
            ]
        ]);
    }
}
