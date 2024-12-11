<?php
/*
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
{
    Customer::create(['name' => 'John Doe', 'email' => 'john@example.com', 'address' => '123 Main St', 'phone' => '555-1234']);
    Customer::create(['name' => 'Jane Smith', 'email' => 'jane@example.com', 'address' => '456 Elm St', 'phone' => '555-5678']);
    Customer::create(['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'address' => '789 Oak St', 'phone' => '555-9012']);
    Customer::create(['name' => 'Bob Brown', 'email' => 'bob@example.com', 'address' => '321 Pine St', 'phone' => '555-3456']);
    Customer::create(['name' => 'Charlie Davis', 'email' => 'charlie@example.com', 'address' => '654 Maple St', 'phone' => '555-7890']);
    Customer::create(['name' => 'Diana Evans', 'email' => 'diana@example.com', 'address' => '987 Birch St', 'phone' => '555-2345']);
    Customer::create(['name' => 'Eve Foster', 'email' => 'eve@example.com', 'address' => '432 Cedar St', 'phone' => '555-6789']);
    Customer::create(['name' => 'Frank Green', 'email' => 'frank@example.com', 'address' => '876 Willow St', 'phone' => '555-1235']);
    Customer::create(['name' => 'Grace Harris', 'email' => 'grace@example.com', 'address' => '543 Aspen St', 'phone' => '555-5679']);
    Customer::create(['name' => 'Henry Jackson', 'email' => 'henry@example.com', 'address' => '210 Cherry St', 'phone' => '555-9013']);
    Customer::create(['name' => 'Ivy King', 'email' => 'ivy@example.com', 'address' => '369 Walnut St', 'phone' => '555-3457']);
    Customer::create(['name' => 'Jack Lee', 'email' => 'jack@example.com', 'address' => '258 Magnolia St', 'phone' => '555-7891']);
    Customer::create(['name' => 'Karen Martin', 'email' => 'karen@example.com', 'address' => '147 Sycamore St', 'phone' => '555-2346']);
    Customer::create(['name' => 'Leo Nelson', 'email' => 'leo@example.com', 'address' => '963 Fir St', 'phone' => '555-6780']);
    Customer::create(['name' => 'Mona Owens', 'email' => 'mona@example.com', 'address' => '852 Spruce St', 'phone' => '555-1236']);
    Customer::create(['name' => 'Nathan Parker', 'email' => 'nathan@example.com', 'address' => '741 Poplar St', 'phone' => '555-5670']);
    Customer::create(['name' => 'Olivia Quinn', 'email' => 'olivia@example.com', 'address' => '159 Cypress St', 'phone' => '555-9014']);
    Customer::create(['name' => 'Paul Roberts', 'email' => 'paul@example.com', 'address' => '753 Dogwood St', 'phone' => '555-3458']);
    Customer::create(['name' => 'Quincy Scott', 'email' => 'quincy@example.com', 'address' => '456 Redwood St', 'phone' => '555-7892']);
    Customer::create(['name' => 'Rachel Turner', 'email' => 'rachel@example.com', 'address' => '654 Hickory St', 'phone' => '555-2347']);
    Customer::create(['name' => 'Steve Underwood', 'email' => 'steve@example.com', 'address' => '321 Beech St', 'phone' => '555-6781']);
    User::create(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => bcrypt('password'), 'address' => '123 Main St', 'phone' => '555-1234']);
    User::create(['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => bcrypt('password'), 'address' => '456 Elm St', 'phone' => '555-5678']);
}

}

/*
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        User::create(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => bcrypt('password'), 'address' => '123 Main St', 'phone' => '555-1234']);
        User::create(['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => bcrypt('password'), 'address' => '456 Elm St', 'phone' => '555-5678']);
        // Adaugă mai mulți utilizatori dacă este necesar
    }
}
*/



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        User::create(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => bcrypt('password'), 'address' => '123 Main St', 'phone' => '555-1234']);
        User::create(['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => bcrypt('password'), 'address' => '456 Elm St', 'phone' => '555-5678']);
        // Adaugă mai mulți utilizatori dacă este necesar
    }
}
