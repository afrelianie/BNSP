
@extends('template.pelanggan.header')
@section('content')




<!-- search destination section start -->
     <section class="ftco-section ftco-no-pb ftco-no-pt">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <div class="ftco-search d-flex justify-content-center">
                              <div class="row">
                              <div class="col-md-12 nav-link-wrap">
                                   <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find Your Destination</a>

                                        

                                   </div>
                              </div>
                              <div class="col-md-12 tab-wrap">
                                   
                                   <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                             
                                               <!-- Start Search Form -->
                                <form action="{{ url('art') }}" method="get">
                                        @csrf
                                    <div class="search-form wow fadeInUp" data-wow-delay=".7s">
                                        <div class="row">
                                            <div class="col-lg-10 col-md-10 col-12 p-0">
                                                <div class="search-input">
                                                    <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                                                    <input type="text" name="query" id="keyword" placeholder="Search here.....">
                                                </div>
                                            </div>

                                            <div class="col-lg-2 col-md-2 col-12 p-0">
                                                <div class="search-btn button">
                                                    <button class="btn"><i class="lni lni-search-alt"></i> Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                        </div>                                      
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
<!-- search destination section end -->


<!-- firs contect section start -->
     <div class="section section-2">
     <div class="container">
          <div class="row align-items-center justify-content-between">
               <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                    <div class="image-stack mb-5 mb-lg-0">
                         <div class="image-stack__item image-stack__item--bottom" data-aos="fade-up"  >
                              <img src="{{ url('/') }}/assest/img/img_v_1.jpg" alt="Image" class="img-fluid rellax ">
                         </div>
                         <div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"  data-rellax-percentage="0.5">
                              <img src="{{ url('/') }}/assest/img/img_v_2.jpg" alt="Image" class="img-fluid">
                         </div>
                    </div>

               </div>
               <div class="col-lg-4 order-lg-1">

                    <div>
                         <h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Explore All Corners of The World With Us</h2>

                         <p data-aos="fade-up" data-aos-delay="200">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                         <p data-aos="fade-up" data-aos-delay="300">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                         <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
               </div>
               
          </div>

     </div>		
     </div>
<!-- firs contect section end -->

 



@endsection