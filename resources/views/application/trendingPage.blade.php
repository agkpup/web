@extends('application.layouts.app')
@section('content')
		<!-- Header Section Start -->
		<header id="top-navbar" class="top-navbar"> 
			<div class="container">
				<div class="top-navbar_full">
					<div class="back-btn d-flex align-items-center">
						<a href="javascript: history.go(-1)"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"></a>
					</div>
					<div class="top-navbar-title d-flex align-items-center">
						<p>Tranding Item</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header Section End -->
		<!-- Tranding Details Section Start -->
		<section id="tranding-page">
			<div class="container">
				<div class="tranding-page-top mt-24">
					<div class="tranding-page-top-wrap">
						<div class="tranding-description1">	
							<div class="tranding-top-sec">
								<h1 class="d-none">Tranding</h1>
								<h2 class="d-none">Tranding Details</h2>
								<div class="tranding-img-sec">
									<img src="assets/images/homepage/tranding-1.png" class="img-fluid" alt="furniture-img">
									<div class="tra-fav-sec">
										<div class="home-page-favourite">
											<a href="javascript:void(0);" class="item-bookmark active ">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
														<rect width="20" height="20" fill="white"></rect>
													</mask>
													<g mask="url(#mask0_1_2980)">
														<path d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z" fill="#666666"></path>
													</g>
												</svg>
											</a>
										</div>	
									</div>
									<div class="dining-txt-sec">
										<p class="trand-txt1">Dining Set</p>	
									</div>
								</div>
							</div>
							<div class="tranding-middle-sec">
								<h3 class="trand-txt2">Dining table and chairs Set</h3>
								<div class="tranding-deatils-sec-1">
									<div>
										<h4 class="trand-txt3">$220</h4>
									</div>
									<div>
										<ul class="homepage-rating-sec">
											<li><img src="assets/images/homepage/#ffa31a-star.svg" alt="#ffa31a-star"></li>
											<li><img src="assets/images/homepage/#ffa31a-star.svg" alt="#ffa31a-star"></li>
											<li><img src="assets/images/homepage/#ffa31a-star.svg" alt="#ffa31a-star"></li>
											<li><img src="assets/images/homepage/#ffa31a-star.svg" alt="#ffa31a-star"></li>
											<li><img src="assets/images/homepage/light-#ffa31a-star.svg" alt="light-#ffa31a-img"></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tranding-boder mt-16"></div>
						</div>
						<div class="tranding-description1 mt-16">	
							<div class="tranding-top-sec">
								<div class="tranding-img-sec">
									<img src="assets/images/homepage/tranding-2.png" class="img-fluid" alt="furniture-img">
									<div class="tra-fav-sec">
										<div class="home-page-favourite">
											<a href="javascript:void(0);" class="item-bookmark ">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
														<rect width="20" height="20" fill="white"></rect>
													</mask>
													<g mask="url(#mask0_1_2980)">
														<path d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z" fill="#666666"></path>
													</g>
												</svg>
											</a>
										</div>	
									</div>
									<div class="dining-txt-sec">
										<p>Sofas</p>	
									</div>
								</div>
							</div>
							<div class="tranding-middle-sec">
								<h4 class="trand-txt2">Modern Green Sofa</h4>
								<div class="tranding-deatils-sec-1">
									<div>
										<h5 class="trand-txt3">$140</h5>
									</div>
									<div>
										<ul class="homepage-rating-sec">
											<li><img src="assets/images/homepage/#ffa31a-star.svg" alt="#ffa31a-star"></li>
											<li><img src="assets/images/homepage/#ffa31a-star.svg" alt="#ffa31a-star"></li>
											<li><img src="assets/images/homepage/#ffa31a-star.svg" alt="#ffa31a-star"></li>
											<li><img src="assets/images/homepage/#ffa31a-star.svg" alt="#ffa31a-star"></li>
											<li><img src="assets/images/homepage/light-#ffa31a-star.svg" alt="light-#ffa31a-img"></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tranding-boder mt-16"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Tranding Details Section End -->
@endsection