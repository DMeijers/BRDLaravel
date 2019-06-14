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
                'name' => 'sgsgs',
                'description' => 'eifhei r gg',
                'category' => 'efjiefij',
                'brand' => 'fiejrfg',
                'price' => 5.6,
            ],
            [
                'name' => 'gurhg',
                'description' => 'fiefjeifj uhfuf ufhe',
                'category' => 'fijeifjeie',
                'brand' => 'efjefef',
                'price' => 6.6,
            ],
            [
                'name' => 'fhfhrfur',
                'description' => 'jdh v ghrugh',
                'category' => 'rgjrrfgr',
                'brand' => 'feufhrufh',
                'price' => 6.2,
            ],
            [
                'name' => 'gurhg',
                'description' => 'fiefjeifj uhfuf ufhe',
                'category' => 'fijeifjeie',
                'brand' => 'efjefef',
                'price' => 6.6,
            ],
            [
                'name' => 'eufhr',
                'description' => 'ijfigvjrg rigjrr rf',
                'category' => 'riugru',
                'brand' => 'eifjerr',
                'price' => 6.8,
            ]
        ]);
    }
}
