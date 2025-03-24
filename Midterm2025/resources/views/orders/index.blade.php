@extends('layouts.app')

@section('title', 'My Orders')

@section('content')
<div class="container">
    <h2 class="mb-4">My Orders</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->product->name }}</td>
                <td>${{ $order->product->price }}</td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
