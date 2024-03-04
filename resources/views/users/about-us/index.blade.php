@extends('layouts.global')
@section('title')
About Us
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/samara-1.jpg); margin-top: 80px !important"">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 mb-3 text-light animated slideInDown">About Us</h1>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-8">
                <h6 class="section-title text-start text-uppercase" style="color: #198754">About Us</h6>
                <h1 class="mb-4">{{ $data['about_us']->title ?? '' }}</span></h1>
                <p class="mb-4" style="text-align: justify">{!! nl2br($data['about_us']->description ?? '') !!}</p>
            </div>
            <div class="col-lg-4">
                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('img/samara-logo.png') }}">
            </div>
        </div>
    </div>
</div>

@endsection
