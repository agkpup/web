@extends('application.layouts.app')
@section('content')
<div class="site_content">
    <!-- Onboarding  Details Section Start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators custom-slider-btn">
            <button type="button" id="first" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=" custom-slider-dots active " aria-current="true"></button>
            <button type="button"  id="second" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=" custom-slider-dots" ></button>
            <button type="button"  id="third" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=" custom-slider-dots" ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item first_slide active ">
                <div class="Onboarding-Screen-1 slide1">
                    <div class="container">
                        <div class="Onboarding-Screen-1-full">
                            <div class="main-header">
                            </div>
                            <div class="skip_btn_1 skip_btn">
                                <a href="javascript:void(0)">Skip</a>
                            </div>
                            <div class="screen-1-content">
                                <h1>Lovely Furniture Everywhere</h1>
                                <p>Find furniture product you want by your location or neighborhood.</p>	
                            </div>
                        </div>
                    </div> 	
                </div>
            </div>
            <div class="carousel-item second_slide">
                <div class="Onboarding-Screen-1 slide2">
                    <div class="container">
                        <div class="Onboarding-Screen-1-full">
                            <div class="main-header">
                            </div>
                            <div class="skip_btn_2 skip_btn">
                                <a href="javascript:void(0)">Skip</a>
                            </div>
                            <div class="screen-1-content">
                                <h1>Save Product Needed</h1>
                                <p>Save furniture products that you may need for now and later.</p>	
                            </div>
                        </div>
                    </div> 	
                </div>
            </div>
            <div class="carousel-item third_slide">
                <div class="Onboarding-Screen-1 slide3">
                    <div class="container">
                        <div class="Onboarding-Screen-1-full">
                            <div class="main-header">
                            </div>
                            <div class="skip_btn_3 skip_btn">
                                <a href="sign-in-screen.html">Skip</a>
                            </div>
                            <div class="screen-1-content">
                                <h1>Create Real Inspiration</h1>
                                <p>Create inspiration that amazes everyone you love around you</p>	
                            </div>
                        </div>
                    </div> 	
                </div>
            </div>
        </div>
    </div>
    <!-- Onboarding  Details Section End -->
@endsection