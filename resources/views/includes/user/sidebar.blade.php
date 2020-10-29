    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('edit-account.index') }}">
    <div class="sidebar-brand-text mx-3 mt-5">
      </div>             
    </a>
     
     <!-- Divider -->
     <hr class="sidebar-divider mt-5">
     <div class="sidebar-heading">
      Account Setting
    </div>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('edit-account.index') }}">
          <i class="fas fa-user-lock"></i>
          <span>Account Setting</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-users-cog"></i>
          <span>Add adress</span></a>
        </li>
               
              
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->