<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset ('admin/img/logo/itb.png')}}" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ asset ('admin//vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('admin//vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('admin//css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    {{-- SIDEBAR --}}
             @include('layouts.components-admin.sidebar')
    {{-- /SIDEBAR --}}
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- navbar -->
    {{-- NAVBAR --}}
             @include('layouts.components-admin.navbar')
    {{-- /NAVBAR --}}
        <!-- navbar -->

        <!-- Container Fluid-->
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Data Prestasi</div>

                <div class="card-body">
                    <form action="{{ route('prestasi.update', $prestasi->id) }}" method="post" enctype="multipart/form-data">
                         @csrf
                        @method('put')
                        <div class=form-group>
                            <label>Nama Prestasi</label>
                            <input type="text" class="form-control" name="nama_prestasi" value="{{ $prestasi->nama_prestasi }}" >
                        </div>
                        <div class=form-group>
                            <label>Jenis</label>
                            <select name="jenis" class="form-control @error('jenis') is-invalid @enderror" >
                                <option value="mahasiswa" {{ $prestasi->jenis == "Mahasiswa"? 'selected' :''}}>Mahasiswa</option>
                                <option value="universitas" {{ $prestasi->jenis == "Universitas"? 'selected' :''}}>Universitas</option>
                            </select>
                            @error('jenis')
                                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label><br>
                                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" >{{ $prestasi->deskripsi }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                        <div class=form-group>
                            <label>Foto</label> <br>
                            <img src="{{asset('storage/prestasi/'. $prestasi->foto)}}" alt="Gambar prestasi" style="width: 100px;">
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ $prestasi->foto }}" >
                            @error('foto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                        </div><r>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <a href="{{ route('prestasi.index') }}" class="btn btn-warning">Kembali</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      {{-- footer --}}
             @include('layouts.components-admin.footer')
      {{-- /footer --}}
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset ('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset ('admin/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset ('admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset ('admin/js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>

