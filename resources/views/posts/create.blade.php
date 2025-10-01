@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add User</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{route('store')}}" method="post" class="mb-4">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

<div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" name="password" id="password" class="form-control" required>
    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
</div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection     
