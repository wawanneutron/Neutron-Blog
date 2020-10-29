@extends('layouts.admin.admin')

@section('content')
<!-- Begin Page Content -->
<div class="row">
  <div class="col-lg-6 ml-3">
    @if (session('success-update'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <strong>Hola {{ Auth::user()->username }}</strong>
        {{ session('success-update') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @elseif(session('success-add'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Hola {{ Auth::user()->username }}</strong>
        {{ session('success-add') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @elseif(session('success-delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Hola {{ Auth::user()->username }}</strong>
        {{ session('success-delete') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
  </div>
</div>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 mt-3 text-gray-800">Content Management System</h1>
    <a href="{{ route('content-package.create') }}" class="btn btn-sm btn-primary shadow-sm mt-3">
      <i class=" fas fa-plus fa-sm text-white-50 mr-2"></i>Add Content
    </a>
  </div>
  <!-- Content Row -->
  <div class="row table-responsive">
    <div class="card-body">
      <div>
        <table class="table table-bordered" width="100%" collspacing="0">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Writer</th>
              <th scope="col">Date Writer</th>
              <th scope="col">Category</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
            <tr>
              <th class="align-middle" scope="row"> {{ $item->id }} </th>
              <td class="align-middle"> {{ $item->title }} </td>
              <td class="align-middle"> {{ $item->writer }} </td>
              <td class="align-middle"> {{ $item->date_writer }} </td>
              <td class="align-middle"> {{ $item->category }} </td>
              <td class="align-middle text-center">
                <a href="{{ route ('content-package.edit', $item->id) }}" class="btn btn-info m-2">
                  <i class="fa fa-pencil-alt"></i>
                </a>
                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteContent{{ $item->id }}">
                    <i class="fas fa-trash"></i>
                </button>
         
                <!-- Modal Delete -->
              <div class="modal fade" id="deleteContent{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteContent" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Management Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Do you wont to delete <br> <span class=" font-weight-bold">{{$item->title}}</span> ?
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="{{ route ('content-package.destroy', $item->id) }}" class="d-inline m-2" method="POST">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">
                            Delete Content
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div> 
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center">
                Data does not exist
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>




</div>

@endsection