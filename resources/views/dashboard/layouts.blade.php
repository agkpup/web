<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doorstep Laundry Service: Fast & Convenient Laundry at Your Doorstep</title>
    <meta name="description" content="Get your laundry picked up and delivered right to your doorstep with our fast, affordable, and eco-friendly laundry service. Convenient scheduling and quality care at your fingertips!">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('dashboard/assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/lib/unix.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li><a href="{{route('list-order')}}"><i class="ti-calendar"></i> Orders </a></li>
                    <li><a href="{{route('view-inquiries')}}"><i class="ti-email"></i>Inquiries</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    @yield('dashboard')

<!-- jquery vendor -->
<script src="{{ asset('dashboard/assets/js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
<!-- nano scroller -->
<script src="{{ asset('dashboard/assets/js/lib/menubar/sidebar.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/preloader/pace.min.js') }}"></script>
<!-- sidebar -->
<script src="{{ asset('dashboard/assets/js/lib/bootstrap.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('dashboard/assets/js/lib/mmc-common.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/mmc-chat.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/lib/nestable/jquery.nestable.js') }}"></script>
<!-- script init -->
<script src="{{ asset('dashboard/assets/js/lib/nestable/nestable.init.js') }}"></script>
<!-- script init -->
<script src="{{ asset('dashboard/assets/js/scripts.js') }}"></script>
<!-- script init -->

 <!-- scripit init-->

</body>

</html>
