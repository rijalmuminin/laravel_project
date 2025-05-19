<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sticky Header Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding-top: 80px; /* sesuaikan dengan tinggi navbar */
    }

    .site-nav {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background-color: #0066B3; /* warna background navbar */
    }

    .site-nav a {
      color: white;
      text-decoration: none;
    }

    .site-nav .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .site-menu {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 20px;
      align-items: center;
    }

    .site-menu li {
      display: inline;
    }

    .site-menu a {
      color: white;
      padding: 8px 12px;
    }

    .site-menu a:hover {
      background-color: #444;
      border-radius: 4px;
    }

    .content {
      padding: 20px;
    }
  </style>
</head>
<body>

  <nav class="site-nav">
    <div class="container-fluid d-flex justify-content-between align-items-center py-2">
      <a href="#" class="logo">ITB<span class="text-primary"></span></a>

      <a href="#" class="burger d-lg-none d-inline-block text-white" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        ☰
      </a>

      <ul class="site-menu d-none d-md-flex">
        <li><a href="#">Home</a></li>
        <li><a href="#">UKM</a></li>
        <li><a href="#">Dosen</a></li>
        <li><a href="#">Contact Us</a></li>
        <li>
          <!-- Laravel Auth Example Placeholder -->
          @if (Route::has('login'))
            @auth
              <a href="{{ url('/home') }}">
                <i class="fas fa-user-circle me-2"></i>{{ Auth::user()->name }}
              </a>
            @else
              <a href="{{ route('login') }}">Log in</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
              @endif
            @endauth
          @endif
        </li>
      </ul>
    </div>
  </nav>

 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
