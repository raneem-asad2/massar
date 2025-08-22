{{-- resources/views/layouts/user.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'User Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- AdminLTE & FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('user.navbar')

    <!-- Sidebar -->
    @include('user.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Page header -->
        <section class="content-header">
            <div class="container-fluid">
                <h1>@yield('page-title', 'Dashboard')</h1>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <strong>© {{ date('Y') }} Your App.</strong> All rights reserved.
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
@yield('js')
</body>
</html>
