<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{ asset ('admin/img/logo/itb.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a href="{{ route ('artikel.index') }}"  class="collapse-item" > Artikel</a>
            <a href="{{ route ('fasilitas.index') }}"  class="collapse-item" > Fasilitas</a>
            <a href="{{ route ('dosen.index') }}"  class="collapse-item" > Dosen</a>
            <a href="{{ route ('ukm.index') }}"  class="collapse-item" > Ukm</a>
            <a href="{{ route ('fakultas.index') }}"  class="collapse-item" > Fakultas</a>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
      
      
      
 

    </ul>