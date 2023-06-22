@extends('template.pelanggan.header')
@section('content')




<!-- galeri section start -->
<section class="galeri" id="galeri">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">
        <!-- galeri card 1 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/2.jpeg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <!-- galeri card 2 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/1.jpeg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <!-- galeri card 2 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/img9.jpg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <!-- galeri card 2 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/img8.jpg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <!-- galeri card 2 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/img7.jpg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <!-- galeri card 2 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/img6.jpg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <!-- galeri card 2 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/img5.jpg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <!-- galeri card 2 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/img4.jpg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <!-- galeri card 2 -->
        <div class="box">
            <img src="{{ url('/') }}/assest/img/img3.jpg" alt="">
            <div class="content">
                <h3>amazing place</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis!</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
    </div>
</section>
<!-- galeri section end -->



<!-- testimoni section start -->
<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <!-- card review 1 -->
            <div class="swiper-slide">
                <div class="box">
                    <img src="{{ url('/') }}/assest/img/person_3.jpg" alt="">
                    <h3>Dandi</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Rerum ducimus perferendis nobis optio ea dolorem ullam 
                        minima repudiandae suscipit odit aspernatur impedit distinctio, 
                        assumenda, maxime veritatis atque nesciunt! Numquam, quam.</p>
                    <!-- rating bintang -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- card review 2 -->
            <div class="swiper-slide">
                <div class="box">
                    <img src="{{ url('/') }}/assest/img/person_2.jpg" alt="">
                    <h3>Asy</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Rerum ducimus perferendis nobis optio ea dolorem ullam 
                        minima repudiandae suscipit odit aspernatur impedit distinctio, 
                        assumenda, maxime veritatis atque nesciunt! Numquam, quam.</p>
                    <!-- rating bintang -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- card review 3 -->
            <div class="swiper-slide">
                <div class="box">
                    <img src="{{ url('/') }}/assest/img/person_1.jpg" alt="">
                    <h3>Fauzie</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Rerum ducimus perferendis nobis optio ea dolorem ullam 
                        minima repudiandae suscipit odit aspernatur impedit distinctio, 
                        assumenda, maxime veritatis atque nesciunt! Numquam, quam.</p>
                    <!-- rating bintang -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- testimoni section end -->




@endsection