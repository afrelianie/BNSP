
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>JTT</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ request ()->is('/') ? 'active' : ''}}">Home</a>
                    <a href="{{ url('destinasi') }}" class="nav-item nav-link {{ request ()->is('destinasi') ? 'active' : ''}}">Destinasi</a>
                    <a href="{{ url('pelanggan/pesanan') }}" class="nav-item nav-link {{ request ()->is('pelanggan/pesanan') ? 'active' : ''}}">Pesanan</a>
                    <a href="{{ url('pelanggan/review') }}" class="nav-item nav-link {{ request ()->is('pelanggan/review') ? 'active' : ''}}">Review</a>
                </div>

                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                         @auth
                         <a href="{{ url('pelanggan/profile') }}" class="btn btn-primary rounded-pill py-2 px-4">Selamat Datang {{ Auth::user()->name }}</a> &nbsp;
                         <a href="{{ url('logout') }}" class="btn btn-primary rounded-pill py-2 px-4">Logout</a>
                         @else
                         
                         <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
                         @endauth
                    </div>
                @endif

            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">



                    <div class="container">
                         <div class="row">
                              <div class="col-md-12 mt-2">
                              @include('template.notif')
                              </div>
                         </div>
                    </div> 



                        <h1 class="display-3 text-white mb-3 animated slideInDown">Java Tourist and Trips</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Ayo Jelajahi Tempat Wisata di Provinsi Jawa Barat</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">


                         <form action="{{ url('art') }}" method="get" class="search-property-1">
                              @csrf
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" name="query" id="keyword" placeholder="Cari Tempat Wisata ... ">
                            <button type="submit" value="Search" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Cari</button>
                         </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

