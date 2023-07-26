@extends('template.user.header')
@section('content')


    
<!-- BOKING WISATA -->
 

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destinasi</h6>
                <h1 class="mb-5">Boking Tempat Wisata</h1>
            </div>
            <div class="row g-12 ">
                <div class="col-lg-7 col-md-12 wow fadeInUp  mx-auto" data-wow-delay="0.5s">
                    <form action="{{ url('pelanggan/pesanan/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <input type="hidden" name="id_destinasi" value="{{$www}}">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="name" name="qty" placeholder="Your Name">
                                    <label for="qty">Jumlah Pesanan</label>
                                    @error('qty')
                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating date"id="date3" data-target-input="nearest">
                                    <input type="date" class="form-control"  name="tanggal_pesanan" id="name" name="qty" placeholder="Tanggal Boking Tempat">
                                    <label for="datetime">Tanggal Boking</label>
                                    @error('tanggal_pesanan')
                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Boking Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->








@endsection