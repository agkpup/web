@extends('application.layouts.app')
@section('content')
	<!-- Header Section Start -->
    <header id="top-navbar" class="top-navbar"> 
        <div class="container">
            <div class="top-navbar_full">
                <div class="back-btn d-flex align-items-center">
                    <a href="select-language.html"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"></a>
                </div>
                <div class="top-navbar-title d-flex align-items-center">
                    <p>Choose Interests</p>
                </div>
                <div class="skip_btn second-color ml-0">
                    <a href="home-page1.html">Skip</a>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- Interest Details Section Start -->
    <section id="interest-sec-page" class="fixed-class">
        <div class="container">
            <div class="furniture-fill-sec">
                <h1 class="d-none">Interest Details</h1>
                <div>
                    <p class="furniture-title">Which type of furniture are you interested in?</p>
                </div>
                <form class="mt-32">
                    <div class="interest-bottom-sec">
                        <div class="furniture-sec-img ">
                            <div class="">
                                <input type="checkbox" class="form-check-input" checked>
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-1.png" class="img-fluid" alt="furniture-img">
                            </div>
                            <p class="furni-name">Living Room</p>
                        </div>
                        <div class="furniture-sec-img ">
                            <div class="">
                                <input type="checkbox" class="form-check-input">
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-2.png" class="img-fluid" alt="furniture-img">
                            </div>
                            <p class="furni-name">Dining Room</p>
                        </div>
                        <div class="furniture-sec-img">
                            <div class="">
                                <input type="checkbox" class="form-check-input" checked>
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-3.png" class="img-fluid" alt="furniture-img">
                            </div>
                            <p class="furni-name">Bad Room</p>
                        </div>
                        <div class="furniture-sec-img mt-24">
                            <div class="">
                                <input type="checkbox" class="form-check-input">
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-4.png" class="img-fluid" alt="furniture-img">
                            </div>
                            <p class="furni-name">Bath Room</p>
                        </div>
                        <div class="furniture-sec-img mt-24">
                            <div class="">
                                <input type="checkbox" class="form-check-input" checked>
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-5.png" class="img-fluid" alt="furniture-img">
                            </div>
                            <p class="furni-name"> Chairs</p>
                        </div>
                        <div class="furniture-sec-img mt-24 ">
                            <div class="">
                                <input type="checkbox" class="form-check-input">
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-6.png" class="img-fluid" alt="furniture-img">
                            </div>
                            <p class="furni-name">Sofas</p>
                        </div>
                        <div class="furniture-sec-img mt-24">
                            <div class="">
                                <input type="checkbox" class="form-check-input">
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-7.png" class="img-fluid" alt="furniture-img">
                            </div>							
                            <p class="furni-name">Table</p>
                        </div>
                        <div class="furniture-sec-img mt-24 ">
                            <div class="">
                                <input type="checkbox" class="form-check-input">
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-8.png" class="img-fluid" alt="furniture-img">
                            </div>							
                            <p class="furni-name">Storage</p>
                        </div>
                        <div class="furniture-sec-img mt-24 ">
                            <div class="">
                                <input type="checkbox" class="form-check-input">
                            </div>
                            <div class="interest-fur-sec">
                                <img src="assets/images/interest/interest-9.png" class="img-fluid" alt="furniture-img">
                            </div>							
                            <p class="furni-name">Others</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="interes-done-btn mt-32">
                <a href="home-page1.html">Done</a>	
            </div>
        </div>
    </section>
    <!-- Interest Details Section End -->
@endsection