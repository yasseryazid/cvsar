@extends('layouts.admin')
@section('title')
    Edit
@endsection
@section('breadcumbs')
    About Us /
@endsection
@section('content')
    <div class="card card-body">
        <h4>About Us</h4>
        <hr>
        <form action="{{ route('abouts.update', [$data->id]) }}" method="post"
            onsubmit="return confirm('Are you sure want to change this data?')">
            @csrf
            @method('PUT')
            <div class="form-group pt-2">
                <label for="">Title</label>
                <input type="text" name="title" id="" placeholder="Title" class="form-control"
                    value="{{ $data->title }}">
            </div>
            <div class="form-group pt-2">
                <label for="">Description</label>
                <textarea name="description" id="" placeholder="Description" class="form-control">{{ $data->description }}</textarea>
            </div>
            <div class="d-flex justify-content-end pt-2">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        </form>
    </div>
@endsection
