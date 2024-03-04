@extends('layouts.admin')
@section('title')
  Upload New Document
@endsection
@section('breadcumbs')
  Members /
@endsection
@section('content')
  <div class="card card-body">
    
    <h4>Upload New Document </h4>
    <form action="{{ route('members.insert-file', [$data->id]) }}" onsubmit="Are you sure want to store this data?" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group pt-3">
        <label for="">File</label>
        <input type="file" name="file[]" id="" class="form-control" multiple>
        <small class="form-text text-muted">*Select all files that you want to upload</small>
      </div>

      <div class="d-flex justify-content-end pt-2">
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </form>
  </div>
@endsection