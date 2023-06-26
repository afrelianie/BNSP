
@extends('template.pelanggan.header')
@section('content')


<!-- search destination section start -->
<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container-search">
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
															<!-- <div class="icon"><span class="fa fa-home"></span></div> -->
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
										</form><br><br>
                                        @if (isset($data))
                                        <!-- hasil search -->
                                        <main class="table">
                                            <section class="table__header">
                                                <!-- <h1>Riwayat Pesanan</h1> -->
                                                <!-- <div class="input-group">
                                                    <input type="search" placeholder="Search Data...">
                                                    <i class="fas fa-search" id="search-btn"></i>
                                                </div> -->
                                            
                                            </section>
                                            <section class="table__body">
                                                
                                            <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Destinasi</th>
                                            <th>Harga</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($data) > 0)
                                            @foreach ( $data as $item )
                                            <tr>
                                                <td>
                                                    <a style="color:black; font-size:16px; " href=" {{ url('/destinasi/detail', $item->id) }}"
                                                        class="text-decoration-none text-muteds">
                                                        {{ $item->nama_destinasi }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a style="color:black; font-size:16px; " href="{{ url('/destinasi/detail', $item->id) }}"
                                                        class="text-decoration-none text-muteds">
                                                        {{ $item->harga }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a style="color:black; font-size:16px; " href="{{ url('/destinasi/detail', $item->id) }}"
                                                        class="text-decoration-none text-muteds">
                                                        {{ $item->alamat_destinasi }}
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                        <tr><td>No Result Found!</td></tr>
                                        @endif
                                    </tbody>
                                </table>
                                                    <div class="pagination-block">
                                                            {{ $data->links() }}
                                                        </div>
                                                        @endif
                                            </section>
                                        </main>
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


<!-- firs contect section end -->





@endsection