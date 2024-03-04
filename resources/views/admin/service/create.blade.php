@extends('layouts.admin')
@section('title')
    Create
@endsection
@section('breadcumbs')
    Services /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Create</h4>
        <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data"
            onsubmit="return confirm('Are you sure want to add this data?')">
            @csrf
            <div class="form-group pt-2">
                <label for="">Title</label>
                <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Input title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Description</label>
                <textarea name="description" id="" rows="5" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Input description">{{ old('description') }}</textarea>
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
