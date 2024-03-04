@extends('layouts.client')
@section('title')
	Home
@endsection
@section('content')
<section class="wrapper bg-soft-primary">
	<div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
		<div class="row">
			<div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-cues="slideInDown" data-group="page-title">
				<h1 class="display-1 mb-4 text-primary" 
					data-cue="slideInDown" 
					data-group="page-title" 
					data-show="true" 
					style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
					SYSTEM INTEGRATOR
				</h1>
				<p class="lead fs-lg px-xl-12 px-xxl-6 mb-7" 
					data-cue="slideInDown" 
					data-group="page-title" 
					data-show="true" 
					style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
						<b>Mengintegrasikan setiap inovasi</b>
				</p>
				<div class="d-flex justify-content-center" 
					data-cues="slideInDown"
					data-group="page-title-buttons" 
					data-delay="600">
					<span>
						<a href="https://wa.me/62895612000200?text=Halo%20CV.SAR" 
							class="btn btn-green rounded mx-1" 
							target="_blank">
							Hubungi Kami
						</a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="wrapper bg-light">
	<div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-23">
		<div class="row gx-0 mb-16 mb-mb-20">
			<div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n20" 
				data-cues data-group="images" 
				data-delay="1500"
			>
				<img class="img-fluid mx-auto rounded shadow-lg" 
					data-cue="slideInUp" 
					src="{{asset('client/assets')}}/img/photos/photo-grid.png" 
					srcset="{{asset('client/assets')}}/img/photos/photo-grid.png 2x" 
					alt="" 
				/>
				<img class="img-fluid mx-auto rounded shadow-lg" 
					data-cue="slideInRight" 
					src="{{asset('client/assets')}}/img/photos/photo-grid-logo.png" 
					srcset="{{asset('client/assets')}}/img/photos/photo-grid-logo.png 2x" 
					style="top: 20%; right:-10%; max-width:30%; height: auto;" 
					alt="" 
				/>
			</div>
		</div>
		<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
			<div class="col-lg-6 position-relative">
				<div class="shape rounded bg-pale-red rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>
				<div class="row gx-md-5 gy-5 position-relative">
					<div class="col-6">
						<img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="300" src="{{asset('client/assets')}}/img/photos/sa5.jpg" srcset="{{asset('client/assets')}}/img/photos/sa5@2x.jpg 2x" alt="" />
						<img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn" data-delay="600" src="{{asset('client/assets')}}/img/photos/sa6.jpg" srcset="{{asset('client/assets')}}/img/photos/sa6@2x.jpg 2x" alt="" />
					</div>
					<div class="col-6">
						<img class="img-fluid rounded shadow-lg my-5" data-cue="fadeIn" data-delay="900" src="{{asset('client/assets')}}/img/photos/sa7.jpg" srcset="{{asset('client/assets')}}/img/photos/sa7@2x.jpg 2x" alt="" />
						<img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200" src="{{asset('client/assets')}}/img/photos/sa8.jpg" srcset="{{asset('client/assets')}}/img/photos/sa8@2x.jpg 2x" alt="" />
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<h3 class="display-4 mb-5">Kami selalu memberikan solusi-solusi sesuai kebutuhan perusahaan Anda.</h3>
				<p class="mb-5">Perusahaan kami berusaha untuk sepenuhnya memahami kebutuhan dan tantangan yang dihadapi oleh setiap klien. Ini melibatkan mendengarkan dengan cermat, berkomunikasi secara terbuka, dan melakukan analisis mendalam terkait kebutuhan bisnis dan teknis perusahaan pelanggan.</p>
			</div>
		</div>
		<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
			<div class="col-lg-6 position-relative order-lg-2">
				<div class="shape rounded bg-pale-green rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>
				<div class="row gx-md-5 gy-5 position-relative">
					<div class="col-5">
						<img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" data-cue="fadeIn" data-delay="300" src="{{asset('client/assets')}}/img/photos/sa9.jpg" srcset="{{asset('client/assets')}}/img/photos/sa9@2x.jpg 2x" alt="" />
						<img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn" data-delay="600" src="{{asset('client/assets')}}/img/photos/sa10.jpg" srcset="{{asset('client/assets')}}/img/photos/sa10@2x.jpg 2x" alt="" />
					</div>
					<div class="col-7">
						<img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900" src="{{asset('client/assets')}}/img/photos/sa11.jpg" srcset="{{asset('client/assets')}}/img/photos/sa11@2x.jpg 2x" alt="" />
						<img class="img-fluid rounded shadow-lg d-flex col-11" data-cue="fadeIn" data-delay="1200" src="{{asset('client/assets')}}/img/photos/sa12.jpg" srcset="{{asset('client/assets')}}/img/photos/sa12@2x.jpg 2x" alt="" />
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<h3 class="display-4 mb-5">Fleksibilitas dan Skalabilitas Solusi</h3>
				<p class="mb-5">Kami menekankan bahwa solusi yang diberikan tidak hanya sesuai dengan kebutuhan saat ini, tetapi juga dapat diperluas atau disesuaikan ketika perusahaan pelanggan berkembang. Fleksibilitas dan skalabilitas menjadi fokus utama dalam mendesain solusi.</p>
			</div>
		</div>
		<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
			<div class="col-lg-6 position-relative">
				<div class="shape rounded bg-pale-yellow rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>
				<div class="row gx-md-5 gy-5 position-relative align-items-center">
					<div class="col-6">
						<img class="img-fluid rounded shadow-lg d-flex ms-auto" data-cue="fadeIn" data-delay="300" src="{{asset('client/assets')}}/img/photos/sa13.jpg" srcset="{{asset('client/assets')}}/img/photos/sa13@2x.jpg 2x" alt="" />
					</div>
					<div class="col-6">
						<img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900" src="{{asset('client/assets')}}/img/photos/sa14.jpg" srcset="{{asset('client/assets')}}/img/photos/sa14@2x.jpg 2x" alt="" />
						<img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200" src="{{asset('client/assets')}}/img/photos/sa15.jpg" srcset="{{asset('client/assets')}}/img/photos/sa15@2x.jpg 2x" alt="" />
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<h3 class="display-4 mb-5">Kemitraan Jangka Panjang</h3>
				<p class="mb-5">Kami tidak hanya berupaya untuk memberikan layanan sekali pakai, tetapi juga untuk tumbuh bersama dan mendukung perubahan kebutuhan seiring berjalannya waktu.</p>
			</div>
		</div>
	</div>
</section>
<section class="wrapper bg-soft-primary">
	<div class="container py-14 pt-md-16 pt-lg-0 pb-md-16">
		<div class="row text-center" data-cue="slideInUp">
			<div class="col-lg-10 mx-auto">
				<div class="mt-lg-n20 mt-xl-n22 position-relative">
					<div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1" style="top: 1rem; left: -3.9rem;"></div>
					<div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="bottom: 2rem; right: -3rem;"></div>
					<video poster="{{asset('client/assets')}}/img/photos/movie.jpg" class="player" playsinline controls preload="none">
						<source src="{{asset('client/assets')}}/media/movie.mp4" type="video/mp4">
						<source src="{{asset('client/assets')}}/media/movie.webm" type="video/webm">
					</video>
				</div>
			</div>
		</div>
		<div class="row text-center mt-12">
			<div class="col-lg-9 mx-auto">
				<h3 class="display-4 mb-0 text-center px-xl-10 px-xxl-15">3 Keunggulan Utama Kami</h3>
				<div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp" data-group="process">
					<div class="col-md-4"> <img src="{{asset('client/assets')}}/img/icons/lineal/shield.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
						<h4 class="mb-1">Secured Transactions</h4>
					</div>
					<div class="col-md-4"> <img src="{{asset('client/assets')}}/img/icons/lineal/savings.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
						<h4 class="mb-1">Budget Planning</h4>
					</div>
					<div class="col-md-4"> <img src="{{asset('client/assets')}}/img/icons/lineal/loading.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
						<h4 class="mb-1">Up to Date</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="wrapper bg-light">
	<div class="container py-14 py-md-17">
		<div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 align-items-center">
			<div class="col-lg-7 position-relative">
				<div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
				<div class="row gx-md-5 gy-5">
					<div class="col-md-6" data-cue="fadeIn">
						<figure class="rounded mt-md-10 position-relative"><img src="{{asset('client/assets')}}/img/photos/g5.jpg" srcset="{{asset('client/assets')}}/img/photos/g5@2x.jpg 2x" alt=""></figure>
					</div>
					<div class="col-md-6">
						<div class="row gx-md-5 gy-5">
							<div class="col-md-12 order-md-2" data-cue="fadeIn" data-delay="900">
								<figure class="rounded"><img src="{{asset('client/assets')}}/img/photos/g6.jpg" srcset="{{asset('client/assets')}}/img/photos/g6@2x.jpg 2x" alt=""></figure>
							</div>
							<div class="col-md-10" data-cue="fadeIn" data-delay="300">
								<div class="card bg-pale-primary text-center">
									<div class="card-body py-11 counter-wrapper">
										<h3 class="counter text-nowrap">5000+</h3>
										<p class="mb-0">Satisfied Customers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 mt-5">
				<div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<blockquote class="icon icon-top fs-lg text-center">
									<p>“Perusahaan CV.SAR membantu kerjaan kami menjadi lebih ringan karena sudah diberikan solusi terbaik”</p>
									<div class="blockquote-details justify-content-center text-center">
										<div class="info ps-0">
											<h5 class="mb-1">Hari Pratama Permana</h5>
											<p class="mb-0">Asisten Manager HRD - PT. PJKA</p>
										</div>
									</div>
								</blockquote>
							</div>
							<div class="swiper-slide">
								<blockquote class="icon icon-top fs-lg text-center">
									<p>“CV SAR memberikan layanan IT yang luar biasa untuk PT LMN. Dengan bantuan mereka, kami berhasil mengoptimalkan sistem keuangan dan meningkatkan keamanan data. Tim CV SAR memiliki pemahaman yang mendalam tentang kebutuhan bisnis kami.”</p>
									<div class="blockquote-details justify-content-center text-center">
										<div class="info ps-0">
											<h5 class="mb-1">Pak Santoso Rahman</h5>
											<p class="mb-0">Manager Keuangan - PT LMN</p>
										</div>
									</div>
								</blockquote>
							</div>
							<div class="swiper-slide">
								<blockquote class="icon icon-top fs-lg text-center">
									<p>“CV SAR telah menjadi mitra IT yang andal bagi PT ABC. Layanan mereka sangat profesional dan solusi yang mereka tawarkan telah membantu meningkatkan kinerja infrastruktur IT kami. Keahlian teknis dan komitmen tim CV SAR patut diacungi jempol.”</p>
									<div class="blockquote-details justify-content-center text-center">
										<div class="info ps-0">
											<h5 class="mb-1">Ibu Siti Rahayu</h5>
											<p class="mb-0">Head of IT - PT ABC</p>
										</div>
									</div>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="px-lg-5">
			<div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
				<div class="col-4 col-md-2">
					<figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{asset('client/assets')}}/img/brands/c1.png" alt="" /></figure>
				</div>
				<div class="col-4 col-md-2">
					<figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{asset('client/assets')}}/img/brands/c2.png" alt="" /></figure>
				</div>
				<div class="col-4 col-md-2">
					<figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{asset('client/assets')}}/img/brands/c3.png" alt="" /></figure>
				</div>
				<div class="col-4 col-md-2">
					<figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{asset('client/assets')}}/img/brands/c4.png" alt="" /></figure>
				</div>
				<div class="col-4 col-md-2">
					<figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{asset('client/assets')}}/img/brands/c5.png" alt="" /></figure>
				</div>
				<div class="col-4 col-md-2">
					<figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="{{asset('client/assets')}}/img/brands/c6.png" alt="" /></figure>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="wrapper bg-soft-primary">
	<div class="container pt-14 pb-18 pt-md-17 pb-md-22 text-center">
		<div class="row">
			<div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
				<h3 class="display-4 mb-15 mb-md-6 px-lg-10">Kami menawarkan harga yang menarik, produk premium, dan layanan berkualitas untuk bisnis Anda.</h3>
			</div>
		</div>
	</div>
</section>
<section class="wrapper bg-light">
	<div class="container py-14 py-md-16">
		<div class="pricing-wrapper position-relative mt-n22 mt-md-n24">
			<div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
			<div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
			<div class="pricing-switcher-wrapper switcher">
				<p class="mb-0 pe-3">Monthly</p>
				<div class="pricing-switchers">
					<div class="pricing-switcher pricing-switcher-active"></div>
					<div class="pricing-switcher"></div>
					<div class="switcher-button bg-primary"></div>
				</div>
				<p class="mb-0 ps-3">Yearly</p>
			</div>
			<div class="row gy-6 mt-3 mt-md-5">
				<div class="col-md-6 col-lg-4">
					<div class="pricing card shadow-lg text-center">
						<div class="card-body">
							<img src="{{asset('client/assets')}}/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
							<h4 class="card-title">Basic Plan</h4>
							<div class="prices text-dark">
								<div class="price price-show"><span class="price-currency">Rp</span><span class="price-value">900K</span> <span class="price-duration">mo</span></div>
								<div class="price price-hide price-hidden"><span class="price-currency">Rp</span><span class="price-value">9.900K</span> <span class="price-duration">yr</span></div>
							</div>
							<ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
								<li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
								<li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
								<li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
								<li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li>
								<li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
							</ul>
							<a href="#" class="btn btn-primary rounded">Choose Plan</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 popular">
					<div class="pricing card shadow-lg text-center">
						<div class="card-body">
							<img src="{{asset('client/assets')}}/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
							<h4 class="card-title">Premium Plan</h4>
							<div class="prices text-dark">
								<div class="price price-show"><span class="price-currency">Rp</span><span class="price-value">1.900K</span> <span class="price-duration">mo</span></div>
								<div class="price price-hide price-hidden"><span class="price-currency">Rp</span><span class="price-value">19.900K</span> <span class="price-duration">yr</span></div>
							</div>
							<ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
								<li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
								<li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
								<li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
								<li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
								<li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
							</ul>
							<a href="#" class="btn btn-primary rounded">Choose Plan</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
					<div class="pricing card shadow-lg text-center">
						<div class="card-body">
							<img src="{{asset('client/assets')}}/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
							<h4 class="card-title">Corporate Plan</h4>
							<div class="prices text-dark">
								<div class="price price-show"><span class="price-currency">Rp</span><span class="price-value">6.900K</span> <span class="price-duration">mo</span></div>
								<div class="price price-hide price-hidden"><span class="price-currency">Rp</span><span class="price-value">69.900K</span> <span class="price-duration">yr</span></div>
							</div>
							<ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
								<li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
								<li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
								<li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
								<li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
								<li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
							</ul>
							<a href="#" class="btn btn-primary rounded">Choose Plan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map" data-image-src="{{asset('client/assets')}}/img/map.png">
	<div class="container pt-0 pb-14 pt-md-18 pb-md-18">
		<div class="row">
			<div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
				<h3 class="display-4 mb-8 px-lg-12">Kami dipercaya 50+ klien. Gabung bersama mereka untuk meningkatkan bisnis perusahaan Anda.</h3>
			</div>
		</div>
		<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join">
			<span><a class="btn btn-green rounded mx-1" href="https://wa.me/62895612000200?text=Halo%20CV.SAR" target="_blank">Hubungi Kami</a></span>
		</div>
	</div>
</section>
@endsection
