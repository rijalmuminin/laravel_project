<!-- /*
* Template Name: Archiark
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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
					<h2 class="heading">Sejarah</h2>
					<p>Sejarah Pendidikan Tinggi Teknik di Indonesia berawal pada abad ke-20, ketika pemerintah kolonial Belanda mendirikan de Techniche Hoogeschool te Bandung (TH) pada 3 Juli 1920 di lahan seluas 30 hektar di Bandung. Saat itu hanya terdapat satu fakultas yaitu de Faculteit van Technische Wetenschap dan hanya satu jurusan yaitu de afdeeling der We gen Waterbouw. Pendirian perguruan tinggi ini dimaksudkan untuk memenuhi kebutuhan tenaga teknik yang semakin terbatas pada masa kolonial Belanda akibat pecahnya Perang Dunia pertama.</p>

					<p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
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
			</div>
		</div>
	</div>

	<div class="sec-3 section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<h2 class="heading">fakultas</h2>
					<p> merupakan unit akademik yang menaungi berbagai program studi dan kegiatan pendidikan, penelitian, serta pengabdian kepada masyarakat dalam bidang keilmuan tertentu. ITB memiliki beberapa fakultas dan sekolah yang secara umum terbagi berdasarkan rumpun ilmu teknik, sains, seni, dan sosial-humaniora. Berikut penjelasan umum tentang fakultas-fakultas di ITB</p>
				    <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>

				</div>

				<div class="col-lg-6 ms-auto">
					<div class="accordion accordion-flush accordion-1" id="accordionFlushExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
									Fakultas Ilmu dan Teknologi Kebumian (FITB)
								</button>
							</h2>
							<div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<div class="row justify-content-between">
										<div class="col-md-4">
											<img src="{{ asset ('front/images/fitb.jpg')}}" alt="Image" class="img-fluid">
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
									Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)
								</button>
							</h2>
							<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<div class="row justify-content-between">
										<div class="col-md-4">
											<img src="{{ asset ('front/images/fmipa.jpg')}}" alt="Image" class="img-fluid">
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
									Fakultas Seni Rupa dan Desain (FSRD)
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
									Fakultas Teknologi Industri (FTI)
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
					<p>Institut Teknologi Bandung (ITB) menyediakan beragam fasilitas modern dan lengkap untuk mendukung kegiatan akademik, non-akademik, serta pengembangan diri mahasiswa. Fasilitas ini tersebar di berbagai kampus ITB, termasuk Kampus Ganesa (Bandung), Jatinangor, dan Cirebon.</p>
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

.post-entry-1-contents {
  display: flex;
  flex-direction: column;
}

}
    </style>


<div class="container py-5">
    <div class="row g-4">
        @foreach($fasilitas as $data)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-portfolio">
                    <a href="{{url('detail')}}">
                        <img src="{{ asset('storage/fasilitas/'. $data->foto) }}" alt="image" class="img-fluid uniform-img">
                        <div class="contents">
                            <h3>{{ $data->nama_fasilitas }}</h3>
                            <div class="cat"></div> 
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
	</div>
				<div class="col-md-12 text-center mt-5">
					<p><a href="{{url('detail')}}" class="btn btn-primary me-4">Lihat semua</a></p>
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
				</div>
			</div>

			<div class="row">
				@foreach($artikel as $data)
				<div class="col-lg-4 col-md-6 mb-4 d-flex">
  <div class="post-entry-1 d-flex flex-column justify-content-between h-100 w-100">
    <a href="{{url('detailartikel')}}">
      <img src="{{ asset('storage/artikel/'. $data->foto) }}" alt="image" class="img-fluid uniform-img">
    </a>
    <div class="post-entry-1-contents flex-grow-1 d-flex flex-column justify-content-between">
      <div>
        <span class="meta d-inline-block mb-0">{{$data->tanggal}} <span class="mx-2">by</span> <a >Admin</a></span>
        <h2 class="mb-3"><a href="{{url('detailartikel')}}">{{$data->judul}}</a></h2>
        <p class="excerpt">{{$data->isi}}</p>
      </div>
      <p class="mt-auto"><a href="{{url('detailartikel')}}">Read more</a></p>
    </div>
  </div>
</div>

				@endforeach
				                <div class="col-md-12 text-center mt-5">
					<p><a href="{{url('artikel')}}" class="btn btn-primary me-4">Lihat semua</a></p>
				</div>
			</div>
		</div>
	</div>



	
@endsection
	



	<!-- Preloader -->
