@extends('layouts.admin')
@section('title')
  Create
@endsection
@section('breadcumbs')
  Menus /
@endsection
@section('content')
  <div class="card card-body">
    <h4>Create</h4>
    <form action="{{ route('menus.store') }}" onsubmit="Are you sure want to store this data?" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group pt-2">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="url">URL</label>
        <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}">
        @error('url')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-group pt-2">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
        @error('content')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="d-flex justify-content-end pt-2">
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </form>
  </div>
@endsection

@section('script')
  <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

  <script>
    ClassicEditor
      .create( document.querySelector( '#content' ) )
      .then( content => {
        // console.log( content );
      } )
      .catch( error => {
        console.error( error );
      } );
  </script>
@endsection
