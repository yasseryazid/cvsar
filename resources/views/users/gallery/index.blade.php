@extends('layouts.global')
@section('title')
    Gallery
@endsection
@section('content')
    <style>
        #portfolio {
            padding: 60px 0;
        }

        #portfolio #portfolio-flters {
            padding: 0;
            margin: 5px 0 35px 0;
            list-style: none;
            text-align: center;
        }

        #portfolio #portfolio-flters li {
            cursor: pointer;
            margin: 15px 15px 15px 0;
            display: inline-block;
            padding: 6px 10px;
            font-size: 16px;
            line-height: 20px;
            color: #413e66;
            margin-bottom: 5px;
            transition: all 0.3s ease-in-out;
        }

        #portfolio #portfolio-flters li:hover,
        #portfolio #portfolio-flters li.filter-active {
            color: #FEAF39;
        }

        #portfolio #portfolio-flters li:last-child {
            margin-right: 0;
        }

        #portfolio .portfolio-item {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        #portfolio .portfolio-item .portfolio-wrap {
            overflow: hidden;
            position: relative;
            margin: 0;
        }

        #portfolio .portfolio-item .portfolio-wrap:hover img {
            opacity: 0.4;
            transition: 0.3s;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            opacity: 0;
            transition: 0.2s linear;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info h4 {
            font-size: 22px;
            line-height: 1px;
            font-weight: 700;
            margin-bottom: 14px;
            padding-bottom: 0;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info h4 a {
            color: #fff;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info h4 a:hover {
            color: #FEAF39;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info p {
            padding: 0;
            margin: 0;
            color: #f8fcff;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-preview,
        #portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-details {
            display: inline-block;
            line-height: 1;
            text-align: center;
            width: 36px;
            height: 36px;
            background: #FEAF39;
            border-radius: 50%;
            margin: 10px 4px 0 4px;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-preview i,
        #portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-details i {
            padding-top: 6px;
            font-size: 22px;
            color: #fff;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-preview:hover,
        #portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-details:hover {
            background: #42c3e8;
        }

        #portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-preview:hover i,
        #portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-details:hover i {
            color: #fff;
        }

        #portfolio .portfolio-item .portfolio-wrap:hover {
            background: #282646;
        }

        #portfolio .portfolio-item .portfolio-wrap:hover .portfolio-info {
            opacity: 1;
        }

    </style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/ANDI7111-min.JPG);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Room Start -->
    <div id="portfolio" class="portfolio container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-interior">INTERIOR</li>
                        <li data-filter=".filter-exterior">EXTERIOR</li>
                        <li data-filter=".filter-food">FOOD AND BEVERAGE</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                @php
                    $counter = 0;
                @endphp

                @foreach ($data['galleries'] as $item)
                    @if ($item->kategori == 'INTERIOR')
                        <div class="col-lg-4 col-md-6 portfolio-item filter-interior" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <p>{{ $item->title }}</p>
                                    <div>
                                        <a href="{{ asset('storage/' . $item->image) }}" class="link-preview venobox"
                                            data-gall="portfolioGallery" title="{{ $item->title }}"><i
                                                class="ion ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                @foreach ($data['galleries'] as $item)
                    @if ($item->kategori == 'EXTERIOR')
                        <div class="col-lg-4 col-md-6 portfolio-item filter-exterior" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <p>{{ $item->title }}</p>
                                    <div>
                                        <a href="{{ asset('storage/' . $item->image) }}" class="link-preview venobox"
                                            data-gall="portfolioGallery" title="{{ $item->title }}"><i
                                                class="ion ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                @foreach ($data['galleries'] as $item)
                    @if ($item->kategori == 'FOOD AND BEVERAGE')
                        <div class="col-lg-4 col-md-6 portfolio-item filter-food" data-wow-delay="0.2s">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <p>{{ $item->title }}</p>
                                    <div>
                                        <a href="{{ asset('storage/' . $item->image) }}" class="link-preview venobox"
                                            data-gall="portfolioGallery" title="{{ $item->title }}"><i
                                                class="ion ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
