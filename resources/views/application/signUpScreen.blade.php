@extends('application.layouts.app')
@section('content')
	<!-- SignUp Details Start -->
    <section id="sign-up-screen">
        <div class="container">
            <div class="sign-in-screen_full">
                <div class="sign-in-screen-top">
                    <h1>Create an Account</h1>
                    <p class="sign-in-cont">Sign up to join</p>
                    <form class="sign-in-form mt-32">
                        <div class="form-sec">
                            <label class="txt-lbl">Full Name</label><br>
                            <input type="text" id="fname"  placeholder="Aelisha Sm" class="txt-input">
                            <div class="form_bottom_boder"></div>
                        </div>
                        <div class="form-sec mt-16">
                            <label class="txt-lbl">Email</label><br>
                            <input type="email" id="email"  placeholder="********" class="txt-input">
                            <div class="form_bottom_boder"></div>
                        </div>
                        <div class="form-sec mt-16">
                            <label class="txt-lbl">Mobile Number</label><br>
                            <input type="number" id="mobile-no" placeholder="+1 (234) 567 8899" class="txt-input">
                            <div class="form_bottom_boder"></div>
                        </div>
                        <div class="form-sec mt-16">
                            <label  class="txt-lbl">Password</label><br>
                            <input type="password" id="password" name="password" placeholder="********" class="txt-input">
                            <div class="form_bottom_boder"></div>
                        </div>
                    </form>
                    <div class="agree-service-sec">
                        <p><span><img src="assets/images/sign-in-screen/remember.svg" alt="remeber-icon"></span>I agree to the <a href="term-services.html">Terms of Service</a></p>
                    </div>
                    <div class="sign-up mt-32">
                        <a href="sign-in-screen.html">Sign Up</a>	
                    </div>
                    <div class="block-footer">
                        <p>Have an account? <a href="sign-in-screen.html">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SignUp Details  End -->
@endsection