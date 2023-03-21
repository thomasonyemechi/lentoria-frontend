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

        button.get-started-btn:disabled {
            cursor: not-allowed !important;
        }

        .btn.disabled,
        .btn:disabled,
        fieldset:disabled .btn {
            pointer-events: all;
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
                        <a href="" class="btn btn-outline-white text-white mt-4 gsbtn outline-btn">Get Started</a>

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

                    <a href="" class="btn btn-outline-white mt-5 text-white gsbtn outline-btn">Become an Instructor
                        Now</a>

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

                <img src="{{asset('assets/images/new_img/74a7b5fb87.jpg')}}" width="100%" alt=""/>

            </div>
        </div>

        <div class="row bg-warning">
            <div class="col-lg-6 m-0 p-0">

                <img src="{{asset('assets/images/new_img/09374a55c3.jpg')}}" width="100%" alt=""/>

            </div>
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Leverage Corporate Marketing & Sales</h1>
                <h2 class="lead text-white">You don't have to bother about generating traffic or marketing your
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

    {{-- <div class="pb-16 pt-10"--}}
    {{-- style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%), rgba(221, 218, 255, 0.3) ; background-size: cover; background-position: top center">--}}
    {{-- <!-- Container -->--}}
    {{-- <div class="container">--}}
    {{-- <div class="row">--}}
    {{-- <div class="offset-xl-1 col-xl-10 col-12">--}}
    {{-- <!-- Row -->--}}
    {{-- <div class="row mb-0">--}}
    {{-- <div class="col-lg-10 col-md-12 col-12 mb-8">--}}
    {{-- <!-- Heading -->--}}
    {{-- <h2 class="display-4 fw-bold">Our instructors are saying--}}
    {{-- </h2>--}}
    {{-- <!-- Para -->--}}
    {{-- <p class="h2 text-muted">Lentoria has greatly impacted their lives positively</p>--}}
    {{-- </div>--}}
    {{-- <div class="col-md-12 col-12">--}}
    {{-- <div class="position-relative">--}}
    {{-- <!-- controls -->--}}
    {{-- <ul class="controls-testimonial controls  justify-content-start"--}}
    {{-- id="sliderTestimonialSecondControls">--}}
    {{-- <li class="prev me-2 ms-0">--}}
    {{-- <i class="fe fe-chevron-left"></i>--}}
    {{-- </li>--}}
    {{-- <li class="next">--}}
    {{-- <i class="fe fe-chevron-right"></i>--}}
    {{-- </li>--}}
    {{-- </ul>--}}
    {{-- <!-- slider -->--}}
    {{-- <div class="sliderTestimonialSecond">--}}

    {{-- <div class="item">--}}
    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6">--}}
    {{-- <img src="{{asset('assets/images/new_img/d4c30b6486.jpg')}}"--}}
    {{-- class="d-block w-100"--}}
    {{-- alt="...">--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6">--}}
    {{-- <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Geeks--}}
    {{-- has created an incredibly seamless experience for--}}
    {{-- app design. My mind--}}
    {{-- is blown. Vestibulum ante ipsum primis in faucibus--}}
    {{-- orci luctus et ultrices pos--}}
    {{-- uere cubilia curae fusce consequat ligula in dui--}}
    {{-- congue interdum."</p>--}}
    {{-- <p><b>Paulo Dichone</b><br>--}}
    {{-- Developer (Android Speciality)</p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="item">--}}
    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6">--}}
    {{-- <img src="{{asset('assets/images/coding.jp')}}g" class="d-block
    w-100"--}}
    {{-- alt="...">--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6">--}}
    {{-- <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Geeks--}}
    {{-- has created an incredibly seamless experience for--}}
    {{-- app design. My mind--}}
    {{-- is blown. Vestibulum ante ipsum primis in faucibus--}}
    {{-- orci luctus et ultrices pos--}}
    {{-- uere cubilia curae fusce consequat ligula in dui--}}
    {{-- congue interdum."</p>--}}
    {{-- <p><b>Paulo Dichone</b><br>--}}
    {{-- Developer (Android Speciality)</p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="item">--}}
    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6">--}}
    {{-- <img src="{{asset('assets/images/learn.jpg')}}" class="d-block
    w-100"--}}
    {{-- alt="...">--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6">--}}
    {{-- <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Geeks--}}
    {{-- has created an incredibly seamless experience for--}}
    {{-- app design. My mind--}}
    {{-- is blown. Vestibulum ante ipsum primis in faucibus--}}
    {{-- orci luctus et ultrices pos--}}
    {{-- uere cubilia curae fusce consequat ligula in dui--}}
    {{-- congue interdum."</p>--}}
    {{-- <p><b>Paulo Dichone</b><br>--}}
    {{-- Developer (Android Speciality)</p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- </div>--}}
    {{-- </div>--}}

    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}

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
                    <div class="card border border-primary mb-3 package_3" x-data>
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
                                <span class="h3 mb-0 fw-bold">&#8358;</span>
                                <div class="price-card--price-number toggle-price-content" data-price-monthly="0"
                                     data-price-yearly="0">
                                    <span class="price-plan fw-bold fs-2 text-dark" x-ref="price_plan">15,000</span>
                                </div>

                            </div>
                            <div class="d-grid">
                                <button
                                    @click="setStorageAndRedirect($refs.price_plan.innerHTML,$el.getAttribute('href'))"
                                    href="{{ url('checkout/instructor_activation/3/'.Str::random(8)) }}" @disabled(session('info'))
                                    class="btn btn-primary plan-btn">Activate Now
                                </button>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="p-5">
                            <h4 class="fw-bold mb-4">Everything in Starter, plus:</h4>
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Become an Instructor </span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Paid Training Package</span>
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
                    <div class="card border border-primary mb-3 mb-lg-0 package_4" x-data>
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
                                <sup class="h3 mb-0 fw-bold">&#8358;</sup>
                                <div class="price-card--price-number toggle-price-content" data-price-monthly="39"
                                     data-price-yearly="99"><span class="price-plan fw-bold fs-2 text-dark"
                                                                  x-ref="price_plan">40,000</span>
                                </div>
                            </div>
                            <div class="d-grid">

                                <button
                                    @click="setStorageAndRedirect($refs.price_plan.innerHTML,$el.getAttribute('href'))"
                                    href="{{ url('checkout/instructor_activation/4/'.Str::random(8)) }}" @disabled(session('info'))
                                    class="btn btn-primary plan-btn">Activate Now
                                </button>
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
                    <div class="card border border-primary mb-3 mb-lg-0 package_5" x-data>
                        <!-- Card Body -->
                        <div class="p-5 text-center">
                            <div class="mb-5">
                                <h2 class="fw-bold">PROFESSIONAL</h2>
                                <p class="mb-0 ">Access to store automation, customizable store and access to
                                    unlimited paid courses.
                                </p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h3 mb-0 fw-bold">&#8358;</span>
                                <div class="price-card--price-number toggle-price-content" data-price-monthly="99"
                                     data-price-yearly="199"><span class="price-plan fw-bold fs-2 text-dark"
                                                                   x-ref="price_plan">115,000</span>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button
                                    @click="setStorageAndRedirect($refs.price_plan.innerHTML,$el.getAttribute('href'))"
                                    href="{{ url('checkout/instructor_activation/5/'.Str::random(8)) }}" @disabled(session('info'))
                                    class="btn btn-primary plan-btn">Activate Now
                                </button>
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
            <div class="row justify-content-center align-items-center d-none hidden become-instructor-btn">
                <div class="col-10 text-center mb-3">
                    <button class="btn btn-primary">Become an Instructor Now</button>
                </div>
                <div class="text-center">
                <span class="text-muted">Since a package has been activated you can click the button above to become an
                    instructor</span>
                </div>
            </div>
            @if(session('info') && session('info')['instructor'] == 1)
                <div class="row justify-content-center align-items-center">
                    <div class="col-10 text-center mb-3">
                        <a href="{{route('instructor.dashboard')}}" class="btn btn-primary">Go to your dashboard</a>
                    </div>
                    <div class="text-center">
                        <span class="text-muted">You are already an instructor you can go to your dashboard</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Instructor -->
    <hr class="my-0">

    <!-- call to action -->
    <div class="bg-primary-a" style="background-color: #036 !important; padding-bottom: 60px; padding-top: 60px;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-12">
                    <h2 class="display-4 text-white">Join learners worldwide</h2>
                    <p class="lead text-white px-lg-12 mb-6">Effective learning starts with assessment. Learning a
                        new skill is hard work—Lentoria makes it easier.</p>
                    <div class="d-grid d-md-block">
                        <button @disabled(session('info'))
                                class="btn btn-outline-white text-white mb-2 mb-md-0 outline-btn get-started-btn"
                                data-bs-target="#signup_modal" data-bs-toggle="modal">Start Learning
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setStorageAndRedirect(price, url) {
            sessionStorage.setItem('current_price', price);
            setTimeout(() => {
                location.href = url;
            }, 100);
        }

        $(function () {
            $(".gsbtn").click(function (e) {
                e.preventDefault();
                bt = $(".gsbtn")
                $('html, body').animate({
                    scrollTop: $(`#payplan`).offset().top
                }, 'slow');
            })
            if (@js(session('info'))) {
                comparePlans(@js(session('info'))['data']['live_id'])
            }

            $(".become-instructor-btn").click(() => {
                become_instructor();
            })

            function become_instructor() {
                let button = $(".become-instructor-btn").find("button");
                $.ajax({
                    url: `${api_url}admin/become_instructor`,
                    beforeSend: () => {
                        btn(button, '', 'before');
                    }
                }).done(res => {
                    btn(button, 'Become an Instructor Now', 'after');
                    addToSession();
                }).fail(res => {
                    concatError(res.responseJSON);
                    btn(button, 'Become an Instructor Now', 'after');
                });
            } 

            function addToSession() {
                $.ajax({
                    url: '/addtosession',
                    method: "POST",
                }).done(res => {
                    salat("Congratulations you are now an instructor");
                    setTimeout(() => {
                        window.location.href = "/instructor/dashboard"
                    }, 500);
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                })
            }

            function comparePlans(live_id) {
                $.get(`${api_url}compare_plan/${live_id}`).done(res => {
                    $(".plan-btn").removeAttr('disabled')
                    const data = res.data;
                    console.log(data);
                    let pac_act = 0;
                    data.forEach((plan, index) => {
                        let card = $(`.package_${plan.package_sn}`);
                        if (plan.package_sn >= 3 && plan.has_package && @js(session('info'))['instructor'] == 0) {
                            $(".become-instructor-btn").removeClass("d-none");
                        }
                        if (card) {
                            if (plan.has_package) {
                                pac_act += parseInt(plan.price);
                                $(card).find('.d-grid > button').attr('disabled', true);
                                $(card).find('.d-grid > button').html('Activated');
                                $(card).find('.d-grid > button').css('cursor', 'not-allowed');
                            } else {
                                let str = $(card).find('.price-plan').html();


                                let variable = parseInt(str?.replace(/,/g, ""));
                                $(card).find('.price-plan').html(new Intl.NumberFormat().format(
                                    variable - pac_act));
                            }
                        }
                    })
                }).fail(res => {
                    console.log(res);
                });
            }
        });
    </script>

@endsection
