<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Massar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <div class="logo-box me-2 bg-primary rounded-circle" style="width: 12px; height: 12px;"></div>
                <div class="logo-box me-2 bg-warning rounded-circle" style="width: 12px; height: 12px;"></div>
                <div>
                    <strong class="fs-5">Massar</strong><br>
                    <small class="text-muted">Every line, a step toward the future.</small>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link px-3" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/">About Us</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/">Services</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/">Contact Us</a></li>
                </ul>
                <a href="/" class="btn-login ms-lg-3 mt-2 mt-lg-0">Login</a>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
