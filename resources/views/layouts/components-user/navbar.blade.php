<nav class="site-nav">
		<div class="container-fluid">
			<div class="site-navigation">
				<a href="#" class="logo m-0 float-start">ITB<span class="text-primary"></span> </a>
                
				<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact Us</a></li>                    
                <li> @if (Route::has('login'))
        @auth
            <a class="nav-link px-lg-6 py-6 py-lg-6" href="{{ url('/home') }}">
                <i class="fas fa-user-circle mr-2"></i>
                <span>{{ Auth::user()->name }}</span>
            </a>
        @else
            <a class="text-sm text-gray-700 dark:text-gray-500 underline" href="{{ route('login') }}">Log in</a>
        @if (Route::has('register'))
            <a class="text-sm text-gray-700 dark:text-gray-500 underline" href="{{ route('register') }}">Register</a>
        @endif
        @endauth 
        @endif
                </li>

               
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