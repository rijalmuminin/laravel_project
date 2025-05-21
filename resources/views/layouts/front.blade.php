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
    @stack('style')
</head>
<body>
    {{-- navbar --}}
    @include('layouts.components-user.navbar')
    {{-- end nav --}}

    
    @yield('content')


    {{--footer--}}
	@include('layouts.components-user.footer')
	{{--footer--}}



	<script src="{{ asset ('front/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset ('front/js/tiny-slider.js') }}"></script>
	<script src="{{ asset ('front/js/aos.js') }}"></script>
	<script src="{{ asset ('front/js/glightbox.min.js') }}"></script>
	<script src="{{ asset ('front/js/navbar.js') }}"></script>
	<script src="{{ asset ('front/js/counter.js') }}"></script>
	<script src="{{ asset ('front/js/custom.js') }}"></script>
    @stack('scripts')
</body>
</html>