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
                <div class="card-header">Dosen</div>

                <div class="card-body">
                    <form action="{{ route('dosen.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class=form-group>
                            <label>Nama dosen</label>
                            <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" name="nama_dosen">
                            @error('nama_dosen')
                                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class=form-group>
                            <label>NIP</label>
                            <input type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon">
                            @error('telepon')
                                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class=form-group>
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class=form-group>

                            <label for="jabatan">Jabatan</label>
<select id="jabatan" name="jabatan" class="form-control @error('email') is-invalid @enderror">
  <option value="">-- Pilih Jabatan --</option>
  <option value="asisten-ahli">Asisten Ahli</option>
  <option value="lektor">Lektor</option>
  <option value="lektor-kepala">Lektor Kepala</option>
  <option value="guru-besar">Guru Besar / Profesor</option>
</select>

                            @error('jabatan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class=form-group>

<label for="status">status</label>
<select id="status" name="status" class="form-control @error('email') is-invalid @enderror">
<option value="">-- Pilih status --</option>
<option value="tetap">Tetap</option>
<option value="tidak-tetap">Tidak tetap</option>
</select>

@error('status')
                <div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
                        <div class=form-group>
                            <label>Tambahkan Foto</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
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