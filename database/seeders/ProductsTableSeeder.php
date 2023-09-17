<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = Product::$types;
        $products = Product::factory(5)->create();
        foreach ($products as $product) {
            $product->type = $types[array_rand($types, 1)];
            $product->save();
        }
    }
}
