@extends('layouts.instructor')
@section('page_title')
    Course | {{ $slug }}
@endsection

@section('page_content')
    <!-- Page header -->
    <div class="pt-lg-8 pb-lg-16 pt-8 pb-12 bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div>
                        <h3 class="text-white display-4 fw-semi-bold" id="c-title">Course Title</h3>
                        <p class="text-white mb-6 lead" id="c-subtitle">

                            Course Subtitle
                        </p>
                        <input type="hidden" id="cid">
                        <div class="d-flex align-items-center">
                            <a href="#" class="bookmark text-white text-decoration-none">
                                <i class="fe fe-bookmark text-white-50 me-2"></i>Bookmark
                            </a>

                            <span class="text-white ms-3"><i class="fe fe-user text-white-50"></i> 1200 Enrolled </span>
                            <span class="ms-4">
                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                <i class="mdi mdi-star me-n1-half text-warning"></i>
                                <span class="text-white">(140)</span>
                            </span>
                            <span class="text-white ms-4 d-none d-md-block">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" id="cbar"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1"
                                        fill="#FFD700">
                                    </rect>
                                    <rect x="7" y="5" width="2" height="9" rx="1"
                                        fill="#FFD700">
                                    </rect>
                                    <rect x="11" y="2" width="2" height="12" rx="1"
                                        fill="#DBD8E9">
                                    </rect>
                                </svg>
                                <span class="align-middle" id="c-level">
                                    Intermediate
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                    <!-- Card -->
                    <div class="card rounded-3">
                        <!-- Card header -->
                        <div class="card-header border-bottom-0 p-0">
                            <div>
                                <!-- Nav -->
                                <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#overview"
                                            role="tab" aria-controls="table" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="table-tab" data-bs-toggle="pill" href="#curriculum"
                                            role="tab" aria-controls="table" aria-selected="true">Curriculum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="review-tab" data-bs-toggle="pill" href="#review"
                                            role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="faq-tab" data-bs-toggle="pill" href="#faq"
                                            role="tab" aria-controls="faq" aria-selected="false">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active overlay" id="overview" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <h3 class="mb-3 he d-none">What you’ll learn</h3>
                                    <div class="row mb-3">
                                        <ul class="list-unstyled" id="wywl_list">
                                            <div class="row">
                                            </div>
                                        </ul>
                                    </div>
                                    <h3 class="mb-3 he d-none">Requirements</h3>
                                    <div class="row mb-3">
                                        <ul class="list-unstyled" id="req_list">
                                            <div class="row">
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center opacity-50"
                                        id="loader">
                                        <div class="spinner-border text-primary" style="width: 5rem; height: 5rem;"
                                            role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <h3 class="mb-3 he d-none">Who is This Course For:</h3>
                                    <div class="row mb-3">
                                        <ul class="list-unstyled" id="learn_list">
                                            <div class="row">
                                            </div>
                                        </ul>
                                    </div>
                                    <h3 class="mb-3 he d-none">Opportunities</h3>
                                    <div class="row mb-3">
                                        <ul class="list-unstyled" id="purpose_list">
                                            <div class="row">
                                            </div>
                                        </ul>
                                    </div>
                                    <!-- Description -->
                                    <div class="mb-4" id="cde">
                                        <h3 class="mb-2 he d-none">Course Description</h3>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="table-tab">
                                    <!-- Card -->
                                    <div class="accordion" id="courseAccordion">
                                        <div>
                                            <!-- List group -->
                                            <ul class="list-group list-group-flush" id="curri">
                                                <div class="d-flex justify-content-center align-items-center opacity-50 my-10"
                                                    id="loader2">
                                                    <div class="spinner-border text-primary"
                                                        style="width: 5rem; height: 5rem;" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <!-- Reviews -->
                                    <div class="mb-3">
                                        <h3 class="mb-4">How students rated this courses</h3>
                                        <div class="row align-items-center">
                                            <div class="col-auto text-center">
                                                <h3 class="display-2 fw-bold">4.5</h3>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1-half text-warning"></i>
                                                <p class="mb-0 fs-6">(Based on 27 reviews)</p>
                                            </div>
                                            <!-- Progress bar -->
                                            <div class="col pt-3 order-3 order-md-2">
                                                <div class="progress mb-3" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress mb-3" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 80%;" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress mb-3" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress mb-3" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress mb-0" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-auto col-6 order-2 order-md-3">
                                                <!-- Rating -->
                                                <div>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <span class="ms-1">53%</span>
                                                </div>
                                                <div>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <span class="ms-1">36%</span>
                                                </div>
                                                <div>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <span class="ms-1">9%</span>
                                                </div>
                                                <div>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <span class="ms-1">3%</span>
                                                </div>
                                                <div>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <i class="mdi mdi-star me-n1 text-light"></i>
                                                    <span class="ms-1">2%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- hr -->
                                    <hr class="my-5" />
                                    <div class="mb-3">
                                        <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                            <!-- Reviews -->
                                            <div class="mb-3 mb-lg-0">
                                                <h3 class="mb-0">Reviews</h3>
                                            </div>
                                            <div>
                                                <!-- Form -->
                                                <form class="form-inline">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="position-absolute ps-3">
                                                            <i class="fe fe-search"></i>
                                                        </span>
                                                        <input type="search" class="form-control ps-6"
                                                            placeholder="Search Review" />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Rating -->
                                        <div class="d-flex border-bottom pb-4 mb-4">
                                            <img src="{{ asset('assets/images/avatar/avatar-2.jpg') }}" alt=""
                                                class="rounded-circle avatar-lg" />
                                            <div class=" ms-3">
                                                <h4 class="mb-1">
                                                    Max Hawkins
                                                    <span class="ms-1 fs-6 text-muted">2 Days ago</span>
                                                </h4>
                                                <div class="fs-6 mb-2">
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                                </div>
                                                <p>Lectures were at a really good pace and I never felt lost. The instructor
                                                    was well informed and allowed me to learn and navigate Figma easily.</p>
                                                <div class="d-lg-flex">
                                                    <a href="javascript:void(0)" class="ms-0"><i
                                                            class="mdi mdi-thumb-up" id="review"></i></a>
                                                    <a href="javascript:void(0)" class="ms-1"><i
                                                            class="mdi mdi-thumb-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab pane -->
                                <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                    <!-- FAQ -->
                                    <div>
                                        <h3 class="mb-3">Course - Frequently Asked Questions</h3>
                                        <div class="mb-4">
                                            <h4>How this course help me to design layout?</h4>
                                            <p>
                                                My name is Jason Woo and I work as human duct tape at Gatsby, that means
                                                that I do a lot of different things. Everything from dev roll to writing
                                                content to writing code. And I used to work as an architect at IBM. I live
                                                in Portland, Oregon.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mt-lg-n22">
                    <!-- Card -->
                    <div class="card mb-3 mb-4">
                        <div class="p-1">
                            <div class="d-flex justify-content-center position-relative rounded py-10 border-white border rounded-3 bg-cover"
                                style="background-image: url(/assets/images/course/course-javascript.jpg);">
                                <a class="popup-youtube icon-shape rounded-circle btn-play icon-xl text-decoration-none"
                                    href="https://www.youtube.com/watch?v=JRzWRZahOVU">
                                    <i class="fe fe-play"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Price single page -->
                            <div class="mb-3">
                                <span class="text-dark fw-bold h2" id="c-price"></span>
                                {{-- <del class="fs-4 text-muted">$750</del> --}}
                            </div>
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary mb-2  ">Start Free Month</a>
                                <a href="pricing.html" class="btn btn-outline-primary">Get Full Access</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card mb-4">
                        <div>
                            <!-- Card header -->
                            <div class="card-header">
                                <h4 class="mb-0">What’s included</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent"><i
                                        class="fe fe-play-circle align-middle me-2 text-primary"></i>No of Videos</li>
                                <li class="list-group-item bg-transparent"><i
                                        class="fe fe-award me-2 align-middle text-success"></i>Certificate</li>
                                <li class="list-group-item bg-transparent"><i
                                        class="fe fe-calendar align-middle me-2 text-info"></i>No of Articles
                                </li>
                                <li class="list-group-item bg-transparent border-bottom-0"><i
                                        class="fe fe-clock align-middle me-2 text-warning"></i>Lifetime access</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="position-relative">
                                    <img src="/assets/images/avatar/avatar-1.jpg" alt=""
                                        class="rounded-circle avatar-xl" />
                                    <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip"
                                        data-placement="top" title="Verifed">
                                        <img src="/assets/images/svg/checked-mark.svg" alt="" height="30"
                                            width="30" />
                                    </a>
                                </div>
                                <div class="ms-4">
                                    <h4 class="mb-0" id="ins-name">Instructor Name</h4>
                                    <p class="mb-1 fs-6" id="ins-exps">Expertise</p>
                                    <span class="fs-6"><span class="text-warning">4.5</span><span
                                            class="mdi mdi-star text-warning me-2"></span>Instructor Rating</span>
                                </div>
                            </div>
                            <div class="border-top row mt-3 border-bottom mb-3 g-0">
                                <div class="col">
                                    <div class="pe-1 ps-2 py-3">
                                        <h5 class="mb-0">11,604</h5>
                                        <span>Students</span>
                                    </div>
                                </div>
                                <div class="col border-start">
                                    <div class="pe-1 ps-3 py-3">
                                        <h5 class="mb-0">32</h5>
                                        <span>Courses</span>
                                    </div>
                                </div>
                                <div class="col border-start">
                                    <div class="pe-1 ps-3 py-3">
                                        <h5 class="mb-0">12,230</h5>
                                        <span>Reviews</span>
                                    </div>
                                </div>
                            </div>
                            <p id="ins-bio">I am an Innovation designer focussing on UX/UI based in Berlin. As a creative
                                resident at
                                Figma explored the city of the future and how new technologies.</p>
                            <a href="javascript:void(0)" id="ins-link" class="btn btn-outline-white btn-sm">View
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="pt-12 pb-3">
                <div class="row d-md-flex align-items-center mb-4">
                    <div class="col-12">
                        <h2 class="mb-0">Related Courses</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Card -->
                        <div class="card mb-4 card-hover">
                            <a href="course-single.html" class="card-img-top"><img
                                    src="{{ asset('assets/images/course/course-react.jpg') }}" alt=""
                                    class="card-img-top rounded-top-md" /></a>
                            <!-- Card body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html"
                                        class="text-inherit">How to
                                        easily create a website with React</a></h4>
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m</li>
                                    <li class="list-inline-item">
                                        <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6"
                                                rx="1" fill="#754FFE" />
                                            <rect x="7" y="5" width="2" height="9"
                                                rx="1" fill="#DBD8E9" />
                                            <rect x="11" y="2" width="2" height="12"
                                                rx="1" fill="#DBD8E9" />
                                        </svg> Beginner
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
                            <!-- Card footer -->
                            <div class="card-footer">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto">
                                        <img src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs"
                                            alt="" />
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

    <!-- Modal -->
    <div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="ratingModallLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="d-flex justify-content-end me-3 mt-4 old-close">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="d-flex justify-content-between me-3 mt-4 d-none new-close">
                    <span class="text-primary fs-4 fw-semi-bold ms-3 bk-btn" style="cursor: pointer;">Back</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="post">
                        <div class="d-flex justify-content-center">
                            <h2>How would you rate this course?</h2>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h5>Select Rating</h5>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <div class="ratings"></div>
                        </div>
                        <br>
                        <div class="hidden_txt d-none">
                            <textarea name="" id="" cols="57"
                                placeholder="Tell us about your own personal experience taking this course. Was it a good match for you?"
                                rows="5" style="resize: none;"></textarea>
                            <div class="d-flex float-end mt-3">
                                <button class="btn btn-primary" style="border-radius: 1px;">Save and Continue</button>
                            </div>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            fetchCourseInfo();

            getSections(@js($id));

            // var myRating = raterJs({
            //     element: document.querySelector(".rating"),
            //     starSize: 16,
            //     step: 0.5,
            //     readOnly: true,

            //     rateCallback:function(rating,done){
            //         done();
            //     }
            // });

            // var myRating = raterJs({
            //     element: document.querySelector(".ratings"),
            //     starSize: 40,
            //     step: 0.5,

            //     rateCallback: function rateCallback(rating, done) {
            //         $("#ratingModal").find($("div.hidden_txt")).removeClass("d-none");
            //         $("#ratingModal").find($("div.new-close")).removeClass("d-none");
            //         $("#ratingModal").find($("div.old-close")).addClass("d-none");
            //         this.setRating(rating);
            //         done();
            //     }
            // });
            $("#ratingModal").find($("span.bk-btn")).click(function(e) {
                e.preventDefault();
                $("#ratingModal").find($("div.hidden_txt")).addClass("d-none");
                $("#ratingModal").find($("div.new-close")).addClass("d-none");
                $("#ratingModal").find($("div.old-close")).removeClass("d-none");

            })


            $('.rating').click(() => {
                $('#ratingModal').modal('show');
            });

            function fetchCourseInfo() {
                $.ajax({
                    type: "get",
                    url: api_url + `course_info/{{ $id }}`,
                }).done(function(res) {
                    console.log(res);
                    // $('#cid').val(res.data.id);
                    $('#c-title').html(res.data.course_info.title);
                    $('#cde').append(res.data.course_info.description);
                    $('#c-subtitle').html(res.data.course_info.subtitle);
                    $('#cbar').html(levelBar(res.data.course_info.level));
                    $('#c-level').html(checkLevel(res.data.course_info.level));
                    $('#c-price').html(`&#8358 ${res.data.course_info.price}`);
                    $('#ins-name').html(
                        `${res.data.basic_info.firstname} ${res.data.basic_info.lastname}`);
                    $('#ins-exps').html(`${res.data.instructor.headline ?? ''}`);
                    $('#ins-bio').html(`${res.data.instructor.biography ?? ''}`);
                    $('#ins-link').attr('href',
                        `/instructor/${res.data.course_info.user_id}/profile`);

                    other_info = res.data.other_info
                    course_audience = parse(other_info.course_audience);
                    course_requirement = parse(other_info.course_requirement);
                    purpose = parse(other_info.purpose);
                    wywl = parse(other_info.what_you_will_learn);

                    $('#overview').find($("h3.he")).removeClass('d-none');
                    $('#overview').find($("#loader")).remove();

                    if (wywl) {
                        wywl.map(data => {
                            $('#wywl_list').find($("div.row")).append(`
                        <li class="d-flex mb-2 col-6">
                            <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                <span>${data}</span>
                        </li>
                        `);
                        });
                    }


                    if (course_requirement) {
                        course_requirement.map(data => {
                            $('#req_list').find($('div.row')).append(`
                        <li class="d-flex mb-2 col-6">
                            <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                <span>${data}</span>
                        </li>
                        `);
                        });
                    }


                    if (course_audience) {
                        course_audience.map(data => {
                            $('#learn_list').find($('div.row')).append(`
                        <li class="d-flex mb-2 col-6">
                            <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                <span>${data}</span>
                        </li>
                        `);
                        });
                    }


                    if (purpose) {
                        purpose.map(data => {
                            $('#purpose_list').find($('div.row')).append(`
                        <li class="d-flex mb-2 col-6">
                            <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                <span>${data}</span>
                        </li>
                        `);
                        });
                    }

                }).fail(function(res) {
                    location.href = '/';
                });
            }


            function getLectures(sec_id) {
                course = $(document).find($(`div#course${sec_id}`))
                $.ajax({
                    url: api_url + `fetch_lectures/${sec_id}`,
                    beforeSend: () => {
                        course.find($("div.lec-content")).html(`
                        <div class="d-flex justify-content-center align-items-center opacity-50 lec-loader">
                            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        `)
                    }
                }).done(res => {
                    console.log(res);
                    course = $(document).find($(`div#course${sec_id}`))
                    $(document).find($("div.lec-loader")).remove();
                    if (res.data.length === 0) {
                        course.find($("div.lec-content")).append(`
                            <div class="text-truncate">
                                    <span>No Lectures Available Yet</span>
                                </div>
                            `)
                    }
                    res.data.map(lec => {
                        course.find($("div.lec-content")).append(`
                        <a href="course-resume.html" class="mb-2 d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate lec-tit">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i class="mdi mdi-play fs-4"></i></span>
                                <span>${lec.title}</span>
                            </div>
                            {{-- <div class="text-truncate">
                                    <span>1m 7s</span>
                                </div> --}}
                        </a>
                        `)
                    })

                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                })
            }

            function getSections(id) {
                $.ajax({
                    url: api_url + `get_sections/${id}`,
                }).done(res => {
                    console.log(res);
                    $('#courseAccordion').find($('div#loader2')).remove();
                    res.data.map(sec => {
                        $('#courseAccordion').find($('ul#curri')).append(`
                        <li class="list-group-item px-0 pt-0">
                            <a class=" h4 mb-0 d-flex align-items-center text-inherit text-decoration-none" data-bs-toggle="collapse" href="#course${sec.id}" aria-expanded="false" aria-controls="course${sec.id}">
                                <div class="me-auto">
                                    ${sec.title}
                                </div>
                                    <span class="chevron-arrow ms-4">
                                        <i class="fe fe-chevron-down fs-4"></i>
                                    </span>
                            </a>
                                <div class="collapse" id="course${sec.id}"
                                    data-bs-parent="#courseAccordion">
                                        <div class="pt-3 pb-2 lec-content">
                                        </div>
                                </div>
                        </li>
                        `)
                        getLectures(sec.id)
                    })

                }).fail(res => {
                    concatError(res.responseJSON);
                })
            }



        })
    </script>
@endsection
