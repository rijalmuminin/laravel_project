@extends('layouts.front')
@section('content')
<style>
	.hero-header {
  position: relative;
  width: 100%;
  height: 80vh; /* kamu bisa ubah sesuai kebutuhan */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-color: white; /* hilangkan abu-abu */
  display: flex;
  align-items: center;
  justify-content: center;
}



</style>
<br>
<br>
<br>
	<div class="col-lg-10 text-center mx-auto">

					<h1 class="heading text-black" data-aos="fade-up">{{$artikel->judul}}</h1>
					<p class="text-black" data-aos="fade-up" data-aos-delay="100"><span class="d-block mb-3 text-black" data-aos="fade-up"> ({{$artikel->tanggal}})<span class="mx-2 text-black"></span></span></p>
				</div>	
    
	<br>


<div class="hero-header overlay" style="background-image: url('{{ asset('storage/artikel/' . $artikel->foto) }}'); background-size: 65%; background-repeat: no-repeat; background-position: center;">

		<div class="container">
			<div class="row align-items-center justify-content-center">
				
			</div>		
		</div>		
	</div>

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2 blog-content pe-5 text-center"	>
					<p>{{$artikel->isi}}</p>
				</div> 
			</div>
		</div>
	</div>

@endsection