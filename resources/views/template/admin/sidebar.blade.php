<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/utama') }}" class="brand-link">
      <img src="{{ url('/') }}/nikah/logo.jpg"  class="brand-image" width="100" height="100" alt="Logo">
      <span class="brand-text font-weight-light"><h2>Bride Story</h2></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <!-- <img src="{{ asset ('dist/img/AdminLTELogo.png') }}"> -->

            @if (auth()->user()->profil)
                <img src="{{ asset(Auth::user()->profil)}}" alt="" class="bg-white rounded-circle shadow p-1 mx-auto mb-3">                                               
            @else
                <img src="{{ asset('img/img.jpg')}}" alt="" class="bg-white rounded-circle shadow p-1 mx-auto mb-3">
            @endif

        </div>
        <div class="info">
            <a href="#" class="d-block">Selamat Datang {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('admin/home') }}" class="nav-link {{ request ()->is('admin/home') ? 'active' : ''}}">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>

        <li class="nav-item">
            <a href="{{url('admin/destinasi')}}" class="nav-link {{ request ()->is('admin/destinasi','admin/destinasi/create') ? 'active' : ''}}">
              <i class="nav-icon fas fa-map"></i>
              <p>Paket Prewedding</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('admin/user') }}" class="nav-link {{ request ()->is('admin/user','admin/user/create') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>Pengguna</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('admin/category') }}" class="nav-link {{ request ()->is('admin/category') ? 'active' : ''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>Artikel</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link {{ request ()->is('logout') ? 'active' : ''}}">
              <i class="fas fa-power-off mr-2"></i>
              <p>Logout</p>
            </a>
        </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
