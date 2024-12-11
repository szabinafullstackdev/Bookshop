

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <p><strong>Author:</strong> {{ $book->author->name }}</p>
        <p><strong>Price:</strong> {{ $book->price }}</p>
        <p>{{ $book->description }}</p>
        
        <form action="{{ route('cart.add', ['book' => $book->id]) }}" method="POST">
            @csrf
            <input type="number" name="quantity" value="1" min="1">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
        
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection

