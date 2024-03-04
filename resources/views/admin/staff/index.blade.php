@extends('layouts.admin')
@section('title')
    Staffs
@endsection
@section('breadcumbs')
    Layouts /
@endsection
@section('content')
    <div class="card card-body">
        <h4>Staffs</h4>
        <div class="d-flex justify-content-end">
            <a href="{{ route('staffs.create') }}" class="btn btn-primary btn-sm">Create</a>
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
                        <th>Fullname</th>
                        <th>Job</th>
                        <th>FB</th>
                        <th>Twitter</th>
                        <th>Instagram</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1; @endphp
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->job }}</td>
                            <td>{{ $row->facebook_account }}</td>
                            <td>{{ $row->twitter_account }}</td>
                            <td>{{ $row->instagram_account }}</td>
                            <td><img src="{{ asset('storage/' . $row->photo) }}" alt="Image" class="img-fluid"
                                    width="100"></td>
                            <td><a href="{{ route('staffs.edit', [$row->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('staffs.destroy', [$row->id]) }}" method="post"
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
