<?php
/*
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id'];

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
}
*/

/*
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
*/
// app/Models/Cart.php

/*
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'quantity',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
*/
/*
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'book_id', 'quantity'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'book_id', 'quantity'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}

