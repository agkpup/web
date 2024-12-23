@extends('content')
@section('content')
<!-- Header Section Start -->
<header id="top-navbar" class="top-navbar"> 
    <div class="container">
        <div class="top-navbar_full">
            <div class="back-btn d-flex align-items-center">
                <a href="javascript: history.go(-1)"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"></a>
            </div>
            <div class="top-navbar-title d-flex align-items-center">
                <p>Partners</p>
            </div>
        </div>
    </div>
    <div class="navbar-boder"></div>
</header>
<!-- Header Section End -->
<!--Partner Details Section Start -->
<section id="partner-page">
    <div class="container">
        <div class="partner-page-full mt-24">
            <div class="partner-page-details ">
                <h1 class="d-none">Partner Page</h1>
                <h2 class="d-none">Partner Details</h2>
                <div class="partner-page-desciption">
                    <div class="partner-page-img-sec bg-green">
                        <h3 class="round-txt-part-page">WL</h3>
                    </div>
                    <div class="partner-page-content">
                        <div class="partner-page-content-full">
                            <h4 class="offcial-title-part-page">Wood Land</h4>
                            <h5 class="offcial-subtitle-part-page">New York, USA</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partner-page-details  mt-16">
                <div class="partner-page-desciption">
                    <div class="partner-page-img-sec bg-red">
                        <h3 class="round-txt-part-page">H</h3>
                    </div>
                    <div class="partner-page-content">
                        <div class="partner-page-content-full">
                            <h4 class="offcial-title-part-page">Home Decor</h4>
                            <h5 class="offcial-subtitle-part-page">London, UK</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partner-page-details  mt-16">
                <div class="partner-page-desciption">
                    <div class="partner-page-img-sec bg-blck">
                        <h3 class="round-txt-part-page">Fni.</h3>
                    </div>
                    <div class="partner-page-content">
                        <div class="partner-page-content-full">
                            <h4 class="offcial-title-part-page">Furnito</h4>
                            <h5 class="offcial-subtitle-part-page">Auckland, NZ</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</section>
<!--Partner Details Section End -->
@endsection