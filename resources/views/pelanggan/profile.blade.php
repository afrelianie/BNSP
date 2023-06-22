@extends('template.pelanggan.header')
@section('content')


 
 
 <!-- booking section start -->
 <section class="booking" id="booking">
     <h1 class="heading">
          <span>p</span>
          <span>r</span>
          <span>o</span>
          <span>f</span>
          <span>i</span>
          <span>l</span>
          <span>e</span>
     </h1>

     <div class="row">

     <div class="image">
     @if (auth()->user()->profil)
          <img src="{{ asset(Auth::user()->profil)}}" alt="">                                               
     @else
          <img src="{{ asset('img/img.jpg')}}" alt="">
     @endif
     </div>

     <!-- form booking -->
     <form action="{{ url('pengguna/profil/update', Auth::user()->id) }}"
          class="form-horizontal" method="post" enctype="multipart/form-data">
          @csrf
          <div class="inputBox">
               <h3>Nama</h3>
               <input type="text" placeholder="Nama Anda" name="name" value="{{ Auth::user()->name}}">
          </div>
          <div class="inputBox">
               <h3>Profile</h3>
               <input type="file" name="profil" accept="image/jpeg,image/png">
          </div>
          <div class="inputBox">
               <h3>Email</h3>
               <input type="email" placeholder="Email" name="email" value="{{ Auth::user()->email}}" readonly>
          </div>
          <div class="inputBox">
               <h3>Nomor HP</h3>
               <input type="number" placeholder="Nomor Hp Anda" name="no_hp" value="{{ Auth::user()->no_hp}}">
          </div>
          <div class="inputBox">
               <h3>Alamat</h3>
               <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="2" 
                         placeholder="Alamat Pengguna" >{{ Auth::user()->alamat }}</textarea>
          </div>
          <div class="inputBox">
               <h3>Password Baru</h3>
               <input type="password" name="password" class="form-control" placeholder="Password Baru" required>
          </div>
          <input type="submit" class="btn btn-success float-right" value="Simpan">
          <a href="{{ url('/') }}" class="btn btn-secondary float-right ">Kembali</a>
     </form>
     <!-- form booking end -->
     </div>
 </section>
<!-- booking sectio end -->




@endsection