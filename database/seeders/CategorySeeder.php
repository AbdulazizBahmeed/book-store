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
        Category::create(['name' => 'Horror']);
        Category::create(['name' => 'Science fiction']);
        Category::create(['name' => 'Fantasy']);
        Category::create(['name' => 'Mystery']);
        Category::create(['name' => 'Business and economics']);
        Category::create(['name' => 'Health and fitness']);
        Category::create(['name' => 'History']);
    }
}
