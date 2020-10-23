    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('profile') }}">
      <div class="sidebar-brand-text mx-3 mt-5">
        <img class="img-profile rounded-circle" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" style="width: 100px !important;">
      </div>             
    </a>
     
      <!-- Divider -->
      <hr class="sidebar-divider mt-5">
    
      {{-- Dashboard --}}
      <li class="nav-item">
      <a class="nav-link" href="{{ route('edit-account.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Edit Account</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">
      {{-- paket travel --}}
      <li class="nav-item">
      <a class="nav-link" href="">
            <i class="fas fa-fw fa-luggage-cart"></i>
            <span>Edit Profile</span></a>
      </li>
               
              
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->