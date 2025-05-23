@extends('layouts.front')
@section('content')
<div class="hero-2 overlay" style="background-image: url('front/images/latarfasilitas.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto ">
					<h1 class="mb-5 text-center"><span>Fakultas Kami</span></h1>


					<div class="intro-desc text-left">
						<div class="line"></div>
						<p>Institut Teknologi Bandung (ITB) menyediakan beragam fasilitas modern dan lengkap untuk mendukung kegiatan akademik, non-akademik, serta pengembangan diri mahasiswa. Fasilitas ini tersebar di berbagai kampus ITB, termasuk Kampus Ganesa (Bandung), Jatinangor, dan Cirebon.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="section sec-1">
		<div class="container">
			<div class="row g-0">
				<div class="col-lg-3">
					<h2 class="heading">Sejarah</h2>
					<p>Sejarah Pendidikan Tinggi Teknik di Indonesia berawal pada abad ke-20, ketika pemerintah kolonial Belanda mendirikan de Techniche Hoogeschool te Bandung (TH) pada 3 Juli 1920 di lahan seluas 30 hektar di Bandung. Saat itu hanya terdapat satu fakultas yaitu de Faculteit van Technische Wetenschap dan hanya satu jurusan yaitu de afdeeling der We gen Waterbouw. Pendirian perguruan tinggi ini dimaksudkan untuk memenuhi kebutuhan tenaga teknik yang semakin terbatas pada masa kolonial Belanda akibat pecahnya Perang Dunia pertama.</p>
				</div>
				<div class="col-lg-7 ms-auto">
					<img src="{{ asset ('front/images/sejarah.jpg')}}" alt="Image" class="img-fluid img-r">
				</div>
			</div>
		</div>
	</div>

	<div class="section sec-2">
		<div class="container">
			<div class="row g-0">
				<div class="col-lg-7 mb-4 mb-lg-0">
					<img src="{{ asset ('front/images/visimisi.jpg')}}" alt="IMage" class="img-fluid" width="160%">
				</div>
				<div class="col-lg-3 ms-auto">
					<h2 class="heading">Visi dan Misi</h2>
					<p class=""> Visi <br>
<p>Menjadi Perguruan Tinggi yang unggul, bermartabat, mandiri, dan diakui dunia serta memandu perubahan yang mampu meningkatkan kesejahteraan bangsa Indonesia dan dunia. (Sumber: 09/SK/I1-SA/OT/2011)</p>

					<p class=""> Misi <br>

<p>Menciptakan, berbagi dan menerapkan ilmu pengetahuan, teknologi, seni dan kemanusiaan serta menghasilkan sumber daya insani yang unggul untuk menjadikan Indonesia dan dunia lebih baik. (Sumber: 09/SK/I1-SA/OT/2011)</p>
				</div>
@endsection