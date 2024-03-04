@extends('layouts.admin')
@section('title')
    Edit
@endsection
@section('breadcumbs')
    Image Slider /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Edit</h4>
        <form action="{{ route('image-about.update', [$data->id]) }}" method="post" enctype="multipart/form-data"
            onsubmit="return confirm('Are you sure want to update this data?')">
            @csrf
            @method('PUT')
            <div class="form-group pt-2">
                <label for="">Image</label>
                <br>
                <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid" alt="preview_image" width="200">
                <input type="file" name="image" id="" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-end pt-2">
                <button type="submit" class="btn btn-primary btn-sm text-right">Submit</button>
            </div>
        </form>
    </div>
@endsection
