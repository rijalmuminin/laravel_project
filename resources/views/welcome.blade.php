<!-- /*
* Template Name: Archiark
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
    <link href="{{ asset ('admin/img/logo/itb.png')}}" rel="icon">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset ('front/fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/fonts/flaticon/font/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/css/glightbox.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/css/style.css') }}">

	<title>Archiark &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	{{--navbar--}}
	@include('layouts.components-user.navbar')
	{{--navbar--}}
	

	<div class="hero-2 overlay" style="background-image: url('front/images/lataritb.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-9 mx-auto">
					<h1 class="mb-8"><span>Institut Teknologi Bandung</span></h1>

					<div class="intro-desc">
						<div class="line"></div>
						<p>Institut Teknologi Bandung (ITB) merupakan sekolah tinggi teknik pertama di Indonesia yang didirikan pada tanggal 3 Juli 1920 sebagai de Technische Hoogeschool te Bandoeng (TH). Tanggal 2 Maret 1959 diresmikan sebagai ITB dengan misi pengabdian ilmu pengetahuan dan teknologi untuk memajukan Indonesia. ITB hadir untuk mengoptimalkan pembangunan bangsa yang maju dan bermartabat.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section sec-1">
		<div class="container">
			<div class="row g-0">
				<div class="col-lg-3">
					<h2 class="heading">We create architectural designs</h2>
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.</p>

					<p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
				</div>
				<div class="col-lg-7 ms-auto">
					<img src="{{ asset ('front/images/img_8.jpg')}}" alt="Image" class="img-fluid img-r">
				</div>
			</div>
		</div>
	</div>

	<div class="section sec-2">
		<div class="container">
			<div class="row g-0">
				<div class="col-lg-6 mb-4 mb-lg-0">
					<img src="{{ asset ('front/images/img_4.jpg')}}" alt="IMage" class="img-fluid">
				</div>
				<div class="col-lg-3 ms-auto">
					<h2 class="heading">Modern Architecture</h2>
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.</p>
					<p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="sec-3 section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<h2 class="heading">Services</h2>
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.</p>
				</div>

				<div class="col-lg-6 ms-auto">
					<div class="accordion accordion-flush accordion-1" id="accordionFlushExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
									Interior Design
								</button>
							</h2>
							<div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<div class="row justify-content-between">
										<div class="col-md-4">
											<img src="{{ asset ('front/images/img_7.jpg')}}" alt="Image" class="img-fluid">
										</div>
										<div class="col-md-8">
											<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio.</p>
											<a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
									Landscape Design
								</button>
							</h2>
							<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<div class="row justify-content-between">
										<div class="col-md-4">
											<img src="{{ asset ('front/images/img_2.jpg')}}" alt="Image" class="img-fluid">
										</div>
										<div class="col-md-8">
											<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio.</p>
											<a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
									Engineering Plan
								</button>
							</h2>
							<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<div class="row justify-content-between">
										<div class="col-md-4">
											<img src="{{ asset ('front/images/img_3.jpg')}}" alt="Image" class="img-fluid">
										</div>
										<div class="col-md-8">
											<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio.</p>
											<a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
									Architecture Design
								</button>
							</h2>
							<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<div class="row justify-content-between">
										<div class="col-md-4">
											<img src="{{ asset ('front/images/img_4.jpg')}}" alt="Image" class="img-fluid">
										</div>
										<div class="col-md-8">
											<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio.</p>
											<a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section sec-5">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6">
					<h2 class="heading">Fasilitas</h2>
				</div>
				<div class="col-lg-4">
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
				</div>
			</div>

			<div class="row g-4">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="{{ asset ('front/images/img_8.jpg')}}" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project One</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="{{ asset ('front/images/img_2.jpg')}}" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project Two</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="{{ asset ('front/images/img_3.jpg')}}" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project One</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="{{ asset ('front/images/img_4.jpg')}}" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project One</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="{{ asset ('front/images/img_5.jpg')}}" alt="Image" class="img-fluid">
							<div class="contents">
								<h3>Project Two</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a href="project-single.html">
							<img src="{{ asset ('front/images/img_6.jpg')}}" class="img-fluid">
							<div class="contents">
								<h3>Project One</h3>
								<div class="cat">Construction</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-12 text-center mt-5">
					<p><a href="#" class="btn btn-primary me-4">See all projects</a></p>
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

				<div class="item">
					<div class="testimonial-item">
						<div  class="testimonial-item-inner">
							<div class="testimonial-author mb-5">
								<img src="{{ asset ('front/images/person_3.jpg')}}" alt="Image" class="img-fluid">
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
								<img src="{{ asset ('front/images/person_4.jpg')}}" alt="Image" class="img-fluid">
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
								<img src="{{ asset ('front/images/person_5.jpg')}}" alt="Image" class="img-fluid">
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
								<img src="{{ asset ('front/images/person_3.jpg')}}" alt="Image" class="img-fluid">
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
								<img src="{{ asset ('front/images/person_4.jpg')}}" alt="Image" class="img-fluid">
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
 
	<div class="section sec-news">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6">
					<h2 class="heading">Artikel</h2>
				</div>
				<div class="col-lg-6">
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="post-entry-1 h-100">
						<a href="single.html">
							<img src="{{ asset ('front/images/img_3.jpg')}}" alt="Image"
							class="img-fluid">
						</a>
						<div class="post-entry-1-contents">
							<span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
							<h2 class="mb-3"><a href="single.html">How Awesome Stay connected</a></h2>
							
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="single.html">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="post-entry-1 h-100">
						<a href="single.html">
							<img src="{{ asset ('front/images/img_4.jpg')}}" alt="Image"
							class="img-fluid">
						</a>
						<div class="post-entry-1-contents">

							<span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
							<h2 class="mb-3"><a href="single.html">We Need Unlimitted People</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="single.html">Read more</a></p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
					<div class="post-entry-1 h-100">
						<a href="single.html">
							<img src="{{ asset ('front/images/img_5.jpg')}}" alt="Image"
							class="img-fluid">
						</a>
						<div class="post-entry-1-contents">

							<span class="meta d-inline-block mb-0">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
							<h2 class="mb-3"><a href="single.html">Important of getting a notifications</a></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="single.html">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	
	{{--footer--}}
	@include('layouts.components-user.footer')
	{{--footer--}}
	


	


	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="{{ asset ('front/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset ('front/js/tiny-slider.js') }}"></script>
	<script src="{{ asset ('front/js/aos.js') }}"></script>
	<script src="{{ asset ('front/js/glightbox.min.js') }}"></script>
	<script src="{{ asset ('front/js/navbar.js') }}"></script>
	<script src="{{ asset ('front/js/counter.js') }}"></script>
	<script src="{{ asset ('front/js/custom.js') }}"></script>
</body>
</html>
