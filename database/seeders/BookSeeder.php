<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'The Storyteller',
            'author' => 'Jodi Picoult',
            'price' => 19.99,
            'cover' => 'book1.jpg',
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'price' => 15.99,
            'cover' => 'book2.jpg',
        ]);
    }
}

