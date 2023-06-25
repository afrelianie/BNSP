<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset ('dist/img/AdminLTELogo.png') }}"  class="brand-image" width="100" height="100" alt="Logo">
      <span class="brand-text font-weight-light"><h2>JTT</h2></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset ('dist/img/AdminLTELogo.png') }}"  >
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
              <p>Tempat Wisata</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link 
            {{ request ()->is('admin/pesanan','admin/pesanan/create','admin/pembayaran','admin/testimoni','admin/testimoni/create') ? 'active' : ''}}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/pesanan')}}" class="nav-link {{ request ()->is('admin/pesanan','admin/pesanan/create') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pesanan</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{url('admin/pembayaran')}}" class="nav-link {{ request ()->is('admin/pembayaran') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembayaran</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('admin/testimoni')}}" class="nav-link {{ request ()->is('admin/testimoni','admin/testimoni/create') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimoni</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ url('admin/user') }}" class="nav-link {{ request ()->is('admin/user','admin/user/create') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>Pengguna</p>
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
