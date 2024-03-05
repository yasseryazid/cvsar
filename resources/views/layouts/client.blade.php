<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website."
  >
  <meta name="keywords"
    content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template"
  >
  <meta name="author" content="elemis">
  <title>CV. SAR - @yield('title')</title>
  <link rel="shortcut icon" href="{{asset('client/assets')}}/img/cvsar-logo-ico.png">
  <link rel="stylesheet" href="{{asset('client/assets')}}/css/plugins.css">
  <link rel="stylesheet" href="{{asset('client/assets')}}/css/style.css">
</head>
<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img
                src="{{asset('client/assets')}}/img/logo.png"
                srcset="{{asset('client/assets')}}/img/logo.png"
                style="width: 30%"
                alt=""
              />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">CV. SAR</h3>
              <button
                type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="offcanvas"
                aria-label="Close">
              </button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <div class="navbar-nav">
                <a
                  class="nav-link nav-item {{ request()->routeIs('home') ? 'active' : '' }}"
                  href="{{ url('/') }}">
                    Home
                </a>
                <a
                  class="nav-link nav-item {{ request()->routeIs('profile') ? 'active' : '' }}"
                  href="{{ url('/profile') }}">
                    Profile
                </a>
                @foreach ($menus as $menu)
                    <a
                        class="nav-link nav-item {{ request()->is('menu/' . $menu->url) ? 'active' : '' }}"
                        href="{{ url('/menu/' . $menu->url) }}">
                        {{ $menu->title }}
                    </a>
                @endforeach
                {{-- @foreach ($data as $row)
                    <a href="" class="nav-link nav-item">{{ $row }}</a>
                @endforeach --}}
                @yield('menu-items')
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
  </div>
  {{-- Footer Start --}}
  <footer class="bg-dark text-inverse mt-5 mt-md-16">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-3 col-lg-4">
          <div class="widget">
            <img class="mb-4"
              src="{{asset('client/assets')}}/img/logo-white.png"
              srcset="{{asset('client/assets')}}/img/logo-white.png"
              style="width: 60%"
              alt=""
            />
            <p class="mb-4">© 2024 CV. SAR All rights reserved.</p>
          </div>
        </div>
        <div class="col-md-3 col-lg-4">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Alamat Kami</h4>
            <address
              class="pe-xl-15 pe-xxl-17">
                CV Sumber Agung Rejeki, Perum Griya Nadhifa C.24 Giripeni Kec. Wates Kab. Kulon Progo - Kulon Progo (Kab.) - DI Yogyakarta
            </address>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Kontak Kami</h4>
            <p class="mb-5">WA: <a href="https://wa.me/62895612000200?text=Halo%20CV.SAR"> 089 561 2000 200 </a>
              <br> Email: <a href="mailto:info@cvsar.co.id"> info@cvsar.co.id </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  {{-- Footer End --}}
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{asset('client/assets')}}/js/plugins.js"></script>
  <script src="{{asset('client/assets')}}/js/theme.js"></script>
</body>

</html>
