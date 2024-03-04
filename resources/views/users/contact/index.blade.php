@extends('layouts.global')
@section('title')
Contact
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/ANDI7111-min.JPG);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">EXPLORE SULSEL</h1>

        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Room Start -->
@foreach($data['explores'] as $explore)
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">{{ $explore->ttle }}</span></h1>
            <h6 class="section-title text-center text-primary text-uppercase">{{ $explore->description }}</h6>
        </div>
        <div class="row g-4">
            @foreach($explore->detail as $exploreDetail)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        @foreach($exploreDetail->images as $img)
                        <img class="img-fluid" src="{{ asset('storage/' . $img->image) }}" alt="">
                        @php
                        break;
                        @endphp
                        @endforeach
                        <a href="{{ $exploreDetail->map_url }}" target="_blank"><small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{ $exploreDetail->location }} <i class="fa fa-map"></i></small> </a>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{ $exploreDetail->title }}</h5>
                        </div>
                    </div>
                    <button type="button" class="accordion-button collapsed btn btn-primary btn-sm text-dark" data-bs-toggle="collapse" data-bs-target="#accordionTwo{{ $exploreDetail->id }}" aria-expanded="false" aria-controls="accordionTwo{{ $exploreDetail->id }}">
                        Read mores
                    </button>
                    <div id="accordionTwo{{ $exploreDetail->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @php $counter = 0; @endphp
                            @foreach ($exploreDetail->images as $img)
                            @if ($counter > 0)
                            <img src="{{ asset('storage/' . $img->image) }}" alt="" class="img-fluid mb-1" width="300"> <br>
                            @endif
                            @php $counter++; @endphp
                            @endforeach
                            <p>{{ $exploreDetail->description_id }} <br>
                                <hr> {{ $exploreDetail->description_en }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endforeach
@endsection
