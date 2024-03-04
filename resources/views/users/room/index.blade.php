@extends('layouts.global')
@section('title')
Rooms
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/ANDI7111-min.JPG);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Rooms</h1>

        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Room Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
        </div>
        <div class="row g-4">
            @foreach ($data['rooms'] as $room)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('storage/' . $room->cover->image) }}" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">IDR{{ number_format($room->price) }}/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{ $room->name }}</h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <p class="text-body mb-3">{!! Str::limit(strip_tags($room->description), 100) !!}</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('room.detail', [$room->slug]) }}">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="d-flex justify-content-center">
                {{ $data['rooms']->links() }}
            </div>
        </div>
    </div>
</div>
<!-- Room End -->
@endsection
