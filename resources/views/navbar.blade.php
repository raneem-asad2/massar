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
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
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
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link px-3" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ route('contact') }}">Contact Us</a></li>

                    {{-- This is the logic block that handles auth state --}}
                    @guest
                        {{-- Show these links only to guests (not logged in) --}}
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn-login ms-lg-3 mt-2 mt-lg-0">Login</a>
                        </li>
                        <li class="nav-item">
                             <a href="{{ route('register') }}" class="btn-register ms-lg-2 mt-2 mt-lg-0">Register</a>
                        </li>
                    @else
                        {{-- Show this dropdown only to authenticated (logged in) users --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>