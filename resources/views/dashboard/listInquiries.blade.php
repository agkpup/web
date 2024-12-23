@extends('dashboard.layouts')
@section('dashboard')

<div class="header">
    <div class="pull-left">
        <div class="logo"><a href="index.html"><span>CatchyTat Admin</span></a></div>
        <div class="hamburger sidebar-toggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>

    <div class="pull-right p-r-15">
        <ul>
            <li class="header-icon dib"><a href="#search"><i class="ti-search"></i></a></li>
            <li class="header-icon dib"><i class="ti-bell"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">Recent Notifications</span>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Er. Abhay</div>
                                        <div class="notification-text">Graduated from Panjab University</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib"><i class="ti-email"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">2 New Messages</span>
                        <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar"> Ajay <i class="ti-angle-down f-s-10"></i></span>
                <div class="drop-down dropdown-profile">
                    <div class="dropdown-content-heading">
                        <span class="text-left">Upgrade Now</span>
                        <p class="trial-day">30 Days Trail</p>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>





<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Teacher Table</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <div id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="card-header pr">
                                <h4>All Teachers </h4>
                                <div class="search-action">
                                    <div class="search-type dib">
                                        <input class="form-control input-rounded" placeholder="#idtype here..." type="text">
                                    </div>
                                    <div class="search-type dib">
                                        <input class="form-control input-rounded" placeholder="Type Class..." type="text">
                                    </div>
                                    <div class="search-type dib">
                                        <input class="form-control input-rounded" placeholder="Subject" type="text">
                                    </div>
                                    <div class="search-type dib">
                                        <input class="form-control input-rounded text-uppercase" placeholder="search" type="text">
                                    </div>
                                </div>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                            <ul class="card-option-dropdown dropdown-menu">
                                                <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                            </ul>
                                        </li>
                                        <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th><label><input type="checkbox" value=""></label>ID</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Parents Name</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>Address</th>
                                                <th>Date Of Birth</th>
                                                <th>Mobile No</th>
                                                <th>E-mail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2901</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2902</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/avatar/1.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Willam Robert
                                                </td>
                                                <td>
                                                    Male</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Iran-1200
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2903</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/avatar/2.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    B
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2904</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2905</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/avatar/3.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Willam Robert
                                                </td>
                                                <td>
                                                    Male</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Iran-1200
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2906</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                   Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2907</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/avatar/1.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Willam Robert
                                                </td>
                                                <td>
                                                    Male</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Iran-1200
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2908</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                 Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2909</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/avatar/3.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Willam Robert
                                                </td>
                                                <td>
                                                    Male</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Iran-1200
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2910</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                   Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#29011</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/avatar/1.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Willam Robert
                                                </td>
                                                <td>
                                                    Male</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    B
                                                </td>
                                                <td>
                                                    Iran-1200
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                   Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2912</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2913</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    B
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2914</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2916</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    C
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2917</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    A
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                   Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2918</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    B
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                    Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label><input type="checkbox" value=""></label>#2919</td>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img src="assets/images/user-1.png" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    Richi Nazleo
                                                </td>
                                                <td>
                                                    Female</td>
                                                <td>
                                                    David Smith
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    C
                                                </td>
                                                <td>
                                                    Road#12,House#34,Canada
                                                </td>
                                                <td>
                                                    10/03/2013
                                                </td>
                                                <td>
                                                    +9746373
                                                </td>
                                                <td>
                                                   Support@example.com
                                                </td>
                                                <td>
                                                    <span><a href=""><i class="ti-eye color-default"></i></a> </span>
                                                    <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                    <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->

                </div>
                <!-- /# row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
@endsection
