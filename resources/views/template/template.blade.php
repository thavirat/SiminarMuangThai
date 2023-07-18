<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8" />
    <title>{{isset($menu) ? $menu.' | ':''}}Siminar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    @yield('css_top')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Theme Config Js -->
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <!-- App css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    @yield('css_bottom')
    <script>
        var urlGb = '{{url('')}}';
    </script>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center">

                    <!-- Brand Logo Light -->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-light.png')}}" alt="logo">
                        </span>
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="small logo">
                        </span>
                    </a>

                    <!-- Brand Logo Dark -->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="dark logo">
                        </span>
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="small logo">
                        </span>
                    </a>

                    <ul class="topbar-menu d-flex align-items-center gap-1 p-0">
                        <li class="waves-effect waves-light">
                            <button class="button-toggle-menu">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Horizontal Menu Toggle Button -->
                            <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </button>
                        </li>

                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light " data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                                <span class="pe-1">Create New</span>
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-briefcase me-1"></i>
                                    <span>New Projects</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-user me-1"></i>
                                    <span>Create Users</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-bar-chart-line- me-1"></i>
                                    <span>Revenue Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-headphones me-1"></i>
                                    <span>Help &amp; Support</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown dropdown-mega d-none d-xl-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pe-1">Mega Menu</span>
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-8">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="widgets.html">Widgets</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Nestable List</a>
                                                    </li>
                                                    <li>
                                                        <a href="extended-range-slider.html">Range Sliders</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Masonry Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Sweet Alerts</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Treeview Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Tour Page</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">Applications</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">eCommerce Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">CRM Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="email-inbox.html">Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="app-calendar.html">Calendar</a>
                                                    </li>
                                                    <li>
                                                        <a href="pages-contact-us.html">Team Contacts</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Task Board</a>
                                                    </li>
                                                    <li>
                                                        <a href="email-read-mail.html">Email Templates</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">Extra Pages</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Left Sidebar with User</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Menu Collapsed</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Small Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">New Header Style</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Search Result</a>
                                                    </li>
                                                    <li>
                                                        <a href="pages-coming-soon.html">Comming Soon</a>
                                                    </li>
                                                    <li>
                                                        <a href="pages-maintenance.html">Maintenance</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h3 class="text-dark">Special Discount Sale!</h3>
                                            <h4>Save up to 70% off.</h4>
                                            <button class="btn btn-primary rounded-pill mt-3">Download Now</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-1">
                    <li class="d-none d-lg-block">
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control dropdown-toggle rounded-pill" placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                </div>
                            </form>

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow text-uppercase">Recent Searches</h6>
                                </div>

                                <div class="g-3 px-2 pb-2">
                                    <a href="#!" class="btn btn-sm rounded-pill btn-light">profile <i class="fe-search ms-1"></i></a>
                                    <a href="#!" class="btn btn-sm rounded-pill btn-light">yarn <i class="fe-search ms-1"></i></a>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-home me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-aperture me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="{{asset('assets/images/users/user-2.jpg')}}" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="{{asset('assets/images/users/user-5.jpg')}}" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                            <i class="ri-moon-line font-22"></i>
                        </div>
                    </li>

                    <li class="d-none d-md-inline-block">
                        <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                            <i class="fe-maximize font-22"></i>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('assets/images/flags/us.jpg')}}" alt="user-image" height="16">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{asset('assets/images/flags/germany.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{asset('assets/images/flags/italy.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{asset('assets/images/flags/spain.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{asset('assets/images/flags/russia.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell font-22"></i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3" style="max-height: 300px;" data-simplebar>

                                <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                <!-- item-->

                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">New user registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="{{asset('assets/images/users/avatar-2.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="{{asset('assets/images/users/avatar-4.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="text-center">
                                    <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="dropdown d-none d-sm-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-apps-2-line font-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('assets/images/brands/slack.png')}}" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('assets/images/brands/github.png')}}" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('assets/images/brands/dribbble.png')}}" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('assets/images/brands/bitbucket.png')}}" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('assets/images/brands/dropbox.png')}}" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('assets/images/brands/g-suite.png')}}" alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>
                                </div> <!-- end row-->
                            </div>

                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-image" width="32" class="rounded-circle">
                            </span>
                            <span class="d-lg-flex flex-column gap-1 d-none">
                                <span class="my-0">Richard
                                    <span class="mdi mdi-chevron-down"></span>
                                </span>

                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-account-edit me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-lifebuoy me-1"></i>
                                <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-lock-outline me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="{{url('logout')}}" class="dropdown-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                    <li class="d-none d-sm-inline-block pe-2">
                        <a class="nav-link waves-effect waves-light" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                            <i class="fe-settings font-22"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="index.html" class="logo logo-light">
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo-light.png')}}" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm.png')}}" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm.png')}}" alt="small logo">
                </span>
            </a>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Navigation</li>

                    <li class="side-nav-item">
                        <a href="index.html" class="side-nav-link">
                            <i class="fe-airplay"></i>
                            <span> Dashboard </span>
                            <span class="badge bg-success float-end">7</span>
                        </a>
                    </li>

                    <li class="side-nav-title">Apps</li>

                    <li class="side-nav-item">
                        <a href="app-calendar.html" class="side-nav-link">
                            <i class="fe-calendar"></i>
                            <span> Calendar </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                            <i class="fe-mail"></i>
                            <span> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="email-inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="email-read-mail.html">Read Email</a>
                                </li>
                                <li>
                                    <a href="email-compose.html">Compose Email</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{url('users')}}" class="side-nav-link">
                            <i class="fe-users"></i>
                            <span> Users </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{url('Customers')}}" class="side-nav-link">
                            <i class="fe-users"></i>
                            <span> Customers </span>
                        </a>
                    </li>

                    <li class="side-nav-title">Custom</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarAuth" aria-expanded="false" aria-controls="sidebarAuth" class="side-nav-link">
                            <i class="fe-shield"></i>
                            <span> Auth Page </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarAuth">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="auth-login.html">Log In</a>
                                </li>
                                <li>
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li>
                                    <a href="auth-recoverpw.html">Recover Password</a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="auth-logout.html">Log Out</a>
                                </li>
                                <li>
                                    <a href="auth-conform-mail.html">Conform Mail</a>
                                </li>
                                <li>
                                    <a href="auth-error-404.html">Error 404</a>
                                </li>
                                <li>
                                    <a href="auth-error-404-alt.html">Error 404-alt</a>
                                </li>
                                <li>
                                    <a href="auth-error-500.html">Error 500</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarExtraPage" aria-expanded="false" aria-controls="sidebarExtraPage" class="side-nav-link">
                            <i class="fe-book-open"></i>
                            <span> Extra Page </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarExtraPage">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="pages-starter.html">Starter</a>
                                </li>
                                <li>
                                    <a href="pages-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="pages-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="pages-about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="pages-contact-us.html">Contact Us</a>
                                </li>
                                <li>
                                    <a href="pages-faqs.html">FAQs</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-maintenance.html">Maintenance</a>
                                </li>
                                <li>
                                    <a href="pages-coming-soon.html">Comming Soon</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarLayout" aria-expanded="false" aria-controls="sidebarLayout" class="side-nav-link">
                            <i class="fe-layout"></i>
                            <span> Layouts </span>
                            <span class="badge bg-soft-danger text-danger float-end">New</span>
                        </a>
                        <div class="collapse" id="sidebarLayout">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="layout-horizontal.html" target="_blank">Horizontal</a>
                                </li>
                                <li>
                                    <a href="layout-detached.html" target="_blank">Detached</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title">Components</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarUIKit" aria-expanded="false" aria-controls="sidebarUIKit" class="side-nav-link">
                            <i class="fe-briefcase"></i>
                            <span> UI Kit </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarUIKit">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="ui-accordions.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="ui-avatars.html">Avatars</a>
                                </li>
                                <li>
                                    <a href="ui-badges.html">Badges</a>
                                </li>
                                <li>
                                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="ui-embed-video.html">Embed Video</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-tost.html">Tosts</a>
                                </li>
                                <li>
                                    <a href="ui-offcanvas.html">Offcanvas</a>
                                </li>
                                <li>
                                    <a href="ui-placeholders.html">Placeholders</a>
                                </li>
                                <li>
                                    <a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="ui-popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="ui-tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                            <i class="fe-target"></i>
                            <span> Extended UI </span>
                            <span class="badge bg-info float-end">Hot</span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="extended-nestable.html">Nestable List</a>
                                </li>
                                <li>
                                    <a href="extended-range-slider.html">Range Slider</a>
                                </li>
                                <li>
                                    <a href="extended-tour.html">Tour Page</a>
                                </li>
                                <li>
                                    <a href="extended-scrollbar.html">Scrollbar</a>
                                </li>
                                <li>
                                    <a href="extended-scrollspy.html">Scrollspy</a>
                                </li>
                                <li>
                                    <a href="extended-sweet-alert.html">Sweet Alert</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="widgets.html" class="side-nav-link">
                            <i class="fe-gift"></i>
                            <span> Widgets </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                            <i class="fe-box"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="icons-two-tone.html">Two Tone</a>
                                </li>
                                <li>
                                    <a href="icons-colored.html">Colored</a>
                                </li>
                                <li>
                                    <a href="icons-feather.html">Feather</a>
                                </li>
                                <li>
                                    <a href="icons-mdi.html">Material Design</a>
                                </li>
                                <li>
                                    <a href="icons-dripicons.html">Dripicons</a>
                                </li>
                                <li>
                                    <a href="icons-font-awesome.html">Font Awesome 5</a>
                                </li>
                                <li>
                                    <a href="icons-remixicons.html">Remix Icons</a>
                                </li>
                                <li>
                                    <a href="icons-unicons.html">Unicons</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                            <i class="fe-bar-chart-line-"></i>
                            <span> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="chart-apex.html">Apex Charts</a>
                                </li>
                                <li>
                                    <a href="chart-flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="chart-morris.html">Morris Charts</a>
                                </li>
                                <li>
                                    <a href="chart-chartjs.html">Chartjs Charts</a>
                                </li>
                                <li>
                                    <a href="chart-peity.html">Peity Charts</a>
                                </li>
                                <li>
                                    <a href="chart-chartist.html">Chartist Charts</a>
                                </li>
                                <li>
                                    <a href="chart-c3.html">C3 Charts</a>
                                </li>
                                <li>
                                    <a href="chart-sparklines.html">Sparklines</a>
                                </li>
                                <li>
                                    <a href="chart-jquery-knob.html">Jquery Knob Charts</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="fe-disc"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="form-elements.html">Basic Elements</a>
                                </li>
                                <li>
                                    <a href="form-advanced.html">Form Advanced</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="form-pickers.html">Pickers</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="form-masks.html">Masks</a>
                                </li>
                                <li>
                                    <a href="form-fileuploads.html">File Uploads</a>
                                </li>
                                <li>
                                    <a href="form-editors.html">Editors</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                            <i class="fe-grid"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatables.html">Data Tables</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Editable Tables</a>
                                </li>
                                <li>
                                    <a href="tables-responsive.html">Responsive Tables</a>
                                </li>
                                <li>
                                    <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                            <i class="fe-map"></i>
                            <span> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a href="maps-mapael.html">Mapael Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                            <i class="fe-folder-plus"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultiLevel">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                        <span> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarSecondLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                        <span> Third Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarThirdLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li class="side-nav-item">
                                                <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                    <span> Item 2 </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarFourthLevel">
                                                    <ul class="side-nav-forth-level">
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            @yield('body')

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Codefox - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end settings-offcanvas" tabindex="-1" id="theme-settings-offcanvas">

        <h6 class="fw-semibold px-3 m-0 py-2 font-16 bg-light">
            <span class="d-block py-2">Theme Settings</span>
        </h6>

        <div class="offcanvas-body">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
            </div>

            <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h5>

            <div class="colorscheme-cardradio">
                <div class="d-flex flex-column gap-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light" value="light">
                        <label class="form-check-label" for="layout-color-light">Light</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark" value="dark">
                        <label class="form-check-label" for="layout-color-dark">Dark</label>
                    </div>
                </div>
            </div>

            <div id="layout-width">
                <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Layout Mode</h5>

                <div class="d-flex flex-column gap-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                        <label class="form-check-label" for="layout-mode-fluid">Fluid</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                        <label class="form-check-label" for="layout-mode-boxed">Boxed</label>
                    </div>

                    <div id="layout-detached">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="data-layout-mode" id="data-layout-detached" value="detached">
                            <label class="form-check-label" for="data-layout-detached">Detached</label>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar Color</h5>

            <div class="d-flex flex-column gap-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="data-topbar-color" id="topbar-color-brand" value="brand">
                    <label class="form-check-label" for="topbar-color-brand">Brand</label>
                </div>
            </div>

            <div>
                <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Menu Color</h5>

                <div class="d-flex flex-column gap-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-light" value="light">
                        <label class="form-check-label" for="leftbar-color-light">Light</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-dark" value="dark">
                        <label class="form-check-label" for="leftbar-color-dark">Dark</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-brand" value="brand">
                        <label class="form-check-label" for="leftbar-color-brand">Brand</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-menu-color" id="leftbar-color-gradient" value="gradient">
                        <label class="form-check-label" for="leftbar-color-gradient">Gradient</label>
                    </div>
                </div>
            </div>

            <div id="layout-position">
                <h5 class="my-3 font-16 fw-bold">Layout Position</h5>

                <div class="d-flex flex-column gap-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-layout-position" id="layout-position-fixed" value="fixed">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>

            <div id="sidebar-size">
                <h5 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar Size</h5>

                <div class="d-flex flex-column gap-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-default" value="default">
                        <label class="form-check-label" for="leftbar-size-default">Default</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                        <label class="form-check-label" for="leftbar-size-compact">Compact</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                        <label class="form-check-label" for="leftbar-size-small">Condensed</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-full" value="full">
                        <label class="form-check-label" for="leftbar-size-full">Full Layout</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="data-sidenav-size" id="leftbar-size-fullscreen" value="fullscreen">
                        <label class="form-check-label" for="leftbar-size-fullscreen">Fullscreen Layout</label>
                    </div>
                </div>
            </div>
        </div>


        <div class="offcanvas-footer border-top px-3 py-2 text-center">
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-light w-50" id="reset-layout">Reset</button>
                <a href="https://wrapbootstrap.com/theme/codefox-admin-dashboard-template-WB0X27670?ref=coderthemes" class="btn btn-danger w-50" target="_blank"><i class="mdi mdi-basket me-1"></i> Buy</a>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>

function loadingButton(btn){
    var org_text = btn.data('loading');
    var current_text = btn.html();
    if(org_text===undefined){
        org_text = '<i class="fa fa-spinner fa-spin"></i>';
    }
    btn.attr('disabled','disabled');
    btn.html(org_text);
    btn.data('loading' , current_text);
}

function resetButton(btn){
    var org_text = btn.data('loading');
    var current_text = btn.html();
    if(!org_text){
        org_text = '<i class="fa fa-refresh fa-spin"></i>';
    }
    btn.removeAttr('disabled','disabled');
    btn.html(org_text);
    btn.data('loading' , current_text);
}
</script>
    @yield('js')

</body>

</html>
