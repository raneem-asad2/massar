<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{ route('admin.dashboard') }}" class="brand-link">
    {{-- <img src="{{ asset('assets/img/robot (2).png') }}" alt="Massar Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
    <span class="brand-text font-weight-light">Massar Project</span>
  </a>

  <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=222d32&color=fff" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @if (Auth::user()->name && Auth::user()->name !== Auth::user()->email)
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        @else
            <a href="#" class="d-block">{{ ucfirst(optional(Auth::user()->role)->role_name) ?? 'User' }}</a>
        @endif
        
        <span class="text-muted text-xs"><i class="fa fa-circle text-success text-xs"></i> Online</span>
      </div>
    </div>


    <hr class="sidebar-divider my-0">


    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">MANAGEMENT</li>

        <li class="nav-i tem">
          <a href="{{ route('admin.robots.index') }}" class="nav-link">
            <i class="fas fa-robot nav-icon"></i>
            <p>Robots List</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.projects.index') }}" class="nav-link">
            <i class="fas fa-folder-open nav-icon"></i>
            <p>Projects</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.maintenance-records.index') }}" class="nav-link">
            <i class="fas fa-tools nav-icon"></i>
            <p>Maintenance Records</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('admin.road-segments.index') }}" class="nav-link">
            <i class="fas fa-map-marked-alt nav-icon"></i>
            <p>Road Segments</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.street-defects.index') }}" class="nav-link ">
            <i class="fas fa-exclamation-circle nav-icon"></i>
            <p>Street Defects</p>
          </a>
        </li>

        @if (Auth::user()->role && Auth::user()->role->role_name == 'admin')
          <li class="nav-header">ADMINISTRATION</li>

          <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Application Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.staff.index') }}" class="nav-link">
              <i class="fas fa-user-tie nav-icon"></i>
              <p>Staff</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact-messages.index') }}" class="nav-link">
              <i class="nav-icon fas fa-fw fa-envelope"></i>
              <p>Contact Messages</p>
            </a>
          </li>
        @endif

       @if(Auth::user()->role && in_array(Auth::user()->role->role_name, ['admin','editor']))
      <li class="nav-item">
          <a href="{{ route('admin.profile.show') }}" class="nav-link">
              <i class="nav-icon fas fa-fw fa-user"></i>
              <p>Profile</p>
          </a>
      </li>
      @endif



      
      </ul>
    </nav>
  </div>
</aside>