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
						<p>Forget Password</p>
					</div>
				</div>
			</div>
			<div class="navbar-boder"></div>
		</header>
		<!-- Header Section End -->
		<!-- Forget Password Details Start -->
		<section id="forget-screen-sec">
			<div class="container">
				<div class="forget-screen-sec-full">
					<h1 class="d-none">Forget Detail</h1>
					<div class="mt-32">
						<p class="enter-email-txt">Enter your email or phone number & will send you instruction on how to reset it.</p>
					</div>
					<form class="forget-form mt-32 ">
						<div class="form-sec">
							<label class="txt-lbl">Email</label><br>
							<input type="email" id="Email"  placeholder="********" class="txt-input">
							<div class="form_bottom_boder"></div>
						</div>
						<div class="or mt-24">
							<p>OR</p>	
						</div>
						<div class="form-sec mt-24">
							<label class="txt-lbl">Mobile Number</label><br>
							<input type="number" id="mobile-no" placeholder="+1 (234) 567 8899" class="txt-input">
							<div class="form_bottom_boder"></div>
						</div>	
					</form>
					<div class="send-btn mt-32">
						<a href="verify-screen.html">Send</a>	
					</div>
				</div>
			</div>	
		</section>
		<!-- Forget Password Details End -->

@endsection