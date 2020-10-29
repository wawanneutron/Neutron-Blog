@extends('layouts.admin.admin')

@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 mt-3 text-gray-800">Manage Rolles</h1>
  </div>
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @elseif (session('success'))
      <div class=" alert alert-success" role="alert">
        {{ session('success') }}
      </div>
  @endif

  <div class="row table-responsive">
    <div class="col-lg-8">
      <table class="table" collspacing="0">
        <thead>
            <tr class=" table-primary">
              <th>Account Name</th>
              <th>E-Mail</th>
              <th>Roles</th>
              <th>Picture</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody class=" table-danger">
          @foreach ($items as $item)
          <tr>
          <td class="align-middle">{{ $item->name }}</td>
            <td class="align-middle">{{ $item->email }}</td>
            <td class="align-middle">{{ $item->roles }}</td>
            <td class="align-middle">
              @if (!$item->profile_image)
                <img src="https://ui-avatars.com/api/?name={{ $item->name }}" alt="" class=" rounded-circle text-center" style="width: 80px; height: 80px;">
              @else
                <img src="{{ Storage::url($item->profile_image) }}" alt="" class=" rounded-circle text-center" style="width: 80px; height: 80px;">
              @endif
              
            </td>
            <td class="align-middle">
            <a href="{{ route('rolles.edit', $item->id) }}" class="btn btn-info text-center"  data-toggle="modal" data-target="#rolesModal">
                <i class="fa fa-pencil-alt"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

  <!-- Form Roles Update Modal-->
  <div class="modal fade" id="rolesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Roles {{ $item->id }}</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('rolles.update',$item->id) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
          <label for="roles">Update roles admin or user</label>
          <input type="text" class="form-control" name="roles" placeholder="please write ADMIN or USER">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Update Roles</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection
