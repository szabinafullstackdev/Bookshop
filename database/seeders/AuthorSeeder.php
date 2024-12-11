<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(){
    Author::create(['name' => 'J.K. Rowling']);
    Author::create(['name' => 'George R.R. Martin']);
    Author::create(['name' => 'J.R.R. Tolkien']);
    Author::create(['name' => 'Stephen King']);
    Author::create(['name' => 'Agatha Christie']);
    Author::create(['name' => 'Haruki Murakami']);
    Author::create(['name' => 'Jane Austen']);
    Author::create(['name' => 'Leo Tolstoy']);
    Author::create(['name' => 'Fyodor Dostoevsky']);
    Author::create(['name' => 'Gabriel García Márquez']);
    Author::create(['name' => 'Mark Twain']);
    Author::create(['name' => 'Ernest Hemingway']);
    Author::create(['name' => 'Virginia Woolf']);
    Author::create(['name' => 'Jules Verne']);
    Author::create(['name' => 'Charles Dickens']);
    Author::create(['name' => 'Arthur Conan Doyle']);
    Author::create(['name' => 'Victor Hugo']);
    Author::create(['name' => 'Hermann Hesse']);
    Author::create(['name' => 'Oscar Wilde']);
}}
