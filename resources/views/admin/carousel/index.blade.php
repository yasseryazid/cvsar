@extends('layouts.admin')
@section('title')
    Image Slider
@endsection
@section('breadcumbs')
    Layouts /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Image Slider</h4>
        <div class="d-flex justify-content-end">
            <a href="{{ route('carousels.create') }}" class="btn btn-primary btn-sm">Create</a>
        </div>
        <hr>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="table-responsive">
            <table id="example" class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1; @endphp
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->description }}</td>
                            <td><img src="{{ asset('storage/' . $row->image) }}" alt="Image" class="img-fluid"
                                    width="100"></td>
                            <td><a href="{{ route('carousels.edit', [$row->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('carousels.destroy', [$row->id]) }}" method="post"
                                    class="d-inline"
                                    onsubmit="return confirm('Are you sure want to remove this data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
