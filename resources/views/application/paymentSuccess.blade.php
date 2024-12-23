@extends('application.layouts.app')
@section('content')
	<!-- Payment Success Section Start -->
    <section id="payment-success-first">
        <div class="payment-success-first-wrap">
            {{-- <img src="assets/images/payment-success/bg-img.png" class="img-fluid" alt="bg-img"> --}}
            <div class="payment-logo-sec">
                <img src="assets/images/payment-success/logo.png" class="logo-img" alt="logo-img">
            </div>
        </div>
        <div class="payment-success-second-wrapper">
            <div class="container">
                <div class="payment-success-second">
                    <div class="container">
                        <div class="payment-success-second-wrap">
                            <h1 class="success-title">Success!</h1>
                            <div class="success-img mt-24">
                                <img src="assets/images/success/success.png" alt="success-img">
                            </div>
                            <h2 class="success-subtitle mt-24">Thank you for shopping</h2>
                            <p class="success-para">Your items has been placed and is on it’s way to being processed</p>
                        </div>
                    </div>
                </div>
                <div class="track-cancel mt-32">
                    <a href="{{route('trackOrders')}}">Track Order</a>
                </div>
            </div>
        </div>
        <div class="Backtohome">
            <a href="{{route('home')}}">Back To Home</a>
        </div>
    </section>
    <!-- Payment Success Section End -->
@endsection
