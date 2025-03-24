@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container">
    <h2>Products</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Price: ${{ $product->price }}</p>
                        <p class="card-text">Stock: {{ $product->stock }}</p>
                        @if(auth()->user()->credit >= $product->price && $product->stock > 0)
                            <form action="{{ route('purchase', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Buy Now</button>
                            </form>
                        @else
                            <button class="btn btn-secondary" disabled>Out of Stock / Insufficient Credit</button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
