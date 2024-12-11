@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $author->name }}</h1>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
