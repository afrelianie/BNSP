
@extends('template.pelanggan.header')
@section('content')




    <!-- new destination content section -->
    <div class="swiper blog">
        <div class="swiper-wrapper">

            <!-- content 1 -->
            <div class="swiper-slide">
                <br>
                <div class="box">
                     <br>
                    <h1 class="title">{{ $destinasi->nama_destinasi }}</h1>
                     <br>
                     <br>
                    <label for="banner-content" class="banner-content-btn">
                        <img src="{{ asset($destinasi->foto_destinasi)}}" alt="banner content">
                    </label>
                    <h2 class="published">
                        <span class="fa fa-money"></span>
                        <span >Rp. {{ $destinasi->harga }} </span>
                        <br>
                        <span class="fa fa-map-marker-alt"></span>
                        <span > {{ $destinasi->alamat_destinasi }} </span> 
                    </h2>
                    <div class="article">
                         <p>Keunggulan : {{ $destinasi->keunggulan}}</p>   
                         <p>Sejarah : {{ $destinasi->sejarah }}</p>
                    </div>

                         <a href="{{ url('destinasi') }}" class="btn btn-info">Kembali</a>
                         <a href="{{ url('pelanggan/pesanan/create', $destinasi->id) }}" class="btn">Boking Tempat</a>
                </div>
            </div>

        </div>

    </div>
    <!-- end -->



@endsection