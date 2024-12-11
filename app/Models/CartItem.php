<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['cart_id', 'book_id', 'quantity'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
