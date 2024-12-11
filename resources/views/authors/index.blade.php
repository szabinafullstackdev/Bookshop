@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Authors</h1>
        <a href="{{ route('authors.create') }}" class="btn btn-primary">Add New Author</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>
                            <a href="{{ route('authors.show', $author->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
