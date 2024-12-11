<?php
/*
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {

        Order::create([
            'customer_id' => 1,
            'total_amount' => 42.98,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 2,
            'total_amount' => 40.00,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 3,
            'total_amount' => 52.77,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 4,
            'total_amount' => 12.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 5,
            'total_amount' => 11.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 6,
            'total_amount' => 17.00,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 7,
            'total_amount' => 19.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 8,
            'total_amount' => 15.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 9,
            'total_amount' => 35.70,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 10,
            'total_amount' => 22.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 11,
            'total_amount' => 11.60,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 12,
            'total_amount' => 67.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 13,
            'total_amount' => 42.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 14,
            'total_amount' => 18.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 15,
            'total_amount' => 92.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 16,
            'total_amount' => 34.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 17,
            'total_amount' => 50.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 18,
            'total_amount' => 80.99,
            'order_date' => now(), 
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 19,
            'total_amount' => 16.99,
            'order_date' => now(),
            'updated_at' => now(),
            'created_at' => now(),
        ]);
        Order::create([
            'customer_id' => 20,
            'total_amount' => 11.99,
            'order_date' => now(),
            'updated_at' => now(),
            'created_at' => now(),
        ]);
    }
}

*/

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $customer = User::first(); // Obține primul utilizator din tabelă pentru a folosi ID-ul său
        
        Order::create([
            'customer_id' => $customer->id,
            'total_amount' => 42.98,
            'order_date' => Carbon::now(),
        ]);

        // Poți crea mai multe comenzi pentru utilizatori diferiți
        $customer2 = User::find(2); // Sau obține un alt utilizator
        Order::create([
            'customer_id' => $customer2 ? $customer2->id : $customer->id, // Folosește $customer->id ca fallback
            'total_amount' => 40.00,
            'order_date' => Carbon::now(),
        ]);
    }
}

