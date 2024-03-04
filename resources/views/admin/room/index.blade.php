@extends('layouts.admin')
@section('title')
    Rooms
@endsection
@section('breadcumbs')
    Layouts /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Rooms</h4>
        <div class="d-flex justify-content-end">
            <a href="{{ route('rooms.create') }}" class="btn btn-primary btn-sm">Create</a>
        </div>
        <hr>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @foreach ($data as $row)
            <div class="row">
                <div class="col-md-9">
                    <b>{{ $row->name }}</b>
                </div>
                <div class="col-md-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('rooms.edit', [$row->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ route('rooms.show', [$row->id]) }}" class="btn btn-success btn-sm">Show</a>
                        <form action="{{ route('rooms.destroy', [$row->id]) }}" method="post" class="d-inline"
                            onsubmit="return confirm('Are you sure want to remove this data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    {!! Str::limit(strip_tags($row->description), 800) !!}
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
