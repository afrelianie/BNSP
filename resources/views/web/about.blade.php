
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
						<h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Explore All Corners of The World With Us</h2>

						<p data-aos="fade-up" data-aos-delay="200">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

						<p data-aos="fade-up" data-aos-delay="300">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Read more</a></p>
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
						<h2 class="heading">Meet Our Team of Experts</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3">
					<a href="#" class="person">
						<img src="{{ url('/') }}/assest/img/person_1.jpg" alt="Image" class="img-fluid mb-4">
						<span class="subheading d-inline-block">CEO, Co-Founder</span>
						<h3 class="mb-3">Dandi</h3>
						<p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="person">
						<img src="{{ url('/') }}/assest/img/person_2.jpg" alt="Image" class="img-fluid mb-4">
						<span class="subheading d-inline-block">CEO, Co-Founder</span>
						<h3 class="mb-3">Gita</h3>
						<p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="person">
						<img src="{{ url('/') }}/assest/img/person_3.jpg" alt="Image" class="img-fluid mb-4">
						<span class="subheading d-inline-block">Fauzie</span>
						<h3 class="mb-3">Kelsey Gutierrez</h3>
						<p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="#" class="person">
						<img src="{{ url('/') }}/assest/img/person_2.jpg" alt="Image" class="img-fluid mb-4">
						<span class="subheading d-inline-block">CEO, Co-Founder</span>
						<h3 class="mb-3">Asy</h3>
						<p class="text-muted">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</a>
				</div>
			</div>
		</div>
	</div>
    <!-- about us section end -->

    
@endsection