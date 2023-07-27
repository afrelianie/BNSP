
@extends('template.user.header')
@section('content')




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





@endsection