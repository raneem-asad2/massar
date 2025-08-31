@extends('layouts.app')

@section('title', 'Login - Massar')

@section('content')
<div class="container" style="margin-top: 120px; margin-bottom: 80px;"> {{-- added bottom margin for spacing --}}
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <h1 class="mb-4 text-center">Log in</h1>

            {{-- ✅ Laravel default login form --}}
            <form method="POST" action="{{ route('login') }}" class="p-4 bg-white rounded-4 shadow-sm">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control py-2" id="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control py-2" id="password" required>
                    </div>
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>

                <button type="submit" class="services-btn w-100 py-2 mb-3">Log in</button>
            </form>

            <hr class="my-4">

            <div class="text-center">
                @if (Route::has('password.request'))
                    <p class="mb-2">
                        <a href="{{ route('password.request') }}" class="text-decoration-none fw-bold">Forgot your password?</a>
                    </p>
                @endif
                <p>Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none fw-bold">Sign up</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
