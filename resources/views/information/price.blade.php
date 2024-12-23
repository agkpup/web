@extends('information.layouts')
@section('information')
<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Simple pricing for you</h2>
        </div>
        <div class="row gy-4 justify-content-center">

            <div class="col-xl-4 col-md-6">
                <div class="price-box">
                    <div class="price-box_icon">
                        <img src="information/assets/img/icon/price_1_1.svg" alt="Icon">
                    </div>
                    <h3 class="box-title">Standard package</h3>
                    <h6 class="price-box_text">60 Cloth Per Month</h6>
                    <div class="price-box_content">
                        <h4 class="price-box_price"><span class="currency">₹</span>369. 00</h4>
                        <div class="available-list">
                            <ul>
                                <li>4 T-Shirts</li>
                                <li>1 Pairs of Jeans</li>
                                <li>3 Button-Down Shirts</li>
                                <li>1 Pair of Shorts</li>
                                <li>7 Pairs of Underwear</li>
                                <li>6 Pairs of Socks</li>
                                <li>1 Towel</li>
                            </ul>
                        </div>
                        <a href="/service-order" class="th-btn btn-fw th-radius">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="price-box">
                    <div class="price-box_icon">
                        <img src="information/assets/img/icon/price_1_2.svg" alt="Icon">
                    </div>
                    <h3 class="box-title">Enterprise Package</h3>
                    <h6 class="price-box_text">50 Cloth Per Month</h6>
                    <div class="price-box_content">
                        <h4 class="price-box_price"><span class="currency">₹</span>420.00</h4>
                        <div class="available-list">
                            <ul>
                                <li>4 T-Shirts</li>
                                <li>2 Pairs of Jeans</li>
                                <li>3 Button-Down Shirts</li>
                                <li>5 Pair of Shorts</li>
                                <li>7 Pairs of Underwear</li>
                                <li>6 Pairs of Socks</li>
                                <li>6 Towel</li>
                            </ul>
                        </div>
                        <a href="/service-order" class="th-btn btn-fw th-radius">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="price-box">
                    <div class="price-box_icon">
                        <img src="information/assets/img/icon/price_1_3.svg" alt="Icon">
                    </div>
                    <h3 class="box-title">Premium Package</h3>
                    <h6 class="price-box_text">80 Cloth Per Month</h6>
                    <div class="price-box_content">
                        <h4 class="price-box_price"><span class="currency">₹</span>400.00</h4>
                        <div class="available-list">
                            <ul>
                                <li>4 T-Shirts</li>
                                <li>3 Pairs of Jeans</li>
                                <li>3 Button-Down Shirts</li>
                                <li>6 Pair of Shorts</li>
                                <li>7 Pairs of Underwear</li>
                                <li>6 Pairs of Socks</li>
                                <li>3 Towel</li>
                            </ul>
                        </div>
                        <a href="/service-order" class="th-btn btn-fw th-radius">Order Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--==============================
Process Area
==============================-->
<section class="overflow-hidden space-bottom" id="process-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Work Process</span>
            <h2 class="sec-title">How We Work It!</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-3 col-md-6 process-box-wrap">
                <div class="process-box">
                    <div class="box-icon">
                        <img src="information/assets/img/icon/process_box_1.svg" alt="icon">
                        <div class="icon-shape"></div>
                    </div>
                    <p class="box-number">01</p>
                    <h3 class="box-title">Drapery Refresh</h3>
                    <p class="box-text">The frequency of dry cleaning depends on factors such as the type of garment</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 process-box-wrap">
                <div class="process-box">
                    <div class="box-icon">
                        <img src="information/assets/img/icon/process_box_2.svg" alt="icon">
                        <div class="icon-shape"></div>
                    </div>
                    <p class="box-number">02</p>
                    <h3 class="box-title">Garment Guardian</h3>
                    <p class="box-text">The frequency of dry cleaning depends on factors such as the type of garment</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 process-box-wrap">
                <div class="process-box">
                    <div class="box-icon">
                        <img src="information/assets/img/icon/process_box_3.svg" alt="icon">
                        <div class="icon-shape"></div>
                    </div>
                    <p class="box-number">03</p>
                    <h3 class="box-title">Delicate Care</h3>
                    <p class="box-text">Dry cleaning is effective at removing oil-based stains like grease, lipstick</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 process-box-wrap">
                <div class="process-box">
                    <div class="box-icon">
                        <img src="information/assets/img/icon/process_box_4.svg" alt="icon">
                        <div class="icon-shape"></div>
                    </div>
                    <p class="box-number">04</p>
                    <h3 class="box-title">Express Press</h3>
                    <p class="box-text">Many dry cleaners now use environmentally-friendly solvents and processes. Look</p>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
