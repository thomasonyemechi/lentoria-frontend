@extends('layouts.instructor')
@section('page_title')
    Lentoria
@endsection

@section('page_content')
    <!-- Hero Content -->
    <div class="bg-primary-a" style="background-color: #003377">
        <div class="container">
            <!-- Hero Section -->
            <div class="row align-items-center g-0">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="py-5 py-lg-0">
                        <h1 class="text-white display-4 fw-bold">Skill up with Speed</h1>
                        <p class="text-white mb-4 lead">
                            Take the first step towards learning a new skill in your career path or a completely new field
                            and become a professional that is positioned to get hired by the best companies around the
                            world.
                        </p>
                        <a href="courses.php?all" class="btn btn-outline-white text-white mt-4">Explore courses</a>
                        <!--    <a href="courses.php" class="btn btn-success btn-hero"> Browse Courses</a>
                                                <a href="../instructor/instructor-form.php" class="btn btn-info btn-hero">Become An Instructor?</a> -->
                    </div>
                </div>
                <div class=" col-xl-7 col-lg-6 col-md-12 text-lg-end text-center">
                    <img src="assets/images/hero/hero-img.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-4 shadow-sm">
        <div class="container">
            <div class="row align-items-center g-0">
                <!-- Features -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span
                            class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                            <i class="fe fe-video"> </i>
                        </span>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semi-bold">Quality Video Live Training</h4>
                            <p class="mb-0">Enjoy a variety of fresh topics</p>
                        </div>
                    </div>
                </div>
                <!-- Features -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span
                            class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                            <i class="fe fe-users"> </i>
                        </span>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semi-bold">Innovative Instructors</h4>
                            <p class="mb-0">Have access to wide-range of expertise</p>
                        </div>
                    </div>
                </div>
                <!-- Features -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span
                            class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                            <i class="fe fe-clock"> </i>
                        </span>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semi-bold">Self-paced Learning</h4>
                            <p class="mb-0">Learn on your schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- call to action -->
    {{-- <div class="container pb-6">
        <div class="row">
            <div class="col-12 bg-primary py-3" style="border-radius: 5px;">
                <div class="row">
                    <div class="col-md-9 p-3 text-white">
                        <big><b>Become an Instructor </b></big>
                        and transform your experience and knowledge into a thriving business
                    </div>
                    <div class="col-md-3 justify-content-center">
                        <a href="instructor.php" style="float:right"
                            class="btn btn-outline-white mb-2 mb-md-0 text-white">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Top courses-->
    <div class="py-8 py-lg-16 bg-light-gradient-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-lg">Browse Categories</span>
                    <h2 class="mb-1 display-4 fw-bold">The world's top courses</h2>
                    <p class="mb-8 lead">Choose from 32,000 online video courses with new additions published every month.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tab -->
                    <ul class="nav nav-lb-tab mb-6" id="pills-tab" role="tablist">
                        <li class="nav-item ms-0" role="presentation">
                            <a class="nav-link active" id="pills-allcategory-tab" data-bs-toggle="pill"
                                href="#pills-allcategory" role="tab" aria-controls="pills-allcategory"
                                aria-selected="true">All Categories </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-design-tab" data-bs-toggle="pill" href="#pills-design"
                                role="tab" aria-controls="pills-design" aria-selected="false">Design</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-javascript-tab" data-bs-toggle="pill" href="#pills-javascript"
                                role="tab" aria-controls="pills-javascript" aria-selected="false">Javascript</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-development-tab" data-bs-toggle="pill" href="#pills-development"
                                role="tab" aria-controls="pills-development" aria-selected="false">Web Development</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-development-tab" data-bs-toggle="pill" href="#pills-development"
                                role="tab" aria-controls="pills-development" aria-selected="false">Fashion</a>
                        </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-allcategory" role="tabpanel"
                            aria-labelledby="pills-allcategory-tab">
                            <div class="position-relative">
                                <ul class="controls " id="sliderFirstControls">
                                    <li class="prev">
                                        <i class="fe fe-chevron-left"></i>
                                    </li>
                                    <li class="next">
                                        <i class="fe fe-chevron-right"></i>
                                    </li>
                                </ul>

                                <div class="sliderFirst">
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-react.jpg" alt=""
                                                    class="rounded-top-md card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">How
                                                        to
                                                        easily create a website with React</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9" />
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-1.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Morris Mccoy</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-graphql.jpg" alt=""
                                                    class="rounded-top-md card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">GraphQL:
                                                        introduction to graphQL for beginners</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE" />
                                                        </svg>
                                                        Advance
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-graphql.jpg" alt=""
                                                    class="rounded-top-md card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">GraphQL:
                                                        introduction to graphQL for beginners</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE" />
                                                        </svg>
                                                        Advance
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                            <div class="position-relative">
                                <ul class="controls " id="sliderSecondControls">
                                    <li class="prev">
                                        <i class="fe fe-chevron-left"></i>
                                    </li>
                                    <li class="next">
                                        <i class="fe fe-chevron-right"></i>
                                    </li>
                                </ul>

                                <div class="sliderSecond">
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-gatsby.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Gatsby JS:
                                                        build blog with GraphQL and React</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9"></rect>
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,370)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-5.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Morris Mccoy</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Getting Started with JavaScript</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE"></rect>
                                                        </svg>
                                                        Advance
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(5,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-6.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-css.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">CSS:
                                                        ultimate CSS course from beginner to advanced</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9"></rect>
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(17,000)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-7.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Juanita Bell</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-wordpress.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Wordpress:
                                                        complete WordPress theme &amp; plugin development</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9"></rect>
                                                        </svg>
                                                        Intermediate
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(16,500)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-8.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Claire Robertson</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-graphql.jpg" alt=""
                                                    class="rounded-top-md card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">GraphQL:
                                                        introduction to graphQL for beginners</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE" />
                                                        </svg>
                                                        Advance
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-angular.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Angular -
                                                        the complete guide for beginner</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9" />
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-3.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Juanita Bell</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-python.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">The
                                                        Python
                                                        Course: build web application</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9" />
                                                        </svg>
                                                        Intermediate
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-4.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Claire Robertson</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-angular.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Angular -
                                                        the complete guide for beginner</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9" />
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-3.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Juanita Bell</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Tab Pane -->
                        <div class="tab-pane fade" id="pills-javascript" role="tabpanel"
                            aria-labelledby="pills-javascript-tab">
                            <div class="position-relative">
                                <ul class="controls " id="sliderThirdControls">
                                    <li class="prev">
                                        <i class="fe fe-chevron-left"></i>
                                    </li>
                                    <li class="next">
                                        <i class="fe fe-chevron-right"></i>
                                    </li>
                                </ul>

                                <div class="sliderThird">

                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card  mb-4 card-hover">
                                            <a href="#" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#"
                                                        class="text-inherit">Creating a Custom
                                                        Event in Javascript</a></h3>
                                                <ul class="mb-3  list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item"><svg class="me-1 mt-n1"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                        </svg>Beginner </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-3.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Morris Mccoy</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="item">
                                        <div class="card  mb-4 card-hover">
                                            <a href="#" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#"
                                                        class="text-inherit">Morden JavaScript
                                                        Beginner Tutorial -
                                                        Simple</a></h3>
                                                <ul class="mb-3  list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item"><svg class="me-1 mt-n1"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE">
                                                            </rect>
                                                        </svg>Advance </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(7,800)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card  mb-4 card-hover">
                                            <a href="#" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#"
                                                        class="text-inherit">Applying JavaScript
                                                        and using the console.</a>
                                                </h3>
                                                <!-- List inline -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                    </li>
                                                    <li class="list-inline-item"><svg class="me-1 mt-n1"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                        </svg>Beginner </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(8,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-4.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Juanita Bell</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card  mb-4 card-hover">
                                            <a href="#" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#"
                                                        class="text-inherit">Creating functions,
                                                        using them, passing data in
                                                        and out.</a></h3>
                                                <!-- list inline -->
                                                <ul class="mb-3  list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m
                                                    </li>
                                                    <li class="list-inline-item"><svg class="me-1 mt-n1"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                        </svg>Intermediate </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(3,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-5.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Claire Robertson</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card  mb-4 card-hover">
                                            <a href="#" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#"
                                                        class="text-inherit">Creating a Custom
                                                        Event in Javascript</a></h3>
                                                <ul class="mb-3  list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item"><svg class="me-1 mt-n1"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                        </svg>Beginner </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-3.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Morris Mccoy</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="item">
                                        <div class="card  mb-4 card-hover">
                                            <a href="#" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#"
                                                        class="text-inherit">Morden JavaScript
                                                        Beginner Tutorial -
                                                        Simple</a></h3>
                                                <ul class="mb-3  list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item"><svg class="me-1 mt-n1"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE">
                                                            </rect>
                                                        </svg>Advance </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(7,800)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card  mb-4 card-hover">
                                            <a href="#" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#"
                                                        class="text-inherit">Creating a Custom
                                                        Event in Javascript</a></h3>
                                                <ul class="mb-3  list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item"><svg class="me-1 mt-n1"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9">
                                                            </rect>
                                                        </svg>Beginner </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-3.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Morris Mccoy</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="item">
                                        <div class="card  mb-4 card-hover">
                                            <a href="#" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#"
                                                        class="text-inherit">Morden JavaScript
                                                        Beginner Tutorial -
                                                        Simple</a></h3>
                                                <ul class="mb-3  list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item"><svg class="me-1 mt-n1"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE">
                                                            </rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE">
                                                            </rect>
                                                        </svg>Advance </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(7,800)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-development" role="tabpanel"
                            aria-labelledby="pills-development-tab">
                            <div class="position-relative">
                                <ul class="controls " id="sliderFourthControls">
                                    <li class="prev">
                                        <i class="fe fe-chevron-left"></i>
                                    </li>
                                    <li class="next">
                                        <i class="fe fe-chevron-right"></i>
                                    </li>
                                </ul>

                                <div class="sliderFourth">
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-gatsby.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Gatsby JS:
                                                        build blog with GraphQL and React</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9"></rect>
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,370)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-5.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Morris Mccoy</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-javascript.jpg"
                                                    alt="" class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Getting Started with JavaScript</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE"></rect>
                                                        </svg>
                                                        Advance
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(5,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-6.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-css.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">CSS:
                                                        ultimate CSS course from beginner to advanced</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9"></rect>
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(17,000)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-7.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Juanita Bell</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-wordpress.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Wordpress:
                                                        complete WordPress theme &amp; plugin development</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9"></rect>
                                                        </svg>
                                                        Intermediate
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(16,500)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-8.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Claire Robertson</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-graphql.jpg" alt=""
                                                    class="rounded-top-md card-img-top"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">GraphQL:
                                                        introduction to graphQL for beginners</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#754FFE" />
                                                        </svg>
                                                        Advance
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Ted Hawkins</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-angular.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Angular -
                                                        the complete guide for beginner</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9" />
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-3.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Juanita Bell</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-python.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">The
                                                        Python
                                                        Course: build web application</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE" />
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#754FFE" />
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9" />
                                                        </svg>
                                                        Intermediate
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-4.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Claire Robertson</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <!-- Card -->
                                        <div class="card card-hover mb-3">
                                            <a href="course-single.html" class="card-img-top"><img
                                                    src="../../assets/images/course/course-gatsby.jpg" alt=""
                                                    class="card-img-top rounded-top-md"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                        class="text-inherit">Gatsby JS:
                                                        build blog with GraphQL and React</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="3" y="8" width="2"
                                                                height="6" rx="1" fill="#754FFE"></rect>
                                                            <rect x="7" y="5" width="2"
                                                                height="9" rx="1" fill="#DBD8E9"></rect>
                                                            <rect x="11" y="2" width="2"
                                                                height="12" rx="1" fill="#DBD8E9"></rect>
                                                        </svg>
                                                        Beginner
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning me-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,370)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-5.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>Morris Mccoy</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
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
        </div>
    </div>

    <!-- Features -->
    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="row bg-secondary">
            <div class="col-lg-6 m-0 p-0">
                <img src="assets/images/coding.jpg" width="100%">
            </div>
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Skillup with Speed</h1>
                <h2 class="lead text-white">It does not require a lifetime to become a professional and land the right
                    job. Our master classes are designed to get you to master new skills with well planned practical
                    sessions and simplified class activities tailored towards completing certain class projects</h2>
                <a href="" class="btn btn-outline-white text-white mt-4">Learn more</a>
            </div>
        </div>

        <div class="row bg-primary">
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Learn with Comfort</h1>
                <h2 class="lead text-white">Lentoria makes it possible for you to learn from any where with maximum
                    comfort and at the pace that suits you. Our step-by-step approach make the entire process a lot easier
                    than you can imagine. Take a bold step today and kick-start your journey to expertise</h2>
                <a href="courses.php?all" class="btn btn-outline-white text-white mt-4">Explore courses</a>
            </div>
            <div class="col-lg-6 m-0 p-0">
                <img src="assets/images/learn.jpeg" width="100%">
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="container">
            <div class="row mb-10 justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <!-- caption -->
                    <span class="text-primary-a mb-3 d-block text-uppercase fw-semi-bold ls-xl">Learn with LENTORIA</span>
                    <h2 class="mb-2 display-4 fw-bold ">Become an Expert in your Career</h2>
                    <p class="lead">Acquire new skills that improves your present and prepares you for the future</p>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <!-- features -->
                    <div class="mb-4">
                        <!-- icon -->
                        <div class="display-2 text-primary">
                            <i class="fe fe-settings fe-a"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>Expand your Expertise</h3>
                            <p class="fs-4">Learn skills to build technical expertise in your career</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <!-- features -->
                    <div class="mb-4">
                        <!-- icon -->
                        <div class="display-2 text-primary">
                            <i class="fe fe-user"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>Connect with Professionals</h3>
                            <p class="fs-4">Network with experts in your field for bigger career opportunities</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <!-- features -->
                    <div class="mb-4">
                        <!-- icon -->
                        <div class="display-2 text-primary">
                            <i class="fe fe-award"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>Earn a Certificate</h3>
                            <p class="fs-4">Become a well-certified professional to earn better jobs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <!-- features -->
                    <div class="mb-4">
                        <!-- icon -->
                        <div class="display-2 text-primary">
                            <i class="fe fe-users"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>Upskill your organization</h3>
                            <p class="fs-4">Get promoted and be more relevant in your organization</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <hr class="my-0">
    <div class="py-8 py-lg-16 bg-light-gradient-top ">
        <div class="container">
            <div class="row mb-8 justify-content-center">
                <!-- caption -->
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">World-class
                        Instructors</span>
                    <h2 class="mb-2 display-4 fw-bold">Classes Taught by Industry Expert</h2>
                    <p class="lead">Lentoria teachers are icons, experts, and industry rock stars excited to share their
                        experience, wisdom, and trusted tools with you.</p>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <!-- card -->
                    <div class="card mb-4 card-hover">
                        <!-- img -->
                        <div class="card-img-top">
                            <img src="../../assets/images/instructor/instructor-img-1.jpg" alt=""
                                class="rounded-top-md img-fluid">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <h3 class="mb-0 fw-semi-bold"> <a href="#" class="text-inherit">Mary Roberts</a>
                            </h3>
                            <p class="mb-3">Professional Web Developer</p>
                            <div class="lh-1  d-flex justify-content-between">
                                <div>
                                    <span class="fs-6">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <span class="text-warning">4.5</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="fs-6 text-muted"><span class="text-dark">9,692</span> Students</span>
                                </div>
                                <div>
                                    <span class="fs-6 text-muted"><span class="text-dark">3</span> Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <!-- card -->
                    <div class="card mb-4 card-hover">
                        <!-- img -->
                        <div class="card-img-top">
                            <img src="../../assets/images/instructor/instructor-img-2.jpg" alt=""
                                class="rounded-top-md img-fluid">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <h3 class="mb-0 fw-semi-bold"><a href="#" class="text-inherit">Esther Howard</a>
                            </h3>
                            <p class="mb-3">Developer of Bootcamp</p>
                            <div class="lh-1  d-flex justify-content-between">
                                <div>
                                    <span class="fs-6">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <span class="text-warning">4.5</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="fs-6 text-muted"><span class="text-dark">5,128</span> Students</span>
                                </div>
                                <div>
                                    <span class="fs-6 text-muted"><span class="text-dark">5</span> Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <!-- card -->
                    <div class="card mb-4 card-hover">
                        <!-- img -->
                        <div class="card-img-top">
                            <img src="../../assets/images/instructor/instructor-img-3.jpg" alt=""
                                class="rounded-top-md img-fluid">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <h3 class="mb-0 fw-semi-bold"><a href="#" class="text-inherit">Ross Johnson</a></h3>
                            <p class="mb-3">Engineering Architect</p>
                            <div class="lh-1  d-flex justify-content-between">
                                <div>
                                    <span class="fs-6">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <span class="text-warning">4.5</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="fs-6 text-muted"><span class="text-dark">7,423</span> Students</span>
                                </div>
                                <div>
                                    <span class="fs-6 text-muted"><span class="text-dark">8</span> Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 d-lg-none d-xl-block">
                    <!-- card -->
                    <div class="card mb-4 card-hover">
                        <!-- img -->
                        <div class="card-img-top">
                            <img src="../../assets/images/instructor/instructor-img-4.jpg" alt=""
                                class="rounded-top-md img-fluid">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <h3 class="mb-0 fw-semi-bold"><a href="#" class="text-inherit">James Davies</a></h3>
                            <p class="mb-3">Web Developer and Designer</p>
                            <div class="lh-1  d-flex justify-content-between">
                                <div>
                                    <span class="fs-6">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <span class="text-warning">4.5</span>
                                    </span>
                                </div>
                                <div>
                                    <span class="fs-6 text-muted"><span class="text-dark">3,896</span> Students</span>
                                </div>
                                <div>
                                    <span class="fs-6 text-muted"><span class="text-dark">5</span> Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- btn -->
                <div class="col-md-12 mt-3 text-center">
                    <a href="#" class="btn btn-primary"> See All Instructors </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Become an Instructor -->
    <div class="pb-lg-3 pt-lg-3 pt-8 pb-6 mt-3">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="col-lg-11 col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12 mb-4">
                            <!-- avatar group -->
                            <div class="avatar-group me-5">
                                <!-- avatar -->
                                <span class="avatar avatar-lg ">
                                    <img alt="avatar" src="assets/images/avatar/avatar-1.jpg"
                                        class="rounded-circle">
                                </span>
                                <!-- avatar -->
                                <span class="avatar avatar-lg ">
                                    <img alt="avatar" src="assets/images/avatar/avatar-2.jpg"
                                        class="rounded-circle">
                                </span>
                                <!-- avatar -->
                                <span class="avatar avatar-lg ">
                                    <img alt="avatar" src="assets/images/avatar/avatar-3.jpg"
                                        class="rounded-circle">
                                </span>
                                <!-- avatar -->
                                <span class="avatar avatar-lg ">
                                    <img alt="avatar" src="assets/images/avatar/avatar-4.jpg"
                                        class="rounded-circle">
                                </span>
                                <!-- avatar -->
                                <span class="avatar avatar-lg avatar-danger">
                                    <span class="avatar-initials rounded-circle fs-5 fw-bold">2000+</span>
                                </span>
                            </div>
                        </div>
                        <!-- heading -->
                        <div class="col-lg-4 col-md-5 col-12 mb-6">
                            <h2 class="display-4 fw-bold">Become an Instructor</h2>
                        </div>
                        <div class="offset-lg-1 col-lg-6 col-md-7 col-12 mb-6">
                            <!-- para -->
                            <p class="lead">Join coaches and instructors from around the world who use Lentoria to share
                                their knowledge and wealth of experience to millions of students. We provide the tools to
                                make it easy.</p>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <!-- text -->
                            <h3 class="fw-semi-bold mb-2">Generate Cashflow</h3>
                            <p class="fs-4">Earn money every time a student purchases your course and get paid directly
                                to your bank account
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <!-- text -->
                            <h3 class="fw-semi-bold mb-2">Empower students</h3>
                            <p class="fs-4">Share what you know and use your wealth of experience to help others become
                                professionals in their fields.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <!-- text -->
                            <h3 class="fw-semi-bold mb-2">Join our community</h3>
                            <p class="fs-4">Take advantage of our active community of instructors to help you through
                                your course creation process.
                            </p>
                        </div>
                        <!-- btn -->
                        <div class="col-md-12 mt-3 justify-content-center">
                            <a href="instructor.php" class="btn btn-primary-a"> Start Teaching Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="container">
            <hr class="my-10 my-lg-16">
            <div class="row mb-8 justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <!-- caption -->
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">Testimonials</span>
                    <h2 class="mb-2 display-4 fw-bold">Don't just take our word for it.</h2>
                    <!-- <p class="lead">12+ million people are already learning on Geeks</p> -->
                </div>
            </div>
            <!-- row -->
            <div class="row mb-8">
                <!-- col -->
                <div class="col-md-12">
                    <div class="position-relative">
                        <!-- controls -->
                        <ul class="controls-testimonial controls " id="sliderTestimonialControls">
                            <li class="">
                                <i class="fe fe-chevron-left"></i>
                            </li>
                            <li class="next ms-2">
                                <i class="fe fe-chevron-right"></i>
                            </li>
                        </ul>
                        <!-- slider -->
                        <div class="sliderTestimonial">
                            <div class="item">
                                <!-- card -->
                                <div class="card border shadow-none">
                                    <!-- card body -->
                                    <div class="card-body p-5">
                                        <div class="mb-2">
                                            <span class="fs-4">
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </span>
                                        </div>
                                        <!-- para -->
                                        <p class="lead text-dark font-italic fw-medium mb-0">"Interning at Livepetal
                                            offered me the opportunity to develop as a professional and to help the
                                            organization develop in the tech industry. As an intern, your thoughts and your
                                            contributions will be valued every day as you work alongside the respectful
                                            staff. The mission of the organization is inspiring and useful for anyone
                                            interested in software development, digital marketing, and web design. This has
                                            been an excellent internship experience and I recommended the organization more
                                            highly"
                                        </p>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer px-5 py-4">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-1.jpg" alt=""
                                                class="avatar avatar-md rounded-circle">
                                            <div class="ms-3">
                                                <h4 class="mb-0">Michael David</h4>
                                                <p class="mb-0 small">Web Developer,NGR</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- card -->
                                <div class="card border shadow-none">
                                    <!-- card body -->
                                    <div class="card-body p-5">
                                        <div class="mb-2">
                                            <span class="fs-4">
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </span>
                                        </div>
                                        <!-- para -->
                                        <p class="lead text-dark font-italic fw-medium mb-0">"I have developed many skills
                                            and have a much greater concept of what to expect after school. I was able to
                                            work with experts that guided me through any difficulty I encounter. It also
                                            allowed me to apply it to real life situations, Rather than feeling lost and
                                            nervous about graduating this year, I have a clear vision of where I see myself
                                            and what I want from my career. Interning through Lentoria has helped me get to
                                            this place. With my future, the sky truly is the limit."
                                        </p>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer px-5 py-4">
                                        <div class="d-flex align-items-center">
                                            <!-- img -->
                                            <img src="../assets/images/avatar/avatar-2.jpg" alt=""
                                                class="avatar avatar-md rounded-circle">
                                            <div class="ms-3">
                                                <h4 class="mb-0">Adegbite Adekola Collins</h4>
                                                <p class="mb-0 small">Web-Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- card -->
                                <div class="card border shadow-none">
                                    <!-- card body -->
                                    <div class="card-body p-5">
                                        <div class="mb-2">
                                            <span class="fs-4">
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning me-n1"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </span>
                                        </div>
                                        <!-- para -->
                                        <p class="lead text-dark font-italic fw-medium mb-0">"During my industrial
                                            training,I was posted to wen development unit which is mainly for developing
                                            applications. I learnt how to create a standard website with the help of
                                            HTML,CSS, JavaScript and php. I also learnt how to install Database and linking
                                            PHP to the database.inlearnt how to update,Insert,select select record in the
                                            database. I also learnt how to import,Export database file from one local server
                                            to another."</p>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer px-5 py-4">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/avatar/avatar-3.jpg" alt=""
                                                class="avatar avatar-md rounded-circle">
                                            <div class="ms-3">
                                                <h4 class="mb-0">Oluwasola Taiwo</h4>
                                                <p class="mb-0 small">Web-Developer</p>
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

        <!-- call to action -->
        <div class="bg-primary-a"
            style="background-color: #036 !important; background: url(assets/images/background/course-graphics.svg)no-repeat; background-size: cover; background-position: top center;  margin: left -100px right -100px; padding-bottom: 60px; padding-top: 60px;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-9 col-12">
                        <h2 class="display-4 text-white">Join learners worldwide</h2>
                        <p class="lead text-white px-lg-12 mb-6">Effective learning starts with assessment. Learning a new
                            skill is hard work—Lentoria makes it easier.</p>
                        <div class="d-grid d-md-block">
                            <a href="signup.php" class="btn btn-success mb-2 mb-md-0">Start Learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
