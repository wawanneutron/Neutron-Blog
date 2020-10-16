 <!-- navabr home -->
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
          <a href="#home" class="nav-link active page-scroll">Home</a>
        </li>
        <li class="nav-item mx-md-1">
          <a href="#about" class="nav-link page-scroll">About</a>
        </li>
        <li class="nav-item mx-md-1">
          <a href="#portfolio" class="nav-link page-scroll">Portfolio</a>
        </li>
        <li class="nav-item mx-md-1">
          <a href="#contact" class="nav-link page-scroll">Contact</a>
        </li>
        <li class="nav-item mx-md-1">
        <a href="{{ route('blog') }}" class="nav-link page-scroll">Blog</a>
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
    <form action="{{ url('logout') }}" class="form-inline d-sm-block d-lg-none"  method="POST">
        @csrf
        <div class="container col-10">
        <button class="btn btn-block btn-login-mobile my-2 my-sm-0" type="submit">
            Logout
          </button>
        </div>
      </form>
      <!-- desktop ButtonLogin -->
      <form action="{{ url('logout') }}" class="form-inline my-2 my-lg-0 d-none d-lg-block"  method="POST">
        @csrf
      <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
          Logout
        </button>
      </form>
      <!-- end navbar -->
      @endauth

    </div>
  </div>
</div>