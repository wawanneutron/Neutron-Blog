@extends('layouts.admin.admin')

@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between">
      <h1 class="h3 mb-0 mt-3 text-gray-800">Edit Your Account</h1>
  </div>
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif
    <div class="row">
      <div class="col-lg-6 mb-5 mt-4">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
         @endif
        <div class="card card-shadow-lg">
          <div class="card-body card-sahdow">
            <h1 class="h5 mb-3 mt-1 text-gray-800">Update Photo</h1>
            <p class="alert-warning mb-4">if you don't choice photo profile, then will use photo default by system.</p>
            <div class="default">
              <img src="{{ Storage::url(Auth::user()->profile_image) }}" class="img-profile img-thumbnail mb-3" style="" alt="">    
            </div>
          <form action="{{ route('update-profile.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Your account name</label>
              <input type="text" class="form-control" name="name" readonly value="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
              <label for="profile_image">Choice your photo</label>
              <input type="file" class="form-control" name="profile_image">
            </div>
            <button type="submit" class="btn btn-success mt-4 mb-3 btn-sm">Update profile pict</button>
          </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        @if (session('success-update'))
            <div class="alert alert-success" role="alert">
                {{ session('success-update') }}
            </div>
          @endif
        <div class="card shadow-sm">
          <div class="card-body">
            <h1 class="h5 text-gray-800 mb-3">Update Account</h1>
          <form action="{{ route('update-account') }}" method="POST">
              @method('patch')
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror " name="name" value="{{ $user->name }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control @error ('username') is-invalid  @enderror " name="username" value="{{ $user->username }}">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" class="form-control @error ('email') is-invalid  @enderror " name="email" value="{{ $user->email }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary btn-block mt-5">Update Your Account</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row">
      
    </div>
</div>

@endsection
