@extends('layouts.client')
@section('title')
  {{ $menu->title }}
@endsection
@section('content')
<div class="content-wrapper">
  <section class="wrapper bg-gray">
    <div class="container pt-10 pt-md-14 text-center">
      <div class="row">
        <div class="col-xl-6 mx-auto">
          <h1 class="display-1 mb-4">Selamat Datang di CV.SAR!</h1>
          <p class="lead fs-lg mb-0">CV. Sumber Agung Rezeki</p>
        </div>
      </div>
    </div>
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;">
      <img src="https://cvsar.co.id/layouts/assets/img/photos/bg12.jpg" alt="">
    </figure>
  </section>
  <section class="wrapper bg-light angled upper-end lower-end">
    <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
      {!! $menu->content !!}
    </div>
  </section>
</div> @endsection
