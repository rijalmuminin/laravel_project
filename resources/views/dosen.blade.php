@extends('layouts.front')
@section('content')
	<div class="hero-2 overlay" style="background-image: url('front/images/fotodosen.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto ">
					<h1 class="mb-5 text-center"><span>Dosen</span></h1>


					<div class="intro-desc text-left">
						<div class="line"></div>
						<p>Para dosen ITB merupakan pengajar dan peneliti unggulan yang berdedikasi dalam pengembangan ilmu pengetahuan dan teknologi untuk kemajuan bangsa</p>
					</div>
				</div>
			</div>
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

<div class="section sec-team sec-4 pb-5">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
					<h2 class="heading">Kami adalah dosen</h2>
				</div>
				
			</div>
			<div class="row g-5">
                @foreach($dosen as $data)
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="person">
						<img src="{{ asset('storage/dosen/'. $data->foto) }}" alt="Image" class="img-fluid  mx-auto w-50 mb-3">
						<h3 class="mb-1">{{$data->nama_dosen}} </h3>
						<span class="d-block text-black-50 mb-1">{{$data->email}}</span>
                        <span>jabatan</span>
                        <span class="d-block text-black-50 mb-1">{{$data->jabatan}}</span>
                        <span>status</span>
						<span class="d-block text-black-50 mb-1">{{$data->status}}</span>
                        <span>NIP</span>
						<span class="d-block text-black-50 mb-1">{{$data->telepon}}</span>
					</div>
				</div>
				@endforeach
			</div>

		</div>
	</div>
@endsection