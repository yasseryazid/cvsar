@extends('layouts.global')
@section('title')
    {{ $data['room']->name }}
@endsection
@section('content')
    <style>
        #wrap {
            background-color: #ddd;
            padding: 50px 0;
        }

        #slider {
            width: 300px;
            margin: 0 auto;

            img {
                width: 100%;
            }
        }

        button {
            margin: 0;
            padding: 0;
            background: none;
            border: none;
            border-radius: 0;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .slide-arrow {
            position: absolute;
            top: 50%;
            margin-top: -15px;
        }

        .prev-arrow {
            left: -20px;
            width: 0;
            height: 0;
            border-left: 0 solid transparent;
            border-right: 15px solid #f1062d;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

        .next-arrow {
            right: -20px;
            width: 0;
            height: 0;
            border-right: 0 solid transparent;
            border-left: 15px solid #f1062d;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $data['room']->name }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{ $data['room']->name }}</li>
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
                <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
            </div>
            <div class="row g-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="zoom-gallery">
                            <div class="slider slider-for">
                                @foreach ($data['room']->images as $item)
                                    <li class="list-item">
                                        <a href="{{ asset('storage/' . $item->image) }}"><img
                                                src="{{ asset('storage/' . $item->image) }}" class="img-fluid"></a>
                                    </li>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="slider slider-nav">
                            @php
                                $counter = 0;
                            @endphp
                            @foreach ($data['room']->images as $item)
                                <li class="list-item" style="margin-right: 10px">
                                    <a href="#"><img src="{{ asset('storage/' . $item->image) }}"
                                            class="img-fluid"></a>
                                </li>
                                @php
                                    $counter += 1;
                                @endphp
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>{{ $data['room']->name }}</h4>
                        <hr>
                        <table class="table table-hover table-borderless">
                            <tbody>
                                <tr>
                                    <td>Price</td>
                                    <td>: {{ number_format($data['room']->price) }} - IDR/Night</td>
                                </tr>
                                <tr>
                                    <td>Max</td>
                                    <td>: {{ $data['room']->max_person }} Person(s)</td>
                                </tr>
                            </tbody>
                        </table>
                        <textarea name="" id="" cols="30" rows="25" class="form-control" readonly>{!! strip_tags($data['room']->description) !!}</textarea>
                        <br>
                        <div class="d-flex justify-content-end">
                            @php
                                $message = '*' . $data['room']->name . "*\r\n*Price: IDR" . number_format($data['room']->price) . "*\r\n*Nama:* \r\n*Alamat:* \r\n*Email:* \r\n*Tgl Booking:*";
                            @endphp

                            <a href="javascript:void(0)" class="btn btn-sm btn-dark rounded py-2 px-4"
                                onclick="window.open('https://api.whatsapp.com/send?phone=6282197325590&text={{ urlencode(utf8_encode($message)) }}')"
                                target="_blank">Book Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room End -->
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<button class="slide-arrow prev-arrow"></button>',
            nextArrow: '<button class="slide-arrow next-arrow"></button>',
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });

        $('.zoom-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function(item) {

                }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        });
    </script>
@endsection
