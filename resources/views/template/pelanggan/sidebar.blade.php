   
<!-- header section start -->
<header>

     <div id="menu-bar" class="fas fa-bars"></div>

     <a href="{{ url('admin/home') }}" class="logo"><span>J</span>TT</a>

     <nav class="navbar">
        <a href="{{ url('/') }}">utama</a>
        <a href="{{ url('destinasi') }}">destinasi</a>
        <a href="{{ url('about') }}">tentang</a>
        <a href="{{ url('contact') }}">kontak</a>
        <a href="{{ url('pelanggan/pesanan') }}">booking</a>
     </nav>

     <div class="icons">
     
     
               @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                         @auth
                         <a href="{{ url('pelanggan/profile') }}" class="btn btn-success float-right"><span>Selamat Datang {{ Auth::user()->name }}</span></a> &nbsp;
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

<!-- home section star-->
<section class="home" id="home">
<div class="content">
    <h3>JELAJAH TEMPAT WISATA POPULER DI PULAW JAWA</h3>

    <p>Temukan Pengalaman Baru Bersama Kami, Petualangan Menanti</p>
    
    <!-- <a href="#" class="btn">discover more</a> -->
</div>

<!-- slider -->
<!-- <div class="controls">
    <span class="img-btn active" data-src="{{ url('/') }}/assest/img/banner.jpg"></span>
    <span class="img-btn" data-src="{{ url('/') }}/assest/img/hero1.jpg"></span>
    <span class="img-btn" data-src="{{ url('/') }}/assest/img/hero2.jpg"></span>
    <span class="img-btn" data-src="{{ url('/') }}/assest/img/hero3.jpg"></span>
</div> -->

<div class="img-container">
    <img src="{{ url('/') }}/assest/img/banner.jpg" id="img-slider">
</div>
</section>
<!-- home section end -->
