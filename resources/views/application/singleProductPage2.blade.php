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
                    <p>Product Details</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- Single Product Page2 Details Start -->
    <section id="product-page2-sec">
        <div class="product-page2-first-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators productpage2-custom-indicator">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active custom-dots" aria-current="true" ></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="custom-dots"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="custom-dots"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="product-page2-slider">
                            <div class="productpage2-overlay"></div>
                            <img src="assets/images/single-product-page2/product-1.png" alt="product-img" class="img-fluid w-100">
                            <div class="product-page2-top">
                                <div class="prod-page2-sofas">
                                    <p>Sofas</p>
                                </div>
                                <div class="prod-page2-favour">
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
                            <div class="product-page2-bottom">
                                <div class="product-page2-bottom-wrapper">
                                    <h1 class="prod-page2-title">Floral Pillow with Beige Sofa</h1>
                                    <p class="prod-page2-subtitle">$220</p>
                                    <div class="product-page2-rating mt-12">
                                        <ul>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/light-#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li class="pf-8 rate-txt-prod">(45)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="product-page2-slider">
                            <div class="productpage2-overlay"></div>
                            <img src="assets/images/single-product-page2/product-1.png" alt="product-img" class="img-fluid w-100">
                            <div class="product-page2-top">
                                <div class="prod-page2-sofas">
                                    <p>Sofas</p>
                                </div>
                                <div class="prod-page2-favour">
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
                            <div class="product-page2-bottom">
                                <div class="product-page2-bottom-wrapper">
                                    <h1 class="prod-page2-title">Floral Pillow with Beige Sofa</h1>
                                    <p class="prod-page2-subtitle">$220</p>
                                    <div class="product-page2-rating mt-12">
                                        <ul>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/light-#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li class="pf-8 rate-txt-prod">(45)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="product-page2-slider">
                            <div class="productpage2-overlay"></div>
                            <img src="assets/images/single-product-page2/product-1.png" alt="product-img" class="img-fluid w-100">
                            <div class="product-page2-top">
                                <div class="prod-page2-sofas">
                                    <p>Sofas</p>
                                </div>
                                <div class="prod-page2-favour">
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
                            <div class="product-page2-bottom">
                                <div class="product-page2-bottom-wrapper">
                                    <h1 class="prod-page2-title">Floral Pillow with Beige Sofa</h1>
                                    <p class="prod-page2-subtitle">$220</p>
                                    <div class="product-page2-rating mt-12">
                                        <ul>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li><img src="assets/images/single-product-page2/light-#ffa31a-star.svg" alt="#ffa31a-star"></li>
                                            <li class="pf-8 rate-txt-prod">(45)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-page2-second-sec mt-16">
            <div class="product-page2-second-sec-wrapper">
                <h2 class="d-none">Product Detail</h2>
                <p class="read-less-text read-desc">Made of premium-quality material, this fabric sofa is sturdy in nature and offers long-lasting durability. The two fabric options
                    <span class="read_dots" style="">...</span>
                </p>
                <p class="read-more-text read-desc" >available in this unit are Cotton and Velvet. Moreover, both these fabrics are available in varied colour options to match diverse decor aesthetics.
                </p>
                <p class="read-more-text mt-16 read-desc">
                Our artisans ensure every minute detail to achieve extreme accuracy and level of perfection. The final product, before reaching.</p>
                <div class="read-more-btn-text">
                    <a href="javascript:void(0);" class="product2-readmore">
                        <img src="assets/images/single-product-page2/read-more-arrow.svg" alt="right-arrow">
                        <p class="read-more">Read More</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-page2-third-sec mt-16">
            <form>
                <div class="product-page2-third-sec-wrapper">
                    <div class="color-select-wrap">
                        <h3 class="color-txt">Color</h3>
                        <select id="color" name="colorlist"  class="custom-select-icon mt-12">
                            <option value="volvo">Red</option>
                            <option value="saab">Green</option>
                            <option value="opel">Blue</option>
                            <option value="audi">Orange</option>
                        </select>
                    </div>
                    <div class="color-select-wrap">
                        <h3 class="color-txt">Size</h3>
                        <select id="size" name="sizelist"  class="custom-select-icon mt-12">
                            <option value="volvo">Corner</option>
                            <option value="saab">1 Seater</option>
                            <option value="opel">2 Seater</option>
                            <option value="audi">3 Seater</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="product-page2-fourth-sec">
            <div class="product-page2-fourth-sec-wrap">
                <div class="product-incre">
                    <a href="javascript:void(0)" class="product__minus sub">
                        <span>
                            <svg width="8" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H7" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                    <input name="quantity" type="text" class="product__input" value="1">
                    <a href="javascript:void(0)" class="product__plus add">
                        <span>
                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4H7" stroke="#ffa31a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M4 7V1" stroke="#ffa31a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="product-page2-buy-btn">
                    <a href="shopping-cart.html">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Product Page2 Details End -->
@endsection
