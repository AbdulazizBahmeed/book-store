<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'name' => 'a court of thorns and roses',
            'author' => 'Sarah J. Mass',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'a-court-of-thorns-and-roses.jpg',
            'category_id' => 1, 
        ]);
        Book::create([
            'name' => 'atomic habits',
            'author' => 'James clear',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'atomic-habits.jpg',
            'category_id' => 2,
        ]);
        Book::create([
            'name' => 'it start with us',
            'author' => 'Colleen Hoover',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'it-start-with-us.jpg',
            'category_id' => 3,
        ]);
        Book::create([
            'name' => 'the 48 laws of powers',
            'author' => 'Robert Greene',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'the-48-laws-of-powers.jpg',
            'category_id' => 2,
        ]);
        Book::create([
            'name' => 'the intelligent investor',
            'author' => 'Benjamin Graham',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'the-intelligent-investor.jpg',
            'category_id' => 4,
        ]);
        Book::create([
            'name' => 'the mind of the leader',
            'author' => 'Jacqueline Carter',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'the-mind-of-the-leader.jpg',
            'category_id' => 5,
        ]);
        Book::create([
            'name' => 'the mountain is you',
            'author' => 'Briana Wiest',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'the-mountain-is-you.jpg',
            'category_id' => 2,
        ]);
        Book::create([
            'name' => 'the psychology of money',
            'author' => 'Morgan Housel',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'the-psychology-of-money.jpg',
            'category_id' => 2,
        ]);
        Book::create([
            'name' => 'why we sleep',
            'author' => 'Matthew Walker, PhD',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 20),
            'cover_image' => 'why-we-sleep.jpg',
            'category_id' => 6,
        ]);
        Book::create([
            'name' => 'framed',
            'author' => 'Jim McCloskey ',
            'reviews' => rand(50,999),
            'rating' => mt_rand (1*100, 5*100) / 100,
            'borrow_rate' => mt_rand (1, 15),
            'cover_image' => 'framed.jpg',
            'category_id' => 7,
        ]);
    }
}
