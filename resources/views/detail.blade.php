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

	<title>Intitut Teknologi Bandung</title>
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

	<div class="hero-2 overlay" style="background-image: url('front/images/latar.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto ">
					<h1 class="mb-5 text-center"><span>Fasilitas Kami</span></h1>


					<div class="intro-desc text-left">
						<div class="line"></div>
						<p>Institut Teknologi Bandung (ITB) menyediakan beragam fasilitas modern dan lengkap untuk mendukung kegiatan akademik, non-akademik, serta pengembangan diri mahasiswa. Fasilitas ini tersebar di berbagai kampus ITB, termasuk Kampus Ganesa (Bandung), Jatinangor, dan Cirebon.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	


	<div class="section sec-5">
		<div class="container">
			<div class="row mb-5">
				
				<div class="col-lg-6 ms-auto">
					<p></p>
				</div>	
			</div>
<style>
        .uniform-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .single-portfolio {
            position: relative;
            overflow: hidden;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            background-color: #fff;
            transition: transform 0.3s ease;
        }

        .single-portfolio:hover {
            transform: scale(1.03);
        }

        .contents {
            margin-top: 10px;
        }

        .contents h3 {
            font-size: 1.25rem;
            margin: 0;
        }

        .cat {
            font-size: 0.9rem;
            color: #888;
        }
    </style>
			<div class="row g-4">
				@foreach($fasilitas as $data)
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="single-portfolio">
						<a>
							<img src="{{ asset('storage/fasilitas/'. $data->foto) }}" alt="image" class="img-fluid uniform-img">
							<div class="contents">
                            <h3>{{ $data->nama_fasilitas }}</h3>
								<div class="cat"></div>
							</div>
						</a>
					</div>
				</div>
				@endforeach
                <div class="col-md-12 text-center mt-5">
					<p><a href="{{url('./')}}" class="btn btn-primary me-4">Kembali</a></p>
				</div>
				
			</div>
		</div>
	</div>


	

	
	

	{{-- footer --}}
		@include('layouts.components-user.footer')
	{{-- endfooter --}}


	


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
