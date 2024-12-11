<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/*
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
*/
 /*
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;

Route::middleware(['auth'])->group(function () {
    Route::resource('authors', AuthorController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('books', BookController::class);
    Route::resource('customers', CustomerController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
*/
/*
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;

Route::resource('authors', AuthorController::class);
Route::resource('orders', OrderController::class);
Route::resource('books', BookController::class);
Route::resource('customers', CustomerController::class);
*/
/*
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('authors', AuthorController::class);
Route::resource('orders', OrderController::class);
Route::resource('books', BookController::class);
Route::resource('customers', CustomerController::class);

use App\Http\Controllers\CartController;

Route::post('/cart/add/{book}', [CartController::class, 'add'])->name('cart.add');
*/

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;

// Főoldal útvonala
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Szerzőkkel kapcsolatos útvonalak
Route::resource('authors', AuthorController::class);

// Rendelésekkel kapcsolatos útvonalak
Route::resource('orders', OrderController::class);

// Könyvekkel kapcsolatos útvonalak
Route::resource('books', BookController::class);

// Vásárlókkal kapcsolatos útvonalak
Route::resource('customers', CustomerController::class);

// Kosár kezelésére vonatkozó útvonal
Route::post('/cart/add/{book}', [CartController::class, 'add'])->name('cart.add');


Route::get('/cart', [CartController::class, 'index'])->name('carts.index');




Route::get('/cart', [CartController::class, 'index'])->name('carts.index');



Route::get('/cart', [CartController::class, 'index'])->name('carts.index');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');


Route::post('/cart/convert-to-order', [CartController::class, 'convertToOrder'])->name('cart.convertToOrder');



// Rendelés lista oldal
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');



// Az összes rendelést megjelenítő route
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

// Rendelés létrehozása route
Route::post('/create-order', [OrderController::class, 'createOrder'])->name('order.create');
 


Route::resource('customers', CustomerController::class);


