@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <h2>Login</h2>
    <form action="{{ route('auth.login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
