@extends('application.layouts.app')
@section('content')
<!-- Navbar Section Start -->
<header id="top-navbar" class="top-navbar">
    <div class="container"> 
        <div class="top-navbar_full">
            <div class="back-btn d-flex align-items-center">
                <a href="javascript: history.go(-1)"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"> </a>
            </div>
            <div class="top-navbar-title d-flex align-items-center">
                <p>Track Order</p>
            </div>
        </div>
    </div>
    <div class="navbar-boder"></div>
</header>
<!-- Header Section End -->
<!-- TrackOrder Details Section Start -->
<section id="track-order-page">
    <div class="container">
        <div class="track-otder mt-24">
            <h1 class="d-none">Track order Page</h1>
            <h2 class="d-none">Trackorder Details</h2>
            <div class="trackorder-sec">
                <div>
                    <div class="track-round">
                        <div class="track-first">
                            <div class="track-no">1</div>
                        </div>
                        <div class="track-boder1"></div>
                    </div>
                    <p class="order-txt1">Order Packed</p>
                </div>
                <div>
                    <div class="track-round">
                        <div class="track-first">
                            <div class="track-no">2
                            </div>
                            <div class="track-boder1 track-boder2"></div>
                        </div>
                    </div>
                    <p class="order-txt1">Order Shipped</p>
                </div>
                <div>
                    <div class="track-round">
                        <div class="track-first">
                            <div class="track-boder1 track-boder3"></div>
                            <div class="track-no track-no3">3
                            </div>
                        </div>
                    </div>
                    <p class="order-txt2">Delivered</p>
                </div>
            </div>
            <div class="track-boder mt-24"></div>
        </div>	
        <div class="track-order-second-sec mt-24">
            <div class="delivery-date-sec">
                <h3 class="track-title">Delivery Date & Time</h3>
                <div class="tract-deatils">
                    <p class="track-subtile">Monday, December 26</p>
                    <p class="track-time">05:00 PM</p>
                </div>
            </div>
        </div>
        <div class="track-order-third-sec mt-24">
            <div class="track-order-third-full">
                <div class="delivery-date-sec-full">
                    <h3 class="track-title">Delivery Address</h3>
                    <div class="tract-deatils">
                        <p class="track-subtile">Home</p>
                        <p class="track-time">121 Parkview Street, Albert View...</p>
                    </div>
                </div>
                <div class="track-map-sec">
                    <a href="https://goo.gl/maps/JKp6xtWahVUFCnqr8">
                        <img src="assets/images/trackorder/map-img.png" alt="map-img">
                        <div class="map-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_1_1633" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                    <rect width="24" height="24" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_1_1633)">
                                    <path d="M11.9999 13.43C13.723 13.43 15.1199 12.0331 15.1199 10.31C15.1199 8.58687 13.723 7.19 11.9999 7.19C10.2768 7.19 8.87988 8.58687 8.87988 10.31C8.87988 12.0331 10.2768 13.43 11.9999 13.43Z" stroke="#ED0006" stroke-width="2"/>
                                    <path d="M3.61971 8.49C5.58971 -0.169998 18.4197 -0.159997 20.3797 8.5C21.5297 13.58 18.3697 17.88 15.5997 20.54C13.5897 22.48 10.4097 22.48 8.38971 20.54C5.62971 17.88 2.46971 13.57 3.61971 8.49Z" stroke="#ED0006" stroke-width="2"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="track-order-fourth-sec mt-24">
            <div class="delivery-date-sec">
                <h3 class="track-title">Order</h3>
                <div class="tract-deatils">
                    <p class="track-subtile">Wing Chair, Round White Light</p>
                    <p class="track-time">3 items</p>
                </div>
            </div>
        </div>
        <div class="track-order-fifth-sec mt-24">
            <div class="delivery-date-sec">
                <h3 class="track-title">Price</h3>
                <div class="tract-deatils">
                    <p class="track-subtile">Total $260.00</p>
                    <p class="track-time">Payment via Gpay</p>
                </div>
            </div>
            <div class="pickborder mt-24"></div>
        </div>
        <div class="track-cancel mt-24">
            <a href="index.html">Cancel</a>	
        </div>
        <div class="track-order mt-10">
            <a href="product-rate.html">Received</a>	
        </div>
    </div>
</section>
<!-- TrackOrder Details Section End -->
@endsection