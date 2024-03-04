@extends('layouts.admin')
@section('title')
  Edit Document
@endsection
@section('breadcumbs')
  Members /
@endsection
@section('content')
  <div class="card card-body">
    <h4>Edit Document</h4>
    <form action="{{ route('document.update', [$data->id]) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group pt-3">
        <label for="">File</label>
        <input type="file" name="file" id="" class="form-control">
      </div>

      <div class="d-flex justify-content-end pt-2">
          <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </form>
  </div>
@endsection