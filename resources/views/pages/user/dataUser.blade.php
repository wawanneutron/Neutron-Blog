@extends('layouts.user.user')

@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 mt-3 text-gray-800">Your Account</h1>
  </div>
    <div class="row table-responsive">
      <div class="col-lg-6">
        <div class="card-body">
          <table class="table table-borderless table-dark">
            <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>E-Mail Address</th>
              </tr>
            </thead>  
            <tbody>
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

@endsection
