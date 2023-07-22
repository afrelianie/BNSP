
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
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Temukan Destinasimu</a>

								</div>
							</div>
							<div class="col-md-12 tab-wrap">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="{{ url('art') }}" method="get" class="search-property-1">
                                                       @csrf
											<div class="row no-gutters">
                                                            <div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Nama Tempat</label>
														<div class="search-input">
															<input type="text" name="query" id="keyword" placeholder="Nama Destinasi">
														</div>
													</div>
												</div>

												<div class="col-md d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex search-btn button">
															<button type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">Cari</button>
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
          </div>
	</section>
<!-- search destination section end -->

          <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-2">
                       @include('template.notif')
                    </div>
                </div>
          </div>  
<!-- firs contect section start -->
     <div class="section section-2">
     <div class="container">
          <div class="row align-items-center justify-content-between">
               <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                    <div class="image-stack mb-5 mb-lg-0">
                         
                         <div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"  data-rellax-percentage="0.5">
                              <img src="{{ url('/') }}/assest/img/img_v_2.jpg" alt="Image" class="img-fluid">
                         </div>
                    </div>

               </div>
               <div class="col-lg-4 order-lg-1">

                    <div>
                         <h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Jelajahi Seluruh Pelosok pulaw jawa Bersama Kami</h2>

                         <p data-aos="fade-up" data-aos-delay="200" style="text-align: center;">Mendaki Gunung, Menelusuri Pantai, dan Menyusuri Budaya Pulau Jawa. Tanah Petualang yang Menawarkan Keajaiban Alam, Budaya yang Memikat, dan Wisata yang Menggugah Adrenalin</p><br>

                         

                         <!-- <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Read more</a></p> -->
                    </div>
               </div>
               
          </div>

     </div>		
     </div>
<!-- firs contect section end -->

 



@endsection