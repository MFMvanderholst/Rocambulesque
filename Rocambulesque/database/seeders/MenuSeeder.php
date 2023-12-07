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
            // Voorgerechten
            [
                'id' => 1,
                'name' => 'Coquilles',
                'description' => 'Sappige coquilles met een vleugje citrus en verse kruiden. Oceanische uitmuntendheid',
                'image' => 'images/pre1.jpg',
                'price' => '11',
                'menu_category_id' => '1',
                'dish_id' => '5'
            ],
            [
                'id' => 2,
                'name' => 'Escargots',
                'description' => 'Geniet van Franse luxe met onze Escargots: dikke slakken in knoflook-peterselieboter. Een symfonie van smaken in elke hap.',
                'image' => 'images/pre2.jpg',
                'price' => '10',
                'menu_category_id' => '1',
                'dish_id' => '5'
            ],
            [
                'id' => 3,
                'name' => 'Steak Tartare',
                'description' => 'Eersteklas rauw rundvlees, kappertjes, uien en pittige mosterddressing. Een culinair genot voor uw zintuigen.',
                'image' => 'images/pre3.jpg',
                'price' => '13',
                'menu_category_id' => '1',
                'dish_id' => '5'
            ],
            [
                'id' => 4,
                'name' => 'Waterzooi',
                'description' => 'Romige kip- of visstoofpot met groenten in een fluweelzachte bouillon.',
                'image' => 'images/pre4.avif',
                'price' => '13',
                'menu_category_id' => '1',
                'dish_id' => '5'
            ],
            [
                'id' => 5,
                'name' => 'Moules Frites',
                'description' => 'Mollige mosselen, aromatische bouillon en knapperige frietjes.',
                'image' => 'images/pre5.webp',
                'price' => '14',
                'menu_category_id' => '1',
                'dish_id' => '5'
            ],
            [
                'id' => 6,
                'name' => 'Franse uiensoep',
                'description' => 'Gekarameliseerde uien, rijke runderbouillon, gesmolten Gruyère en geroosterd stokbrood.',
                'image' => 'images/pre6.jpg',
                'price' => '12',
                'menu_category_id' => '1',
                'dish_id' => '5'
            ],
            // Hoofdgerechten
            [
                'id' => 7,
                'name' => 'Ratatouille',
                'description' => 'Courgette, aubergine en paprika langzaam gegaard met kruiden en tomaten. Besprenkeld met olijfolie.',
                'image' => 'images/main1.png',
                'price' => '19',
                'menu_category_id' => '2',
                'dish_id' => '5'
            ],
            [
                'id' => 8,
                'name' => 'Tonijn met groenten',
                'description' => 'Schilferige tonijn ontmoet knapperige groenten voor een gezond genot.',
                'image' => 'images/main2.jpg',
                'price' => '15',
                'menu_category_id' => '2',
                'dish_id' => '5'
            ],
            [
                'id' => 9,
                'name' => 'Coq au Vin',
                'description' => 'Sappige kip in rode wijn met champignons en uien.',
                'image' => 'images/main3.jpg',
                'price' => '16',
                'menu_category_id' => '2',
                'dish_id' => '5'
            ],
            [
                'id' => 10,
                'name' => 'Kip à la Normande',
                'description' => 'Malse kip in een op Normandië geïnspireerde saus met appels, room en een vleugje Calvados..',
                'image' => 'images/main4.jpg',
                'price' => '16',
                'menu_category_id' => '2',
                'dish_id' => '5'
            ],
            [
                'id' => 11,
                'name' => 'Quiche Lorraine',
                'description' => 'Boterachtige korst gevuld met spek, room en eieren. Een Franse klassieker.',
                'image' => 'images/main5.jpg',
                'price' => '14',
                'menu_category_id' => '2',
                'dish_id' => '5'
            ],
            [
                'id' => 12,
                'name' => 'Boeuf Bourguignon',
                'description' => 'Mals rundvlees in rode wijnsaus met champignons en uien.',
                'image' => 'images/main6.jpg',
                'price' => '15',
                'menu_category_id' => '2',
                'dish_id' => '5'
            ],
            // Dranken
            [
                'id' => 13,
                'name' => 'Red Wine',
                'description' => 'Een symfonie van gedurfde bessen en subtiele kruiden. Proost op een heerlijke eetervaring.',
                'image' => 'images/drink1.jpg',
                'price' => '5',
                'menu_category_id' => '4',
                'dish_id' => '5'
            ],
            [
                'id' => 14,
                'name' => 'Muscat Wine',
                'description' => "Muscatwijn met bloemige aroma's en fruitige gelukzaligheid. Proost op verwennerij.",
                'image' => 'images/drink2.webp',
                'price' => '5',
                'menu_category_id' => '4',
                'dish_id' => '5'
            ],
            [
                'id' => 15,
                'name' => 'Vice Cocktail',
                'description' => 'Verleiding in drie smaken: tropische passievrucht, citrus-sinaasappel en verfrissende aardbei.',
                'image' => 'images/drink3.jpg',
                'price' => '4',
                'menu_category_id' => '4',
                'dish_id' => '5'
            ],
            [
                'id' => 16,
                'name' => 'Frozen Mudslide',
                'description' => 'Kies uit drie verleidelijke smaken: rijke chocolade, tropische kokosnoot of romige banaan.',
                'image' => 'images/drink4.jpg',
                'price' => '6',
                'menu_category_id' => '4',
                'dish_id' => '5'
            ],
            [
                'id' => 17,
                'name' => 'Soda',
                'description' => 'Verfris met de klassieke bruis van Coca-Cola, de pittige kick van Sprite of het fruitige plezier van Fanta. Jouw keuze, jouw verfrissing.',
                'image' => 'images/drink5.webp',
                'price' => '3',
                'menu_category_id' => '4',
                'dish_id' => '5'
            ],
            [
                'id' => 18,
                'name' => 'Water 500ml',
                'description' => 'Perfecte keuze voor een schone en hydraterende ervaring.',
                'image' => 'images/drink6.webp',
                'price' => '2',
                'menu_category_id' => '4',
                'dish_id' => '5'
            ],
            // Nagerechten
            [
                'id' => 19,
                'name' => 'Jésuite',
                'description' => 'Amandelcrème en frambozenjam in bladerdeeg. Gewoon hemels.',
                'image' => 'images/dessert1.jpg',
                'price' => '9',
                'menu_category_id' => '3',
                'dish_id' => '5'
            ],
            [
                'id' => 20,
                'name' => 'Île Flottante',
                'description' => 'Met vanille gekuste meringuewolk op een custardzee: een tijdloos Frans genot.',
                'image' => 'images/dessert2.jpg',
                'price' => '9',
                'menu_category_id' => '3',
                'dish_id' => '5'
            ],
            [
                'id' => 21,
                'name' => 'Nonnettes',
                'description' => 'Zachte koeken gevuld met sinaasappelmarmelade.',
                'image' => 'images/dessert3.jpg',
                'price' => '10',
                'menu_category_id' => '3',
                'dish_id' => '5'
            ],
            [
                'id' => 22,
                'name' => 'Kougloff',
                'description' => 'Luchtige cake met amandelen en citrus, gewoonweg heerlijk.',
                'image' => 'images/dessert4.jpg',
                'price' => '14',
                'menu_category_id' => '3',
                'dish_id' => '5'
            ],
            [
                'id' => 23,
                'name' => 'Financier',
                'description' => 'Rijke amandelcake, goudbruin en boterachtig.',
                'image' => 'images/dessert5.jpg',
                'price' => '8',
                'menu_category_id' => '3',
                'dish_id' => '5'
            ],
            [
                'id' => 24,
                'name' => 'Tarte Citron',
                'description' => 'Pittige citroenwrongel in een knapperige boterkorst. Puur zonneschijn.',
                'image' => 'images/dessert6.jpg',
                'price' => '12',
                'menu_category_id' => '3',
                'dish_id' => '5'
            ],
        ]);
    }
}
