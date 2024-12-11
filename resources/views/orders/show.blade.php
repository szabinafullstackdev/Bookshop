@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Order Details</h1>
        <p>ID: {{ $order->id }}</p>
        <p>Customer: {{ $order->customer->name }}</p>
        <p>Order Date: {{ $order->order_date }}</p>
        <p>Total Amount: {{ $order->total_amount }}</p>
    </div>
@endsection
