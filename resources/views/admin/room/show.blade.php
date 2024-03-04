@extends('layouts.admin')
@section('title')
    {{ $data->name }}
@endsection
@section('breadcumbs')
    Rooms /
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
    <div class="card card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="zoom-gallery">
                    <div class="slider slider-for">
                        @foreach ($data->images as $item)
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
                    @foreach ($data->images as $item)
                        <li class="list-item" style="margin-right: 10px">
                            <a href="#"><img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"></a>
                        </li>
                        @php
                            $counter += 1;
                        @endphp
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h4>{{ $data->name }}</h4>
                <hr>
                <table class="table table-hover table-borderless">
                    <tbody>
                        <tr>
                            <td>Price</td>
                            <td>: {{ number_format($data->price) }} - IDR/Night</td>
                        </tr>
                        <tr>
                            <td>Max</td>
                            <td>: {{ $data->max_person }} Person(s)</td>
                        </tr>
                    </tbody>
                </table>
                <textarea name="" id="" cols="30" rows="25" class="form-control" readonly>{!! strip_tags($data->description) !!}</textarea>

            </div>
        </div>
        <hr>
        <div class="row pt-3">
            <div class="col-md-12">
                <h4>Image Manipulations</h4>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('rooms.add-image', [$data->id]) }}" class="btn btn-primary btn-sm">Add Image</a>
                </div>
                <div class="table responsive">
                    <table class="table table-hover">
                        <tbody>
                            @foreach ($data->images as $item)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt=""
                                            width="300">
                                    </td>
                                    <td>
                                        <form action="{{ route('rooms.destroy-image', [$item->id]) }}"
                                            onsubmit="return confirm('Are you sure want to remove this image?')"
                                            method="post">
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
        </div>
    </div>
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
