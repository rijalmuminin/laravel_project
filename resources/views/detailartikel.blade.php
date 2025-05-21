@extends('layouts.front')
@section('content')
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="index.html" class="logo m-0 float-start">Archiark<span class="text-primary">.</span> </a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
					<li><a href="index.html">Home</a></li>
					<li class="has-children active">
						<a href="projects.html">Projects</a>
						<ul class="dropdown">
							<li><a href="#">Commercial Building</a></li>
							<li><a href="#">Cultural Lifestyle</a></li>
							<li class="has-children">
								<a href="#">Dropdown</a>
								<ul class="dropdown">
									<li><a href="#">Sub Menu One</a></li>
									<li><a href="#">Sub Menu Two</a></li>
									<li><a href="#">Sub Menu Three</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="services.html">Services</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>

				<a href="#" class="burger ml-auto float-end site-menu-toggle light js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>
				<ul class="site-menu float-end d-none d-md-block">
					<li><a href="#" class="d-flex align-items-center text-white h2 fw-bold"><span class="icon-phone me-2"></span> <span>+ 2 292 4392 327</span></a></li>
				</ul>

			</div>
		</div>
	</nav>



	<div class="hero-2 overlay" style="background-image: url('images/img_3.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto ">
					<h1 class="mb-5 text-center"><span>Project One</span></h1>


					<div class="intro-desc text-left">
						<div class="line"></div>
						<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section sec-3">
		<div class="container">

			<div class="row mb-5 justify-content-between">
				<div class="col-lg-6 mb-lg-0 mb-4">
					<img src="images/img_7.jpg" alt="Image" class="img-fluid">
				</div>
				<div class="col-lg-5">
					<div class="heading">Description</div>
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae placeat, unde sequi quas ipsum illo? Commodi accusantium, sit eveniet? Maiores tempora corporis ea nostrum magnam similique optio autem, dolor incidunt?</p>
					<p>Recusandae quam dicta repellat consequatur, facilis magnam minus unde, asperiores voluptatibus temporibus obcaecati, nihil libero. Maxime consectetur asperiores excepturi quidem deleniti, autem incidunt? Error nisi, eius fugiat expedita quia cupiditate!</p>
					<p><a href="#" class="btn btn-primary">Visit Website</a></p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 border-left">
					<span class="text-black-50 d-block">Work year:</span>  2020
				</div>
				<div class="col-sm-3 border-left">
					<span class="text-black-50 d-block">Client:</span> XYZ Inc.
				</div>
				<div class="col-sm-3 border-left">
					<span class="text-black-50 d-block">Started:</span> 25 Jan 2020
				</div>
				<div class="col-sm-3 border-left">
					<span class="text-black-50 d-block">Finished:</span> 02 Dec 2020
				</div>
			</div>
		</div>
	</div>


	


	

@endsection