@extends('application.layouts.app')
@section('content')
<section id="sign-in-screen">
    <div class="container">
        <div class="sign-in-screen_full">
            <div class="sign-in-screen-top">
                <h1>Welcome Back!</h1>
                <p class="sign-in-cont">Sign in to continue</p>
                <form class="sign-in-form mt-32">
                    <div class="form-sec">
                        <label  class="txt-lbl">Email</label><br>
                        <input type="email" id="email" name="email" placeholder="yourname@mail.com" class="txt-input">
                        <div class="form_bottom_boder"></div>
                    </div>
                    <div class="form-sec mt-16">
                        <label  class="txt-lbl">Password</label><br>
                        <input type="password" id="password" name="password" placeholder="********" class="txt-input">
                        <div class="form_bottom_boder"></div>
                    </div>
                </form>
                <div class="row remember-sec">
                    <div class="col-6">
                        <span><img src="assets/images/sign-in-screen/remember.svg" alt="remeber-icon"></span>
                        <a href="javascript:void(0)" class="remember-btn">Remember Me</a>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        <a href="forget-password-screen.html" class="forget-btn">Forget password?</a>	
                    </div>
                </div>
                <div class="sign-in mt-32">
                    <a href="select-language.html">Sign In</a>	
                </div>
                <div class="or_sign mt-32">
                    <p>Or sign in with</p>
                </div>
                <div class="social_media mt-32">
                    <div class="icon-box">
                        <a href="https://www.google.com/" target="_blank" ><img src="assets/images/sign-in-screen/google.png" alt="google-img"></a>
                    </div>
                    <div class="icon-box">
                        <a href="https://www.facebook.com/" target="_blank" ><img src="assets/images/sign-in-screen/facebook.png" alt="facebook-img"></a>
                    </div>
                    <div class="icon-box">
                        <a href="https://support.apple.com/en-in/HT204053" target="_blank" ><img src="assets/images/sign-in-screen/apple.png" alt="apple-img"></a>
                    </div>
                </div>
                <div class="block-footer">
                    <p>Don’t have an account? <a href="sign-up-screen.html">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection