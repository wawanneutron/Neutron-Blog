<!-- navabr blog -->
<div class="container" id="home">
  <div class="navbar fixed-top navbar-custom navbar-expand-lg navbar-light bg-light page-scroll">
  <a href="{{ route ('home') }}" class="navbar-brand page-scroll">
      <img src="{{ url('/frontend/images/logo.png') }}" class="w-75">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb"
      aria-controls="navb" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item mx-md-1">
          <a href="#home" class="nav-link  page-scroll">Home</a>
        </li>
        <li class="nav-item mx-md-1">
          <a href="{{ route ('home') }}" class="nav-link  page-scroll">Portfolio</a>
        </li>
        <li class="nav-item mx-md-1">
          <a href="#articel" class="nav-link page-scroll">Articel</a>
        </li>
        <li class="nav-item mx-md-1">
        <a href="{{ route('blog') }}" class="nav-link active page-scroll">Blog</a>
        </li>
          </ul>
          {{-- auth user --}}
          @guest
          <!-- mobile ButtonLogin -->
      <form action="#" class="form-inline d-sm-block d-lg-none">
        @csrf
        <div class="container col-10">
        <button class="btn btn-block btn-login-mobile my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
            Login
          </button>
        </div>
      </form>
      <!-- desktop ButtonLogin -->
      <form action="#" class="form-inline my-2 my-lg-0 d-none d-lg-block">
      @csrf
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
              Login
            </button>
          </form>
          <!-- end navbar -->
      @endguest

      @auth
     <!-- mobile ButtonLogin -->
      <li class="nav-item dropdown no-arrow text-decoration-none list-unstyled d-sm-block d-lg-none">
        <a class="nav-link" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if (!Auth::user()->profile_image)
        <img src="https://ui-avatars.com/api/user?=name{{ Auth::user()->name }}" alt="" style="width: 50px !important;">
          @else
        <img src="{{ Storage::url(Auth::user()->profile_image) }}" alt="" class=" rounded-circle" style="width: 50px !important; height: 50px !important;">
          @endif
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <i class="far fa-user fa-1x text-gray-600 mr-2 ml-3"></i> <span class="user-header">{{ Auth::user()->username }}
          <hr>
          @if (Auth::user() && Auth::user()->roles == 'ADMIN')
            <a href="{{ route('content-package.index') }}" class="dropdown-item">
              <i class="fas fa-plus fa-1x text-gray-600" style="margin-left: -7px;"></i>
              <span class="ml-2">Add Content</span>
            </a>
            <hr>
            <a href="{{ route('dashboard') }}" class="dropdown-item">
              <i class="fas fa-user-lock fa-1x text-gray-600" style="margin-left: -7px;"></i>
              <span class="ml-2">Setting Profile</span>
            </a>
          @else
          <a href="{{ route('edit-account.index') }}" class="dropdown-item">
              <i class="fas fa-user-lock fa-1x text-gray-600" style="margin-left: -7px;"></i>
              <span class="ml-2">Setting Profile</span>
            </a>
          @endif
          <div class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <hr>
            <button class="btn btn-block btn-login-mobile my-2 my-sm-0" type="submit">
              Logout
            </button>
          </div>
        </div>
      </li>


     <!-- desktop ButtonLogin -->
      <li class="nav-item dropdown no-arrow text-decoration-none list-unstyled d-none d-lg-block">
          <a class="nav-link" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-700">
              {{ Auth::user()->name }}
            </span>
              @if (!Auth::user()->profile_image)
                <img class="img-profile  rounded-circle" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" style="width: 50px !important;">
              @else
                <img src="{{ Storage::url(Auth::user()->profile_image) }}" alt="" style="width: 50px !important; height: 50px !important; -webkit-box-shadow: 5px 6px 12px -7px rgba(0,0,0,0.89); 
                box-shadow: 5px 6px 12px -7px rgba(0,0,0,0.89);" class="rounded-circle">
              @endif

          </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <i class="far fa-user fa-1x text-gray-600 mr-2 ml-3"></i> <span class="user-header">{{ Auth::user()->username }}
          <hr>
          @if (Auth::user() && Auth::user()->roles == 'ADMIN')
            <a href="{{ route('content-package.index') }}" class="dropdown-item">
              <i class="fas fa-plus fa-1x text-gray-600" style="margin-left: -7px;"></i>
              <span class="ml-2">Add Content</span>
            </a>
            <hr>
            <a href="{{ route('update-profile.index') }}" class="dropdown-item">
              <i class="fas fa-user-lock fa-1x text-gray-600" style="margin-left: -7px;"></i>
              <span class="ml-2">Setting Profile</span>
            </a>
          @else
          <a href="{{ route('edit-account.index') }}" class="dropdown-item">
              <i class="fas fa-user-lock fa-1x text-gray-600" style="margin-left: -7px;"></i>
              <span class="ml-2">Setting Profile</span>
            </a>
          @endif
          <div class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <hr>
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
              Logout
            </button>
          </div>
        </div>
      </li>
      @endauth
    </div>
  </div>
</div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Logout </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Do you wont to logout <br> <span class=" font-weight-bold"></span> ?
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="{{ url('logout') }}" class="d-inline m-2" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
          </form> 
        </div>
      </div>
    </div>
  </div>