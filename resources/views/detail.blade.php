@extends('layouts.front')
@section('content')
	<div class="hero-2 overlay" style="background-image: url('front/images/latarfasilitas.jpg');">
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


	

	
	

@endsection
