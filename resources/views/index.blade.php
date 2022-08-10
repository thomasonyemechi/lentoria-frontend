@extends('layouts.instructor')
@section('page_title')
@endsection

@section('page_content')
    <div class="bg-primary-a" style="background-color: #6610f2">
        <div class="container">
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
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span
                            class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                            <i class="fe fe-video"> </i>
                        </span>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semi-bold">Quality online courses</h4>
                            <p class="mb-0">Enjoy a variety of fresh topics</p>
                        </div>
                    </div>
                </div>
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
    <div class="container pb-6">
        <div class="row">
            <div class="col-12 bg-primary py-3" style="border-radius: 5px;">
                <div class="row">
                    <div class="col-md-9 p-3 text-white">
                        <big><b>Become an Instructor </b></big>
                        and transform your experience and knowledge into a thriving business
                    </div>
                    <div class="col-md-3 justify-content-center">
                        <a href="instructor-page.php" style="float:right"
                            class="btn btn-outline-white mb-2 mb-md-0 text-white">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-lg-3 pt-lg-3 pt-8 pb-6" style="margin-top: -20px">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="mb-2">Live Bootcamp <div style="float: right; font-size: 14px;"><a
                                href="courses.php?t=1">LOAD MORE <i class="fe fe-arrow-right me-1"></i></a></div>
                    </h2>
                </div>
            </div>
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
                        <div class="card  mb-1 card-hover">
                            <a href="course-details.php?s=705333-frontend-development" class="card-img-top"><img
                                    src="assets/images/course/course_cover_image16427759711862968.jpg" alt=""
                                    class="card-img-top rounded-top-md main-image object-cover"></a>
                            <div class="card-body pb-0">
                                <h4 class="mb-2 text-truncate-line-2 "><a
                                        href="course-details.php?s=705333-frontend-development"
                                        class="text-inherit">Frontend Development Training</a></h4>
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i> 12 Weeks
                                        <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1"
                                                fill="#036"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1"
                                                fill="#DBD8E9"></rect>
                                            <rect x="11" y="2" width="2" height="12"
                                                rx="1" fill="#DBD8E9"></rect>
                                        </svg>Beginners
                                    </li>
                                    <li class="list-inline-item">
                                        <big><b>₦ 100,000</b></big> <span class="p-2"
                                            style="text-decoration: line-through;">₦ 160,000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center g-0">

                                    <div class="col">
                                        <span>Adameji Victor</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:;" class="text-muted bookmark addToBookmark "
                                            data-user_id="0" data-course_id="2">
                                            <big><i class="fe fe-bookmark text-danger"></i></big>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card  mb-1 card-hover">
                            <a href="course-details.php?s=525761-fullstack-web-development-training"
                                class="card-img-top"><img src="assets/images/course/cover_image1642751158521444.jpg"
                                    alt="" class="card-img-top rounded-top-md main-image object-cover"></a>
                            <div class="card-body pb-0">
                                <h4 class="mb-2 text-truncate-line-2 "><a
                                        href="course-details.php?s=525761-fullstack-web-development-training"
                                        class="text-inherit">Fullstack Web-development Training</a></h4>
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i> 16 weeks
                                        <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6"
                                                rx="1" fill="#036"></rect>
                                            <rect x="7" y="5" width="2" height="9"
                                                rx="1" fill="#DBD8E9"></rect>
                                            <rect x="11" y="2" width="2" height="12"
                                                rx="1" fill="#DBD8E9"></rect>
                                        </svg>Beginners
                                    </li>
                                    <li class="list-inline-item">
                                        <big><b>₦ 160,000</b></big> <span class="p-2"
                                            style="text-decoration: line-through;">₦ 256,000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center g-0">

                                    <div class="col">
                                        <span>Adameji Victor</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:;" class="text-muted bookmark addToBookmark "
                                            data-user_id="0" data-course_id="1">
                                            <big><i class="fe fe-bookmark text-danger"></i></big>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card  mb-1 card-hover">
                            <a href="course-details.php?s=737984-backend-development" class="card-img-top"><img
                                    src="assets/images/course/course_cover_image16427815091874534.jpg" alt=""
                                    class="card-img-top rounded-top-md main-image object-cover"></a>
                            <div class="card-body pb-0">
                                <h4 class="mb-2 text-truncate-line-2 "><a
                                        href="course-details.php?s=737984-backend-development"
                                        class="text-inherit">Backend Development Training</a></h4>
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i> 12 Weeks
                                        <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6"
                                                rx="1" fill="#036"></rect>
                                            <rect x="7" y="5" width="2" height="9"
                                                rx="1" fill="#DBD8E9"></rect>
                                            <rect x="11" y="2" width="2" height="12"
                                                rx="1" fill="#DBD8E9"></rect>
                                        </svg>Beginners
                                    </li>
                                    <li class="list-inline-item">
                                        <big><b>₦ 120,000</b></big> <span class="p-2"
                                            style="text-decoration: line-through;">₦ 192,000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center g-0">

                                    <div class="col">
                                        <span>Adameji Victor</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:;" class="text-muted bookmark addToBookmark "
                                            data-user_id="0" data-course_id="3">
                                            <big><i class="fe fe-bookmark text-danger"></i></big>
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

    <div class="pt-lg-4 pb-lg-3 pt-4 pb-6">
        <div class="container">
            <h2>Popular Categories</h2>
            <a href="category-topics.php?s=833808-graphics-design" class="btn btn-outline-primary m-1">Graphics Design</a>
            <a href="category-topics.php?s=891823-user-experience-design" class="btn btn-outline-primary m-1">User
                Experience Design</a>
            <a href="category-topics.php?s=568499-logo-design" class="btn btn-outline-primary m-1">Logo Design</a>
            <a href="category-topics.php?s=496077-digital-marketing" class="btn btn-outline-primary m-1">Digital
                Marketing</a>
            <a href="category-topics.php?s=957020-web-development" class="btn btn-outline-primary m-1">Web Development</a>
            <a href="category-topics.php?s=792960-mobile-development" class="btn btn-outline-primary m-1">Mobile
                Development</a>
            <a href="category-topics.php?s=33097-database-design-and-development"
                class="btn btn-outline-primary m-1">Database Design and Development</a>
            <a href="category-topics.php?s=314771-content-marketing" class="btn btn-outline-primary m-1">Content
                Marketing</a>
            <a href="category-topics.php?s=127608-social-media-marketing" class="btn btn-outline-primary m-1">Social Media
                Marketing</a>
        </div>
    </div>


    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="row bg-secondary">
            <div class="col-lg-6 m-0 p-0">
                <img src="assets/images/coding.jpg" width="100%">
            </div>
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Skillup with Speed</h1>
                <h2 class="lead text-white">It does not require a lifetime to become a professional and land the right job.
                    Our master classes are designed to get you to master new skills with well planned practical sessions and
                    simplified class activities tailored towards completing certain class projects</h2>
                <a href="" class="btn btn-outline-white text-white mt-4">Learn more</a>
            </div>
        </div>

        <div class="row bg-primary">
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Learn with Comfort</h1>
                <h2 class="lead text-white">Lentoria makes it possible for you to learn from any where with maximum comfort
                    and at the pace that suits you. Our step-by-step approach make the entire process a lot easier than you
                    can imagine. Take a bold step today and kick-start your journey to expertise</h2>
                <a href="courses.php?all" class="btn btn-outline-white text-white mt-4">Explore courses</a>
            </div>
            <div class="col-lg-6 m-0 p-0">
                <img src="assets/images/learn.jpeg" width="100%">
            </div>
        </div>
    </div>
    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="container">
            <div class="row mb-10 justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <span class="text-primary-a mb-3 d-block text-uppercase fw-semi-bold ls-xl">Learn with LENTORIA</span>
                    <h2 class="mb-2 display-4 fw-bold ">Become an Expert in your Career</h2>
                    <p class="lead">Acquire new skills that improves your present and prepares you for the future</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="mb-4">
                        <div class="display-2 text-primary">
                            <i class="fe fe-settings fe-a"></i>
                        </div>
                        <div class="mt-4">
                            <h3>Expand your Expertise</h3>
                            <p class="fs-4">Learn skills to build technical expertise in your career</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="mb-4">
                        <div class="display-2 text-primary">
                            <i class="fe fe-user"></i>
                        </div>
                        <div class="mt-4">
                            <h3>Connect with Professionals</h3>
                            <p class="fs-4">Network with experts in your field for bigger career opportunities</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="mb-4">
                        <div class="display-2 text-primary">
                            <i class="fe fe-award"></i>
                        </div>
                        <div class="mt-4">
                            <h3>Earn a Certificate</h3>
                            <p class="fs-4">Become a well-certified professional to earn better jobs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="mb-4">
                        <div class="display-2 text-primary">
                            <i class="fe fe-users"></i>
                        </div>
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
    <div class="py-2 py-lg-8 bg-light-gradient-top ">
        <div class="container">
            <div class="row mb-8 justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <span class="text-primary-a mb-3 d-block text-uppercase fw-semi-bold ls-xl">World-class
                        Instructors</span>
                    <h2 class="mb-2 display-4 fw-bold">Classes Taught by Industry Expert</h2>
                    <p class="lead">Lentoria teachers are icons, experts, and industry rock stars excited to share their
                        experience, wisdom, and trusted tools with you</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="card mb-4 card-hover">
                        <div class="card-img-top">
                            <img src="assets/images/instructor/andrew.jpg" alt=""
                                class="rounded-top-md img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-0 fw-semi-bold"> <a href="#" class="text-inherit">Ehakfe Andrew</a></h3>
                            <p class="mb-3">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="card mb-4 card-hover">
                        <div class="card-img-top">
                            <img src="assets/images/instructor/olumide.jpg" alt=""
                                class="rounded-top-md img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-0 fw-semi-bold"><a href="#" class="text-inherit">Orija Olumide</a></h3>
                            <p class="mb-3">Back-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="card mb-4 card-hover">
                        <div class="card-img-top">
                            <img src="assets/images/instructor/sina.jpg" alt="" class="rounded-top-md img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-0 fw-semi-bold"><a href="#" class="text-inherit">Adebayo Adesina</a></h3>
                            <p class="mb-3">Back-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 d-lg-none d-xl-block">
                    <div class="card mb-4 card-hover">
                        <div class="card-img-top">
                            <img src="assets/images/instructor/victor.jpg" alt=""
                                class="rounded-top-md img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-0 fw-semi-bold"><a href="#" class="text-inherit">Victor</a></h3>
                            <p class="mb-3">Web Developer and Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-lg-3 pt-lg-3 pt-8 pb-6 mt-3">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="col-lg-11 col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12 mb-4">
                            <div class="avatar-group me-5">
                                <span class="avatar avatar-lg ">
                                    <img alt="avatar" src="assets/images/instructor/victor.jpg" class="rounded-circle">
                                </span>
                                <span class="avatar avatar-lg ">
                                    <img alt="avatar" src="assets/images/instructor/sina.jpg" class="rounded-circle">
                                </span>
                                <span class="avatar avatar-lg ">
                                    <img alt="avatar" src="assets/images/instructor/andrew.jpg" class="rounded-circle">
                                </span>
                                <span class="avatar avatar-lg ">
                                    <img alt="avatar" src="assets/images/instructor/olumide.jpg"
                                        class="rounded-circle">
                                </span>
                                <span class="avatar avatar-lg avatar-danger">
                                    <span class="avatar-initials rounded-circle fs-5 fw-bold">2000+</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-12 mb-6">
                            <h2 class="display-4 fw-bold">Become an Instructor</h2>
                        </div>
                        <div class="offset-lg-1 col-lg-6 col-md-7 col-12 mb-6">
                            <p class="lead">Join coaches and instructors from around the world who use Lentoria to share
                                their knowledge and wealth of experience to millions of students. We provide the tools to
                                make it easy.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <h3 class="fw-semi-bold mb-2">Generate Cashflow</h3>
                            <p class="fs-4">Earn money every time a student purchases your course and get paid directly
                                to your bank account
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <h3 class="fw-semi-bold mb-2">Empower students</h3>
                            <p class="fs-4">Share what you know and use your wealth of experience to help others become
                                professionals in their fields.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <h3 class="fw-semi-bold mb-2">Join our community</h3>
                            <p class="fs-4">Take advantage of our active community of instructors to help you through
                                your course creation process.
                            </p>
                        </div>
                        <div class="col-md-12 mt-3 justify-content-center">
                            <a href="instructor-page.php" class="btn btn-primary-a"> Start Teaching Today</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="pb-lg-3 pt-lg-3 pt-8 pb-6 mt-3">
        <div class="container">
            <hr class="my-10 my-lg-16">
            <div class="row mb-8 justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">Testimonials</span>
                    <h2 class="mb-2 display-4 fw-bold">Don't just take our word for it.</h2>
                </div>
            </div>
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="position-relative">
                        <ul class="controls-testimonial controls " id="sliderTestimonialControls">
                            <li class="">
                                <i class="fe fe-chevron-left"></i>
                            </li>
                            <li class="next ms-2">
                                <i class="fe fe-chevron-right"></i>
                            </li>
                        </ul>
                        <div class="sliderTestimonial">
                            <div class="item">
                                <div class="card border shadow-none">
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
                                        <p class="lead text-dark font-italic fw-medium mb-0">"Interning at Lentoria offered
                                            me the opportunity to develop as a professional and to help the organization
                                            develop in the tech industry. As an intern, your thoughts and your contributions
                                            will be valued every day as you work alongside the respectful staff. The mission
                                            of the organization is inspiring and useful for anyone interested in software
                                            development, digital marketing, and web design. This has been an excellent
                                            internship experience and I recommended the organization more highly"
                                        </p>
                                    </div>
                                    <div class="card-footer px-5 py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <h4 class="mb-0">Michael David</h4>
                                                <p class="mb-0 small">Web Developer,NGR</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border shadow-none">
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
                                        <p class="lead text-dark font-italic fw-medium mb-0">"I have developed many skills
                                            and have a much greater concept of what to expect after school. I was able to
                                            work with experts that guided me through any difficulty I encounter. It also
                                            allowed me to apply it to real life situations, Rather than feeling lost and
                                            nervous about graduating this year, I have a clear vision of where I see myself
                                            and what I want from my career. Interning through Lentoria has helped me get to
                                            this place. With my future, the sky truly is the limit."
                                        </p>
                                    </div>
                                    <div class="card-footer px-5 py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <h4 class="mb-0">Adegbite Adekola Collins</h4>
                                                <p class="mb-0 small">Web-Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border shadow-none">
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
                                        <p class="lead text-dark font-italic fw-medium mb-0">"During my industrial
                                            training,I was posted to wen development unit which is mainly for developing
                                            applications. I learnt how to create a standard website with the help of
                                            HTML,CSS, JavaScript and php. I also learnt how to install Database and linking
                                            PHP to the database.inlearnt how to update,Insert,select select record in the
                                            database. I also learnt how to import,Export database file from one local server
                                            to another."</p>
                                    </div>
                                    <div class="card-footer px-5 py-4">
                                        <div class="d-flex align-items-center">
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
    </div>

    <div class="bg-primary-a"
        style="background-color: #036 !important; background: url(assets/images/background/course-graphics.svg)no-repeat; background-size: cover; background-position: top center;  margin: left -100px right -100px; padding-bottom: 60px; padding-top: 60px;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-12">
                    <h2 class="display-4 text-white">Join learners worldwide</h2>
                    <p class="lead text-white px-lg-12 mb-6">Effective learning starts with assessment. Learning a new
                        skill is hard work—Lentoria makes it easier.</p>
                    <div class="d-grid d-md-block">
                        <button class="btn btn-success mb-2 mb-md-0" data-bs-target="#signup_modal"
                            data-bs-toggle="modal" a>Start Learning</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
