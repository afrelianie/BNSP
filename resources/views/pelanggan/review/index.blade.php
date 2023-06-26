@extends('template.pelanggan.header')
@section('content')




<!-- galeri section start -->
<!-- galeri section start -->
<section class="galeri" id="galeri">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>i</span>

    </h1>

    <div class="box-container">
        <!-- galeri card 1 -->
        @foreach ($testimoni as $gal)
        <div class="box">
            <img src="{{ asset($gal->foto_testi) }}" alt="">
            <div class="content">
                <br><br>
                <h3>Ulasan</h3>
                <p>{{ $gal->komentar}}</p>
                <!-- <a href="#" class="btn">see more</a> -->
            </div>
        </div>
        @endforeach
    </div>
</section>



<!-- testimoni section start -->
<section class="review" id="review">

    <h1 class="heading">
        <span>t</span>
        <span>e</span>
        <span>s</span>
        <span>t</span>
        <span>i</span>
        <span>m</span>
        <span>o</span>
        <span>n</span>
        <span>i</span>

        
    </h1>

    <div class="swiper review-slider">
  <div class="swiper-wrapper">
    @foreach ($testimoni as $data)
    <div class="swiper-slide">
      <div class="box">
        <img src="{{ asset($data->foto_testi)}}" alt="">
        <h3>{{ $data->name }}</h3>
        <p>{{ $data->komentar }} </p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>


</section>
<!-- testimoni section end -->




@endsection