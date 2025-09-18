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
<header id="header" class="header scrolled d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Massar</h1>
        </a>
    </div>
</header>

<div class="card shadow-sm p-4 rounded-4 bg-white">
    <h2 class="mb-4 text-center">Create Account</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" name="name" id="name" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Register</button>
    </form>
    <hr>
    <p class="text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
</div>


        <footer id="footer" class="footer" style="background-color:#181b1e; color: white;">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <span class="sitename">Massar</span>
          </a>

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
