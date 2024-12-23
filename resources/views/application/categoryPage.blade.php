@extends('application.layouts.app')
@section('content')
<div class="site_content">
    <!-- Preloader Start -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- Header Section Start -->
    <header id="top-navbar" class="top-navbar"> 
        <div class="container">
            <div class="top-navbar_full">
                <div class="back-btn d-flex align-items-center">
                    <a href="home-page1.html"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"></a>
                </div>
                <div class="top-navbar-title d-flex align-items-center">
                    <p>Categories</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- Category Page Details Start -->
    <section id="category-page-sec">
        <div class="container">
            <div class="row mt-24">
                <div class="col-6 category-details">
                    <a href="single-category-page.html">
                        <h1 class="d-none">Category Page</h1>
                        <h2 class="d-none">Category</h2>
                        <div class="cate-img">
                            <img src="assets/images/category-page/category-1.png" alt="category-img">
                        </div>
                        <div class="pt-12">
                            <h3 class="cate-title">Tables</h3>
                            <p class="cate-subtitle">120 items</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 category-details ">
                    <a href="single-category-page.html">
                        <div  class="cate-img">
                            <img src="assets/images/category-page/category-2.png" alt="category-img">
                        </div>
                        <div class="pt-12">
                            <h3 class="cate-title">Chairs</h3>
                            <p class="cate-subtitle">178 items</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 category-details mt-16">
                    <a href="single-category-page.html">
                        <div  class="cate-img">
                            <img src="assets/images/category-page/category-3.png" alt="category-img">
                        </div>
                        <div class="pt-12">
                            <h3 class="cate-title">Sofas</h3>
                            <p class="cate-subtitle">89 items</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 category-details mt-16 ">
                    <a href="single-category-page.html">
                        <div  class="cate-img">
                            <img src="assets/images/category-page/category-4.png" alt="category-img">
                        </div>
                        <div class="pt-12">
                            <h3 class="cate-title">Lamps</h3>
                            <p class="cate-subtitle">256 items</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 category-details  mt-16">
                    <a href="single-category-page.html">
                        <div  class="cate-img">
                            <img src="assets/images/category-page/category-5.png" alt="category-img">
                        </div>
                        <div class="pt-12">
                            <h3 class="cate-title">Cabinets</h3>
                            <p class="cate-subtitle">139 items</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 category-details mt-16 ">
                    <a href="single-category-page.html">
                        <div  class="cate-img">
                            <img src="assets/images/category-page/category-6.png" alt="category-img">
                        </div>
                        <div class="pt-12">
                            <h3 class="cate-title">Beds</h3>
                            <p class="cate-subtitle">370 items</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 category-details mt-16 ">
                    <a href="single-category-page.html">
                        <div  class="cate-img">
                            <img src="assets/images/category-page/category-7.png" alt="category-img">
                        </div>
                        <div class="pt-12">
                            <h3 class="cate-title">Clocks</h3>
                            <p class="cate-subtitle">685 items</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 category-details mt-16 ">
                    <a href="single-category-page.html">
                        <div  class="cate-img">
                            <img src="assets/images/category-page/category-8.png" alt="category-img">
                        </div>
                        <div class="pt-12">
                            <h3 class="cate-title">Desks</h3>
                            <p class="cate-subtitle">370 items</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Page Details End -->
</div>
@endsection