@extends('layouts.admin')
@section('title')
    Edit
@endsection
@section('breadcumbs')
    Rooms /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Edit</h4>
        <form action="{{ route('rooms.update', [$data->id]) }}" onsubmit="Are you sure want to update this data?"
            method="post">
            @csrf
            @method('PUT')
            <div class="form-group pt-2">
                <label for="">Room Name</label>
                <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror"
                    value="{{ $data->name }}">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Url (Slug)</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon14">{{ url('/') }}/</span>
                    <input type="text" name="slug" id="" class="form-control @error('slug') is-invalid @enderror"
                        placeholder="Input url without space (ex. executive-room)" value="{{ $data->slug }}">
                </div>
                @error('slug')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Price (IDR)</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon14">IDR </span>
                    <input type="text" name="price" id="" class="form-control @error('price') is-invalid @enderror"
                        placeholder="Input price" value="{{ $data->price }}">
                </div>
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group pt-2">
                <label for="">Max Person Per Room</label>
                <input type="text" name="max_person" id="" class="form-control @error('max_person') is-invalid @enderror"
                    value="{{ $data->max_person }}">
                @error('max_person')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group pt-2">
                <label for="">Description</label>
                <textarea name="description" class="my-editor form-control @error('description') is-invalid @enderror" id="my-editor"
                    cols="30" rows="10">{{ $data->description }}</textarea>
                @error('description')
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
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('my-editor');
    </script>
@endsection
