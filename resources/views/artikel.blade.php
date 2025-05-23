@extends('layouts.front')
@section('content')
	<div class="hero-2 overlay" style="background-image: url('front/images/latar.jpg');">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto ">
					<h1 class="mb-5 text-center"><span>Artikel</span></h1>


					<div class="intro-desc text-left">
						<div class="line"></div>
						<p>Artikel-artikel ITB merupakan sumber informasi terpercaya mengenai berbagai kegiatan dan pencapaian yang dilakukan oleh sivitas akademika ITB. Mulai dari inovasi teknologi, kolaborasi riset, capaian mahasiswa dan dosen, hingga pengabdian kepada masyarakat, semua terangkum dalam tulisan yang informatif dan inspiratif.</p>
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
    <a href="{{route('detailartikel',$data->id)}}">
      <img src="{{ asset('storage/artikel/'. $data->foto) }}" alt="image" class="img-fluid uniform-img">
    </a>
    <div class="post-entry-1-contents flex-grow-1 d-flex flex-column justify-content-between">
      <div>
        <span class="meta d-inline-block mb-0">{{$data->tanggal}} <span class="mx-2">by</span> <a>Admin</a></span>
        <h2 class="mb-3"><a href="{{route('detailartikel',$data->id)}}">{{$data->judul}}</a></h2>
        <p class="excerpt">{{$data->isi}}</p>
      </div>
      <p class="mt-auto"><a href="{{route('detailartikel',$data->id)}}">Read more</a></p>
    </div>
  </div>
</div>

				@endforeach
			</div>
		</div>
	</div>


@endsection