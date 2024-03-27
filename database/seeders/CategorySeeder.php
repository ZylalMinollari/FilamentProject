<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'ITACHI']);
        Category::create(['name' => 'OBITO']);
        Category::create(['name' => 'PAIN']);
        Category::create(['name' => 'SASORI']);
    }
}
