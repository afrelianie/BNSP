
@extends('template.user.header')
@section('content')

   
     
    <!-- Detail Destinasi -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset($testimoni->foto_testi)}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Detail Review</h6>
                    <h2 class="mb-4">Nama Wisata <span class="text-primary">{{ $testimoni->nama_destinasi }}</span></h2>
                    <p class="mb-4">Sejarah : {{ $testimoni->destinasi->sejarah }}</p>
                    <p class="mb-4">Komentar Anda : {{ $testimoni->komentar}}</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Harga : Rp. {{ $testimoni->destinasi->harga }}</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Alamat : {{ $testimoni->destinasi->alamat_destinasi }} </p>
                        </div>
                    </div>
                    <a href="{{ url('pelanggan/review') }}" class="btn btn-secondary py-3 px-5 mt-2">Kembali</a>
            
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



@endsection