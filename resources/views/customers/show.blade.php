@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer Details</h1>
        @if ($customer)
            <p>ID: {{ $customer->id }}</p>
            <p>Name: {{ $customer->name }}</p>
            <p>Email: {{ $customer->email }}</p>
            <p>Address: {{ $customer->address }}</p>
            <p>Phone: {{ $customer->phone }}</p>
        @else
            <p>Customer not found.</p>
        @endif
        <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to Customer List</a>
    </div>
@endsection
