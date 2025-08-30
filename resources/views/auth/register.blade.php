@extends('layouts.app')

@section('title', 'Register - Massar')

@section('content')
<div class="container" style="margin-top: 120px; margin-bottom: 80px;"> {{-- spacing for navbar & footer --}}
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <h1 class="mb-4 text-center">Create an account</h1>

            <form method="POST" action="{{ route('register') }}" class="p-4 bg-white rounded-4 shadow-sm">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control py-2" id="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control py-2" id="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control py-2" id="password" required>
                    <div class="d-flex mt-2">
                        <small class="text-muted me-3">Use a number (e.g. 1234)</small>
                        <small class="text-muted">Use a symbol (e.g. !@#8)</small>
                    </div>
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control py-2" id="password_confirmation" required>
                </div>

                <div class="mb-4 form-check d-flex align-items-center">
                    <input type="checkbox" class="form-check-input me-2" id="terms" required>
                    <label class="form-check-label small text-muted" for="terms">
                        By creating an account, you agree to the <a href="#" class="text-decoration-none">Terms of use</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>.
                    </label>
                </div>

                <button type="submit" class="services-btn w-100 py-2 mb-3">Create Account</button>
            </form>

            <hr class="my-4">

            <div class="text-center">
                <p>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none fw-bold">Sign in</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
