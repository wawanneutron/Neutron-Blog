@extends('layouts.admin.admin')

@section('content')
<!-- Begin Page Content -->       
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 mt-3 text-gray-800">Content Management System</h1>
    <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm mt-3">
      <i class=" fas fa-plus fa-sm text-white-50 mr-2"></i>Add Images
    </a>
  </div>
  <!-- Content Row -->
  <div class="row table-responsive">
    <div class="card-body">
      <div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Images</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
            <tr>
              <th class="align-middle"> {{ $item->id }} </th>
              <td class="align-middle"> {{ $item->content_package->title }}  </td>
              <td class="align-middle"> 
              <img src="{{ Storage::url($item->image) }}" alt="" class="" width="160px">  
              </td>
              <td class="align-middle text-center">
                <a href="{{ route ('gallery.edit', $item->id) }}" class="btn btn-info m-2">
                  <i class="fa fa-pencil-alt"></i>
                </a>

               <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-trash"></i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Gallery Content</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Do you wont to delete this image ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <form action="{{ route ('gallery.destroy', $item->id) }}" class="d-inline m-2" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"> Delete
                          <i class="fas fa-trash"></i>
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