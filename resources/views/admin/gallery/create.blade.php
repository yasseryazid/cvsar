@extends('layouts.admin')
@section('title')
    Create
@endsection
@section('breadcumbs')
    Gallery /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Create</h4>
        <form action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data"
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
                <label for="">Kategori</label>
                <select name="kategori" id="" class="form-control @error('kategori') is-invalid @enderror">
                    <option value=""></option>
                    <option value="INTERIOR" {{ old('kategori') == 'INTERIOR' ? 'selected' : '' }}>INTERIOR</option>
                    <option value="EXTERIOR" {{ old('kategori') == 'EXTERIOR' ? 'selected' : '' }}>EXTERIOR</option>
                    <option value="FOOD AND BEVERAGE" {{ old('kategori') == 'FOOD AND BEVERAGE' ? 'selected' : '' }}>FOOD
                        AND BEVERAGE</option>
                </select>
                @error('kategori')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Image</label>
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
