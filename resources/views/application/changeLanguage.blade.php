@extends('application.layouts.app')
@section()
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
                    <p>Change Language</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- Change Language Section Start -->
    <section id="change-language-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="d-none">Change Language</h1>
                    <div class="lang-list mt-24">
                        <p class="lang-sel-txt">Choose your local language</p>
                        <div class="form-check change-lan-sec language-sel">
                            <input class="form-check-input custom-input"  name="language" type="radio" id="language1" checked>
                            <label class="form-check-label custom-lable"  for="language1">
                                English
                            </label>
                        </div>
                        <div class="form-check change-lan-sec">
                            <input class="form-check-input custom-input"  name="language" type="radio" id="language2">
                            <label class="form-check-label custom-lable" for="language2">
                                Hindi
                            </label>
                        </div>
                        <div class="form-check change-lan-sec">
                            <input class="form-check-input custom-input"  name="language" type="radio" id="language3">
                            <label class="form-check-label custom-lable" for="language3">
                                Spanish
                            </label>
                        </div>
                        <div class="form-check change-lan-sec">
                            <input class="form-check-input custom-input"  name="language" type="radio" id="language4">
                            <label class="form-check-label custom-lable" for="language4">
                                French
                            </label>
                        </div>
                        <div class="form-check change-lan-sec">
                            <input class="form-check-input custom-input"  name="language" type="radio" id="language5">
                            <label class="form-check-label custom-lable" for="language5">
                                Arabic
                            </label>
                        </div>
                        <div class="form-check change-lan-sec">
                            <input class="form-check-input custom-input"  name="language" type="radio" id="language6">
                            <label class="form-check-label custom-lable" for="language6">
                                Bengali
                            </label>
                        </div>
                        <div class="form-check change-lan-sec">
                            <input class="form-check-input custom-input"  name="language" type="radio" id="language7">
                            <label class="form-check-label custom-lable" for="language7">
                                Russian
                            </label>
                        </div>
                        <div class="form-check change-lan-sec">
                            <input class="form-check-input custom-input"  name="language" type="radio" id="language8">
                            <label class="form-check-label custom-lable" for="language8">
                                Chinese
                            </label>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Change Language Section End -->
</div>
@endsection