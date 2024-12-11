<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
{
    Book::create([
        'title' => 'Harry Potter and the Sorcerer\'s Stone',
        'description' => 'First book in the Harry Potter series',
        'price' => 19.99,
        'author_id' => 1
    ]);

    Book::create([
        'title' => 'A Game of Thrones',
        'description' => 'First book in the A Song of Ice and Fire series',
        'price' => 22.99,
        'author_id' => 2
    ]);

    Book::create([
        'title' => 'The Hobbit',
        'description' => 'Prequel to the Lord of the Rings series',
        'price' => 15.99,
        'author_id' => 3
    ]);

    Book::create([
        'title' => 'Pride and Prejudice',
        'description' => 'A romantic novel by Jane Austen',
        'price' => 12.99,
        'author_id' => 4
    ]);

    Book::create([
        'title' => '1984',
        'description' => 'A dystopian novel by George Orwell',
        'price' => 14.99,
        'author_id' => 5
    ]);

    Book::create([
        'title' => 'To Kill a Mockingbird',
        'description' => 'A novel by Harper Lee',
        'price' => 11.99,
        'author_id' => 6
    ]);

    Book::create([
        'title' => 'The Catcher in the Rye',
        'description' => 'A novel by J.D. Salinger',
        'price' => 13.99,
        'author_id' => 7
    ]);

    Book::create([
        'title' => 'Moby Dick',
        'description' => 'A novel by Herman Melville',
        'price' => 17.99,
        'author_id' => 8
    ]);

    Book::create([
        'title' => 'The Great Gatsby',
        'description' => 'A novel by F. Scott Fitzgerald',
        'price' => 16.99,
        'author_id' => 9
    ]);

    Book::create([
        'title' => 'War and Peace',
        'description' => 'A novel by Leo Tolstoy',
        'price' => 21.99,
        'author_id' => 10
    ]);



}

}

