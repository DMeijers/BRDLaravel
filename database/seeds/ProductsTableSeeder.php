<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'beer',
                'description' => 'oranje',
                'category' => 'nederland',
                'brand' => 'anime',
                'price' => 5.6,
                'stock' => 60,
            ],
            [
                'name' => 'gekke hond',
                'description' => 'een mutatie tussen genen van een labrador en een tijger',
                'category' => 'animal',
                'brand' => 'mutation inc.',
                'price' => 6.9,
                'stock' => 1,
            ],
            [
                'name' => 'mooi plaatje',
                'description' => 'een prachtige afbeelding van de serie ushio to tora',
                'category' => 'anime',
                'brand' => 'Studio VOLN',
                'price' => 6.2,
                'stock' => 8,
            ],
            [
                'name' => 'Japanse Garfield',
                'description' => 'john deed perongeluk soya saus tussen garfields lasagna',
                'category' => 'animal',
                'brand' => 'Cartoon Network',
                'price' => 6.66,
                'stock' => 72,
            ],
            [
                'name' => 'oranje wasbeer',
                'description' => 'nadat een wasbeer een nacht koningsdag heeft overleeft, kreeg zijn vacht een permanente oranje gloed',
                'category' => 'animal',
                'brand' => 'Willem Alexander',
                'price' => 6.8,
                'stock' => 5,
            ]
        ]);
    }
}
