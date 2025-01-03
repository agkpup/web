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
                    <a href="javascript: history.go(-1)"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"> </a>
                </div>
                <div class="top-navbar-title d-flex align-items-center">
                    <p>Filter</p>
                </div>
                <div class="reset-btn d-flex align-items-center">
                    <input type="reset" class="reset-btn">
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- Filter Page Section Start -->
    <section id="filter-page">
        <div class="container">
            <div class="filter-page-full mt-8">
                <div class="form-check  filter-sec">
                    <input class="form-check-input custom-input"  name="priority" type="radio" id="priority1">
                    <label class="form-check-label custom-lable-filter" for="priority1">
                        Popularity
                    </label>
                </div>
                <div class="form-check  filter-sec">
                    <input class="form-check-input custom-input"  name="priority" type="radio" id="priority2" checked>
                    <label class="form-check-label custom-lable-filter" for="priority2">
                        Lowest First
                    </label>
                </div>
                <div class="form-check  filter-sec">
                    <input class="form-check-input custom-input"  name="priority" type="radio" id="priority3">
                    <label class="form-check-label custom-lable-filter" for="priority3">
                        Highest First
                    </label>
                </div>
                <div class="form-check  filter-sec">
                    <input class="form-check-input custom-input"  name="priority" type="radio" id="priority4">
                    <label class="form-check-label custom-lable-filter" for="priority4">
                        Newly Listed
                    </label>
                </div>
                <div class="form-check  filter-sec">
                    <input class="form-check-input custom-input"  name="priority" type="radio" id="priority5">
                    <label class="form-check-label custom-lable-filter" for="priority5">
                        Best Offers
                    </label>
                </div>
            </div>
            <div class="filter-catergory sec mt-24">
                <h1 class="filter-page-title">Categories</h1>
                <div class="filter-catergory-full mt-16">
                    <div class="filter-sec-cater">
                        <input type="radio" id="filter-category-list1" name="filter-category-list" >
                        <label class="custom-radio-filter " for="filter-category-list1">Chairs</label>
                    </div>
                    <div class="filter-sec-cater">
                        <input type="radio" id="filter-category-list2" name="filter-category-list" >
                        <label class="custom-radio-filter " for="filter-category-list2">Table</label>
                    </div>
                    <div class="filter-sec-cater">
                        <input type="radio" id="filter-category-list3" name="filter-category-list" >
                        <label class="custom-radio-filter " for="filter-category-list3">Lamps</label>
                    </div>
                    <div class="filter-sec-cater">
                        <input type="radio" id="filter-category-list4" name="filter-category-list" checked >
                        <label class="custom-radio-filter " for="filter-category-list4">Sofas</label>
                    </div>
                    <div class="filter-sec-cater">
                        <input type="radio" id="filter-category-list5" name="filter-category-list" >
                        <label class="custom-radio-filter " for="filter-category-list5">Cabinets</label>
                    </div>
                    <div class="filter-sec-cater">
                        <input type="radio" id="filter-category-list6" name="filter-category-list" >
                        <label class="custom-radio-filter " for="filter-category-list6">Bad</label>
                    </div>
                    <div class="filter-sec-cater">
                        <input type="radio" id="filter-category-list7" name="filter-category-list" >
                        <label class="custom-radio-filter " for="filter-category-list7">Desk</label>
                    </div>
                    <div class="filter-sec-cater">
                        <input type="radio" id="filter-category-list8" name="filter-category-list" >
                        <label class="custom-radio-filter " for="filter-category-list8">Clocks</label>
                    </div>
                </div>
            </div>
            <div class="filter-price-sec mt-24">
                <div class="container">
                    <div class="filter-price-sec-full">
                        <h2 class="filter-page-title">Price Range</h2>
                        <div class="filter-price-deatils mt-16">
                            <h3 class="filter-price-title">$0 - $250</h3>
                            <p class="filter-grap-deatils">Average price is <span class="value">50</span></p>
                        </div>
                        <div class="filter-graph-sec mt-16">
                            <range-slider dir="ltr" min="0" max="250" ></range-slider>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="filter-btn-apply">
            <a href="single-category-page.html">Apply Filters</a>	
        </div>
    </section>
    <!-- Filter Page Section End -->
</div>
@endsection