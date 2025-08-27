{{--
    This is the final, corrected navbar.
    All dynamic includes that caused the error have been replaced with static HTML.
--}}
<nav class="main-header navbar navbar-expand navbar-dark">
  {{-- Left Navbar Links --}}
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
    </li>
  </ul>

  {{-- Global Search Form --}}
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search..." aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  {{-- Right Navbar Links --}}
  <ul class="navbar-nav ml-auto">

    {{-- Notifications Dropdown --}}
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-robot mr-2"></i> 4 new robots added
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>

    {{-- "Quick Actions" Dropdown --}}
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-plus-square"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item"><i class="fas fa-robot mr-2"></i> Add New Robot</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item"><i class="fas fa-tasks mr-2"></i> Add New Project</a>
        </div>
    </li>
    
    {{-- Fullscreen Toggle --}}
    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </li>

    {{-- THIS IS THE NEW, STATIC USER MENU BLOCK THAT FIXES THE ERROR --}}
    @if(Auth::user())
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=343a40&color=fff"
             class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <li class="user-header bg-primary">
          <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=007bff&color=fff"
               class="img-circle elevation-2" alt="User Image">
          <p>
            {{ Auth::user()->name }}
            @if(Auth::user()->role)
                <small>Role: {{ ucfirst(Auth::user()->role->role_name) }}</small>
            @endif
          </p>
        </li>
        <li class="user-footer">
          <a href="#" class="btn btn-default btn-flat">Profile</a>
          <a href="#" class="btn btn-default btn-flat float-right"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             Sign out
          </a>
        </li>
      </ul>
    </li>
    @endif

  </ul>
</nav>