@extends('layouts.admin')
@section('title')
  Members
@endsection
@section('breadcumbs')
  Layouts /
@endsection
@section('content')
  <div class="card card-body">
    <h4>Members</h4>
    <div class="d-flex justify-content-between">
      <form action="{{ route('members.search') }}" method="GET">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="query" class="form-control" placeholder="Search by name or medical record number" value="{{ $searchQuery ?? '' }}">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
      </form>
      <div class="form-group">
        <a href="{{ route('members.create') }}" class="btn btn-primary">Create</a>
      </div>
    </div>
    <hr>
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <th>#</th>
          <th>Medical Record Number</th>
          <th>Name</th>
          <th>Date of Birth</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Gender</th>
        </thead>
        <tbody>
          @foreach ($data as $row)
            <tr>
              <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1 }}</td>
              <td>{{ $row->medical_record_number }}</td>
              <td>{{ $row->name }}</td>
              <td style="white-space: nowrap">{{ Carbon\Carbon::createFromFormat('Y-m-d', $row->date_of_birth)->translatedFormat('d F Y') }}</td>
              <td>{{ $row->phone_number }}</td>
              <td>{{ $row->address }}</td>
              <td>{{ $row->gender }}</td>
              <td style="white-space: nowrap">
                <a href="{{ route('members.edit', [$row->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                <a href="{{ route('members.show', [$row->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                <form action="{{ route('members.destroy', [$row->id]) }}" method="post" class="d-inline"
                  onsubmit="return confirm('Are you sure want to remove this data?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
    </div>
  </div>
@endsection