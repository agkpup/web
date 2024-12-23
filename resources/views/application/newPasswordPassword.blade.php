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
                    <p>New Password</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- New Password Details Start -->
    <section id="new-password-sec">
        <div class="container">
            <div class="new-password-sec-full">
                <h1 class="d-none">New Password Details</h1>
                <div class="mt-32">
                    <p class="enter-email-txt">Set your new password</p>
                </div>
                <form class="sign-in-form mt-32">
                    <div class="form-sec">
                        <label  class="txt-lbl control-lable">Enter New Password</label><br>
                        <div class="d-flex">
                            <input type="password" id="password" name="password" placeholder="**********" class="txt-input">
                            <i class="fas fa-eye-slash" id="eye"></i>
                        </div>
                        <div class="form_bottom_boder"></div>
                    </div>
                    <div class="form-sec mt-16">
                        <label  class="txt-lbl control-lable" >Confirm New Password</label><br>
                        <div class="d-flex"> 
                            <input type="password" id="confirm-password" name="confirm-password" placeholder="********" class="txt-input">
                            <i class="fas fa-eye-slash" id="eye1"></i>
                        </div>
                        <div class="form_bottom_boder"></div>
                    </div>
                </form>
                <div class="set-password-btn mt-32">
                    <a href="sign-in-screen.html">Set Password</a>	
                </div>
            </div>
        </div>
    </section>
    <!-- New Password Details End -->
</div>
@endsection