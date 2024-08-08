@extends('users.layout')
@section('content')
@section('title', 'Users Registration')
<div class="container">
    <div class="contaiber">
        <h2 class="text-center">User Registration</h2>
    </div>
    <form action ="{{route('registration.post')}}" method="POST">
    @csrf
        <div class="mb-3">
            <label class="form-label">Fullname</label>
            <input type="email" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <!-- <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Photo</label>
            <input class="form-control" type="file">
        </div>
        <div>
            <label>Job</label>
        </div>
        <select class="form-select form-select-lg mb-3">
            <option selected></option>
            <option value="1">Frontend Developer</option>
            <option value="2">Backend Developer</option>
            <option value="3">Fullstact Developer</option>
        </select>
        <div>
            <label>Gender</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input">
            <label class="form-check-label">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input">
            <label class="form-check-label">Female</label>
        </div>
        <div>
            <br>
        </div>
        <div>
            <label>Hobbies</label>
        </div>
        <div class="form-check">
            <input class="form-check-input">
            <label class="form-check-label">
                Coding
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input">
            <label class="form-check-label">
                Ngoprek Dapur
            </label>
        </div> -->
        <div>
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
