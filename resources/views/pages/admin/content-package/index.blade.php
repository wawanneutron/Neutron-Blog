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
        <div class=" fa-pull-right mt-4">
          {{-- pagination-costom --}}
          @if ($items->hasPages())
            <ul class="pagination" role="navigation">
                {{-- Previous Page Link --}}
                @if ($items->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $items->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                    </li>
                @endif
         
                <?php
                    $start = $items->currentPage() - 1; // show 3 pagination links before current
                    $end = $items->currentPage() + 1; // show 3 pagination links after current
                    if($start < 1) {
                        $start = 1; // reset start to 1
                        $end += 1;
                    } 
                    if($end >= $items->lastPage() ) $end = $items->lastPage(); // reset end to last page
                ?>
         
                @if($start > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $items->url(1) }}">{{1}}</a>
                    </li>
                    @if($items->currentPage() != 4)
                        {{-- "Three Dots" Separator --}}
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                    @endif
                @endif
                    @for ($i = $start; $i <= $end; $i++)
                        <li class="page-item {{ ($items->currentPage() == $i) ? ' active' : '' }}">
                            <a class="page-link" href="{{ $items->url($i) }}">{{$i}}</a>
                        </li>
                    @endfor
                @if($end < $items->lastPage())
                    @if($items->currentPage() + 3 != $items->lastPage())
                        {{-- "Three Dots" Separator --}}
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                    @endif
                    <li class="page-item">
                        <a class="page-link" href="{{ $items->url($items->lastPage()) }}">{{$items->lastPage()}}</a>
                    </li>
                @endif
         
                {{-- Next Page Link --}}
                @if ($items->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $items->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true">&rsaquo;</span>
                    </li>
                @endif
            </ul>
          @endif
        </div>
      </div>
    </div>
  </div>




</div>

@endsection