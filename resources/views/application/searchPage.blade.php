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
                    <p>Search</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- Search Page Details Section Start -->
    <section id=search-page-sec>
        <div class="container">
            <div class="serachbar-homepage2 mt-24">
                <h1 class="d-none">Search Page</h1>
                <h2 class="d-none">Search Details</h2>
                <div class="input-group search-page-searchbar ">
                    <span class="input-group-text search-iconn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.9395 1.9313C5.98074 1.9313 1.94141 5.97063 1.94141 10.9294C1.94141 15.8881 5.98074 19.9353 10.9395 19.9353C13.0575 19.9353 15.0054 19.193 16.5449 17.9606L20.293 21.7067C20.4821 21.888 20.7347 21.988 20.9967 21.9854C21.2587 21.9827 21.5093 21.8775 21.6947 21.6924C21.8801 21.5073 21.9856 21.2569 21.9886 20.9949C21.9917 20.7329 21.892 20.4802 21.7109 20.2908L17.9629 16.5427C19.1963 15.0008 19.9395 13.0498 19.9395 10.9294C19.9395 5.97063 15.8982 1.9313 10.9395 1.9313ZM10.9395 3.93134C14.8173 3.93134 17.9375 7.05153 17.9375 10.9294C17.9375 14.8072 14.8173 17.9352 10.9395 17.9352C7.06162 17.9352 3.94141 14.8072 3.94141 10.9294C3.94141 7.05153 7.06162 3.93134 10.9395 3.93134Z" fill="#7D8FAB"></path>
                        </svg>
                    </span>
                    <input type="search" placeholder="Search" class="form-control search-text" id="search-input">
                </div>
                <button class="close-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_1_3462" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                            <rect width="24" height="24" fill="white"/>
                        </mask>
                        <g mask="url(#mask0_1_3462)">
                            <path d="M17 7L7 17M7 7L17 17" stroke="#1E293B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
        <div class="searchpage-second-sec mt-24">
            <ul class="nav nav-pills search-tab" id="pills-tab" role="tablist">
                <li class="nav-item pf-15" role="presentation">
                    <button class="nav-link search-btn active" id="categorytab" data-bs-toggle="pill" data-bs-target="#pills-category" type="button">All Categories</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link search-btn" id="chair-tab" data-bs-toggle="pill" data-bs-target="#pills-chair" type="button">Chairs</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link search-btn" id="table-tab" data-bs-toggle="pill" data-bs-target="#pills-table" type="button">Tables</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link search-btn" id="sofa-tab" data-bs-toggle="pill" data-bs-target="#pills-sofa" type="button">Sofas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link search-btn" id="bad-tab" data-bs-toggle="pill" data-bs-target="#pills-bad" type="button">Bads</button>
                </li>
            </ul>
            <div class="search-boder mt-8"></div>
        </div>
        <div class="tab-content" id="pills-furnitureContent">
            <div class="tab-pane  active" id="pills-category" role="tabpanel" tabindex="0">
                <div class="searchpage-third-sec mt-24">
                    <div class="container">
                        <div class="single-page-chair">
                            <div class="search-page-chair-img">
                                <a href="single-product-page2.html">
                                    <img src="assets/images/search-page/search-1.png" alt="chair-img">
                                </a>
                            </div>
                            <div class="single-page-chair-content">
                                <div class="single-page-chair-content-full">
                                    <p class="search-page-title">Chairs</p>
                                    <h3 class="search-page-subtitle">Wing Chair</h3>
                                    <h4 class="seach-page-txt3">$100</h4>
                                </div>
                            </div>
                            <div class="product-page-favourite search-page-favo">
                                <a href="javascript:void(0);" class="item-bookmark">
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
                        <div class="single-page-chair mt-16">
                            <div class="search-page-chair-img">
                                <a href="single-product-page2.html">
                                    <img src="assets/images/search-page/search-2.png" alt="chair-img">
                                </a>
                            </div>
                            <div class="single-page-chair-content">
                                <div class="single-page-chair-content-full">
                                    <p class="search-page-title">Lampss</p>
                                    <h3 class="search-page-subtitle">Round White Light</h3>
                                    <h4 class="seach-page-txt3">$30</h4>
                                </div>
                            </div>
                            <div class="product-page-favourite search-page-favo">
                                <a href="javascript:void(0);" class="item-bookmark">
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
                        <div class="single-page-chair mt-16">
                            <div class="search-page-chair-img">
                                <a href="single-product-page2.html">
                                    <img src="assets/images/search-page/search-3.png" alt="chair-img">
                                </a>
                            </div>
                            <div class="single-page-chair-content">
                                <div class="single-page-chair-content-full">
                                    <p class="search-page-title">Sofas</p>
                                    <h3 class="search-page-subtitle">#ffa31a Meon</h3>
                                    <h4 class="seach-page-txt3">$150</h4>
                                </div>
                            </div>
                            <div class="product-page-favourite search-page-favo">
                                <a href="javascript:void(0);" class="item-bookmark">
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
                        <div class="single-page-chair mt-16">
                            <div class="search-page-chair-img">
                                <a href="single-product-page2.html">
                                    <img src="assets/images/search-page/search-4.png" alt="chair-img">
                                </a>
                            </div>
                            <div class="single-page-chair-content">
                                <div class="single-page-chair-content-full">
                                    <p class="search-page-title">Tables</p>
                                    <h3 class="search-page-subtitle">Modern Dining Table</h3>
                                    <h4 class="seach-page-txt3">$200</h4>
                                </div>
                            </div>
                            <div class="product-page-favourite search-page-favo">
                                <a href="javascript:void(0);" class="item-bookmark active">
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
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="pills-chair" role="tabpanel" tabindex="0">
                <div class="container">
                    <div class="single-page-chair mt-24">
                        <div class="search-page-chair-img">
                            <a href="single-product-page2.html">
                                <img src="assets/images/search-page/search-1.png" alt="chair-img">
                            </a>
                        </div>
                        <div class="single-page-chair-content">
                            <div class="single-page-chair-content-full">
                                <p class="search-page-title">Chairs</p>
                                <h3 class="search-page-subtitle">Wing Chair</h3>
                                <h4 class="seach-page-txt3">$100</h4>
                            </div>
                        </div>
                        <div class="product-page-favourite search-page-favo">
                            <a href="javascript:void(0);" class="item-bookmark">
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
                </div>
            </div>
            <div class="tab-pane" id="pills-table" role="tabpanel" tabindex="0">
                <div class="container">
                    <div class="single-page-chair mt-24">
                        <div class="search-page-chair-img">
                            <a href="single-product-page2.html">
                                <img src="assets/images/search-page/search-4.png" alt="chair-img">
                            </a>
                        </div>
                        <div class="single-page-chair-content">
                            <div class="single-page-chair-content-full">
                                <p class="search-page-title">Tables</p>
                                <h3 class="search-page-subtitle">Modern Dining Table</h3>
                                <h4 class="seach-page-txt3">$200</h4>
                            </div>
                        </div>
                        <div class="product-page-favourite search-page-favo">
                            <a href="javascript:void(0);" class="item-bookmark active">
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
                </div>
            </div>
            <div class="tab-pane" id="pills-sofa" role="tabpanel" tabindex="0">
                <div class="container">
                    <div class="single-page-chair mt-24">
                        <div class="search-page-chair-img">
                            <a href="single-product-page2.html">
                                <img src="assets/images/search-page/search-3.png" alt="chair-img">
                            </a>
                        </div>
                        <div class="single-page-chair-content">
                            <div class="single-page-chair-content-full">
                                <p class="search-page-title">Sofas</p>
                                <h3 class="search-page-subtitle">#ffa31a Meon</h3>
                                <h4 class="seach-page-txt3">$150</h4>
                            </div>
                        </div>
                        <div class="product-page-favourite search-page-favo">
                            <a href="javascript:void(0);" class="item-bookmark">
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
                </div>
            </div>
            <div class="tab-pane" id="pills-bad" role="tabpanel"  tabindex="0">
                <div class="container">
                    <div class="single-page-chair mt-24">
                        <div class="search-page-chair-img">
                            <a href="single-product-page2.html">
                                <img src="assets/images/search-page/search-3.png" alt="chair-img">
                            </a>
                        </div>
                        <div class="single-page-chair-content">
                            <div class="single-page-chair-content-full">
                                <p class="search-page-title">Sofas</p>
                                <h3 class="search-page-subtitle">#ffa31a Meon</h3>
                                <h4 class="seach-page-txt3">$150</h4>
                            </div>
                        </div>
                        <div class="product-page-favourite search-page-favo">
                            <a href="javascript:void(0);" class="item-bookmark">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Search Page Details Section End -->
@endsection