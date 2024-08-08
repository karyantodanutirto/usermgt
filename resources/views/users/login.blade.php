@extends('users.layout')
@section('content')
@section('title', 'Users Login')
<div class="container">
    <div class="container">
        <h2 class="text-center">User Login</h2>
    </div>
    <form action ="{{route('users.login')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
