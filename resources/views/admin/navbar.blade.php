<nav class="main-header navbar navbar-expand navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Auth::user()->email))) }}?d=mp"
             class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
      </a>

      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <li class="user-header bg-primary">
          <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Auth::user()->email))) }}?d=mp"
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

  </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>