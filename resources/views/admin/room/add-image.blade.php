@extends('layouts.admin')
@section('title')
    {{ $data->name }}
@endsection
@section('breadcumbs')
    Rooms /
@endsection
@section('content')
    <div class="card card-body">
        <h4>{{ $data->name }}</h4>
        <hr>
        <form action="{{ route('rooms.store-image', [$data->id]) }}" method="post" enctype="multipart/form-data"
            onsubmit="return confirm('Are you sure want to submit this data?')">
            @csrf
            <div class="form-group pt-3">
                <label for="">Image</label>
                <input type="file" name="image[]" id="" class="form-control" multiple>
            </div>

            <div class="d-flex justify-content-end pt-3">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        </form>
    </div>
@endsection
