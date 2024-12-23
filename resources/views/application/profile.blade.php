@extends('application.layouts.app')
@section('content')
<!-- Header Section Start -->
<header id="top-navbar" class="top-navbar">
    <div class="container">
        <div class="top-navbar_full">
            <div class="menu-btn d-flex align-items-center">
                <a href="#offcanvasExample" data-bs-toggle="offcanvas"><img src="assets/images/profile-page/menu-icon.svg" alt="menu-icon"></a>
            </div>
            <div class="catchyTAT-txt d-flex align-items-center">
                <p>catchyTAT</p>
            </div>
            <div>
                <ul class="homepage-cart-sec">
                    <li><a href="search-page.html"><img src="assets/images/homepage/search-icon.svg" alt="search-icon"></a></li>
                    <li class="pf-16"><a href="shopping-cart.html"><img src="assets/images/homepage/cart-icon.svg" alt="cart-icon"><span class="cart-item">2</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-boder"></div>
</header>
<!-- Header Section End -->
<!-- Profile Details Section Start -->
<section id="profile-page-sec">
    <div class="profile-top-sec">
        <div class="profile-top-sec-full">
            <h1 class="d-none">Profile</h1>
            <h2 class="d-none">ProfilePage</h2>
            <div class="profile-img-sec">
                <img src="assets/images/profile-page/profile-1.png" alt="profile-img">
                <div class="gallay-icon">
                    <a href="javascript:void(0)"><img src="assets/images/profile-page/gallary-icon.svg" alt="gallary-icon"></a>
                </div>
            </div>
            <div class="profile-details-sec">
                <h3 class="pro-txt1">Alisha Parker</h3>
                <a href="mailto:alishaparker@mail.com"><h4 class="pro-txt2">alishaparker@mail.com</h4></a>
                <a href="tel:+012345678899"><h5 class="pro-txt3">+01 234 567 8899</h5></a>
            </div>
        </div>
    </div>
    <div id="profile-second-sec">
        <div class="container">
            <div class="profile-second-sec mt-24">
                <div class="profile-second-sec-full">
                    <div class="profile2-first">
                        <p>BW Wallet</p>
                    </div>
                    <div class="profile2-second">
                        <p>$42.50</p>
                    </div>
                </div>
                <div class="profile-boder mt-24"></div>
            </div>
        </div>
    </div>
    <div id="profile-third-sec">
        <div class="container">
            <div class="profile-third-sec-full mt-24">
                <h3 class="prile3-txt1">Address</h3>
                <div class="profile-address-sec mt-16">
                    <h4 class="prile3-txt2">Home</h4>
                    <h5 class="prile3-txt3">121 Park Avenue, King Street, NY 23561</h5>
                </div>
                <div class="profile-address-sec mt-16">
                    <h4 class="prile3-txt2">Office</h4>
                    <h5 class="prile3-txt3">43 Bourkle Street, Newbridge, NY 36211</h5>
                </div>
                <div class="profile-boder mt-24"></div>
            </div>
        </div>
    </div>
    <div id="profile-payment-sec">
        <div class="container">
            <div class="row mt-24" >
                <div class="col-8">
                    <h2 class="home-cate-title">Payments</h2>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a href="walletpage.html"><p class="see-all-txt">COD</p></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profile Details Section End -->

<!-- Bottom Navigation Section End -->
@endsection
