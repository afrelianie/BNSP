@extends('template.user.header')
@section('content')



    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Profile</h6>
                <h1 class="mb-5">Lengkapi Data Anda</h1>
            </div>
            <div class="row g-4">
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        
                    <div class="position-relative h-100">
                         @if (auth()->user()->profil)
                              <img class="img-fluid position-absolute w-100 h-100" src="{{ asset(Auth::user()->profil)}}" alt="" style="object-fit: cover;">                                               
                         @else
                              <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/img.jpg')}}" alt="" style="object-fit: cover;">
                         @endif
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h5>{{ Auth::user()->name}}</h5>
                    <p class="mb-4">Lengkapi data diri anda, agar dapat mempermudah pemesanan wisata dengan cepat.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Alamat</h5>
                            <p class="mb-0">{{ Auth::user()->alamat }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Nomor Hp</h5>
                            <p class="mb-0">{{ Auth::user()->no_hp}}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">{{ Auth::user()->email}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{ url('pelanggan/profil/update', Auth::user()->id) }}"
                         class="form-horizontal" method="post" enctype="multipart/form-data">
                         @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ Auth::user()->name}}" required>
                                    <label for="name">Nama Pengguna</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" value="{{ Auth::user()->email}}" readonly name="email" placeholder="Masukkan Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="name" name="no_hp" placeholder="No Hp Anda" value="{{ Auth::user()->no_hp}}" required>
                                    <label for="name">No Hp</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="subject" name="password" placeholder="Password Baru" required>
                                    <label for="Password">Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" name="profil" placeholder="Masukkan Profil" accept="image/jpeg,image/png">
                                    <label for="email">Profil</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Alamat Pengguna" name="alamat" id="message" required rows="3">{{ Auth::user()->alamat }}</textarea>
                                    <label for="message">Alamat</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Update Profil</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




@endsection