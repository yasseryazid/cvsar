@extends('layouts.admin')
@section('title')
Explore
@endsection
@section('breadcumbs')
<a href="{{ route('explores.index') }}">Explore / </a>
<a href="#">Create</a>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card card-body">
            <h4>Create</h4>
            <form action="{{ route('explores.store') }}" method="post" onsubmit="return confirm('Are you sure want to add this data?')">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" class="form-control" required>
                </div>
                <div class="form-group pt-2">
                    <label for="">Description (Optional)</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="d-flex justify-content-end pt-2">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection