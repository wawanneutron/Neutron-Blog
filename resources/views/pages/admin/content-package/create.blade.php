@extends('layouts.admin.admin')

@section('content')
<!-- Add content blog -->
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 mt-3 mb-5 text-gray-800">Add Content Blog</h1>
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

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route ('content-package.store') }}" method="POST">
 
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control @error ('title') is-invalid @enderror" name="title" placeholder="Title" value="{{ old ('title') }}">
          @error('title')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="title_content">Title Content</label>
          <input type="text" class="form-control @error ('title_content') is-invalid @enderror" name="title_content" placeholder="Title sub" value="{{ old ('title_content') }}">
          @error('title_content')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="writer">Writer</label>
          <input type="text" class="form-control @error ('writer') is-invalid @enderror" name="writer" placeholder="Writer" value="{{ Auth::user()->name }}" readonly>
          @error('writer')
          <div class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="date_writer">Date writer</label>
          <input type="date" class="form-control @error ('date_writer') is-invalid @enderror" name="date_writer" placeholder="Date Writer" value="{{ old ('date_writer') }}">
          @error('date_writer')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="category">Category</label>
          <input type="text" class="form-control @error ('category') is-invalid @enderror" name="category" placeholder="Category" value="{{ old ('category') }}">
          @error('category')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="content" cols="30" rows="10" class="d-block form-control @error ('content') is-invalid @enderror">{{ old ('content') }}</textarea>
          @error('content')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="about_writer">About writer</label>
          <textarea name="about_writer" id="about_writer" cols="30" rows="10" class="d-block form-control @error ('about_writer') is-invalid @enderror">{{ old ('about_writer') }}</textarea>
          @error('about_writer')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-4 mb-3">Save</button>
      </form>
    </div>
  </div>
</div>

@endsection