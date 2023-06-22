   
<!-- header section start -->
<header>

     <div id="menu-bar" class="fas fa-bars"></div>

     <a href="{{ url('admin/home') }}" class="logo"><span>J</span>TT</a>

     <nav class="navbar">
     <a href="{{ url('/') }}">home</a>
     <a href="{{ url('pengguna/pesanan') }}">booking</a>
     <a href="{{ url('destinasi') }}">destination</a>
     <a href="{{ url('about') }}">about us</a>
     <a href="{{ url('contact') }}">contact</a>
     </nav>

     <div class="icons">
     
     
               @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                         @auth
                         <a href="{{ url('pengguna/profile') }}" class="btn btn-success float-right"><span>Selamat Datang {{ Auth::user()->name }}</span></a> &nbsp;
                         <a href="{{ url('logout') }}" class="btn btn-success float-right"><span>Logout</span></a>
                         @else
                              <a href="{{ route('login') }}" class="btn btn-success float-right"> Log in</a>
                         @endauth
                    </div>
               @endif


     </div>
</header>
<!-- header section end -->

<!-- login form container start -->

<!-- login section end -->

               <!-- NOTIF -->
               <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-2">
                       @include('template.notif')
                    </div>
                </div>
               </div>

<!-- home section star-->
<section class="home" id="home">
<div class="content">
    <h3>adventure is worthwhile</h3>
    <p>discover new experience with us, adventure awaits</p>
    <a href="#" class="btn">discover more</a>
</div>

<!-- slider -->
<div class="controls">
    <span class="img-btn active" data-src="{{ url('/') }}/assest/img/banner.jpg"></span>
    <span class="img-btn" data-src="{{ url('/') }}/assest/img/hero1.jpg"></span>
    <span class="img-btn" data-src="{{ url('/') }}/assest/img/hero2.jpg"></span>
    <span class="img-btn" data-src="{{ url('/') }}/assest/img/hero3.jpg"></span>
</div>

<div class="img-container">
    <img src="{{ url('/') }}/assest/img/banner.jpg" id="img-slider">
</div>
</section>
<!-- home section end -->
