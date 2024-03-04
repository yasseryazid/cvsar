@extends('layouts.client') 
@section('title') 
  Profile
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
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
        <div class="col-lg-6 position-relative order-lg-2">
          <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem; transform: translate3d(0px, 69px, 0px);"></div>
          <div class="overlap-grid overlap-grid-2">
            <div class="item">
              <figure class="rounded shadow">
                <img src="./assets/img/photos/about2.jpg" srcset="./assets/img/photos/about2@2x.jpg 2x" alt="">
              </figure>
            </div>
            <div class="item">
              <figure class="rounded shadow">
                <img src="https://cvsar.co.id/layouts/assets/img/photos/about3.jpg" srcset="https://cvsar.co.id/layouts/assets/img/photos/about3@2x.jpg 2x" alt="">
              </figure>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 362.5" data-inject-url="https://cvsar.co.id/layouts/assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4">
            <path class="lineal-stroke" d="M343.4 302.9L61 302.5c-25.3-.2-47.5-16.8-54.8-40.9l-3.9-12.9c-7.1-24.2 2.5-50.3 23.5-64.2L262.1 29.8c5.7-3.7 13.3-2.1 17 3.6.7 1 1.2 2.1 1.5 3.2l74.3 249.8c2.4 6.4-.9 13.5-7.3 15.8-1.3.5-2.8.7-4.2.7zM261.8 59.4L39.3 205c-12 7.9-17.4 22.8-13.4 36.6l3.8 12.9c4.2 13.8 16.8 23.3 31.2 23.4l265.8.4-64.9-218.9z"></path>
            <path class="lineal-stroke" d="M138 362.5c-40.4 0-72.8-31.1-73.6-70.8 0-6.8 5.5-12.3 12.3-12.3 6.6 0 12.1 5.2 12.3 11.8.6 26.2 22.1 46.7 49 46.7 14.2 0 27.7-6.2 37-16.9 4.5-5.1 12.2-5.7 17.4-1.2 5.1 4.5 5.7 12.2 1.2 17.4-14 16.1-34.3 25.3-55.6 25.3z"></path>
            <path class="lineal-fill" d="M183.4 96l57.8 194.5 102.1.1-74.5-250.5L183.4 96z"></path>
            <path class="lineal-stroke" d="M343.4 302.9l-102.1-.1c-5.4 0-10.2-3.6-11.8-8.8L171.6 99.5c-1.6-5.2.5-10.8 5.1-13.8l85.4-55.9c5.7-3.7 13.3-2.1 17 3.6.7 1 1.2 2.1 1.5 3.2l74.5 250.6c1.9 6.5-1.8 13.4-8.3 15.3-1.1.2-2.3.4-3.4.4zm-92.9-24.7l76.4.1-65.1-218.9-63.9 41.8 52.6 177z"></path>
            <path class="lineal-stroke" d="M351.8 330.6c-5.4 0-10.2-3.6-11.8-8.8l-91-306c-2.1-6.5 1.3-13.4 7.8-15.6 6.5-2.1 13.4 1.3 15.6 7.8.1.3.2.5.2.8l91 305.9c1.9 6.5-1.8 13.4-8.3 15.3-1.1.4-2.3.6-3.5.6zM338 91.7c-6.8 0-12.3-5.5-12.3-12.3 0-1.8.4-3.6 1.2-5.3l13.4-28.5c2.9-6.2 10.2-8.8 16.4-5.9 6.2 2.9 8.8 10.2 5.9 16.4l-13.4 28.5c-2.1 4.3-6.4 7.1-11.2 7.1zm28.2 64.9c-6.8 0-12.3-5.5-12.3-12.3 0-5.7 3.9-10.6 9.4-12l31.1-7.5c6.6-1.5 13.2 2.6 14.7 9.3 1.5 6.5-2.5 13-9 14.7l-31.2 7.4c-.8.3-1.8.4-2.7.4zm29.1 90c-2.7 0-5.4-.9-7.5-2.6l-24.9-19.4c-5.4-4.2-6.3-11.9-2.2-17.3s11.9-6.3 17.3-2.2l24.9 19.4c5.4 4.2 6.3 11.9 2.1 17.3-2.3 3-5.9 4.7-9.7 4.8z"></path>
          </svg>
          <h2 class="display-4 mb-3">Siapa Kami?</h2>
          <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 447" data-inject-url="https://cvsar.co.id/layouts/assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4">
            <path class="lineal-stroke" d="M102.4 447C45.8 447 0 401.1 0 344.6s45.9-102.4 102.4-102.4c36.3 0 69.9 19.2 88.3 50.5 4.1 6.9 1.8 15.8-5.2 19.9-6.9 4.1-15.8 1.8-19.9-5.2-20.5-34.9-65.4-46.6-100.3-26.1s-46.6 65.4-26.1 100.3 65.4 46.6 100.3 26.1c10.2-6 18.8-14.3 25-24.3 4.3-6.8 13.2-8.9 20.1-4.6 6.8 4.3 8.9 13.2 4.6 20.1-18.7 30-51.5 48.2-86.8 48.1zm395.1-119.8H254.3c-8-.2-14.4-6.9-14.2-14.9.2-7.7 6.4-14 14.2-14.2h243.1c8 .2 14.4 6.9 14.2 14.9-.2 7.8-6.4 14-14.1 14.2zm-91.2 63.9h-152c-8-.2-14.4-6.9-14.2-14.9.2-7.7 6.4-14 14.2-14.2h152c8 .2 14.4 6.9 14.2 14.9-.2 7.7-6.5 14-14.2 14.2z"></path>
            <circle class="lineal-fill" cx="102.4" cy="102.4" r="87.8"></circle>
            <path class="lineal-stroke" d="M102.4 204.8C45.8 204.8 0 158.9 0 102.4S45.8 0 102.4 0s102.4 45.8 102.4 102.4c-.1 56.5-45.9 102.3-102.4 102.4zm0-175.7c-40.5 0-73.3 32.8-73.3 73.3s32.8 73.3 73.3 73.3 73.3-32.8 73.3-73.3c-.1-40.5-32.9-73.2-73.3-73.3zM497.5 85H254.3c-8-.2-14.4-6.9-14.2-14.9.2-7.7 6.4-14 14.2-14.2h243.1c8 .2 14.4 6.9 14.2 14.9-.2 7.8-6.4 14-14.1 14.2zm-91.2 63.8h-152c-8-.2-14.4-6.9-14.2-14.9.2-7.7 6.4-14 14.2-14.2h152c8 .2 14.4 6.9 14.2 14.9-.2 7.8-6.5 14-14.2 14.2z"></path>
          </svg>
          <h2 class="display-4 mb-4 px-lg-14">Berikut adalah 3 langkah kami melakukan eksekusi.</h2>
        </div>
      </div>
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="card me-lg-6">
            <div class="card-body p-6">
              <div class="d-flex flex-row">
                <div>
                  <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                    <span class="number">01</span>
                  </span>
                </div>
                <div>
                  <h4 class="mb-1">Mengumpulkan Ide</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="card ms-lg-13 mt-6">
            <div class="card-body p-6">
              <div class="d-flex flex-row">
                <div>
                  <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                    <span class="number">02</span>
                  </span>
                </div>
                <div>
                  <h4 class="mb-1">Menganalisis Data</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="card mx-lg-6 mt-6">
            <div class="card-body p-6">
              <div class="d-flex flex-row">
                <div>
                  <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                    <span class="number">03</span>
                  </span>
                </div>
                <div>
                  <h4 class="mb-1">Finalisasi Produk</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <h2 class="display-6 mb-3">How It Works?</h2>
          <p class="lead fs-lg pe-lg-5">Temukan semua yang perlu Anda ketahui dan lebih banyak lagi tentang cara kami membuat model proses bisnis.</p>
          <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper bg-light angled upper-end lower-end">
    <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
      <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
          <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem; transform: translate3d(0px, 171px, 0px);"></div>
          <figure class="rounded">
            <img src="https://cvsar.co.id/layouts/assets/img/photos/about4.jpg" srcset="https://cvsar.co.id/layouts/assets/img/photos/about4@2x.jpg 2x" alt="">
          </figure>
        </div>
        <div class="col-lg-6">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320.8 409.6" data-inject-url="https://cvsar.co.id/layouts/assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4">
            <path class="lineal-fill" d="M276.1 367.9v-8.5c0-63.6-52.1-115.7-115.7-115.7s-115.7 52-115.7 115.7v8.5c0 16.6 13.4 30 30 30h171.5c16.5 0 29.9-13.4 29.9-30z"></path>
            <path class="lineal-stroke" d="M246.1 409.6H74.6c-23 0-41.7-18.7-41.7-41.7v-8.5c0-70.4 57.1-127.5 127.5-127.5S287.9 289 287.9 359.4v8.5c-.1 23-18.7 41.7-41.8 41.7zm-85.7-154.2c-57.4.1-103.9 46.6-104 104v8.5c0 10.1 8.2 18.2 18.2 18.2h171.5c10.1 0 18.2-8.2 18.2-18.2v-8.5c0-57.5-46.5-104-103.9-104zm145.5-109.9h-23.5c0-67.4-54.6-122-122-122s-122 54.6-122 122H14.9C14.9 65.3 80.2 0 160.4 0s145.5 65.3 145.5 145.5z"></path>
            <path class="lineal-stroke" d="M160.4 251.3c-57 0-103.2-46.2-103.2-103.2S103.4 44.9 160.4 44.9s103.2 46.2 103.2 103.2c-.1 57-46.3 103.1-103.2 103.2zm0-182.9c-44 0-79.7 35.7-79.7 79.7s35.7 79.7 79.7 79.7 79.7-35.7 79.7-79.7c-.1-44-35.7-79.6-79.7-79.7z"></path>
            <path class="lineal-fill" d="M68.3 130.4c0-5.6-2.9-10.8-7.6-13.8-15-9.4-34.7-4.9-44.1 10.1-3.2 5.1-4.9 11.1-4.9 17.1v21.5c0 17.7 14.4 32 32.1 32.1 6 0 11.8-1.7 16.9-4.9 4.7-3 7.6-8.2 7.6-13.8v-48.3z"></path>
            <path class="lineal-stroke" d="M43.8 209.2C19.6 209.1 0 189.5 0 165.3v-21.5C0 119.6 19.5 100 43.7 100c8.2 0 16.3 2.3 23.3 6.7 8.2 5.1 13.1 14.1 13.1 23.8v48.4c.1 9.7-4.9 18.7-13.1 23.8-6.9 4.2-15 6.5-23.2 6.5zm0-85.8c-11.2 0-20.3 9.1-20.4 20.4v21.5c0 11.2 9.1 20.3 20.4 20.4 3.8 0 7.5-1.1 10.7-3.1 1.3-.9 2.1-2.3 2.1-3.9v-48.3c0-1.6-.8-3-2.1-3.9-3.2-2-6.9-3-10.7-3.1z"></path>
            <path class="lineal-fill" d="M252.4 130.4c0-5.6 2.9-10.8 7.6-13.8 15-9.4 34.7-4.9 44.1 10.1 3.2 5.1 4.9 11.1 4.9 17.1v21.5c0 17.7-14.4 32-32.1 32.1-6 0-11.8-1.7-16.9-4.9-4.7-3-7.6-8.2-7.6-13.8v-48.3z"></path>
            <path class="lineal-stroke" d="M276.9 209.2c-8.2 0-16.2-2.3-23.1-6.6-8.2-5.1-13.2-14.1-13.1-23.8v-48.4c-.1-9.7 4.9-18.7 13.1-23.8 20.5-12.8 47.5-6.6 60.3 13.9 4.4 7 6.7 15.1 6.7 23.3v21.5c0 24.2-19.6 43.8-43.9 43.9zm0-85.8c-3.8 0-7.5 1.1-10.7 3.1-1.3.9-2.1 2.3-2.1 3.9v48.4c0 1.6.8 3 2.1 3.9 9.5 5.9 22.1 3 28-6.5 2-3.2 3.1-7 3.1-10.8v-21.5c0-11.3-9.1-20.4-20.4-20.5z"></path>
            <path class="lineal-stroke" d="M251.2 195.9h-83.3c-6.5 0-11.7-5.2-11.7-11.7s5.2-11.7 11.7-11.7h83.3c6.5 0 11.7 5.3 11.7 11.7 0 6.5-5.3 11.7-11.7 11.7z"></path>
          </svg>
          <h2 class="display-4 mb-8">Mari Kembangkan Bisnis Anda Bersama Kami</h2>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1">
                <i class="uil uil-location-pin-alt"></i>
              </div>
            </div>
            <div>
              <h5 class="mb-1">Alamat</h5>
              <address>Perum Griya Nadhifa C.24, Giripeni, Wates, Kab. Kulon Progo, D.I. Yogyakarta</address>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1">
                <i class="uil uil-phone-volume"></i>
              </div>
            </div>
            <div>
              <h5 class="mb-1">No.HP</h5>
              <p>
                <a href="https://wa.me/62895612000200?text=Halo%20CV.SAR"> 0895612000200 </a>
              </p>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1">
                <i class="uil uil-envelope"></i>
              </div>
            </div>
            <div>
              <h5 class="mb-1">E-mail</h5>
              <p class="mb-0">
                <a href="mailto:info@cvsar.co.id" class="link-body">info@cvsar.co.id</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> @endsection