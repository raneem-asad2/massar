@extends('layouts.auth')

@section('title', 'Set Password for Massar')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm p-4 rounded-4 bg-white">
            <h2 class="mb-4 text-center">Set Your Password</h2>

            <form method="POST" action="{{ route('password.set') }}">
                @csrf

                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input id="password" type="password" name="password" class="form-control" required>
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn services-btn w-100">Set Password</button>
            </form>

            <hr class="my-4">

            <p class="text-center">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-decoration-none fw-bold">Login</a>
            </p>
        </div>
    </div>
</div>
@endsection
