@extends('layouts.admin')
@section('title')
  Menu
@endsection
@section('breadcumbs')
  Layouts /
@endsection
@section('content')
  <div class="card card-body">
    <h4>Menus</h4>
    <div class="d-flex justify-content-between">
      <form action="{{ route('menus.search') }}" method="GET">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="query" class="form-control" placeholder="Search by menus title" value="{{ $searchQuery ?? '' }}">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
      </form>
      <div class="form-group">
        <a href="{{ route('menus.create') }}" class="btn btn-primary">Create</a>
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
          <th>Menu</th>
          <th>URL</th>
          <th>{{$data}}</th>
        </thead>
        <tbody>
          @foreach ($data as $row)
            <tr>
              <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1 }}</td>
              <td>{{ $row->title }}</td>
              <td>{{ $row->url }}</td>
              <td style="white-space: nowrap; text-align: end;">
                <a href="{{ route('menus.edit', [$row->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                {{-- <a href="{{ route('menus.show', [$row->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a> --}}
                <form action="{{ route('menus.destroy', [$row->id]) }}" method="post" class="d-inline"
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