<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>catchyTat - Premium Laundry, Ironing, Dry Cleaning & Washing Services | Home Laundry Solutions</title>
    <meta name="author" content="catchyTat">
    <meta name="description" content="Discover premium laundry services with catchyTat. We offer professional washing, ironing, dry cleaning, and home laundry solutions tailored to your needs. Book now for spotless results!">
    <meta name="keywords" content="catchyTat, laundry service, dry cleaning, ironing service, professional washing, home laundry solutions, laundry pickup and delivery, stain removal, eco-friendly laundry, online laundry booking">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="information/assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="information/assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="information/assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="information/assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="information/assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="information/assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="information/assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="information/assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="information/assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="information/assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="information/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="information/assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="information/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="information/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="information/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700;800;900&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('information/assets/css/bootstrap.min.css') }}">

<!-- Fontawesome Icon -->
<link rel="stylesheet" href="{{ asset('information/assets/css/fontawesome.min.css') }}">

<!-- Magnific Popup CSS for Lightbox Functionality -->
<link rel="stylesheet" href="{{ asset('information/assets/css/magnific-popup.min.css') }}">

<!-- Swiper CSS for Slider/Carousel -->
<link rel="stylesheet" href="{{ asset('information/assets/css/swiper-bundle.min.css') }}">

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('information/assets/css/style.css') }}">

</head>

<body>

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    {{-- <div class="preloader ">
        <button class="th-btn style2 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader">
                <div class="rot"></div>
                <img src="information/assets/img/logo-white.svg" alt="Laun">
            </div>
        </div>
    </div>  --}}

    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-info ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="{{ route('homeLanding') }}"><img src="information/assets/img/catchytat.png" alt="Laun"></a>
                    </div>
                    <p class="about-text">At catchyTat, we provide specialized care for your seasonal laundry needs. Our expert winterization services protect and store your heavy winter garments during the off-season, and when the season changes, we ensure they’re fresh, clean, and ready to wear.</p>
                    <div class="th-social">
                        <a href="https://www.facebook.com/catchytat" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/catchytat" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/catchytat" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://wa.me/919056223996" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="th-social" style="margin: 15px;">
                    <button class="th-btn style4 th-radius" onclick="openOrders()">My Orders</button>
                    <button type="button" class="th-btn style4 th-radius" data-bs-toggle="modal" data-bs-target="#authModal">
                        Log In
                      </button>
                    </div>
                </div>
            </div>
            {{-- <div class="widget  ">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="information/assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="far fa-calendar"></i>21 October , 2023</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">A Fresh Start for Your Wardrobe</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="information/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="far fa-calendar"></i>22 October , 2023</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Where Clean Meets Convenience</a></h4>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="widget  ">
                <h3 class="widget_title">Contact Us</h3>
                <div class="th-widget-contact">
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <p class="info-box_text">Mohali | Chandigarh</p>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <p class="info-box_text">
                            <a href="tel:+919056223996" class="info-box_link">+91 90562 23996</a>
                            {{-- <a href="tel:+16326545432" class="info-box_link">+(163)-2654-5432</a> --}}
                        </p>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <p class="info-box_text">
                            <a href="connect@catchytat.com" class="info-box_link">connect@catchytat.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div><!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{route('homeLanding')}}"><img src="information/assets/img/logo.svg" alt="Laun"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="{{ route('homeLanding') }}">Home</a></li>
                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">services</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('pricing')}}">Pricing</a></li>
                            <li><a href="{{route('servicePage')}}">Our Services</a></li>
                            <li><a href="{{route('serviceOrder')}}">Wash My clothes</a></li>
                            <li><a href="{{route('pricing')}}">Pricing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('contactUs')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links style2">
                            <p class="header-notice text-theme">Welcome to Laundry Service & Dry Cleaning</p>
                            <ul>
                                <li><i class="fa-solid fa-phone"></i>Phone:<a href="tel:++91 90562 23996">+91 90562 23996</a></li>
                                <li><i class="fa-solid fa-envelope"></i>Email:<a href="mailto:connect@catchytat.com">connect@catchytat.com</a>
                                </li>
                                <li class="d-none d-xl-inline-block"><i class="fa-solid fa-clock"></i>Opening Hours:
                                    <span>24X7</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="social-links">
                            <span class="social-title">Follow Us On:</span>
                            <a href="https://www.facebook.com/catchytat"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/catchytat"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/catchytat"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/catchytat"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/catchytat"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="container th-container">
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('homeLanding') }}"><img src="information/assets/img/catchybgt.png" alt="Laun" style="max-width: 180px;max-height:100px;"></a>
                            </div>
                        </div>
                        <div class="col-auto me-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>

                                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">services</a>
                                        <ul class="sub-menu">

                                            <li><a href="{{route('servicePage')}}">Our Services</a></li>
                                            <li><a href="{{route('serviceOrder')}}">Wash clothes</a></li>
                                            <li><a href="{{route('pricing')}}">Pricing</a>  </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('contactUs')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <button type="button" class="icon-btn" onclick="openOrders()"><i class="fa fa-shopping-cart"><small style="font-size: 10px;" id="cartCount"></small></i></button>
                                <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block"><i class="far fa-bars"></i></a>
                                <a href="/service-order" class="th-btn style4 th-radius">Schedule A Pickup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div id="error-notification" class="alert alert-danger alert-dismissible fade" role="alert" style="display: none;">
        <strong>Error!</strong> <span id="error-message"></span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @yield('information')
    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true" style="margin-top: 130px;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="authModalLabel">Login & Signup</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Nav Tabs -->
              <ul class="nav nav-tabs mb-3" id="authTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link th-btn style4 th-radius active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">
                    Login
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link th-btn style4 th-radius" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">
                    Signup
                  </button>
                </li>
              </ul>

              <!-- Tab Content -->
              <div class="tab-content">
                <!-- Login Tab -->
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                  <form id="login-form">
                    <div class="mb-3">
                      <label for="loginEmail" class="form-label">Email address</label>
                      <input type="email" id="emailLogin" class="form-control" id="loginEmail" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                      <label for="loginPassword" class="form-label">Password</label>
                      <input type="password" class="form-control" id="passwordLogin" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <div class="text-center mt-3">
                      <a type="button" class="btn btn-outline-secondary w-100" href="{{ route('google.login') }}">
                        <i class="bi bi-google"></i> Login with Google
                    </a>
                    </div>
                  </form>
                </div>

                <!-- Signup Tab -->
                <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                    <form id="register-form">
                        <div class="mb-3">
                            <label for="signUpName" class="form-label">Name</label>
                            <input type="text" id="signUpName" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpEmail" class="form-label">Email address</label>
                            <input type="email" id="signUpEmail" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpPassword" class="form-label">Password</label>
                            <input type="password" id="signUpPassword" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpPasswordConfirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="signUpPasswordConfirmation" class="form-control" placeholder="Confirm your password" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Signup</button>
                        <div class="text-center mt-3">
                            <button type="button" class="btn btn-outline-secondary w-100">
                                <i class="bi bi-google"></i> Signup with Google
                            </button>
                        </div>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--==============================
    All Js File
============================== -->
   <!-- Jquery -->
<script src="{{ asset('information/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>

<!-- Swiper Js -->
<script src="{{ asset('information/assets/js/swiper-bundle.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('information/assets/js/bootstrap.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('information/assets/js/jquery.magnific-popup.min.js') }}"></script>

<!-- Counter Up -->
<script src="{{ asset('information/assets/js/jquery.counterup.min.js') }}"></script>

<!-- Range Slider -->
<script src="{{ asset('information/assets/js/jquery-ui.min.js') }}"></script>

<!-- imagesloaded -->
<script src="{{ asset('information/assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!-- isotope -->
<script src="{{ asset('information/assets/js/isotope.pkgd.min.js') }}"></script>

<!-- Nice Select -->
<script src="{{ asset('information/assets/js/nice-select.min.js') }}"></script>

<!-- Main Js File -->
<script src="{{ asset('information/assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const email = document.getElementById('emailLogin').value;
    const password = document.getElementById('passwordLogin').value;

    fetch('/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ email, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.token) {
            localStorage.setItem('auth_token', data.token);
            alert('Login successful!');
            window.location.href = '/my-profile'; // Redirect to dashboard
        } else {
            alert('Login failed');
        }
    });
});

document.getElementById('register-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const name = document.getElementById('signUpName').value;
    const email = document.getElementById('signUpEmail').value;
    const password = document.getElementById('signUpPassword').value;
    const passwordConfirmation = document.getElementById('signUpPasswordConfirmation').value;

    // Check if passwords match
    if (password !== passwordConfirmation) {
        alert("Passwords do not match");
        return;
    }

    // Send POST request to register API
    fetch('/register', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({ name, email, password })
})
.then(response => {
    if (!response.ok) {
        return response.text().then(errorHtml => {
            console.error('Error Response HTML:', errorHtml.error); // Log error HTML for debugging
            showErrorNotification(errorHtml.error);
            throw new Error('Registration failed: ' + errorHtml.error); // Throw error with HTML content
        });
    }
    return response.json();
})
.then(data => {
    if (data.token) {
        localStorage.setItem('auth_token', data.token);
        alert('Registration successful!');
        window.location.href = '/my-profile';
    } else {
        alert('Registration failed');
    }
})
.catch(error => {
    console.error('Error:', error);
    alert(error.message);
});

});


function showErrorNotification(message) {
    // Set the error message
    document.getElementById('error-message').textContent = message;

    // Show the alert by changing its display property
    const errorNotification = document.getElementById('error-notification');
    errorNotification.style.display = 'block';

    // Optionally, hide the alert after a few seconds
    setTimeout(function() {
        errorNotification.style.display = 'none';
    }, 5000); // Hide after 5 seconds
}

showErrorNotification('Something went wrong! Please try again.');

document.addEventListener("DOMContentLoaded", function () {
    // Check if the modal has already been shown
    if (localStorage.getItem('modalShown') !== 'true') {
        const authModal = new bootstrap.Modal(document.getElementById("authModal"));
            authModal.show();
            localStorage.setItem('modalShown', 'true');
    }

    // Optional: Attach to a button click (for opening the modal manually)
    document.getElementById("openModalButton")?.addEventListener("click", function () {
        const authModal = new bootstrap.Modal(document.getElementById("authModal"));
        authModal.show();
    });
});
function countCartItems() {
    const cartData = localStorage.getItem('cart');

    if (cartData) {
        try {
            const cartArray = JSON.parse(cartData);
            return cartArray.length; // Return the number of items in the cart
        } catch (error) {
            console.error('Invalid JSON in cart data:', error);
            return 0;
        }
    }
    return 0; // Return 0 if cart data is not available
}

// Update the cart count in the DOM
function updateCartCount() {
    const countCart = document.getElementById('cartCount');
    if (countCart) {
        countCart.innerHTML = countCartItems(); // Update the cart count dynamically
    }
}

// Listen for changes to the cart data in localStorage
window.addEventListener('storage', function () {
    updateCartCount();
});

// Call updateCartCount on page load to initialize the cart count
document.addEventListener('DOMContentLoaded', function () {
    updateCartCount();
});
function openOrders() {
    window.location.href = '/checkout'; // Navigate to the checkout page
}

</script>
</body>

</html>
