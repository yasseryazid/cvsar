@extends('layouts.admin')
@section('title')
    Edit
@endsection
@section('breadcumbs')
    Gellery /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Edit</h4>
        <form action="{{ route('galleries.update', [$data->id]) }}" method="post" enctype="multipart/form-data"
            onsubmit="return confirm('Are you sure want to change this data?')">
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
                <label for="">Kategori</label>
                <select name="kategori" id="" class="form-control @error('kategori') is-invalid @enderror">
                    <option value=""></option>
                    <option value="WEDDING" {{ $data->kategori == 'WEDDING' ? 'selected' : '' }}>WEDDING</option>
                    <option value="STAFF" {{ $data->kategori == 'STAFF' ? 'selected' : '' }}>STAFF</option>
                    <option value="INTERIOR" {{ $data->kategori == 'INTERIOR' ? 'selected' : '' }}>INTERIOR</option>
                    <option value="EXTERIOR" {{ $data->kategori == 'EXTERIOR' ? 'selected' : '' }}>EXTERIOR</option>
                    <option value="FOOD AND BEVERAGE" {{ $data->kategori == 'FOOD AND BEVERAGE' ? 'selected' : '' }}>FOOD
                        AND BEVERAGE</option>
                </select>
                @error('kategori')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Image</label><br>
                <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid" alt="">
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
