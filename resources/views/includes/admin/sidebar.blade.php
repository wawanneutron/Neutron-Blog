    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-text mx-3"> Neutron Admin </div>             
    </a>
     
      <!-- Divider -->
      <hr class="sidebar-divider">
     
      <!-- Heading -->
      <div class="sidebar-heading">
        Interface Dashboard
      </div>
      
      {{-- Dashboard --}}
      <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Content Management
      </div>
      
      {{-- paket travel --}}
      <li class="nav-item">
      <a class="nav-link" href="{{ route('content-package.index') }}">
            <i class="fas fa-fw fa-luggage-cart"></i>
            <span>Content</span></a>
      </li>
               
              
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Galery Management
      </div>
      
      {{-- galeri travel --}}
      <li class="nav-item">
      <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Galery Content</span></a>
      </li>
       <!-- Divider -->
       <hr class="sidebar-divider mt-5">
       <div class="sidebar-heading">
        Account Setting
      </div>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('account-setting.index') }}">
              <i class="fas fa-fw fa-images"></i>
              <span>Account Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('gallery.index') }}">
                <i class="fas fa-fw fa-images"></i>
                <span>Manage Account Users</span></a>
          </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->