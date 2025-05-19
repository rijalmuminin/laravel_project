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
                <div class="card-header">Edit Data Dosen</div>

                <div class="card-body">
                    <form action="{{ route('dosen.update', $dosen->id) }}" method="post" enctype="multipart/form-data">
                         @csrf
                        @method('put')
                        <div class=form-group>
                            <label>Nama Dosen</label>
                            <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" name="nama_dosen" value="{{ $dosen->nama_dosen }}" >
                            @error('nama_dosen')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                        </div>
                        <div class=form-group>
                            <label>Telepon</label>
                            <input type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ $dosen->telepon }}" >
                            @error('telepon')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                        </div>
                        <div class=form-group>
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $dosen->email }}" >
                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                        </div>
                        
                        <div class=form-group>
                        <label>Jabatan</label>
                            <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" >
                                <option value="asisten-ahli" {{ $dosen->jabatan == "asisten-ahli"? 'selected' :''}}>asisten-ahli</option>
                                <option value="lektor" {{ $dosen->jabatan == "lektor"? 'selected' :''}}>lektor</option>
                                <option value="lektor-kepala" {{ $dosen->jabatan == "lektor-kepala"? 'selected' :''}}>lektor-kepala</option>
                                <option value="guru-besar" {{ $dosen->jabatan == "guru-besar"? 'selected' :''}}>guru-besar</option>
                            </select>
                            @error('jabatan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                        </div>

                        <label>Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror" >
                                <option value="tetap" {{ $dosen->status == "tetap"? 'selected' :''}}>tetap</option>
                                <option value="tidak-tetap" {{ $dosen->status == "tidak-tetap"? 'selected' :''}}>tidak-tetap</option>
                            </select>
                            @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                        </div>
                        
                        <div class=form-group>
                            <label>Foto</label> <br>
                            <img src="{{asset('storage/dosen/'. $dosen->foto)}}" alt="Gambar dosen" style="width: 100px;">
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ $dosen->foto }}" >
                            @error('foto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                        </div><r>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <a href="{{ route('dosen.index') }}" class="btn btn-warning">Kembali</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
        <!---Container Fluid-->
      <!-- Footer -->
      {{-- footer --}}
             @include('layouts.components-admin.footer')
      {{-- /footer --}}
      <!-- Footer -->   

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

