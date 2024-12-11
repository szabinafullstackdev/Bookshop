<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItem;
use Auth;
use App\Models\Cart; // A Cart modell importálása

class CartController extends Controller
{
    public function add(Request $request, Book $book)
    {
        // Létrehozunk egy új rendelést, ha nincs még létező rendelés az aktuális felhasználóhoz
        $order = Order::where('customer_id', Auth::id())->whereNull('completed_at')->first();
        if (!$order) {
            $order = Order::create([
                'customer_id' => Auth::id(),
                'total_amount' => 0, // Kezdeti érték, később frissíthetjük
            ]);
        }

        Cart::add([
            'id' => $book->id,
            'name' => $book->title,
            'price' => $book->price,
            'quantity' => $request->quantity,
        ]);

        return redirect()->back()->with('success', 'Book added to cart successfully.');

        // Hozzáadunk egy új elemet az aktuális rendeléshez
        $orderItem = OrderItem::create([
            'order_id' => $order->id,
            'book_id' => $book->id,
            'quantity' => $request->quantity,
            'price' => $book->price,
        ]);

        // Frissítjük a rendelés teljes összegét
        $order->update([
            'total_amount' => $order->total_amount + ($request->quantity * $book->price),
        ]);

        return redirect()->back()->with('success', 'Book added to cart successfully.');
    }

    public function index()
    {
        // Lekérdezzük a kosár elemeit a Cart modell segítségével
        $cartItems = Cart::all(); // Példa: ha van egy all() metódus, ami visszaadja az összes elemet

        return view('carts.index', compact('cartItems'));
    }

} 
*/
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    /*
    public function add(Request $request, Book $book)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('book_id', $book->id)->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'book_id' => $book->id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Book added to cart successfully.');
    }

    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('carts.index', compact('cartItems'));
    }
    */ /*
    public function add(Request $request, Book $book)
{
    // Ellenőrizzük, hogy van-e már ilyen könyv a kosárban az aktuális felhasználó számára
    $cartItem = Cart::where('user_id', Auth::id())->where('book_id', $book->id)->first();

    if ($cartItem) {
        // Ha már van ilyen könyv a kosárban, növeljük meg a mennyiségét
        $cartItem->quantity += $request->quantity;
        $cartItem->save();
    } else {
        // Ha nincs ilyen könyv a kosárban, hozzunk létre egy új tételt
        Cart::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
            'quantity' => $request->quantity,
        ]);
    }

    return redirect()->back()->with('success', 'Book added to cart successfully.');
}
/*
public function index()
{
    // Lekérdezzük az összes kosár tételt az aktuális felhasználó számára
    $cartItems = Cart::where('user_id', Auth::id())->get();
    
    return view('carts.index', compact('cartItems'));
} */ /*
public function index()
    {
        // Lekérdezzük az összes kosár tételt az aktuális felhasználó számára
        $cartItems = Cart::where('user_id', Auth::id())->with('book')->get();
        
        return view('carts.index', compact('cartItems'));
    }

 
}
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Auth;

class CartController extends Controller
{
    public function add(Request $request, Book $book)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('book_id', $book->id)->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'book_id' => $book->id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Book added to cart successfully.');
    }

    public function index()
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->with('book')->get();

        return view('carts.index', compact('cartItems'));
    }

    public function convertToOrder(Request $request)
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Új rendelés létrehozása
        $order = Order::create([
            'customer_id' => $userId,
            'total_amount' => 0, // Kezdeti érték, később frissíthetjük
        ]);

        $totalAmount = 0;

        foreach ($cartItems as $item) {
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'book_id' => $item->book_id,
                'quantity' => $item->quantity,
                'price' => $item->book->price,
            ]);

            $totalAmount += $item->quantity * $item->book->price;
        }

        // Frissítjük a rendelés teljes összegét
        $order->update([
            'total_amount' => $totalAmount,
        ]);

        // Töröljük a kosár elemeit
        Cart::where('user_id', $userId)->delete();

        return redirect()->route('dashboard')->with('success', 'Your order has been placed successfully.');
    }
}





