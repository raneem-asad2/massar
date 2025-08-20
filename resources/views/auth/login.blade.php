<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border border-2 rounded-4 shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="card-title mb-4 fs-8">Log in</h1>

                        {{-- ✅ Laravel default login form --}}
                        <form method="POST" action="{{ route('login') }}">
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

                            <div class="mb-4 form-check d-flex align-items-center">
                                <input type="checkbox" class="form-check-input me-2" id="privacy" required>
                                <label class="form-check-label small text-muted" for="privacy">
                                    By continuing, you agree to the <a href="#" class="text-decoration-none">Terms of use</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>.
                                </label>
                            </div>

                            <button type="submit" class="services-btn w-100 py-2 mb-3">Log in</button>
                        </form>

                        <hr class="my-3">

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
        </div>
    </div>
</body>

</html>
