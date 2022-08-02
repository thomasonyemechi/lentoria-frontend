@extends('layouts.admin')
@section('page_title')
    Admin Dashboard
@endsection

@section('page_content')








  <!-- Wrapper -->
    <div id="db-wrapper">
 <!-- navbar vertical -->
  <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="../../index.html">
            <img src="../../assets/images/brand/logo/logo-inverse.svg" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link  " href="#!" data-bs-toggle="collapse" data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                    <i class="nav-icon fe fe-home me-2"></i> Dashboard
                </a>
                <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link  active " href="admin-dashboard.html">
                                    Overview
                                </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item ">
                            <a class="nav-link " href="dashboard-analytics.html">
                                    Analytics

                                </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
                    <i class="nav-icon fe fe-book me-2"></i> Courses
                </a>
                <div id="navCourses"  class="collapse "  data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="admin-course-overview.html">
                                    All Courses
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-course-category.html">
                                    Courses Category
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-course-category-single.html">
                                    Category Single
                                </a>
                        </li>
                    </ul>
                </div>
            </li>
             <!-- Nav item -->
             <li class="nav-item">
                <a class="nav-link   collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
                    <i class="nav-icon fe fe-user me-2"></i> User
                </a>
                <div id="navProfile" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="admin-instructor.html">
                                    Instructor
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-students.html">Students</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Nav item -->
                <li class="nav-item ">
                    <a
                        class="nav-link   collapsed  "
                        href="#!"
                        data-bs-toggle="collapse"
                        data-bs-target="#navCMS"
                        aria-expanded="false"
                        aria-controls="navCMS"
                    >
                        <i class="nav-icon fe fe-book-open me-2"></i> CMS
                    </a>
                            <div id="navCMS" class="collapse  " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link   active  " href="admin-cms-overview.html">
                                    Overview
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="admin-cms-post.html">
                                    All Post
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="admin-cms-post-new.html">
                                    New Post
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="admin-cms-post-category.html">
                                    Category
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                                <i class="nav-icon fe fe-lock me-2"></i> Authentication
                            </a>
                            <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="../sign-in.html">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="../sign-up.html">Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../forget-password.html">
                                    Forget Password
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="notification-history.html">
                                    Notifications
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="../404-error.html"> 404 Error</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="nav-divider"></div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Apps</div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="chat-app.html">
                                <i class="nav-icon fe fe-message-square me-2"></i> Chat

                            </a>
                        </li>
                              <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link " href="task-kanban.html">
                <i class="nav-icon mdi mdi-trello me-2"></i>
                Task<span class="badge bg-warning ms-2">New</span>
            </a>
        </li>
                        <li class="nav-item">
                            <div class="nav-divider"></div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Components</div>
                        </li>
                         <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navTables" aria-expanded="false" aria-controls="navTables">
                                <i class="nav-icon fe fe-database me-2"></i> Tables<span class="badge bg-warning ms-2">New</span>
                            </a>
                            <div id="navTables" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="basic-table.html">
                                    Basic
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="datatables.html">
                                            Data Tables
                                </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="#!">
                                <i class="nav-icon fe fe-help-circle me-2"></i> Help Center
                                <span class="badge bg-success ms-2">Pro</span>
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navSiteSetting" aria-expanded="false" aria-controls="navSiteSetting">
                                <i class="nav-icon fe fe-settings me-2"></i> Site Setting
                            </a>
                            <div id="navSiteSetting" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-general.html">
                                    General
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-google.html">
                                    Google
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-social.html">
                                    Social
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-social-login.html">
                                    Social Login
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-payment.html">
                                    Payment
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-smpt.html">
                                    SMPT
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                <i class="nav-icon fe fe-corner-left-down me-2"></i> Menu Level
                            </a>
                            <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                    Two Level
                                </a>
                                        <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed  " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                                    Three Level
                                </a>
                                        <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                                NavItem 1
                                            </a>
                                                    <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#!">
                                                            NavChild Item 1
                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="nav-divider"></div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Documentation</div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="../../docs/index.html">
                                <i class="nav-icon fe fe-clipboard me-2"></i> Documentation
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="../../docs/changelog.html">
                                <i class="nav-icon fe fe-git-pull-request me-2"></i> Changelog
                                <span class="badge bg-primary ms-2">2.1.0</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Card -->
                    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                        <div class="card-body py-6">
                            <img src="../../assets/images/background/giftbox.png" alt="" />
                            <div class="mt-4">
                                <h5 class="text-white">Unlimited Access</h5>
                                <p class="text-white-50 fs-6">
                                    Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now
                                </p>
                                <a href="#!" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                            </div>
                        </div>
                    </div>
                </div>
</nav>
        <!-- Page Content -->
        <div id="page-content">
            <div class="header">
    <!-- navbar -->
    <nav class="navbar-default navbar navbar-expand-lg">
        <a id="nav-toggle" href="#">
            <i class="fe fe-menu"></i>
        </a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block">
            <!-- Form -->
            <form class="d-flex align-items-center">
                <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                <input type="search" class="form-control form-control-sm ps-6" placeholder="Search Entire Dashboard" />
            </form>
        </div>
        <!--Navbar nav -->
        <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
            <li class="dropdown stopevent">
                <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fe fe-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotification">
                    <div class=" ">
                        <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                            <span class="h4 mb-0">Notifications</span>
                            <a href="# " class="text-muted">
                                <span class="align-middle">
                                        <i class="fe fe-settings me-1"></i>
                                    </span>
                            </a>
                        </div>
                        <!-- List group -->
                        <ul class="list-group list-group-flush notification-list-scroll">
                            <li class="list-group-item bg-light">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                        <div class="d-flex">
                                            <img
                                                src="../../assets/images/avatar/avatar-1.jpg"
                                                alt=""
                                                class="avatar-md rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                <p class="mb-3">
                                                    Krisitn Watsan like your comment on course
                                                    Javascript Introduction!
                                                </p>
                                                <span class="fs-6 text-muted">
                                                    <span
                                                        ><span
                                                            class="fe fe-thumbs-up text-success me-1"
                                                        ></span
                                                        >2 hours ago,</span
                                                    >
                                                    <span class="ms-1">2:19 PM</span>
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a
                                            href="#"
                                            class="badge-dot bg-info"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"

                                            title="Mark as read"
                                        >
                                        </a>
                                        <div>
                                            <a
                                                href="#"
                                                class="bg-transparent"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"

                                                title="Remove"
                                            >
                                                <i class="fe fe-x text-muted"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                        <div class="d-flex">
                                            <img
                                                src="../../assets/images/avatar/avatar-2.jpg"
                                                alt=""
                                                class="avatar-md rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                <p class="mb-3">
                                                    Just launched a new Courses React for Beginner.
                                                </p>
                                                <span class="fs-6 text-muted">
                                                    <span
                                                        ><span
                                                            class="fe fe-thumbs-up text-success me-1"
                                                        ></span
                                                        >Oct 9,</span
                                                    >
                                                    <span class="ms-1">1:20 PM</span>
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a
                                            href="#"
                                            class="badge-dot bg-secondary"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"

                                            title="Mark as unread"
                                        >
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                        <div class="d-flex">
                                            <img
                                                src="../../assets/images/avatar/avatar-3.jpg"
                                                alt=""
                                                class="avatar-md rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                <p class="mb-3">
                                                    Krisitn Watsan like your comment on course
                                                    Javascript Introduction!
                                                </p>
                                                <span class="fs-6 text-muted">
                                                    <span
                                                        ><span
                                                            class="fe fe-thumbs-up text-info me-1"
                                                        ></span
                                                        >Oct 9,</span
                                                    >
                                                    <span class="ms-1">1:56 PM</span>
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a
                                            href="#"
                                            class="badge-dot bg-secondary"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"

                                            title="Mark as unread"
                                        >
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                        <div class="d-flex">
                                            <img
                                                src="../../assets/images/avatar/avatar-4.jpg"
                                                alt=""
                                                class="avatar-md rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                <p class="mb-3">
                                                    You earn new certificate for complete the Javascript
                                                    Beginner course.
                                                </p>
                                                <span class="fs-6 text-muted">
                                                    <span
                                                        ><span
                                                            class="fe fe-award text-warning me-1"
                                                        ></span
                                                        >Oct 9,</span
                                                    >
                                                    <span class="ms-1">1:56 PM</span>
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a
                                            href="#"
                                            class="badge-dot bg-secondary"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"

                                            title="Mark as unread"
                                        >
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="border-top px-3 pt-3 pb-0">
                            <a href="../notification-history.html" class="text-link fw-semi-bold">
                                    See all Notifications
                                </a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- List -->
            <li class="dropdown ms-2">
                <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                    <div class="dropdown-item">
                        <div class="d-flex">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                            </div>
                            <div class="ms-3 lh-1">
                                <h5 class="mb-1">Annette Black</h5>
                                <p class="mb-0 text-muted">annette@geeksui.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled">
                        <li class="dropdown-submenu dropstart-lg">
                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                <i class="fe fe-circle me-2"></i> Status
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-success me-2"></span> Online
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-secondary me-2"></span> Offline
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-warning me-2"></span> Away
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-danger me-2"></span> Busy
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../profile-edit.html">
                                <i class="fe fe-user me-2"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../student-subscriptions.html">
                                <i class="fe fe-star me-2"></i> Subscription
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fe fe-settings me-2"></i> Settings
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled">
                        <li>
                            <a class="dropdown-item" href="../../index.html">
                                <i class="fe fe-power me-2"></i> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
            <!-- Page Header -->
            <!-- Container fluid -->
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="border-bottom pb-4 mb-4 d-md-flex justify-content-between align-items-center">
                            <div class="mb-3 mb-md-0">
                                <h1 class="mb-0 h2 fw-bold">Dashboard</h1>
                            </div>
                            <div class="d-flex">
                                <div class="input-group me-3  ">
                                    <input class="form-control flatpickr" type="text" placeholder="Select Date" aria-describedby="basic-addon2">

                                        <span class="input-group-text text-muted" id="basic-addon2"><i class="fe fe-calendar"></i></span>

                                </div>
                                <a href="#" class="btn btn-primary">Setting</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="fs-6 text-uppercase fw-semi-bold">Sales</span>
                                    </div>
                                    <div>
                                        <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-1">
                                    $10,800
                                </h2>
                                <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+20.9$</span>
                                <span class="ms-1 fw-medium">Number of sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="fs-6 text-uppercase fw-semi-bold">Courses</span>
                                    </div>
                                    <div>
                                        <span class=" fe fe-book-open fs-3 text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-1">
                                    2,456
                                </h2>
                                <span class="text-danger fw-semi-bold">120+</span>
                                <span class="ms-1 fw-medium">Number of pending</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="fs-6 text-uppercase fw-semi-bold">Students</span>
                                    </div>
                                    <div>
                                        <span class=" fe fe-users fs-3 text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-1">
                                    1,22,456
                                </h2>
                                <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+1200</span>
                                <span class="ms-1 fw-medium">Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                    <div>
                                        <span class="fs-6 text-uppercase fw-semi-bold">Instructor</span>
                                    </div>
                                    <div>
                                        <span class=" fe fe-user-check fs-3 text-primary"></span>
                                    </div>
                                </div>
                                <h2 class="fw-bold mb-1">
                                    22,786
                                </h2>
                                <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+200</span>
                                <span class="ms-1 fw-medium">Instructor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card header -->
                            <div class="card-header align-items-center card-header-height d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Earnings</h4>
                                </div>
                                <div>
                                    <div class="dropdown dropstart">
                                        <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="courseDropdown1">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#"><i
                            class="fe fe-external-link dropdown-item-icon "></i>Export</a>
                                            <a class="dropdown-item" href="#"><i class="fe fe-mail dropdown-item-icon "></i>Email
                          Report</a>
                                            <a class="dropdown-item" href="#"><i
                            class="fe fe-download dropdown-item-icon "></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Earning chart -->
                                <div id="earning" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card header -->
                            <div class="card-header align-items-center card-header-height  d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Traffic</h4>
                                </div>
                                <div>
                                    <div class="dropdown dropstart">
                                        <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="courseDropdown2">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#"><i
                            class="fe fe-external-link dropdown-item-icon "></i>Export</a>
                                            <a class="dropdown-item" href="#"><i class="fe fe-mail dropdown-item-icon "></i>Email
                          Report</a>
                                            <a class="dropdown-item" href="#"><i
                            class="fe fe-download dropdown-item-icon "></i>Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <div id="traffic" class="apex-charts d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center
                              justify-content-between card-header-height">
                                <h4 class="mb-0">Popular Instructor</h4>
                                <a href="#" class="btn btn-outline-white btn-sm">View all</a>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Rob Percival</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">42</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">1,10,124</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">32,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown7"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-2.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Jose Portilla</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">12</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">21,567</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">22,000
                            </span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown8"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-away">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-3.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Eleanor Pena</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">32</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">11,604</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">12,230
                            </span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown9"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-info">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">March Delson</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">23</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">6,304</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">56,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown10"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 ">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-busy">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Sina Ray</h4>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">14</span>Courses</span>
                                                <span class="me-2 fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">8,000</span>Students</span>
                                                <span class="fs-6">
                            <span class="text-dark  me-1 fw-semi-bold">33,000</span> Reviews
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown11"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center
                              justify-content-between card-header-height">
                                <h4 class="mb-0">Recent Courses</h4>
                                <a href="#" class="btn btn-outline-white btn-sm">View all</a>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group flush -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0">
                                        <div class="row">
                                            <!-- Col -->
                                            <div class="col-auto">
                                                <a href="#">
                                                    <img src="../../assets/images/course/course-laravel.jpg" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <!-- Col -->
                                            <div class="col ps-0">
                                                <a href="#">
                                                    <h5 class="text-primary-hover">
                                                        Revolutionize how you build the web...
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <span class="fs-6">Brooklyn Simmons</span>
                                                </div>
                                            </div>
                                            <!-- Col auto -->
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown3"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#"><img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="#">
                                                    <h5 class="text-primary-hover">
                                                        Guide to Static Sites with Gatsby.js
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-8.jpg" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <span class="fs-6">Jenny Wilson</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown4"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#">
                                                    <img src="../../assets/images/course/course-javascript.jpg" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="#">
                                                    <h5 class="text-primary-hover">The Modern JavaScript Courses
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <span class="fs-6">Guy Hawkins</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown5"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="#">
                                                    <img src="../../assets/images/course/course-wordpress.jpg" alt="" class="img-fluid rounded img-4by3-lg" /></a>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="#">
                                                    <h5 class="text-primary-hover">
                                                        Online WordPress Courses Become an Expert Today‎
                                                    </h5>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs me-2" />
                                                    <span class="fs-6">Robert Fox</span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown6"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                              <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-4">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Card header -->
                            <div class="card-header card-header-height d-flex align-items-center">
                                <h4 class="mb-0">Activity
                                </h4>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush list-timeline-activity">
                                    <li class="list-group-item px-0 pt-0 border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n2">
                                                <h4 class="mb-0 h5">Dianna Smiley</h4>
                                                <p class="mb-1">Just buy the courses”Build React Application Tutorial”</p>
                                                <span class="fs-6">2m ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 pt-0  border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-offline">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n2">
                                                <h4 class="mb-0 h5">
                                                    Irene Hargrove
                                                </h4>
                                                <p class="mb-1">Comment on “Bootstrap Tutorial” Says “Hi,I m irene...</p>
                                                <span class="fs-6">1 hour ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- List group -->
                                    <li class="list-group-item px-0 pt-0  border-0 mb-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-busy">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-4.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n2">
                                                <h4 class="mb-0 h5">Trevor Bradle</h4>
                                                <p class="mb-1">Just share your article on Social Media..</p>
                                                <span class="fs-6">2 month ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pt-0 border-0">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-md avatar-indicators avatar-away">
                                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ms-n2">
                                                <h4 class="mb-0 h5">John Deo</h4>
                                                <p class="mb-1">Just buy the courses”Build React Application Tutorial”</p>
                                                <span class="fs-6">2m ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection