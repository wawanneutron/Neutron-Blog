@extends('layouts.user.user')

@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 mt-3 text-gray-800">Edit Your Account</h1>
  </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body">
          <form action="{{ route('account.update') }}" method="POST">
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
</div>

@endsection
