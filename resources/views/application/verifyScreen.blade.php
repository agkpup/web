@extends('application.layouts.app')
@section('content')
		<!-- Header Section Start -->
		<header id="top-navbar" class="top-navbar"> 
			<div class="container">
				<div class="top-navbar_full">
					<div class="back-btn d-flex align-items-center">
						<a href="forget-password-screen.html"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"></a>
					</div>
					<div class="top-navbar-title d-flex align-items-center">
						<p>Verifying Number</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header Section End -->
		<!-- Verify Details Section Start -->
		<section id="verify-screen-sec">
			<div class="container">
				<div class="forget-screen-sec-full">
					<h1 class="d-none">Verify Details</h1>
					<div class="mt-32">
						<p class="enter-email-txt">We sent an otp to your mobile number +1 (234) 567 8899</p>
					</div>
					<form class="otp-form mt-32">
						<div class="form-input otp-box active">
							<input type="number" class="opt-sec" placeholder="5">
						</div>
						<div class="form-input otp-box active">
							<input type="number" class="opt-sec" placeholder="|" >
						</div>
						<div class="form-input otp-box">
							<input type="number" class="opt-sec" placeholder="" >
						</div>
						<div class="form-input otp-box">
							<input type="number" class="opt-sec" placeholder="" >
						</div>
						<div class="form-input otp-box">
							<input type="number" class="opt-sec" placeholder="">
						</div>
						<div class="form-input otp-box">
							<input type="number" class="opt-sec" placeholder="">
						</div>
					</form>
					<div class="block-footer1 d-flex justify-content-end mt-24">
						<p>Not yet get? <a href="verify-screen.html" class="primary-color">Resend OTP</a></p>
					</div>
					<div class="send-btn mt-32">
						<a href="new-password-screen.html">Verify</a>	
					</div>
				</div>
				<div class="text-center counter-sec">
					<div class="otp-timer timer">
						<div class="border"></div>
						<div class="d-flex timer-counter-content">
							<div class="time-left" id="counter"> 80</div>
							<div class="timer-text">Sec</div>
						</div>
						<p class="otp-left mb-0">left</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Verify Details Section End -->
@endsection