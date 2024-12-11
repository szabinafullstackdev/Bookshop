<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
     
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
      
        return view('orders.create');
    }

    public function store(Request $request)
    {
 
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric|min:0',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function show($id)
    {
        
        $order = Order::find($id);
        return view('orders.show', compact('order'));
    }

    public function edit($id)
    {

        $order = Order::find($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $order = Order::find($id);
        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy($id)
    {
        // Egy adott rendelés törlése
        $order = Order::find($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}

/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\CartItem;
use Carbon\Carbon;
use Auth;

class OrderController extends Controller
{
    public function createOrder()
    {
        // Lekérjük az aktuális felhasználó kosarát
        $cartItems = Cart::where('user_id', Auth::id())->with('book')->get();
        
        // Ha a kosár üres, akkor ne hozzunk létre rendelést
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Számítsuk ki a rendelés összegét
        $totalAmount = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->book->price;
        });

        // Hozzuk létre a rendelést
        $order = Order::create([
            'customer_id' => Auth::user()->id, // Feltételezve, hogy az `Auth::user()` a Customer modell példánya
            'total_amount' => $totalAmount,
            'order_date' => Carbon::now(),
        ]);

        // Hozzuk létre a rendelés tételeit
        foreach ($cartItems as $cartItem) {
            $order->orderItems()->create([
                'book_id' => $cartItem->book_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->book->price,
            ]);
        }

        // Töröljük a kosár tartalmát
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    }
} */
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\CartItem;
use Carbon\Carbon;
use Auth;

class OrderController extends Controller
{
    // Létrehoz egy rendelést
    public function createOrder()
    {
        // Lekérjük az aktuális felhasználó kosarát
        $cartItems = Cart::where('user_id', Auth::id())->with('book')->get();
        
        // Ha a kosár üres, akkor ne hozzunk létre rendelést
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Számítsuk ki a rendelés összegét
        $totalAmount = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->book->price;
        });

        // Hozzuk létre a rendelést
        $order = Order::create([
            'customer_id' => Auth::user()->id, // Feltételezve, hogy az `Auth::user()` a Customer modell példánya
            'total_amount' => $totalAmount,
            'order_date' => Carbon::now(),
        ]);

        // Hozzuk létre a rendelés tételeit
        foreach ($cartItems as $cartItem) {
            $order->orderItems()->create([
                'book_id' => $cartItem->book_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->book->price,
            ]);
        }

        // Töröljük a kosár tartalmát
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    }

    // Az index metódus, ami megjeleníti az összes rendelést
    public function index()
    {
        $orders = Order::all(); // Lekérdezzük az összes rendelést
        return view('orders.index', compact('orders')); // Megjelenítjük a rendeléseket az 'orders.index' nézetben
    }
}

*/