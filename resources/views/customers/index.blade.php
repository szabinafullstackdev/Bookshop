@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer List</h1>
        <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Add New Customer</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($customers->isEmpty())
            <p>No customers found.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>
                                <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

