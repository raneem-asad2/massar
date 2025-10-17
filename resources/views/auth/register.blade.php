@extends('layouts.auth')

@section('title', 'Register for Massar')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm p-4 rounded-4 bg-white">
            <h2 class="mb-4 text-center">Create Account</h2>

            {{-- Standard registration form --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" id="name" class="form-control" required autofocus>
                    @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn services-btn w-100">Register</button>
            </form>

            <hr class="my-4">

            {{-- Google registration/login --}}
            {{-- <a href="{{ route('google.login') }}" class="btn w-100 mb-3" style="background-color: #353535; color: #fff; border-radius: 8px;">
                <i class="bi bi-google me-2"></i> Register with Google
            </a> --}}

            <p class="text-center">Already have an account? 
                <a href="{{ route('login') }}" class="text-decoration-none fw-bold">Login</a>
            </p>
        </div>
    </div>
</div>
@endsection
