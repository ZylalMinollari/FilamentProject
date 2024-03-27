<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name'=> 'Product 1', 'slug'=> 'product_1', 'price' => 1999]);
        Product::create(['name'=> 'Product 2', 'slug'=> 'product_2', 'price' => 2999]);
        Product::create(['name'=> 'Product 3', 'slug'=> 'product_3', 'price' => 3999]);
        Product::create(['name'=> 'Product 4', 'slug'=> 'product_4', 'price' => 4999]);
    }
}
