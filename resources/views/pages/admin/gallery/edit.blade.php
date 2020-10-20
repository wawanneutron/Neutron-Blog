@extends('layouts.admin.admin')

@section('content')
<!-- Add content blog -->
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 mt-3 mb-5 m-2 text-gray-800">Edit Image Content : {{ $item->content_package->title }}</h1>
  </div>
  {{-- <div class="mb-4 ml-3">
    <img width="200px" src="{{ Storage::url($item->image) }}" alt="">
  </div> --}}

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route ('gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="content_packages_id">Content</label>
          <select name="content_packages_id" id="" class="form-control">
          <option value="{{ $item->content_packages_id }}">Not change</option>
            @foreach ($content_packages as $content_package)
              <option value="{{ $content_package->id }}">{{ $content_package->title }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" name="image" placeholder="Image">
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-4 mb-3">Update Image Content</button>
      </form>
    </div>
  </div>
</div>

@endsection