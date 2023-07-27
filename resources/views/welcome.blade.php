
@extends('template.user.header')
@section('content')






    <!-- DETAIL PESANAN TAHAP PEMBAYARAN -->
    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Tahapan</h6>
                <h2 class="mb-5">3 Proses Pemesanan dan Bayar</h2>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">1. Pemesanan Destinasi</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Nikmati pengalaman perjalanan yang tak terlupakan dengan menggunakan Layanan Booking Destinasi yang telah disediakan, untuk mempermudah pemesanan tempat wisata yang anda inginkan. Lakukan pemesanan destinasi dengan cara pilih tanggal bokingan yang anda inginkan dan kuota tiket yang anda butuhkan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">2. Pembayaran</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Pembayaran bisa dilakukan secara langsung dengan transfer pembayaran ke rekening perusahan yang sudah disediakan atau lakukan pembayaran di Alfamart dan Indomaret terdekat yang mendukung proses pembayaran dan langkah terakhir, silakan upload bukti bayar anda, untuk di verifikasi oleh admin.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">3. Testimoni Pelanggan</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Jelajahi Dunia bersama Kami! Ceritakan Pengalaman Penuh Petualangan Anda dan Berikan Pandangan Istimewa tentang Tempat Wisata yang Telah Anda Kunjungi. Setiap Kisah dan Pendapat Anda akan Kami Jadikan Masukan Berharga untuk Menghadirkan Pengalaman Wisata yang Lebih Luar Biasa di Masa Depan!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->



    <!-- DESTINASI -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destinasi</h6>
                <h1 class="mb-5">Jawa Barat</h1>
            </div>
            <div class="row g-4 justify-content-center">
              @foreach ($destinasi as $data)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">  
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset($data->foto_destinasi) }}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $data->nama_destinasi }}</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Rp. {{ $data->harga }}</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>{{ $data->alamat_destinasi }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ url('destinasi/detail', $data->id) }}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Boking Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
    <!-- Package End -->


    
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimoni</h6>
                <h1 class="mb-5">Sampaikan Pendapat Anda!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach ($testimoni as $data)
                <div class="testimonial-item bg-white text-center border p-4">
                    <!-- <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{ url('/') }}/assest2/img/testimonial-1.jpg" style="width: 80px; height: 80px;"> -->
    
                         @if ($data->user->profil)
                              <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{ asset($data->user->profil) }}"style="width: 80px; height: 80px;">                                               
                         @else
                              <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{ asset('img/img.jpg')}}"style="width: 80px; height: 80px;">
                         @endif
                    
                    <h5 class="mb-0">{{ $data->user->name }}</h5>
                    <p>{{ $data->destinasi->nama_destinasi }}</p>
                    <p class="mb-0">{{ $data->komentar }}</p>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- Galeri Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Galeri</h6>
                <h1 class="mb-5">Galeri Perjalanan</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                    @foreach ($testimoni as $testi)
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset($testi->foto_testi) }}" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $testi->destinasi->nama_destinasi }}</div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Destination Start -->





@endsection