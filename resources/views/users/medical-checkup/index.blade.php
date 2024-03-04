@extends('layouts.global')
@section('title')
  Medical Checkup
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/samara-1.jpg); margin-top: 80px !important" >
  <div class="container-fluid page-header-inner py-5">
      <div class="container text-center pb-5">
          <h1 class="display-3 mb-3 text-light animated slideInDown">Medical Checkup</h1>
      </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Medical Checkup Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="card card-body">
      <h4>Download Hasil Medical Checkup</h4>
      <div class="d-flex justify-content-between">
        <form action="{{ route('medical-checkup.index') }}" method="GET">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="keyword" class="form-control" style="width: 326px" placeholder="No. RM / No.Telp" value="{{ $keyword ?? '' }}" required>
        </div>
        
        <div class="input-group mb-3">
            <input type="date" name="date_of_birth" class="form-control" value="{{ $data->date_of_birth ?? '' }}" required>
        </div>
        
        <div class="input-group mb-3">
            <div class="input-group-append">
                <button class="btn btn-outline-light" type="submit" style="text-transform: none; background-color: #008CBA;">
                  Submit
                </button>
            </div>
        </div>
        
        </form>
      </div>
      <hr>
      @error('data_not_found')
        <div class="alert alert-danger">
          {{ $message }}
        </div>
      @enderror
      
      <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>Document</th>
                <th class="text-center">Download</th>
            </thead>
            <tbody>

                @if ($data)
                  @foreach ($data->documents as $document)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            <a class="text-dark" href="{{ asset('storage/' . $document->document) }}" target="_blank"><span>Document MCU {{ $document->created_at->translatedFormat('d F Y H:i') }}</span>
                            </a>
                        </td>
                        <td class="text-center">
                          <a class="text-success" href="{{ asset('storage/' . $document->document) }}" target="_blank">
                           <i class="fa fa-download"></i>
                        </a>
                        </td>
                    </tr>
                  @endforeach
                @endif
                
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Medical Checkup End -->
@endsection