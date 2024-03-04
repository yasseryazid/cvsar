@extends('layouts.admin')
@section('title')
    About Us
@endsection
@section('breadcumbs')
    Layouts /
@endsection
@section('content')
    <div class="card card-body">
        <h4>About Us</h4>
        <hr>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-11">
                <h4>{{ $data->title ?? '' }}</h4>
            </div>
            <div class="col-1">
                <a href="{{ route('abouts.edit', [$data->id ?? '']) }}">Edit</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>{{ $data->description ?? '' }}</p>
            </div>
        </div>
    </div>
@endsection
