@extends('layouts.instructor')
@section('page_title',"Course || $slug")

@section('page_content')
    <style>
        .loading-placeholder {
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 20px;
            overflow: hidden; /* hide any content that overflows outside the parent element */
            position: relative;
        }

        .shimmer {
            background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0) 100%);
            height: 20px;
            margin-bottom: 10px;
            animation-duration: 1s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-name: placeholder-animation;
        }

        @keyframes placeholder-animation {
            0% {
                background-position: -200px 0;
            }
            100% {
                background-position: 200px 0;
            }
        }
    </style>
    <!-- Page header -->
    <div class="pt-lg-8 pb-lg-16 pt-8 pb-12 bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-12" hidden id="course_details">
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
                                   Course Level
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 loader">
                    <div>
                        <div class="loading-placeholder">
                            <div class="shimmer"></div>
                            <div class="shimmer"></div>
                            <div class="shimmer"></div>
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
                                        <a class="nav-link active" id="description-tab" data-bs-toggle="pill"
                                           href="#overview" role="tab" aria-controls="overview"
                                           aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="opportunities-tab" data-bs-toggle="pill"
                                           href="#opportunities" role="tab" aria-controls="opportunities"
                                           aria-selected="false">Opportunities</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="curriculum-tab" data-bs-toggle="pill" href="#curriculum"
                                           role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
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
                                    <h3 class="mb-3 he d-none">Purpose of Taking this Course</h3>
                                    <div class="row mb-3">
                                        <ul class="list-unstyled" id="purpose_list">
                                            <div class="row">
                                            </div>
                                        </ul>
                                    </div>
                                    <h3 class="mb-3 he d-none">Who is This Course For:</h3>
                                    <div class="row mb-3">
                                        <ul class="list-unstyled" id="learn_list">
                                            <div class="row">
                                            </div>
                                        </ul>
                                    </div>
                                    <!-- Description -->
                                    <div class="mb-4" id="cde">
                                        <h3 class="mb-2 he d-none">Course Description</h3>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="opportunities" role="tabpanel"
                                     aria-labelledby="opportunities-tab">
                                    <div id="job_div">
                                        <h3 class="mb-3">Job Opportunities</h3>
                                        <div class="d-flex justify-content-center align-items-start opacity-50 my-10"
                                             id="loader5">
                                            <div class="spinner-border text-primary" style="width: 4rem; height: 4rem;"
                                                 role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel"
                                     aria-labelledby="curriculum-tab">
                                    <!-- Card -->
                                    <div class="accordion" id="courseAccordion">
                                        <div>
                                            <!-- List group -->
                                            <ul class="list-group list-group-flush" id="curri">
                                                <div
                                                    class="d-flex justify-content-center align-items-center opacity-50 my-10"
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
                                    <hr class="my-5"/>
                                    <div class="mb-3">
                                        <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                            <!-- Reviews -->
                                            <div class="mb-3 mb-lg-0">
                                                <h3 class="mb-0">Reviews</h3>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                        <!-- Rating -->
                                        <div class="d-flex border-bottom pb-4 mb-4">
                                            <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt=""
                                                 class="rounded-circle avatar-lg"/>
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
                                                <p>Lectures were at a perfect pace and I never felt lost. The
                                                    instructor
                                                    was well-informed and allowed me to learn and navigate Figma
                                                    easily.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab pane -->
                                <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                    <!-- FAQ -->
                                    <div id="faq_div">
                                        <h3 class="mb-3">Course - Frequently Asked Questions</h3>
                                        <div class="d-flex justify-content-center align-items-start opacity-50 my-10"
                                             id="loader3">
                                            <div class="spinner-border text-primary" style="width: 4rem; height: 4rem;"
                                                 role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
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
                            <div
                                class="d-flex justify-content-center position-relative rounded py-10 border-white border rounded-3 bg-cover info-div">
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
                                <span class="text-dark fw-bold h2" id="c-price">
                                    <p
                                        class="text-sm fw-light animate__animated animate__flash animate__slow animate__infinite">
                                        loading...</p>
                                </span>
                                <del class="fs-4 text-muted" id="slash"></del>
                            </div>
                            <div class="d-grid">
                                <a href="javascript:void(0)" class="btn btn-outline-primary mb-2" id="pay">
                                    <div
                                        class="spinner-border spinner-border-sm text-primary text-center text-sm mb-2 mt-2"
                                        role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </a>
                                {{-- <a href="pricing.html" class="btn btn-outline-primary">Get Full Access</a> --}}
                                <input type="hidden" id="pri"/>
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
                                        class="fe fe-play-circle align-middle me-2 text-primary"></i>No of Videos
                                </li>
                                <li class="list-group-item bg-transparent"><i
                                        class="fe fe-award me-2 align-middle text-success"></i>Certificate
                                </li>
                                <li class="list-group-item bg-transparent"><i
                                        class="mdi mdi-presentation align-middle me-2 text-info"></i>Mentorship
                                </li>
                                <li class="list-group-item bg-transparent border-bottom-0"><i
                                        class="fe fe-clock align-middle me-2 text-warning"></i>Lifetime access
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="position-relative">
                                    <img id="ins_image" src="/assets/images/avatar/avatar-1.jpg" alt=""
                                         class="rounded-circle avatar-xl"/>
                                    <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip"
                                       data-placement="top" title="Verifed">
                                        <img src="/assets/images/svg/checked-mark.svg" alt="" height="30"
                                             width="30"/>
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
                            <p id="ins-bio text-capitalize">I am an Innovation designer focussing on UX/UI based in
                                Berlin. As a
                                creative
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
                <div class="row" id="related_course_div">

                    <div class="d-flex justify-content-center align-items-center">
                        <div class="spinner-border text-primary" style="width: 2rem; height: 2rem;"
                             role="status">
                            <span class="visually-hidden">Loading...</span>
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

    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script>
        $(function () {
            fetchCourseInfo();
            getSections(@js($id));
            getFaq(@js($id));
            getRelatedCourses(@js($id));

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
            $(document).on('click', '.pay-btn', function (e) {
                console.log(e);
                if (!@js(session('info'))) {
                    $("#signup_modal").modal('show');
                    return;
                }
                bt = $(this);
                course_id = @js($id);
                $.ajax({
                    url: api_url + `admin/wallet_purchase`,
                    method: 'POST',
                    data: {
                        course_id: course_id,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    },
                }).done(res => {
                    salat(res.message);
                    $("#pay").html("Go to Classroom");
                }).fail(res => {
                    console.log(res);
                    btn(bt, 'Go to Classroom', 'after');
                    concatError(res.responseJSON);
                })
            })

            // $(document).on('click', "#pay", function (evt) {
            //     evt.preventDefault();
            //
            //     const href = $(this).attr('href');
            //     if(href !== 'javascript:void(0)'){
            //        let currentPrice = $('#c-price').html();
            //         console.log(currentPrice);
            //         console.log(currentPrice);
            //     }
            // });

            function hasCourse(cid, price, slug) {
                if (@js(session('info'))) {
                    info = @js(session('info'));
                    user_id = info.data.id;
                    $.ajax({
                        url: api_url + "has_course",
                        method: "POST",
                        data: {
                            user_id: user_id,
                            course_id: cid,
                        },
                        beforeSend: () => {
                            $("#pay").attr("disabled", true);
                        }
                    }).done(res => {
                        console.log(res);
                        $("#pay").attr("disabled", false);
                        if (res.status == false) {
                            $("#pay").attr("href", "javascript:void(0)");
                            $("#pay").html("Go to Classroom");
                        } else if (res.status == true) {
                            if (price == 0) {
                                $("#pay").attr("href", "javascript:void(0)");
                                $("#pay").addClass('pay-btn');
                                $("#pay").html("Enroll Now")
                            } else {
                                $("#pay").attr("href", `/checkout/course/${slug}`);
                                $("#pay").html("Buy Now")
                            }
                        }
                    }).fail(res => {
                        console.log(res);
                        $("#pay").attr("disabled", false);
                    })
                } else {
                    if (price == 0) {
                        $("#pay").attr("href", "javascript:void(0)");
                        $("#pay").html("Buy Now")
                        $("#pay").addClass('pay-btn');
                    } else {
                        $("#pay").attr("href", `/checkout/course/${slug}`);
                        $("#pay").html("Buy Now")
                    }
                }
            }

            $("#ratingModal").find($("span.bk-btn")).click(function (e) {
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
                }).done(function (res) {
                    console.log(res);

                    $(".loader").remove();
                    $("#course_details").attr('hidden', false);
                    // $('#cid').val(res.data.id);
                    $('#c-title').html(res.data.course_info.title);
                    $('#cde').append(res.data.course_info.description);
                    $('#c-subtitle').html(res.data.course_info.subtitle);
                    $('#cbar').html(levelBar(res.data.course_info.level));
                    $('#c-level').html(checkLevel(res.data.course_info.level));
                    if (res.data.course_info.price == 0) {
                        $('#c-price').html('Free');
                        $("#slash").html('');
                    } else {
                        $('#c-price').html(`${naira(percentage(res.data.course_info.price, 50))}`);
                        $("#slash").html(`${naira(res.data.course_info.price)}`);
                    }

                    $("#pri").val(res.data.course_info.price);
                    hasCourse(res.data.course_info.id, res.data.course_info.price, @js($slug));

                    $(".info-div").css("background-image",
                        `url(${imageUrl(res.data.course_info.image)}),url(/assets/images/course/course-javascript.jpg)`
                    );
                    $(".info-div").find($("a")).attr("href", `${imageUrl(res.data.course_info.video)}`)
                    $('#ins-name').html(
                        `${res.data.basic_info.firstname} ${res.data.basic_info.lastname}`);
                    $('#ins-exps').html(`${res.data.instructor.headline ?? 'Instructor\'s Expertise'}`);
                    $('#ins-bio').html(`${res.data.instructor.biography ?? 'Instructor\'s Biography'}`);
                    $('#ins-link').attr('href',
                        `/instructor/${res.data.course_info.user_id}/profile`);

                    $('#ins_image').attr('src', imageUrl(res.data.instructor.image));
                    other_info = res.data.other_info
                    course_audience = parse(other_info.course_audience);
                    course_requirement = parse(other_info.course_requirement);
                    purpose = parse(other_info.purpose);
                    wywl = parse(other_info.what_you_will_learn);

                    $('#overview').find($("h3.he")).removeClass('d-none');
                    $('#overview').find($("#loader")).remove();
                    $("#loader5").remove();
                    $("#job_div").append(res.data.other_info.opportunities);

                    if (wywl) {
                        wywl.map(data => {
                            $('#wywl_list').find($("div.row")).append(`
                        <li class="d-flex mb-2 col-lg-6 col-md-6 col-sm-12">
                            <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                <span>${data}</span>
                        </li>
                        `);
                        });
                    }

                    if (course_requirement) {
                        course_requirement.map(data => {
                            $('#req_list').find($('div.row')).append(`
                        <li class="d-flex mb-2 col-lg-6 col-md-6 col-sm-12">
                            <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                <span>${data}</span>
                        </li>
                        `);
                        });
                    }

                    if (course_audience) {
                        course_audience.map(data => {
                            $('#learn_list').find($('div.row')).append(`
                        <li class="d-flex mb-2 col-lg-6 col-md-6 col-sm-12">
                            <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                <span>${data}</span>
                        </li>
                        `);
                        });
                    }

                    if (purpose) {
                        purpose.map(data => {
                            $('#purpose_list').find($('div.row')).append(`
                    <li class="d-flex mb-2 col-lg-6 col-md-6 col-sm-12">
                        <i class="far fa-check-circle text-success me-2 mt-2"></i>
                            <span>${data}</span>
                    </li>
                    `);
                        });
                    }


                }).fail(function (res) {
                    location.href = '/';
                });
            }

            function getSections(id) {
                $.ajax({
                    url: api_url + `get_sections/${id}`,
                }).done(res => {
                    $('#courseAccordion').find($('div#loader2')).remove();
                    res.data.map(sec => {
                        var lect = '';
                        if (sec.lectures.length == 0) {
                            lect += `<div class="text-truncate">
                                    <span>No Lectures Available Yet</span>
                                </div>`
                        } else {
                            sec.lectures.forEach(lec => {
                                lect += `
                            <a href="javascript:void(0)" class="mb-2 d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                                <div class="text-truncate lec-tit">
                                    <span class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i class="mdi mdi-play fs-4"></i></span>
                                    <span>${lec.title}</span>
                                </div>
                            {{-- <div class="text-truncate">
                                    <span>1m 7s</span>
                                </div> --}}
                                </a>`
                            });
                        }
                        $('#courseAccordion').find($('ul#curri')).append(`
                        <li class="list-group-item px-0 pt-0">
                            <a class=" h4 mb-0 d-flex align-items-center text-inherit text-decoration-none lecu" data-bs-toggle="collapse" href="#course${sec.id}" aria-expanded="false" aria-controls="course${sec.id}">
                                <div class="me-auto">
                                    ${sec.title}
                                </div>
                                    <span class="chevron-arrow ms-4">
                                        <i class="fe fe-chevron-down fs-4"></i>
                                    </span>
                            </a>
                                <div class="collapse sh" id="course${sec.id}"
                                    data-bs-parent="#courseAccordion">
                                        <div class="pt-3 pb-2 lec-content">
                                            ${lect}
                                        </div>
                                </div>
                        </li>
                        `)
                    })
                    first = document.querySelector(".lecu");
                    sh = document.querySelector(".sh")
                    $(first).addClass('active');
                    $(first).attr("aria-expanded", "true");
                    $(sh).addClass('show');
                }).fail(res => {
                    concatError(res.responseJSON);
                })
            }

            function getFaq(id) {
                $.ajax({
                    url: api_url + `fetch_faq/${id}`,
                }).done(res => {
                    $("#loader3").remove();
                    res.data.map(faq => {
                        $("#faq_div").append(`
                        <div class="mb-4">
                            <h4>${faq.question}</h4>
                                <p>
                                    ${faq.answer}
                                </p>
                        </div>
                        `)
                    })
                }).fail(res => {
                    console.log(res);
                    concatError(res);
                    $("#loader3").remove();
                })
            }

            function getRelatedCourses(id) {
                $.ajax({
                    method: 'GET',
                    url: `${api_url}related_courses/${id}`,
                }).done(res => {
                    console.log(res)
                    const relatedCourseDiv = $("#related_course_div");
                    relatedCourseDiv.empty();
                    if (res.data.length > 0) {
                        res.data.forEach(cor => {
                            relatedCourseDiv.append(`
                                <div class="col-lg-3 col-md-6 col-12 align-items-stretch d-flex">
                                    <div class="card card-hover mb-3">
                                        <a href="course/${cor.id}/${cor.slug}" class="card-img-top"><img
                                                src="${imageUrl(cor.image)}" onerror="this.src='../../assets/images/image.jpeg';" alt=""
                                                class="rounded-top-md card-img-top course_image"></a>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2"><a target="_blank" href="/course/${cor.id}/${cor.slug}"
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
                                                <span class="text-bold font-weight-bolder fs-3 text-black">
                                                   ${naira(percentage(cor.price, 50))}
                                                </span>
                                                <span class="text-bold text-decoration-line-through fs-4 text-black">${naira(cor.price)}</span>
                                            </div>
                                        </div>
                                        <!-- Card Footer -->
                                        <div class="card-footer">
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="${imageUrl(cor.instructor.image)}"
                                                        class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>${cor.instructor.firstname} ${cor.instructor.lastname}</span>
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
                            `)
                        })
                    } else {
                        relatedCourseDiv.html(` <div class="col-12 text-center">
                        <p class="text-gray-500 fs-4">No related courses</p>
                    </div>`);
                    }

                })
            }
        })
    </script>
@endsection
