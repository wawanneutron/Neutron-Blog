        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    {{ Auth::user()->name }}
                  </span>
                  @if (!Auth::user()->profile_image)
                  <img class="img-profile rounded-circle" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}">
                      
                  @else 
                <img src="{{ Storage::url(Auth::user()->profile_image)  }}" alt="" class=" img-profile rounded-circle" style="">
                  @endif
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                 <br>
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                    Logout
                  </a>
                 <hr>
                 <a href="{{ route('blog') }}" class="dropdown-item">
                    <i class="fas fa-home text-gray-600 mr-2"></i>
                    Back to Blog 
                 </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->