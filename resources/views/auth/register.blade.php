<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border border-2 rounded-4 shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="card-title mb-4 fs-3">Create an account</h1>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control py-2" id="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control py-2" id="username" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control py-2" id="password" required>
                                </div>
                                <div class="d-flex mt-2">
                                    <small class="text-muted me-3">Use a number (e.g. 1234)</small>
                                    <small class="text-muted">Use a symbol (e.g. !@#8)</small>
                                </div>
                            </div>

                            <div class="mb-4 form-check d-flex align-items-center">
                                <input type="checkbox" class="form-check-input me-2" id="terms" required>
                                <label class="form-check-label small text-muted" for="terms">
                                    By creating an account, you agree to the <a href="#" class="text-decoration-none">Terms of use</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>.
                                </label>
                            </div>

                            <button type="submit" class="services-btn w-100 py-2 mb-3">Create Account</button>
                        </form>

                        <hr class="my-3">

                        <div class="text-center">
                            <p>Already have an account? <a href="login" class="text-decoration-none fw-bold">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>