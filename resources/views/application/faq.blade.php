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
                    <a href="javascript: history.go(-1)"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"></a>
                </div>
                <div class="top-navbar-title d-flex align-items-center">
                    <p>FAQs</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- Faq Details Section Start -->
    <section id="faq-sec">
        <div class="container">
            <div class="faq-full-sec mt-24">
                <h1 class="d-none">Faq Page</h1>
                <div class="accordion custom-acc" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item border-0 mt-24">
                        <h2 class="accordion-header">
                            <button class="accordion-button custom_icon " type="button" data-bs-toggle="collapse" data-bs-target="#accordian1">
                                <span>How can I check the status of my order?</span>
                            </button>
                        </h2>
                        <div id="accordian1" class="accordion-collapse collapse show">
                            <div class="accordion-body faq-answer">
                                <p>Using your order number and email address or phone number, you can track your order online.</p>
                            </div>
                        </div>
                        <div class="faq-bottom-border"></div>
                    </div>
                    <div class="accordion-item border-0 mt-24">
                        <h2 class="accordion-header">
                            <button class="accordion-button custom_icon collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordian2">
                                <span>Why can’t I place an order for delivery online?</span>
                            </button>
                        </h2>
                        <div id="accordian2" class="accordion-collapse collapse">
                            <div class="accordion-body faq-answer">
                                <p>Using your order number and email address or phone number, you can track your order online.</p>
                            </div>
                        </div>
                        <div class="faq-bottom-border"></div>
                    </div>
                    <div class="accordion-item border-0 mt-24">
                        <h2 class="accordion-header">
                            <button class="accordion-button custom_icon collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordian3">
                                <span>What should I do if my order is marked as delivered but I didn’t receive it?</span>
                            </button>
                        </h2>
                        <div id="accordian3" class="accordion-collapse collapse ">
                            <div class="accordion-body faq-answer">
                                <p>Using your order number and email address or phone number, you can track your order online.</p>
                            </div>
                        </div>
                        <div class="faq-bottom-border"></div>
                    </div>
                    <div class="accordion-item border-0 mt-24">
                        <h2 class="accordion-header">
                            <button class="accordion-button custom_icon collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordian4">
                                <span>What should I do if my item is damaged?</span>
                            </button>
                        </h2>
                        <div id="accordian4" class="accordion-collapse collapse ">
                            <div class="accordion-body faq-answer">
                                <p>Using your order number and email address or phone number, you can track your order online.</p>
                            </div>
                        </div>
                        <div class="faq-bottom-border"></div>
                    </div>
                    <div class="accordion-item border-0 mt-24">
                        <h2 class="accordion-header">
                            <button class="accordion-button custom_icon collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordian5">
                                <span>If parts of my product are missing, what should I do?</span>
                            </button>
                        </h2>
                        <div id="accordian5" class="accordion-collapse collapse ">
                            <div class="accordion-body faq-answer">
                                <p>Using your order number and email address or phone number, you can track your order online.</p>
                            </div>
                        </div>
                        <div class="faq-bottom-border"></div>
                    </div>
                    <div class="accordion-item border-0 mt-24">
                        <h2 class="accordion-header">
                            <button class="accordion-button custom_icon collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordian6">
                                <span>If I place my order online, how long will it take to be delivered?</span>
                            </button>
                        </h2>
                        <div id="accordian6" class="accordion-collapse collapse">
                            <div class="accordion-body faq-answer">
                                <p>Using your order number and email address or phone number, you can track your order online.</p>
                            </div>
                        </div>
                        <div class="faq-bottom-border"></div>
                    </div>
                </div>
            </div>		
        </div>
    </section>
    <!-- Faq Details Section End -->
</div>
@endsection