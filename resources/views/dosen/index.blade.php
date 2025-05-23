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
        <div class="col-md-40">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-item-center">
                    <span>Dosen</span>
                <a href="{{ route('dosen.create') }}" class="btn btn-sm btn-primary">
                    Tambah
                </a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                   
                   <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Dosen</th>
                                <th scope="col">NIP</th>
                                <th scope="col">email</th>
                                <th scope="col">jabatan</th>
                                <th scope="col">status</th>
                                <th scope="col">foto</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($dosen as $data)
                            <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td scope="row">{{ $data->nama_dosen }}</td>
                            <td scope="row">{{ $data->telepon }}</td>
                            <td scope="row">{{ $data->email }}</td>
                            <td scope="row">{{ $data->jabatan }}</td>
                            <td scope="row">{{ $data->status }}</td>
                            <td>
                                <img src="{{ asset('storage/dosen/'. $data->foto) }}" alt="Gambar dosen" style="width: 100px;">
                            </td>
                            <th>
                                <form action="{{ route('dosen.destroy',$data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                            <a href="{{ route('dosen.edit', $data->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ route('dosen.show', $data->id) }}" class="btn btn-warning btn-sm">Show</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                            </td>
                            </form>
                            </th>
                            </tr>
                            @endforeach
                        </tbody>
                   </table>

                
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

