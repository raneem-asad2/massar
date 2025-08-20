<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border border-2 rounded-4 shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="card-title mb-4 fs-4">Forgot your password?</h1>
                        <p class="text-muted small mb-4">
                            No problem. Just let us know your email address and we’ll send you a password reset link.
                        </p>

                        {{-- ✅ Laravel password reset form --}}
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" id="email" class="form-control py-2"
                                       value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="services-btn w-100 py-2">
                                Email Password Reset Link
                            </button>
                        </form>

                        <hr class="my-3">

                        <div class="text-center">
                            <p><a href="{{ route('login') }}" class="text-decoration-none fw-bold">Back to login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
