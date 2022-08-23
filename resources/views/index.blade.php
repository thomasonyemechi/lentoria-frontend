@extends('layouts.instructor')
@section('page_title', 'Lentoria | Welcome')

@section('page_content')
    <div class="bg-primary-a" style="background-color: #036">
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
                        <button type="button" style="float:right" id="gsbtn"
                            class="btn btn-outline-white mb-2 mb-md-0 text-white">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-lg-3 pt-lg-3 pt-4 pb-6" style="margin-top: -20px">
        <!-- Top courses-->
        <div class="py-8 py-lg-16 bg-light-gradient-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-lg">Browse Categories</span>
                        <h2 class="mb-1 display-4 fw-bold">The world's top courses</h2>
                        <p class="mb-8 lead">Choose from 32,000 online video courses with new additions published every
                            month.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav tab -->
                        <ul class="nav nav-lb-tab mb-6" id="pills-tab" role="tablist">
                            <li class="nav-item ms-0" role="presentation">
                                <a class="nav-link active" id="pills-allcategory-tab" data-bs-toggle="pill"
                                    href="#pills-allcategory" role="tab" aria-controls="pills-allcategory"
                                    aria-selected="true">Top Courses</a>
                            </li>
                        </ul>
                        <!-- Tab content -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-allcategory" role="tabpanel"
                                aria-labelledby="pills-allcategory-tab">
                                <div class="d-flex justify-content-center opacity-50" id="loader">
                                    <div class="spinner-grow text-black-100" style="width: 5rem; height: 5rem;"
                                        role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="position-relative d-none">
                                    <ul class="controls " id="firstSliderControls">
                                        <li class="prev">
                                            <i class="fe fe-chevron-left"></i>
                                        </li>
                                        <li class="next">
                                            <i class="fe fe-chevron-right"></i>
                                        </li>
                                    </ul>

                                    <div class="firstSlider">

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

    <div class="pt-lg-4 pb-lg-3 pt-4 pb-6">
        <div class="container" id="cat_pills">
            <h2>Top Categories</h2>
        </div>
    </div>

    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="row bg-secondary">
            <div class="col-lg-6 m-0 p-0">
                <img src="assets/images/coding.jpg" width="100%">
            </div>
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Skillup with Speed</h1>
                <h2 class="lead text-white">It does not require a lifetime to become a professional and land the right
                    job.
                    Our master classes are designed to get you to master new skills with well planned practical sessions and
                    simplified class activities tailored towards completing certain class projects</h2>
                <a href="" class="btn btn-outline-white text-white mt-4">Learn more</a>
            </div>
        </div>

        <div class="row bg-primary">
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Learn with Comfort</h1>
                <h2 class="lead text-white">Lentoria makes it possible for you to learn from any where with maximum
                    comfort
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
    <div class="pb-lg-3 pt-lg-3 pt-8 pb-6 mt-3">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="col-lg-11 col-md-12">
                    <div class="row align-items-center">

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
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#signup_modal"
                                class="btn btn-primary-a"> Start Teaching Today</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="pb-lg-3 pt-lg-3 pt-8 pb-6 mt-3">
        <div class="container">
            <hr class="">
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
                                        <p class="text-dark font-italic fw-medium mb-0 five-line">"Interning at Lentoria
                                            offered
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
                                        <p class="text-dark font-italic fw-medium mb-0 five-line">"I have developed many
                                            skills
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
                                        <p class=" text-dark font-italic fw-medium mb-0 five-line">"During my industrial
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
                                                <h4 class="mb-0">OluwasolaTaiwo</h4>
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

    <script>
        $(function() {

            getMyCategories();
            getRandomCourses();
            getCategories();

            $("#gsbtn").click(function(e) {
                e.preventDefault();
                bt = $("#gsbtn")
                if (@js(session('info'))) {
                    $.ajax({
                        url: api_url + 'admin/become_instructor',
                        method: 'POST',
                        beforeSend: () => {
                            btn(bt, '', 'before');
                        }
                    }).done(res => {
                        salat(res.message);
                        btn(bt, 'Get Started', 'after')
                        window.location.href = '/instructor/add_course';
                    }).fail(res => {
                        console.log(res);
                        concatError(res.responseJSON);
                        btn(bt, 'Get Started', 'after')
                        // window.location.href = '/activate_account';
                    });
                } else {
                    $('#signup_modal').modal('show');
                }
            })


            function getMyCategories() {
                $.ajax({
                        type: "get",
                        url: api_url + "category",
                    }).done(res => {
                        res.data.map(cat => {
                            $('#pills-tab').append(`
                            <li class="nav-item" role="presentation">
                                <a class="nav-link getcourses" id="pills-${stripLower(cat.name)}-tab" data-bs-toggle="pill" href="#pills-${stripLower(cat.name)}" data-id="${cat.id}"
                                    role="tab" aria-controls="pills-${stripLower(cat.name)}" aria-selected="false">${cat.name}</a>
                            </li>`)
                        });
                        res.data.map(cat => {
                            $('#pills-tabContent').append(
                                `<div class="tab-pane fade" id="pills-${stripLower(cat.name)}" role="tabpanel" data-id="${cat.id}"
                                aria-labelledby="pills-${stripLower(cat.name)}-tab">
                                <div class="position-relative">

                                    <ul class="controls" id="slider_${cat.id}_Controls">
                                        <li class="prev d-block" id="slider_${cat.id}_prev">
                                            <i class="fe fe-chevron-left"></i>
                                        </li>
                                        <li class="next d-block" id="slider_${cat.id}_next">
                                            <i class="fe fe-chevron-right"></i>
                                        </li>
                                    </ul>

                                    <div class="no_${cat.id}_Slider" id="no_${cat.id}_Slider">
                                    </div>
                                </div>
                            </div>`)
                            getCoursesByCategory(cat.id);

                        })


                    })
                    .fail(res => {
                        console.log(res);
                    })
            }

            function getCoursesByCategory(id) {
                catid = id;
                $.ajax({
                    url: api_url + `courses/${catid}`
                }).done(res => {
                    res.data.data.map(cor => {
                        $(document).find(`#no_${cor.category_id}_Slider`).append(`
                        <div class="item">
                    <!-- Card -->
                    <div class="card card-hover mb-3" data-bs-toggle="popover"
                        data-bs-trigger="hover" data-bs-html="true"
                        data-bs-content="<h2>This is a popover</h2>">
                        <a href="course/${cor.id}/${cor.slug}" class="card-img-top"><img
                                src="../../assets/images/course/course-react.jpg" alt=""
                                class="rounded-top-md card-img-top"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="course/${cor.id}/${cor.slug}"
                                    class="text-inherit">${cor.title}</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        ${levelBar(cor.level)}
                                    </svg>
                                    ${checkLevel(cor.level)}
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
                                <span class="text-warning">0.0</span>
                                <span class="fs-6 text-muted">(0)</span>
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
                                    <span>${cor.user.firstname} ${cor.user.lastname}</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`)
                        if ($(`.no_${cor.category_id}_Slider`).length) {
                            tns({
                                container: `.no_${cor.category_id}_Slider`,
                                loop: false,
                                startIndex: 1,
                                items: 1,
                                edgePadding: 10,
                                nav: false,
                                autoplay: true,
                                autoplayTimeout: 3500,
                                swipeAngle: false,
                                speed: 2000,
                                autoplayButtonOutput: false,
                                mouseDrag: true,
                                lazyload: true,
                                gutter: 10,
                                // controlsContainer: `#slider_${cor.category_id}_Controls`,
                                // controls:true,
                                prevButton: `#slider_${cor.category_id}_prev`,
                                nextButton: `#slider_${cor.category_id}_next`,
                                responsive: {
                                    768: {
                                        items: 2
                                    },
                                    990: {
                                        items: 4
                                    }
                                }
                            })
                        }
                    })


                }).fail(res => {
                    console.log(res);
                })

            }



            function getRandomCourses() {
                $.ajax({
                    url: api_url + 'courses',
                }).done(res => {
                    $('#pills-allcategory').find('#loader').addClass('d-none');
                    $('#pills-allcategory').find('.position-relative').toggleClass('d-none');
                    $('.firstSlider').html('');
                    res.data.map(cor => {
                        $('.firstSlider').append(`
                        <div class="item">
                    <!-- Card -->
                    <div class="card card-hover mb-3" data-bs-toggle="popover"
                        data-bs-trigger="hover" data-bs-html="true"
                        data-bs-content="<h2>This is a popover</h2>">
                        <a href="course-single.html" class="card-img-top"><img
                                src="../../assets/images/course/course-react.jpg" alt=""
                                class="rounded-top-md card-img-top"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="course/${cor.id}/${cor.slug}"
                                    class="text-inherit">${cor.title}</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        ${levelBar(cor.level)}
                                    </svg>
                                    ${checkLevel(cor.level)}
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
                                <span class="text-warning">0.0</span>
                                <span class="fs-6 text-muted">(0)</span>
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
                                    <span>${cor.user.firstname} ${cor.user.lastname}</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`);
                    })

                    if ($('.firstSlider').length) {
                        tns({
                            container: ".firstSlider",
                            loop: !1,
                            startIndex: 1,
                            items: 1,
                            nav: !1,
                            autoplay: true,
                            swipeAngle: !1,
                            speed: 400,
                            autoplayButtonOutput: !1,
                            mouseDrag: !0,
                            lazyload: !0,
                            gutter: 20,
                            controlsContainer: "#firstSliderControls",
                            responsive: {
                                768: {
                                    items: 2,
                                },
                                990: {
                                    items: 4,
                                }
                            }
                        });
                    }

                }).fail(res => {
                    console.log(res);

                })


            }

            function getCategories() {
                $.ajax({
                    url: api_url + 'category',
                }).done(res => {
                    res.data.map(cat=>{
                        $("#cat_pills").append(`
                        <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill m-1">${cat.name}</a>
                        `);
                    })
                }).fail(res => {
                    concatError(res.responseJSON);
                })
            }
        });
    </script>
@endsection
