@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Shopping Cart</h1>
        
        @if ($cartItems->isEmpty())
            <p>Your cart is empty.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td>{{ $item->book->title }}</td>
                            <td>{{ $item->book->price }}</td>
                            <td>{{ $item->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <form action="{{ route('cart.convertToOrder') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Convert to Order</button>
            </form>
        @endif
        
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
    </div>
@endsection
