<?php
// app/Services/CartService.php
namespace App\Services;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class CartService
{
    public function addToCart(Book $book, $quantity = 1)
    {
        $cart = $this->getOrCreateCart();

        $existingItem = $cart->items()->where('book_id', $book->id)->first();

        if ($existingItem) {
            $existingItem->quantity += $quantity;
            $existingItem->save();
        } else {
            $cartItem = new CartItem([
                'book_id' => $book->id,
                'quantity' => $quantity,
            ]);
            $cart->items()->save($cartItem);
        }
    }

    protected function getOrCreateCart()
    {
        $userId = Auth::id();

        $cart = Cart::where('user_id', $userId)->first();

        if (!$cart) {
            $cart = new Cart(['user_id' => $userId]);
            $cart->save();
        }

        return $cart;
    }

    public function getCartItems()
    {
        $cart = $this->getOrCreateCart();
        return $cart->items()->with('book')->get();
    }
}
