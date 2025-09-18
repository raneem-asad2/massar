<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Dewi by Massar')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{asset('assets/img/robot (2).png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body class="scrolled">
    <header id="header" class="header scrolled d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Massar</h1>
        </a>
    </div>
</header>

<div class="container" style="margin-top: 120px; margin-bottom: 80px;">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <h1 class="mb-4 text-center">Log in</h1>

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

<footer id="footer" class="footer" style="background-color:#181b1e; color: white;">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <span class="sitename">Massar</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Massar</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>

 <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>

