@extends('layouts.instructor')
@section('page_title', 'Lentoria || Become Instructor')

@section('page_content')
    <style>
        label.btn:hover {
            text-shadow: 0 3px 2px rgba(0, 0, 0, 0.4);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1)
        }
    </style>
    <!-- Hero Content -->
    <div class="bg-primary-a" style="background-color: #036">
        <div class="container">
            <!-- Hero Section -->
            <div class="row align-items-center g-0">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="py-5 py-lg-0">
                        <h1 class="text-white display-3 fw-bold">Earn money sharing what you know</h1>
                        <p class="text-white mb-4 lead">
                            Become an Instructor in Lentoria and transform your experience and knowledge into a thriving
                            business that generates consistent cash flow even while you are away.
                        </p>
                        <a href="" class="btn btn-outline-white text-white mt-4 gsbtn">Get Started</a>

                    </div>
                </div>
                <div class=" col-xl-6 col-lg-6 col-md-12 text-lg-end text-center p-5">
                    <img src="{{ asset('assets/images/teach.png') }}" alt="" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="pt-lg-12 pb-lg-3 pt-8">
        <div class="container">
            <div class="row mb-10 justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <!-- caption -->
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">Build a brand and Scale with
                        Lentoria</span>
                    <h2 class="mb-2 display-4 fw-bold ">Lentoria Professional Knowledge Facilitator Program</h2>
                    <p class="lead">This Program simplifies the whole process of becoming a professional online
                        instructor. It will take you from a complete novice to expert level</p>
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
                            <h3>No skill Required</h3>
                            <p class="fs-4">
                                You don’t need to have any experience with professional training. The program will take
                                you
                                from start to expertise</p>
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
                            <h3>Equip you with right Tools</h3>
                            <p class="fs-4">Our tools provide all the needed guide to create, package and publish your
                                course in a professional way</p>
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
                            <h3>Get you Certified</h3>
                            <p class="fs-4">You are trained by industry experts to become a Certified Knowledge
                                Facilitator at global scale</p>
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
                            <h3>Help you Build Audience</h3>
                            <p class="fs-4">Lentoria acelerated marketing and sales program will help you generate all
                                the
                                sales you need</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-10 justify-content-center">
                <div class="col-lg-8 col-md-12 pt-4 col-12 text-center">
                    <p class="lead">This Program is not only for university lecturers or some set of professionals. It
                        is
                        meant for anyone who wishes to earn massively from the knowledge transfer industry and change
                        their
                        financial status into an 8 figure earner</p>
                    <p><a href="" class="btn btn-outline-primary mt-4 gsbtn">Become an Instructor Now</a></p>
                </div>
            </div>

        </div>
    </div>

    <!-- features -->
    <div class="py-lg-16 pt-10 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-right-md-6 col-12 mb-6">
                    <!-- caption -->
                    <h2 class="display-4 mb-3 fw-bold text-white">Why become an Instructor</h2>
                    <p class="lead text-white">It's all about sharing knowledge and experiences to help others learn
                        what you already know from the comfort of your home, expanding your professional network
                        across the globe and earning money doing it.
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-4">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-school-outline mdi-48px text-primary lh-1 "></i>
                            </div>
                            <h3 class="mb-2">Share what you Know</h3>
                            <p class="mb-0"><big>All you do is share what you know, the way you want it and have
                                    full control of your options</big></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-4">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-account-group mdi-48px text-primary lh-1 "></i>
                            </div>
                            <h3 class="mb-2">Build your Network & Earn</h3>
                            <p class="mb-0"><big>It is exciting to know that you can expand your professional
                                    network and get well paid for training others</big></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-4">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-finance mdi-48px text-primary lh-1 "></i></div>
                            <h3 class="mb-2">Get the Tools & Mentoring</h3>
                            <p class="mb-0"><big>Get equipped with Lentoria tools and mentored by industry experts
                                    to become a professional trainer</big></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 text-center">

                    <a href="" class="btn btn-outline-white mt-5 text-white gsbtn">Become an Instructor Now</a>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-lg-12 pb-lg-3 pt-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <!-- caption -->
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">Take the bold step
                        to expanding your opportunities</span>
                    <h2 class="mb-2 display-4 fw-bold ">It doesn't have to be difficult</h2>
                    <p class="lead">Our expert team is available to take you through the entire process, guide you
                        all the way and answer every question you may have from start to publishing. After launching
                        your course you relax and monitor your cash flow</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="pt-lg-12 pb-lg-3 pb-6 pt-0">

        <div class="row bg-primary">
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Train from the Comfort of your Home</h1>
                <h2 class="lead text-white">We have all accepted the concept of remote working and Lentoria is no
                    different. From anywhere in the world you can create and deliver your course effortlessly and
                    attract thousands of students from across the globe. You are in control of your options</h2>
            </div>
            <div class="col-lg-6 m-0 p-0">

                <img src="{{asset('assets/images/learn.jpg')}}" width="100%" alt=""/>

            </div>
        </div>

        <div class="row bg-warning">
            <div class="col-lg-6 m-0 p-0">

                <img src="{{asset('assets/images/coding.jpg')}}" width="100%" alt=""/>

            </div>
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Leverage Corporate Marketing & Sales</h1>
                <h2 class="lead text-white">You dont have to bother about generating traffic or marketing your
                    course, Lentoria will help you generate the leads to enable you focus your attention on creating
                    your course. Our sales network will go all out to get thousands of students for your course</h2>
            </div>

        </div>

    </div>

    <!-- Page Content -->
    <div class="py-10 bg-white">
        <div class="container">

            <!-- gallery -->

            <div class="row">
                <!-- row -->
                <div class="col-md-6 offset-right-md-6">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold mb-3">Simple Steps to Success</h1>
                    <!-- para -->
                    <p class="lead">
                        You don't have to be a pro, our simplified step-by-step approach and tools will get you
                        started and take you through to finish and publish your course
                    </p>
                </div>
                <div class="col-lg-3">
                    <!-- counter -->
                    <h1>1</h1>
                    <div class="border-top pt-4 mt-0 mb-5">
                        <h3 class="mb-2">Determine Your Topic</h3>
                        <p class=""><big>Make your choice of topic to teach and streamline it to target the kind of
                                audience you want to attract</big></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- counter -->
                    <h1>2</h1>
                    <div class="border-top pt-4 mt-0 mb-5">
                        <h3 class="mb-2">Create Your Content</h3>
                        <p class=""><big>Use our simplified tools to develop your content into an attractive and
                                comprehensive student course</big></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- counter -->
                    <h1>3</h1>
                    <div class="border-top pt-4 mt-0 mb-5">
                        <h3 class="mb-2">Re-package Your Course</h3>
                        <p class=""><big>Our experts will help you re-package your course and make it highly
                                professional and globally acceptable</big></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- counter -->
                    <h1>4</h1>
                    <div class="border-top pt-4 mt-0 mb-5">
                        <h3 class="mb-2">Publish Your Course</h3>
                        <p class=""><big>Make your choice of topic to teach and streamline it to target the kind
                                of audience you want to attract</big></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-16 pt-10"
         style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%), rgba(221, 218, 255, 0.3) ; background-size: cover; background-position: top center">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-12">
                    <!-- Row -->
                    <div class="row mb-0">
                        <div class="col-lg-10 col-md-12 col-12 mb-8">
                            <!-- Heading -->
                            <h2 class="display-4 fw-bold">Our instructors are saying
                            </h2>
                            <!-- Para -->
                            <p class="h2 text-muted">Lentoria has greatly impacted their lives positively</p>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="position-relative">
                                <!-- controls -->
                                <ul class="controls-testimonial controls  justify-content-start"
                                    id="sliderTestimonialSecondControls">
                                    <li class="prev me-2 ms-0">
                                        <i class="fe fe-chevron-left"></i>
                                    </li>
                                    <li class="next">
                                        <i class="fe fe-chevron-right"></i>
                                    </li>
                                </ul>
                                <!-- slider -->
                                <div class="sliderTestimonialSecond">

                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="{{asset('assets/images/learn.jpg')}}" class="d-block w-100"
                                                     alt="...">
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Geeks
                                                    has created an incredibly seamless experience for
                                                    app design. My mind
                                                    is blown. Vestibulum ante ipsum primis in faucibus
                                                    orci luctus et ultrices pos
                                                    uere cubilia curae fusce consequat ligula in dui
                                                    congue interdum."</p>
                                                <p><b>Paulo Dichone</b><br>
                                                    Developer (Android Speciality)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="{{asset('assets/images/coding.jp')}}g" class="d-block w-100"
                                                     alt="...">
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Geeks
                                                    has created an incredibly seamless experience for
                                                    app design. My mind
                                                    is blown. Vestibulum ante ipsum primis in faucibus
                                                    orci luctus et ultrices pos
                                                    uere cubilia curae fusce consequat ligula in dui
                                                    congue interdum."</p>
                                                <p><b>Paulo Dichone</b><br>
                                                    Developer (Android Speciality)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="{{asset('assets/images/learn.jpg')}}" class="d-block w-100"
                                                     alt="...">
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Geeks
                                                    has created an incredibly seamless experience for
                                                    app design. My mind
                                                    is blown. Vestibulum ante ipsum primis in faucibus
                                                    orci luctus et ultrices pos
                                                    uere cubilia curae fusce consequat ligula in dui
                                                    congue interdum."</p>
                                                <p><b>Paulo Dichone</b><br>
                                                    Developer (Android Speciality)</p>
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

    <div class="py-lg-13 py-8 bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <!-- User info -->
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
                    <div class="text-center mb-6 px-md-6">
                        <h1 class="text-white display-3 fw-semi-bold ">
                            Instructor Membership Plans
                        </h1>
                        <p class="text-white lead mb-8">
                            All Plans gives you access to the instructor community for collaboration and networking
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="mt-n8 pb-10" id="payplan">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card  border border-primary mb-3">
                        <!-- Card Body -->
                        <div class="p-5 text-center">
                            <div class="mb-5">
                                <h2 class="fw-bold">STANDARD</h2>
                                <p class="mb-0 ">Access to become an instructor,<span class="text-dark fw-medium">Access
                                        to instructor training package & 1 paid
                                        course. </span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h3 mb-0 fw-bold">N</span>
                                <div class="price-card--price-number toggle-price-content odometer"
                                     data-price-monthly="0"
                                     data-price-yearly="0">15,000
                                </div>

                            </div>
                            <div class="d-grid">
                                <a href="{{ url('checkout/instructor_activation/3/'.Str::random(8)) }}"
                                   class="btn btn-primary">Activate Now</a>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="p-5">
                            <h4 class="fw-bold mb-4">Everything in Starter, including:</h4>
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Become an Instructor </span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Instructor Paid Training Package</span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">1 Paid Course</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card border border-primary mb-3 mb-lg-0">
                        <!-- Card Body -->
                        <div class="p-5 text-center">
                            <div class="mb-5">
                                <h2 class="fw-bold">PREMIUM</h2>
                                <p class="mb-0 ">Access to instructor success challenge,<span
                                            class="text-dark fw-medium">
                                        a Unique store, and to 3 paid courses.</span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h3 mb-0 fw-bold">N</span>
                                <div class="price-card--price-number toggle-price-content odometer"
                                     data-price-monthly="39" data-price-yearly="99">40,000
                                </div>
                            </div>
                            <div class="d-grid">

                                <a href="{{ url('checkout/instructor_activation/4/'.Str::random(8)) }}"
                                   class="btn btn-primary ">Activate Now</a>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="p-5">
                            <h4 class="fw-bold mb-4">Everything in Standard, plus:</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Instructor success challenge</span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Unique Store</span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">3 Paid Courses</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card  border border-primary mb-3 mb-lg-0">
                        <!-- Card Body -->
                        <div class="p-5 text-center">
                            <div class="mb-5">
                                <h2 class="fw-bold">PROFESSIONAL</h2>
                                <p class="mb-0 ">Access to store automation, customizable store and access to
                                    unlimited paid courses.
                                </p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h3 mb-0 fw-bold">N</span>
                                <div class="price-card--price-number toggle-price-content odometer"
                                     data-price-monthly="99" data-price-yearly="199">115,000
                                </div>
                            </div>
                            <div class="d-grid">
                                <a href="{{ url('checkout/instructor_activation/5/'.Str::random(8)) }}"
                                   class="btn btn-primary">Activate Now</a>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="p-5">
                            <h4 class="fw-bold mb-4">Everything in Premium, plus:</h4>
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Store Automation </span>

                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Customizable Store</span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Unlimited Paid Courses</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructor -->
    <hr class="my-0">

{{--    <div class="pb-16 pt-10"--}}
{{--         style=" background-size: cover; background: rgba(221, 218, 255, 0.3) linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%) top center;">--}}
{{--        <!-- Container -->--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-12 col-12">--}}

{{--                    <div class="col-lg-12 col-md-12 col-12 mb-lg-3 mb-sm-0 ms-7">--}}
{{--                        <!-- Heading -->--}}
{{--                        <h2 class="display-4 fw-bold">Questionnaire</h2>--}}
{{--                        <p>All Questions Are Required</p>--}}
{{--                    </div>--}}
{{--                    <!-- Row -->--}}
{{--                    <div class="container">--}}
{{--                        <div id="questionnaire" class="bs-stepper">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12 col-md-12 col-12">--}}
{{--                                        <!-- Stepper Button -->--}}
{{--                                        <div class="bs-stepper-header shadow-sm" role="tablist">--}}
{{--                                            <div class="step" data-target="#test-l-1">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger1" aria-controls="test-l-1">--}}
{{--                                                    <span class="bs-stepper-circle">1</span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-2">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger2" aria-controls="test-l-2">--}}
{{--                                                    <span class="bs-stepper-circle">2</span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-3">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger3" aria-controls="test-l-3">--}}
{{--                                                    <span class="bs-stepper-circle">3 </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-4">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger4" aria-controls="test-l-4">--}}
{{--                                                    <span class="bs-stepper-circle">4 </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-5">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger5" aria-controls="test-l-5">--}}
{{--                                                    <span class="bs-stepper-circle">5 </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-6">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger6" aria-controls="test-l-6">--}}
{{--                                                    <span class="bs-stepper-circle">6 </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-7">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger7" aria-controls="test-l-7">--}}
{{--                                                    <span class="bs-stepper-circle">7 </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-8">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger8" aria-controls="test-l-8">--}}
{{--                                                    <span class="bs-stepper-circle">8 </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-9">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger9" aria-controls="test-l-9">--}}
{{--                                                    <span class="bs-stepper-circle">9 </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="bs-stepper-line"></div>--}}
{{--                                            <div class="step" data-target="#test-l-10">--}}
{{--                                                <button type="button" class="step-trigger" role="tab"--}}
{{--                                                        id="qnairetrigger10" aria-controls="test-l-10">--}}
{{--                                                    <span class="bs-stepper-circle">10 </span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="d-flex justify-content-center opacity-50 loader my-10">--}}
{{--                                            <div class="spinner-border text-bold fs-3 text-black-100"--}}
{{--                                                 style="width: 5rem; height: 5rem;" role="status">--}}
{{--                                                <span class="visually-hidden">Loading...</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="bs-stepper-content mt-5">--}}
{{--                                            <form onSubmit="return false" id="queform">--}}
{{--                                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger1">--}}

{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-end">--}}
{{--                                                        <button class="btn btn-primary fibtn">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger2">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary nxt" onclick="qnaire.next()">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger3">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary" onclick="qnaire.next()">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger4">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary" onclick="qnaire.next()">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-5" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger5">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary" onclick="qnaire.next()">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-6" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger6">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary" onclick="qnaire.next()">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-7" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger7">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary" onclick="qnaire.next()">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-8" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger8">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary" onclick="qnaire.next()">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-9" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger9">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary" onclick="qnaire.next();">--}}
{{--                                                            Next--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div id="test-l-10" role="tabpanel" class="bs-stepper-pane fade"--}}
{{--                                                     aria-labelledby="qnairetrigger10">--}}
{{--                                                    <!-- Button -->--}}
{{--                                                    <div class="d-flex justify-content-between">--}}
{{--                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">--}}
{{--                                                            Previous--}}
{{--                                                        </button>--}}
{{--                                                        <button class="btn btn-primary" id="lastbtn">--}}
{{--                                                            Submit--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Become an Instructor -->

    <!-- call to action -->
    <div class="bg-primary-a"
         style="background-color: #036 !important;  margin-left: -100px; margin-right: -100px; padding-bottom: 60px; padding-top: 60px;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-12">
                    <h2 class="display-4 text-white">Join learners worldwide</h2>
                    <p class="lead text-white px-lg-12 mb-6">Effective learning starts with assessment. Learning a
                        new skill is hard work—Lentoria makes it easier.</p>
                    <div class="d-grid d-md-block">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#signup_modal"
                           class="btn btn-success text-white mt-4">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // $("#questionnaire").length && document.addEventListener("DOMContentLoaded", (function() {
        //     qnaire = new Stepper(document.querySelector("#questionnaire"), {
        //         linear: 1,
        //         animation: !0
        //     })
        // }));
        $(function() {
            // getQuestions();
            $(".gsbtn").click(function(e) {
                e.preventDefault();
                bt = $(".gsbtn")
                $('html, body').animate({
                    scrollTop: $(`#payplan`).offset().top
                }, 'slow');
            })

            {{--$(".fibtn").click(function(e) {--}}
            {{--    e.preventDefault();--}}
            {{--    if(!@js(session('info'))) {--}}
            {{--        $("#login_modal").modal('show');--}}
            {{--    } else {--}}
            {{--        qnaire.next();--}}
            {{--    }--}}
            {{--})--}}
            // $("#lastbtn").click(function(e) {
            //     e.preventDefault();
            //     but = $(this);
            //     questions = pushToArray();
            //     answers = [];
            //     questions.forEach(que => {
            //         ansd = que.answer;
            //         answers.push(ansd);
            //     });
            //     if(answers.includes("")) {
            //         salat("Answer all questions before submitting", 1);
            //         return;
            //     }
            //     $.ajax({
            //         url: api_url + "admin/submit_questionnaire",
            //         method: "POST",
            //         data: {
            //             type: 2,
            //             questions: questions,
            //         },
            //         beforeSend: () => {
            //             btn(but, '', 'before');
            //         }
            //     }).done(res => {
            //         btn(but, 'Submit', 'after');
            //         salat(res.message);
            //         $("#queform")[0].reset();
            //
            //     }).fail(res => {
            //         console.log(res);
            //         concatError(res.responseJSON);
            //         btn(but, 'Submit', 'after');
            //     })
            //
            // })

            // function getQuestions() {
            //     $.ajax({
            //         url: api_url + 'fetch_instructor_questions',
            //         beforeSend: () => {
            //             $(".fibtn").parent().addClass('d-none');
            //         }
            //     }).done(res => {
            //         $(".loader").remove();
            //         $("#test-l-1")
            //             .prepend(questionaire(res.data[0].question, res.data[0].a, res.data[0].b, res.data[0].c, res.data[0].d, res.data[0].id));
            //         $("#test-l-2")
            //             .prepend(questionaire(res.data[1].question, res.data[1].a, res.data[1].b, res.data[1].c, res.data[1].d, res.data[1].id));
            //         $("#test-l-3")
            //             .prepend(questionaire(res.data[2].question, res.data[2].a, res.data[2].b, res.data[2].c, res.data[2].d, res.data[2].id));
            //         $("#test-l-4")
            //             .prepend(questionaire(res.data[3].question, res.data[3].a, res.data[3].b, res.data[3].c, res.data[3].d, res.data[3].id));
            //         $("#test-l-5")
            //             .prepend(questionaire(res.data[4].question, res.data[4].a, res.data[4].b, res.data[4].c, res.data[4].d, res.data[4].id));
            //         $("#test-l-6")
            //             .prepend(questionaire(res.data[5].question, res.data[5].a, res.data[5].b, res.data[5].c, res.data[5].d, res.data[5].id));
            //         $("#test-l-7")
            //             .prepend(questionaire(res.data[6].question, res.data[6].a, res.data[6].b, res.data[6].c, res.data[6].d, res.data[6].id));
            //         $("#test-l-8")
            //             .prepend(questionaire(res.data[7].question, res.data[7].a, res.data[7].b, res.data[7].c, res.data[7].d, res.data[7].id));
            //         $("#test-l-9")
            //             .prepend(questionaire(res.data[8].question, res.data[8].a, res.data[8].b, res.data[8].c, res.data[8].d, res.data[8].id));
            //         $("#test-l-10")
            //             .prepend(questionaire(res.data[9].question, res.data[9].a, res.data[9].b, res.data[9].c, res.data[9].d, res.data[9].id));
            //         $(".fibtn").parent().removeClass('d-none');
            //     }).fail(res => {
            //         console.log(res);
            //         concatError(res.responseJSON);
            //     });
            // }

    //         function questionaire(que, a, b, c, d, id) {
    //             let question = "";
    //             question += `<div class="card mb-3 question border-0" data-id="${id}">
    //     <div class="card-header border-bottom px-4 py-3">
    //         <h3 class="mb-0">${que}</h3>
    //     </div>
    //     <div class="card-body">
    //         <div class="vstack gap-2">
    //             <!-- Feed ques item -->
    //             <div>
    //                 <input type="radio" class="btn-check a" name="ques${id}" id="${id}option1">
    //                 <label class="btn btn-outline-primary w-100 opt-a" for="${id}option1">${a}</label>
    //             </div>
    //             <!-- Feed ques item -->
    //             <div>
    //                 <input type="radio" class="btn-check b" name="ques${id}" id="${id}option2">
    //                 <label class="btn btn-outline-primary w-100 opt-b" for="${id}option2">${b}</label>
    //             </div>
    //             <!-- Feed ques item -->
    //             <div>
    //                 <input type="radio" class="btn-check c" name="ques${id}" id="${id}option3">
    //                 <label class="btn btn-outline-primary w-100 opt-c" for="${id}option3">${c}</label>
    //             </div>
    //             <!-- Feed ques item -->
    //             <div>
    //                 <input type="radio" class="btn-check d" name="ques${id}" id="${id}option4">
    //                 <label class="btn btn-outline-primary w-100 opt-d" for="${id}option4">${d}</label>
    //             </div>
    //         </div>
    //     </div>
    // </div>`;
    //             return question;
    //         }
        });


        function pushToArray() {
            que_card = $(".question");
            arr = [];
            que_card.map((que) => {
                que = que_card[que];
                id = $(que).data('id');
                name = `ques${id}`
                var opt = $(que).find('input:checked');
                question = $(que).find('h3').html();
                optionA = $(que).find($('.opt-a')).html();
                optionB = $(que).find($('.opt-b')).html();
                optionC = $(que).find($('.opt-c')).html();
                optionD = $(que).find($('.opt-d')).html();
                if(opt.length > 0) {
                    opt = opt.attr('class').split(' ')[1];
                } else {
                    opt = '';
                }
                let ans = {
                    id: id,
                    question: question,
                    answer: opt,
                    a: optionA,
                    b: optionB,
                    c: optionC,
                    d: optionD,
                };
                arr.push(ans)
            })

            return arr;
        }
    </script>

@endsection
