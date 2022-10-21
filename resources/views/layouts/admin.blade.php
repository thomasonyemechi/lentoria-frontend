<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/dragula/dist/dragula.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/prismjs/themes/prism.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/%40yaireo/tagify/dist/tagify.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tippy.js/dist/tippy.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css') }}">
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <script src="{{ asset('assets/js/general.js') }}"></script>

</head>

<body>

    @include('layouts.alert_top')
    <div class="littleAlert"></div>

    <div id="db-wrapper">
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/logo1.png')}}" alt="" />
                </a>
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link " href="/admin/dashboard">
                            <i class="nav-icon fe fe-home me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
                            <i class="nav-icon mdi mdi-trello me-2"></i> Courses Category
                        </a>
                        <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin/category">
                                        Courses Category
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin/topic">
                                        Course Topics
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="nav-icon fe fe-video me-2"></i> Course Types
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navCourses0" aria-expanded="false" aria-controls="navCourses0">
                            <i class="nav-icon fe fe-book me-2"></i> Courses Management
                        </a>
                        <div id="navCourses0" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin/courses">
                                        All Courses
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin/under_review">
                                        Submited For Review
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin/published_courses">
                                        Published Courses
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin/purchase_history">
                                        Course Purchase
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link   collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navProfile1" aria-expanded="false" aria-controls="navProfile1">
                            <i class="nav-icon fe fe-user-check me-2"></i> Instructor Management
                        </a>
                        <div id="navProfile1" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        All Instructors
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Instructor Challenges
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link   collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navProfile2" aria-expanded="false" aria-controls="navProfile2">
                            <i class="nav-icon fe fe-link me-2"></i> Affiliate
                        </a>
                        <div id="navProfile2" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        All Affilates
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Affliate Challenges
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="nav fe fe-check me-2"></i> Activation History
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="nav-icon fe fe-paperclip  me-2"></i> Questionaire
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="nav-icon fe fe-message-square me-2"></i> Support/Contact
                        </a>
                    </li>
                </ul>

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
                            <input type="search" class="form-control form-control-sm ps-6"
                                placeholder="Search Entire Dashboard" />
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted"
                                href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-bell"></i>
                            </a>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg"
                                        class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg"
                                                class="rounded-circle" />
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">Annette Black</h5>
                                            <p class="mb-0 text-muted">annette@geeksui.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            My Learning
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            My Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            My Wihslist
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Purchase History
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Public Profile
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fe fe-power me-2"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="container-fluid p-4">
                @yield('page_content')
            </div>
        </div>
    </div>

    {{-- Javascripts Here .... --}}

    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/libs/inputmask/dist/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('assets/js/notify.js') }}"></script>

    <script src="{{ asset('assets/libs/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script>


        function show_toastr(title, message, type) {
            var o, i;
            var icon = '';
            var cls = '';

            if (type == 'success') {
                icon = 'fas fa-check-circle';
                cls = 'success';
            } else {
                icon = 'fas fa-times-circle';
                cls = 'danger';
            }

            $.notify({ icon: icon, title: " " + title, message: message, url: "" }, {
                element: "body",
                type: cls,
                allow_dismiss: !0,
                placement: { from: 'top', align: 'right' },
                offset: { x: 15, y: 15 },
                spacing: 10,
                z_index: 1080,
                delay: 2500,
                timer: 2000,
                url_target: "_blank",
                mouse_over: !1,
                animate: { enter: o, exit: i },
                template: '<div class="alert alert-{0} alert-icon alert-group alert-notify" data-notify="container" role="alert"><div class="alert-group-prepend alert-content"><span class="alert-group-icon"><i data-notify="icon"></i></span></div><div class="alert-content"><strong data-notify="title">{1}</strong><div data-notify="message">{2}</div></div><button type="button" class="close" data-notify="dismiss" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
            });
        }


        show_toastr('Ttitle of error', 'several things hass been stacekd for later', 'error');
    </script>
</body>

</html>
