@extends('application.layouts.app')
@section('content')
	<!-- Header Section Start -->
    <header id="top-navbar" class="top-navbar"> 
        <div class="container">
            <div class="top-navbar_full">
                <div class="back-btn d-flex align-items-center">
                </div>
                <div class="top-navbar-title d-flex align-items-center">	
                </div>
                <div class="skip_btn second-color ml-0">
                    <a href="interest.html">Skip</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Select Language Section Start -->
    <section id="select-language-page">
        <div class="container">
            <h1 class="hey-txt">Hey, Aelisha</h1>
            <p class="select-lang mt-8">Please select your preferred language to facilitate communication.</p>
            <div class="select-lang-sec mt-32">
                <div class="lang-sec">
                    <input type="radio" id="select-lang1" name="select-language" checked >
                    <label class="custom-radio-sel-lang" for="select-lang1" >English</label>
                </div>
                <div class="lang-sec">
                    <input type="radio"  id="select-lang2" name="select-language" >
                    <label class="custom-radio-sel-lang " for="select-lang2">Chinese</label>
                </div>
                <div class="lang-sec">
                    <input type="radio"  id="select-lang3" name="select-language" >
                    <label class="custom-radio-sel-lang " for="select-lang3">Hindi</label>
                </div>
                <div class="lang-sec">
                    <input type="radio"  id="select-lang4" name="select-language" >
                    <label class="custom-radio-sel-lang " for="select-lang4">Portuguese</label>
                </div>
                <div class="lang-sec">
                    <input type="radio"  id="select-lang5" name="select-language" >
                    <label class="custom-radio-sel-lang " for="select-lang5">Spanish</label>
                </div>
                <div class="lang-sec">
                    <input type="radio"  id="select-lang6" name="select-language" >
                    <label class="custom-radio-sel-lang " for="select-lang6">Arabic</label>
                </div>
                <div class="lang-sec">
                    <input type="radio"  id="select-lang7" name="select-language" >
                    <label class="custom-radio-sel-lang " for="select-lang7">Bulgarian</label>
                </div>
                <div class="lang-sec">
                    <input type="radio"  id="select-lang8" name="select-language" >
                    <label class="custom-radio-sel-lang " for="select-lang8">French</label>
                </div>
                <div class="lang-sec">
                    <input type="radio"  id="select-lang9" name="select-language" >
                    <label class="custom-radio-sel-lang " for="select-lang9">Russian</label>
                </div>
            </div>
            <div class="select mt-32">
                <a href="interest.html">Select</a>	
            </div>
        </div>
    </section>
    <!-- Select Language Section End -->
@endsection