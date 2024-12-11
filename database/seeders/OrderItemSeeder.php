<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    public function run()
    {
        
        OrderItem::create([
            'order_id' => 1,    
            'book_id' => 3,
            'quantity' => 1,
            'price' => 15.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => 2,    
            'book_id' => 1,
            'quantity' => 1,
            'price' => 25.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]); /*
        OrderItem::create([
            'order_id' => 3,    
            'book_id' => 2,
            'quantity' => 1,
            'price' => 37.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => 4,    
            'book_id' => 4,
            'quantity' => 1,
            'price' => 41.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => 5,    
            'book_id' => 5,
            'quantity' => 1,
            'price' => 18.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => 6,    
            'book_id' => 6,
            'quantity' => 1,
            'price' => 69.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => 7,    
            'book_id' => 7,
            'quantity' => 1,
            'price' => 52.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => 8,    
            'book_id' => 8,
            'quantity' => 1,
            'price' => 39.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => 9,    
            'book_id' => 9,
            'quantity' => 1,
            'price' => 23.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        OrderItem::create([
            'order_id' => 10,    
            'book_id' => 10,
            'quantity' => 1,
            'price' => 34.99,
            'updated_at' => now(),
            'created_at' => now(),
        ]); */

    }
}

