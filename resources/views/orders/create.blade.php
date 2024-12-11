@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Order</h1>

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="customer_id">Customer ID:</label>
                <input type="text" name="customer_id" id="customer_id" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="total_amount">Total Amount:</label>
                <input type="number" name="total_amount" id="total_amount" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="order_date">Order Date:</label>
                <input type="datetime-local" name="order_date" id="order_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Order</button>
        </form>
    </div>
@endsection
