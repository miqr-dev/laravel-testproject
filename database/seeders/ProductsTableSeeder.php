<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
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
        $products = [
            [
                'name' => 'Product 1',
                'sku' => Str::random(10),
                'price' => 99.99,
            ],
            [
                'name' => 'Product 2',
                'sku' => Str::random(10),
                'price' => 199.99,
            ],
            [
                'name' => 'Product 3',
                'sku' => Str::random(10),
                'price' => 299.99,
            ],
            [
                'name' => 'Product 4',
                'sku' => Str::random(10),
                'price' => 399.99,
            ],
            [
                'name' => 'Product 5',
                'sku' => Str::random(10),
                'price' => 499.99,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
