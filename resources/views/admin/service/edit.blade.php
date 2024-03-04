@extends('layouts.admin')
@section('title')
    Edit
@endsection
@section('breadcumbs')
    Services /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Edit</h4>
        <form action="{{ route('services.update', [$data->id]) }}" method="post" enctype="multipart/form-data"
            onsubmit="return confirm('Are you sure want to add this data?')">
            @csrf
            @method('PUT')
            <div class="form-group pt-2">
                <label for="">Title</label>
                <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Input title" value="{{ $data->title }}">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Description</label>
                <textarea name="description" id="" rows="5" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Input description">{{ $data->description }}</textarea>
                @error('description')
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
