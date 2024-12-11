@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Books</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
        <a href="{{ route('cart.index') }}" class="btn btn-success">View Shopping Cart</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Actions</th>
                    <th>Add to Cart</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author->name }}</td>
                        <td>{{ $book->price }}</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('cart.add', ['book' => $book->id]) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="1" min="1">
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
