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

    {{--navbar--}}
	@include('layouts.components-user.navbar')
	{{--navbar--}}

	<div class="hero-2 overlay" style="background-image: url('front/images/latar.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto ">
					<h1 class="mb-5 text-center"><span>Artikel</span></h1>


					<div class="intro-desc text-left">
						<div class="line"></div>
						<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
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
		.excerpt {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Jumlah baris maksimal sebelum "..." */
  -webkit-box-orient: vertical;
  line-height: 1.5em;
  max-height: 4.5em; /* 1.5em x 3 baris */
		}
  .post-entry-1-contents {
  display: flex;
  flex-direction: column;
}
    </style>

			<div class="row">
				@foreach($artikel as $data)
				<div class="col-lg-4 col-md-6 mb-4 d-flex">
  <div class="post-entry-1 d-flex flex-column justify-content-between h-100 w-100">
    <a href="single.html">
      <img src="{{ asset('storage/artikel/'. $data->foto) }}" alt="image" class="img-fluid uniform-img">
    </a>
    <div class="post-entry-1-contents flex-grow-1 d-flex flex-column justify-content-between">
      <div>
        <span class="meta d-inline-block mb-0">{{$data->tanggal}} <span class="mx-2">by</span> <a href="#">Admin</a></span>
        <h2 class="mb-3"><a href="single.html">{{$data->judul}}</a></h2>
        <p class="excerpt">{{$data->isi}}</p>
      </div>
      <p class="mt-auto"><a href="single.html">Read more</a></p>
    </div>
  </div>
</div>

				@endforeach
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
