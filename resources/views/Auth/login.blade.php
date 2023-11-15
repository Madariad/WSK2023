@extends('Layouts.app')
@section('content')
    
<div class="h-100 d-flex align-items-center justify-content-center bg-dark">
    <form class="w-75 text-white d-flex flex-column" action="{{ url('/login') }}" method="post">
        @csrf
        <h2 class="py-5 fw-bold text-info fs-1">Login</h2>
        <div class="form-group my-3">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control">
            @error('username')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group my-3">
            <label for="password">Password</label>
            <input type="text" id="password" name="password" class="form-control">
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button
            type="submit"
            class="my-4 btn btn-info align-self-end"
        >
        Login
        </button>
        @if($errors->any()) 
            <div class="text-danger">
            {{ implode(' ', $errors->all(':message'))}}
            </div>
        @endif
    </form>
</div>
@endsection
