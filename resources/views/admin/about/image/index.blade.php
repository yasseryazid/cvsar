@extends('layouts.admin')
@section('title')
    Images in About Us
@endsection
@section('breadcumbs')
    Layouts /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Images in About Us</h4>
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
                            <td><img src="{{ asset('storage/' . $row->image) }}" alt="Image" class="img-fluid"
                                    width="100"></td>
                            <td><a href="{{ route('image-about.edit', [$row->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
