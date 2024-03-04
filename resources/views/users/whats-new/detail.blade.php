@extends('layouts.global')
@section('title')
    {{ $data['whatsNew']->title }}
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $data['whatsNew']->title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{ $data['whatsNew']->title }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Whats New</h6>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('storage/' . $data['whatsNew']->image) }}" alt="" class="img-fluid">
                    <h4 class="text-center pt-3">{{ $data['whatsNew']->title }}</h4>
                    {!! $data['whatsNew']->description !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Room End -->
@endsection
