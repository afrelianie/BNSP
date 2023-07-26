

@extends('template.user.header')
@section('content')

   
     
    <!-- Detail Destinasi -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset($destinasi->foto_destinasi)}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Detail Wisata</h6>
                    <h2 class="mb-4">Nama Wisata <span class="text-primary">{{ $destinasi->nama_destinasi }}</span></h2>
                    <p class="mb-4">Sejarah : {{ $destinasi->sejarah }}</p>
                    <p class="mb-4">Keunggulan : {{ $destinasi->keunggulan}}</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Harga : Rp. {{ $destinasi->harga }}</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Alamat : {{ $destinasi->alamat_destinasi }} </p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ url('pelanggan/pesanan/create', $destinasi->id) }}">Boking Tempat</a>
                    <a href="{{ url('destinasi') }}" class="btn btn-secondary py-3 px-5 mt-2">Kembali</a>
            
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



@endsection