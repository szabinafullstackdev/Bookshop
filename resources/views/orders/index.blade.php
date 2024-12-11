@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Orders</h1>

        <a href="{{ route('orders.create') }}" class="btn btn-success mb-3">Add New Order</a>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Total Amount</th>
                            <th>Order Date</th>
                            <!-- További oszlopok a rendelések részleteihez -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->customer_id }}</td>
                                <td>{{ $order->total_amount }}</td>
                                <td>{{ $order->order_date }}</td>
                                <!-- További adatok megjelenítése a rendelésekről -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
