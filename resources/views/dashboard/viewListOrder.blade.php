@extends('dashboard.layouts')

@section('dashboard')

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <li class="label">Main</li>
                <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary">6</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="index-v1.html">Dashboard 2</a></li>
                        <li><a href="index-school.html">Dashboard 3</a></li>
                        <li><a href="index-ecommerce.html">Dashboard 5</a></li><li><a href="index-ecommerce-v2.html">Dashboard 6</a></li>
                    </ul>
                </li>
                <li class="label">School</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-pencil-alt"></i>Management <span class="badge badge-primary">28</span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="school-student.html">Student</a></li>
                        <li><a href="school-student-profile.html">Student Profile</a></li>
                        <li><a href="school-student-details.html">Student Detail</a></li>
                        <li><a href="school-hostel-room.html">Hostel</a></li>
                        <li><a href="school-all-student-table.html">Students Table</a></li>
                        <li><a href="school-student-search.html">search</a></li>
                        <li><a href="school-teacher-information.html">Teacher Info</a></li>
                        <li><a href="school-student-profile.html">Teacher Details</a></li>
                        <li><a href="school-all-teacher-table.html">Teacher Table</a></li>
                        <li><a href="school-class-information.html">Class Info</a></li>
                        <li><a href="school-subject.html">Subject</a></li>
                        <li><a href="school-class-routine.html">Routine</a></li>
                        <li><a href="school-attendace-sheet.html">Attendance</a></li>
                        <li><a href="school-grade-list.html">Exam Result</a></li>
                        <li><a href="school-new-exam.html">Exam Schedule</a></li>
                        <li><a href="school-account-setting.html">Setting</a></li>
                        <li><a href="school-student-fees-collection.html">Collection Fees</a></li>
                        <li><a href="school-payment-information.html">Payment info</a></li>
                        <li><a href="school-add-new-expenses.html">New Expense</a></li>
                        <li><a href="school-all-expense-list.html">Expense</a></li>
                        <li><a href="school-attendace-sheet.html">Attendance</a></li>
                        <li><a href="school-book-information.html">Book Info</a></li>
                        <li><a href="school-book-list.html">Book List</a></li>
                        <li><a href="school-all-parents-list.html">Parents List</a></li>
                        <li><a href="school-parents.html">Parents</a></li>
                        <li><a href="school-form.html">Form</a></li>
                        <li><a href="school-notice.html">Notice</a></li>
                        <li><a href="school-transport.html">Transport</a></li>
                    </ul>
                </li>

                <li class="label">Restaurant</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant<span class="badge badge-primary">7</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="restaurant-menu-one.html">Menu One</a></li>
                        <li><a href="restaurant-menu-two.html">Menu Two</a></li>
                        <li><a href="restaurant-menu-three.html">Menu Three</a></li>
                        <li><a href="restaurant-favourite-list.html">Favourite</a></li>
                        <li><a href="restaurant-order-list.html">Order List</a></li>
                        <li><a href="restaurant-booking.html">Booking</a></li>
                        <li><a href="restaurant-upload-menu.html">Upload Menu</a></li>
                    </ul>
                </li>

                <li class="label">Apps</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  Charts  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="chart-flot.html">Flot</a></li>
                        <li><a href="chart-morris.html">Morris</a></li>
                        <li><a href="chartjs.html">Chartjs</a></li>
                        <li><a href="chartist.html">Chartist</a></li>
                        <li><a href="chart-peity.html">Peity</a></li>
                        <li><a href="chart-sparkline.html">Sparkle</a></li>
                        <li><a href="chart-knob.html">Knob</a></li>
                    </ul>
                </li>
                <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
                <li><a href="app-profile.html"><i class="ti-user"></i> Profile</a></li>
                <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> Widget</a></li>
                <li class="label">Features</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> UI Elements <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="ui-accordion.html">Accordion</a></li>
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-badges.html">Badges</a></li>
                        <li><a href="ui-button.html">Button</a></li>
                        <li><a href="ui-dropdown.html">Dropdown</a></li>
                        <li><a href="ui-Images.html">Images</a></li>
                        <li><a href="ui-list-group.html">List Group</a></li>
                        <li><a href="ui-panels.html">Panels</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-tab.html">Tab</a></li>
                        <li><a href="ui-wells.html">Wells</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i> Components <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="uc-calendar.html">Calendar</a></li>
                        <li><a href="uc-carousel.html">Carousel</a></li>
                        <li><a href="uc-weather.html">Weather</a></li>
                        <li><a href="uc-datamap.html">Datamap</a></li>
                        <li><a href="uc-todo-list.html">To do</a></li>
                        <li><a href="uc-scrollable.html">Scrollable</a></li>
                        <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="uc-toastr.html">Toastr</a></li>
                        <li><a href="uc-range-slider-basic.html">Basic Range Slider</a></li>
                        <li><a href="uc-range-slider-advance.html">Advance Range Slider</a></li>
                        <li><a href="uc-nestable.html">Nestable</a></li>
                        <li><a href="uc-portlets.html">Portlets</a></li>
                        <li><a href="uc-rating-bar-rating.html">Bar Rating</a></li>
                        <li><a href="uc-rating-jRate.html">jRate</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="table-basic.html">Basic</a></li>
                        <li><a href="table-data.html">Datatable</a></li>
                        <li><a href="table-export.html">Datatable Export</a></li>
                        <li><a href="table-row-select.html">Datatable Row Select</a></li>
                        <li><a href="table-jsgrid.html">Editable </a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-heart"></i> Icons <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="font-themify.html">Themify</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-map"></i> Maps <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="gmaps.html">Basic</a></li>
                        <li><a href="vector-map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="label">Form</li>
                <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> Basic Form </a></li>
                <li class="label">Miscellaneous</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-files"></i> Invoice <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="invoice.html">Basic</a></li>
                        <li><a href="invoice-editable.html">Editable</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-reset-password.html">Forgot password</a></li>
                    </ul>
                </li>
                <li><a href="../documentation/index.html"><i class="ti-file"></i> Documentation</a></li>
                <li><a><i class="ti-close"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->

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
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">5 members joined today </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">likes a photo of you</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
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
            <li class="header-icon dib"><i class="ti-email"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">2 New Messages</span>
                        <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li class="notification-unread">
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>

                            <li class="notification-unread">
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>

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
                            <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                            <li><a href="#"><i class="ti-wallet"></i> <span>My Balance</span></a></li>
                            <li><a href="#"><i class="ti-write"></i> <span>My Task</span></a></li>
                            <li><a href="#"><i class="ti-calendar"></i> <span>My Calender</span></a></li>
                            <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                            <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                            <li><a href="#"><i class="ti-help-alt"></i> <span>Help</span></a></li>
                            <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
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
                            <h1>Student Profile</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">App-Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <div id="main-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three">
                                <div class="stat-icon bg-primary">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">123</div>
                                    <div class="stat-text">New User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three">
                                <div class="stat-icon bg-success">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">123</div>
                                    <div class="stat-text">New User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three">
                                <div class="stat-icon bg-warning">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">123</div>
                                    <div class="stat-text">New User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three">
                                <div class="stat-icon bg-danger">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">123</div>
                                    <div class="stat-text">New User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Student Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="user-profile m-t-15">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="user-photo m-b-30">
                                                <img class="img-responsive" src="assets/images/user-profile.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="user-profile-name">Mr. Ajay</div>
                                            <div class="custom-tab user-profile-tab">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="1">
                                                        <div class="contact-information">
                                                            <div class="phone-content">
                                                                <span class="contact-title">Name:</span>
                                                                <span class="phone-number">Mr. Ajay</span>
                                                            </div>
                                                            <div class="website-content">
                                                                <span class="contact-title">Class:</span>
                                                                <span class="contact-website">3</span>
                                                            </div>
                                                            <div class="skype-content">
                                                                <span class="contact-title">Section:</span>
                                                                <span class="contact-skype">A</span>
                                                            </div>
                                                            <div class="address-content">
                                                                <span class="contact-title">Roll:</span>
                                                                <span class="mail-address">#2909</span>
                                                            </div>
                                                            <div class="gender-content">
                                                                <span class="contact-title">Gender:</span>
                                                                <span class="gender">Male</span>
                                                            </div>
                                                            <div class="phone-content">
                                                                <span class="contact-title">Father Name:</span>
                                                                <span class="phone-number">----</span>
                                                            </div>
                                                            <div class="phone-content">
                                                                <span class="contact-title">Mother Name:</span>
                                                                <span class="phone-number">----</span>
                                                            </div>
                                                            <div class="birthday-content">
                                                                <span class="contact-title">Date of Birth:</span>
                                                                <span class="birth-date">January 31, 1990 </span>
                                                            </div>
                                                            <div class="phone-content">
                                                                <span class="contact-title">Father Occupation:</span>
                                                                <span class="phone-number">Banker</span>
                                                            </div>
                                                            <div class="phone-content">
                                                                <span class="contact-title">Religion:</span>
                                                                <span class="phone-number">----</span>
                                                            </div>
                                                            <div class="email-content">
                                                                <span class="contact-title">Email:</span>
                                                                <span class="contact-email">Support@example.com</span>
                                                            </div>
                                                            <div class="email-content">
                                                                <span class="contact-title">Admission Date:</span>
                                                                <span class="contact-email">10/05/2017</span>
                                                            </div>
                                                            <div class="address-content">
                                                                <span class="contact-title">Address:</span>
                                                                <span class="mail-address">ST-Canada</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card alert">
                                    <div class="card-header">
                                        <h4>Home Work </h4>
                                        <div class="card-header-right-icon">
                                            <ul>
                                                <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                                <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul>
                                                    <li><label><input type="checkbox"><i></i><span>get up</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>stand up</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>do something else</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>do something else</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>stand up</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox" checked><i></i><span>do something else</span><a href='#' class="ti-close"></a></label></li>
                                                    <li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#' class="ti-close"></a></label></li>
                                                </ul>
                                            </div>
                                            <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Recent Project </h4>
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
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Kolor Tea Shirt For Man</td>
                                                <td><span class="badge badge-primary">Ongoing</span></td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>
                                            <tr>
                                                <td>Kolor Tea Shirt For Women</td>
                                                <td><span class="badge badge-success">Complete</span></td>
                                                <td>January 30</td>
                                                <td class="color-success">$55.32</td>
                                            </tr>
                                            <tr>
                                                <td>Blue Backpack For Baby</td>
                                                <td><span class="badge badge-danger">Rejected</span></td>
                                                <td>January 25</td>
                                                <td class="color-danger">$14.85</td>
                                            </tr>
                                            <tr>
                                                <td>Kolor Tea Shirt For Man</td>
                                                <td><span class="badge badge-primary">Ongoing</span></td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>
                                            <tr>
                                                <td>Kolor Tea Shirt For Women</td>
                                                <td><span class="badge badge-success">Complete</span></td>
                                                <td>January 30</td>
                                                <td class="color-success">$55.32</td>
                                            </tr>
                                            <tr>
                                                <td>Blue Backpack For Baby</td>
                                                <td><span class="badge badge-danger">Rejected</span></td>
                                                <td>January 25</td>
                                                <td class="color-danger">$14.85</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Recent Comments </h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="recent-comment m-t-20">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="assets/images/avatar/1.jpg" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mr. Ajay</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                        <div class="comment-action">
                                            <div class="badge badge-success">Approved</div>
                                            <span class="m-l-10">
                                                <a href="#"><i class="ti-check color-success"></i></a>
                                                <a href="#"><i class="ti-close color-danger"></i></a>
                                                <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                            </span>
                                        </div>
                                        <p class="comment-date">October 21, 2017</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="assets/images/avatar/2.jpg" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mr. Ajay</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                        <div class="comment-action">
                                            <div class="badge badge-warning">Pending</div>
                                            <span class="m-l-10">
                                                <a href="#"><i class="ti-check color-success"></i></a>
                                                <a href="#"><i class="ti-close color-danger"></i></a>
                                                <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                            </span>
                                        </div>
                                        <p class="comment-date">October 21, 2017</p>
                                    </div>
                                </div>
                                <div class="media no-border">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="assets/images/avatar/3.jpg" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mr.  Ajay</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                        <div class="comment-action">
                                            <div class="badge badge-danger">Rejected</div>
                                            <span class="m-l-10">
                                                <a href="#"><i class="ti-check color-success"></i></a>
                                                <a href="#"><i class="ti-close color-danger"></i></a>
                                                <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                            </span>
                                        </div>
                                        <div class="comment-date">October 21, 2017</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
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
