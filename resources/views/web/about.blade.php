
@extends('template.pelanggan.header')
@section('content')




<!-- about us section start -->
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
						<h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Java Tours & Trips</h2>

						<p data-aos="fade-up" data-aos-delay="200" style="text-align: justify;">Selamat datang di Situs Booking Tempat Wisata! Nikmati pengalaman perjalanan yang tak terlupakan dengan menggunakan layanan booking tempat wisata kami. Kami menyediakan berbagai pilihan destinasi wisata yang menakjubkan dan memikat di seluruh dunia. Dari pantai-pantai yang mempesona hingga pegunungan yang menjulang tinggi, kami memiliki tempat wisata yang sesuai dengan preferensi dan minat Anda.</p>

						

						<!-- <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Read more</a></p> -->
					</div>
				</div>
				
			</div>

		</div>		
	</div>

	<div class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
					<div class="heading-content" data-aos="fade-up">
						<h2 class="heading">Meet Our Team Dev</h2>
						
					</div>
				</div>
			</div><br>

			<div class="row">
				<div class="col-lg-3">
					<a href="#" class="person">
						<img src="{{ url('/') }}/assest/img/person_1.jpg" alt="Image" class="img-fluid mb-4">
						<span class="subheading d-inline-block">Dev Team</span>
						<h3 class="mb-3">Dandi</h3>
						<p class="text-muted">"Kesuksesan datang kepada mereka yang tidak malas untuk bekerja keras"</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="person">
						<img src="{{ url('/') }}/assest/img/person_2.jpg" alt="Image" class="img-fluid mb-4">
						<span class="subheading d-inline-block">Backend</span>
						<h3 class="mb-3">Gita</h3>
						<p class="text-muted">"Jangan biarkan malas menguasai hidupmu. Bangun setiap pagi dengan semangat dan tekad untuk mencapai tujuanmu" </p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="person">
						<img src="{{ url('/') }}/assest/img/person_3.jpg" alt="Image" class="img-fluid mb-4">
						<span class="subheading d-inline-block">Frontend</span>
						<h3 class="mb-3">Fauzie</h3>
						<p class="text-muted">"Jika Anda ingin mencapai sesuatu yang luar biasa, Anda harus memiliki tekad yang luar biasa pula. Jangan biarkan malas merampas kesempatanmu"</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="person">
						<img src="{{ url('/') }}/assest/img/person_2.jpg" alt="Image" class="img-fluid mb-4">
						<span class="subheading d-inline-block">Dev Team</span>
						<h3 class="mb-3">Asy</h3>
						<p class="text-muted">"Malas adalah musuh terbesar kesuksesan. Lawanlah rasa malas dengan disiplin dan kerja keras"</p>
					</a>
				</div>
				
			</div>
		</div>
	</div><br><br>


    
@endsection