@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Book</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description">{{ $book->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $book->price }}" step="0.01">
        </div>
        <div class="form-group">
            <label for="author_id">Author:</label>
            <select class="form-control" id="author_id" name="author_id">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>
@endsection

