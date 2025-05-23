@extends('layouts.front')
@section('content')

<div class="hero-2 overlay" style="background-image: url('front/images/prestasi.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto ">
					<h1 class="mb-5 text-center"><span>Prestasi Kami</span></h1>


					<div class="intro-desc text-left">
						<div class="line"></div>
						<p>InstiPrestasi Institut Teknologi Bandung ITB terus menorehkan berbagai pencapaian gemilang melalui mahasiswa, dosen, dan institusinya. Halaman ini menyajikan rangkuman prestasi terbaik ITB di tingkat nasional maupun internasional sebagai wujud komitmen dalam mencetak generasi unggul dan inovatif.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>

<div class="sec-4 section bg-light">

		<div class="text-center mb-5">
			<h2 class="heading mb-5 text-center">PRESTASI</h2>
		</div>
		<div class="testimonial-slide-center-wrap" data-aos="fade-up" data-aos-delay="100">

			<div id="testimonial-nav">
				<span class="prev" data-controls="prev"><span class="icon-chevron-left"></span></span>

				<span class="next" data-controls="next"><span class="icon-chevron-right"></span></span>
			</div>

			<div class="testimonial-slide-center testimonial-center" id="testimonial-center">

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="{{ asset ('front/images/person_2.jpg')}}" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>



				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="{{ asset ('front/images/person_1.jpg')}}" alt="Image" class="img-fluid">
								<strong class="d-block">James Campbell</strong>
								<span>CEO, Co-Founder</span>
							</div>
							<blockquote>
								Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.
							</blockquote>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection