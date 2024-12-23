@extends('information.layouts')
@section('information')
<!--==============================
Service Area
==============================-->
<section class="bg-top-center overflow-hidden space" style="background-color: #ffa31a;">
    <div class="container">
        <div class="row gy-4">



            <div class="col-md-6 col-xl-4">
                <div class="service-item">
                    <div class="service-item_wrapper">
                        <div class="service-item_img">
                            <img src="information/assets/img/catchyTat/shoe_clean.jpg" alt="img">
                        </div>
                        <div class="service-item_icon">
                            <img src="information/assets/img/icon/service_2_3.svg" alt="Icon">
                        </div>
                    </div>
                    <div class="service-item_content" data-bg-src="information/assets/img/shape/service_shape_2.png">
                        <h3 class="box-title"><a href="/service-order">Leather & Suede Care</a></h3>
                        <p class="service-item_text">Expert care for leather and suede, ensuring lasting quality and vibrancy .</p>
                        <a href="/service-order" class="th-btn border">Wash My Shoes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-item">
                    <div class="service-item_wrapper">
                        <div class="service-item_img">
                            <img src="information/assets/img/catchyTat/dry_clean.avif" alt="img">
                        </div>
                        <div class="service-item_icon">
                            <img src="information/assets/img/icon/service_2_1.svg" alt="Icon">
                        </div>
                    </div>
                    <div class="service-item_content" data-bg-src="information/assets/img/shape/service_shape_2.png">
                        <h3 class="box-title"><a href="/service-order">Dry Cleaning</a></h3>
                        <p class="service-item_text">Premium dry cleaning services for fresh, spotless clothes with care for every fabric.</p>
                        <a href="/service-order" class="th-btn border">Dry Clean My Garments</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-item">
                    <div class="service-item_wrapper">
                        <div class="service-item_img">
                            <img src="information/assets/img/catchyTat/washing.jpg" alt="img">
                        </div>
                        <div class="service-item_icon">
                            <img src="information/assets/img/icon/service_2_2.svg" alt="Icon">
                        </div>
                    </div>
                    <div class="service-item_content" data-bg-src="information/assets/img/shape/service_shape_2.png">
                        <h3 class="box-title"><a href="/service-order">Wash & Fold</a></h3>
                        <p class="service-item_text">Convenient wash & fold service for perfectly clean, neatly folded clothes, ready to go.</p>
                        <a href="/service-order" class="th-btn border">Wash & Fold My Clothes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-item">
                    <div class="service-item_wrapper">
                        <div class="service-item_img">
                            <img src="information/assets/img/catchyTat/iron.jpg" alt="img">
                        </div>
                        <div class="service-item_icon">
                            <img src="/information/assets/img/icon/service_2_3.svg" alt="Icon">
                        </div>
                    </div>
                    <div class="service-item_content" data-bg-src="information/assets/img/shape/service_shape_2.png">
                        <h3 class="box-title"><a href="/service-order">Ironing/Pressing</a></h3>
                        <p class="service-item_text">Professional ironing and pressing for crisp, wrinkle-free clothes with a polished finish.</p>
                        <a href="/service-order" class="th-btn border">Iron My Clothes</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section><!--==============================
Testimonial Area
==============================-->
{{-- <section class="testi-area " id="testi-sec" data-bg-src="information/assets/img/bg/testi_bg_1.jpg">
    <div class="shape-mockup" data-bottom="0" data-right="0"><img src="information/assets/img/shape/testi_img_1.png" alt="shape">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="testi-card-slide">
                    <div class="title-area">
                        <span class="sub-title style1">Testimonials</span>
                        <h2 class="sec-title text-white">Our Clients Feedback</h2>
                    </div>
                    <div class="swiper th-slider" id="testiSlide1" data-slider-options='{"effect":"slide"}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_wrapp">
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater global-img">
                                                <img src="information/assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                                            </div>
                                            <div class="star-icon">
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-regular fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="testi-card_wrapper">
                                            <p class="testi-card_text">“If you opted for pickup and delivery, our dedicated team will bring your laundry back to your doorstep at the scheduled time. For drop-offs, your clean clothes will be waiting.”</p>
                                            <div class="testimonial-author">
                                                <div class="testi-card_content">
                                                    <h3 class="testi-card_name">Alex Michel</h3>
                                                    <span class="testi-card_desig">Founder CEO</span>
                                                </div>
                                                <div class="testi-quote">
                                                    <img src="information/assets/img/icon/quote.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_wrapp">
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater global-img">
                                                <img src="information/assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                                            </div>
                                            <div class="star-icon">
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-regular fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="testi-card_wrapper">
                                            <p class="testi-card_text">“If you opted for pickup and delivery, our dedicated team will bring your laundry back to your doorstep at the scheduled time. For drop-offs, your clean clothes will be waiting.”</p>
                                            <div class="testimonial-author">
                                                <div class="testi-card_content">
                                                    <h3 class="testi-card_name">Jenny Wilson</h3>
                                                    <span class="testi-card_desig">Project Manager</span>
                                                </div>
                                                <div class="testi-quote">
                                                    <img src="information/assets/img/icon/quote.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testi-area-wrapper">
                    <form action="mail.php" method="POST" class="testi-form input-smoke ajax-contact">
                        <h3 class="sec-title text-center">Book An Appointment</h3>
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-12">
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="" disabled selected hidden>Select Service</option>
                                    <option value="Dry Cleaning">Dry Cleaning</option>
                                    <option value="Wash & Fold">Wash & Fold</option>
                                    <option value="Ironing/Pressing">Ironing/Pressing</option>
                                    <option value="Garments Transformed">Garments Transformed</option>
                                    <option value="Household Textile Care">Household Textile Care</option>
                                    <option value="Household Textile Care">Household Textile Care</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn btn-fw">Appointment Now</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!--==============================
Blog Area
==============================-->
{{-- <section class="overflow-hidden space" id="blog-sec">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-6">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title style1">Blog Post</span>
                    <h2 class="sec-title">Latest News & Updates</h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <div class="btn-group">
                        <a href="blog-details.html" class="th-btn">View More Post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_2_1.jpg" alt="blog image">
                            </div>
                            <div class="blog-box_wrapper">
                                <span class="blog-box_date">10 <span class="blog-box_month">nov</span> </span>
                                <span class="blog-box_year">2023</span>
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fa-regular fa-user"></i>by admin</a>
                                    <a href="blog.html"><i class="fa-regular fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">What Kind of Fabrics Really Need Dry Cleaning</a></h3>
                                <p>The frequency of dry cleaning depends on the type of garment and how often worn</p>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_2_2.jpg" alt="blog image">
                            </div>
                            <div class="blog-box_wrapper">
                                <span class="blog-box_date">15 <span class="blog-box_month">nov</span> </span>
                                <span class="blog-box_year">2023</span>
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fa-regular fa-user"></i>by admin</a>
                                    <a href="blog.html"><i class="fa-regular fa-comments"></i>3 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Elevate your style with meticulous dry cleaning</a></h3>
                                <p>our meticulous dry cleaning services, where precision meets pristine care.</p>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_2_3.jpg" alt="blog image">
                            </div>
                            <div class="blog-box_wrapper">
                                <span class="blog-box_date">16 <span class="blog-box_month">nov</span> </span>
                                <span class="blog-box_year">2023</span>
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fa-regular fa-user"></i>by admin</a>
                                    <a href="blog.html"><i class="fa-regular fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">wardrobe with meticulous dry cleaning services</a></h3>
                                <p>Revitalize your wardrobe with expert dry cleaning for a pristine polished look.</p>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_2_1.jpg" alt="blog image">
                            </div>
                            <div class="blog-box_wrapper">
                                <span class="blog-box_date">17 <span class="blog-box_month">nov</span> </span>
                                <span class="blog-box_year">2023</span>
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fa-regular fa-user"></i>by admin</a>
                                    <a href="blog.html"><i class="fa-regular fa-comments"></i>4 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Revitalize your wardrobe with dry cleaning</a></h3>
                                <p>meticulous dry cleaning, preserving fabrics and enhancing garment longevity."</p>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_2_2.jpg" alt="blog image">
                            </div>
                            <div class="blog-box_wrapper">
                                <span class="blog-box_date">19 <span class="blog-box_month">nov</span> </span>
                                <span class="blog-box_year">2023</span>
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fa-regular fa-user"></i>by admin</a>
                                    <a href="blog.html"><i class="fa-regular fa-comments"></i>4 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">wardrobe with meticulous dry cleaning services</a></h3>
                                <p>Elevate your wardrobe with meticulous dry cleaning precision and care."</p>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_2_3.jpg" alt="blog image">
                            </div>
                            <div class="blog-box_wrapper">
                                <span class="blog-box_date">20 <span class="blog-box_month">nov</span> </span>
                                <span class="blog-box_year">2023</span>
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fa-regular fa-user"></i>by admin</a>
                                    <a href="blog.html"><i class="fa-regular fa-comments"></i>4 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Revitalize your wardrobe with dry cleaning</a></h3>
                                <p>The frequency of dry cleaning depends on the type of garment and how often worn</p>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section> --}}

<!--==============================
Footer Area
==============================-->
<div class="">
    <div class="container z-index-common">
        <div class="cta-wrap" data-overlay="title" data-opacity="9" data-bg-src="information/assets/img/catchyTat/bgcta.jpg">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 mb-5 mb-lg-0">
                    <div class="title-area mb-0 text-center text-lg-start">
                        <span class="sub-title style1">Get Free Contact For Services</span>
                        <h2 class="sec-title text-white">You Get Premium Laundry Service From Us!</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <form class="cta-form">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email Address" required="">
                            <button type="submit" class="th-btn style4">Get your services</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="cta-shape"><img src="information/assets/img/shape/line.png" alt=""></div>
        </div>
    </div>
</div>
@endsection
