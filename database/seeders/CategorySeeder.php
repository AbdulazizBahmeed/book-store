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
        Category::create(['name' => 'Fantasy']);
        Category::create(['name' => 'PSYCHOLOGY']);
        Category::create(['name' => 'Romance']);
        Category::create(['name' => 'Business and economics']);
        Category::create(['name' => 'Management & Leadership']);
        Category::create(['name' => 'Health And Fitness']);
        Category::create(['name' => 'History']);
    }
}
