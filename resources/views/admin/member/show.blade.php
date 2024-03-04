@extends('layouts.admin')
@section('title')
    {{ $member->name }}
@endsection
@section('breadcumbs')
    Members /
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
            <div class="col-md-12">
                <h4>{{ $member->name }}</h4>
                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ route('members.upload-file', [$member->id]) }}" class="btn btn-primary" style="text-transform: none;">Upload New Document</a>
                </div>

                <hr>
                <table class="table table-hover table-borderless">
                    <tbody>
                        <tr>
                          <td>ID</td>
                          <td>: {{ $member->id }}</td>
                        </tr>
                        <tr>
                            <td>Medical Record Number</td>
                            <td>: {{ $member->medical_record_number }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>: {{ $member->name }}</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>: {{ $member->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>: {{ $member->phone_number }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>: {{ $member->address }}</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>: {{ $member->gender }}</td>
                        </tr>
                    </tbody>
              </table>
              <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Document</th>
                    </thead>
                    <tbody>
                        @foreach ($mcu as $document)
                        <tr>
                            <td>{{ ($mcu->currentPage() - 1) * $mcu->perPage() + $loop->index + 1 }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $document->document) }}" target="_blank">
                                    Document MCU {{ $document->created_at->translatedFormat('d F Y H:i') }}
                                </a>
                            </td>
                            <td style="white-space: nowrap">
                                <a href="{{ route('document.add-file', [$document->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{ asset('storage/' . $document->document) }}" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                <form action="{{ route('document.destroy-file', [$document->id]) }}" method="post" class="d-inline"
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

                <div class="mt-2">
                    {{ $mcu->links() }}
                </div>
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
