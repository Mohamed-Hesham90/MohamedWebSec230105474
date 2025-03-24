@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <h1>Welcome to Laravel Store</h1>
        <p>Buy your favorite products with ease.</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Browse Products</a>
    </div>
@endsection
