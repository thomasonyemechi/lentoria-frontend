@extends('layouts.instructor')
@section('page_title','Student')
@section('page_content')
    <!-- Page Content -->
    <div class="py-lg-8 py-0 bg-auto mb-0"
         style="background-size: cover; background: rgba(221, 218, 255, 0.3) url('../../assets/images/hero/hero-graphics.svg') linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%) no-repeat top center;">
        <div class="container">
            <!-- Hero Section -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="py-8 py-lg-0 text-center">
                        <h1 class="display-4 fw-bold mb-0 text-primary"><span class="text-dark px-3 px-md-0">Build Better</span>
                            <span class="headingTyped text-primary"></span>
                        </h1>
                        <p class="mb-4 h4 text-dark">
                            Build skills with courses Join Geeks to watch, play, learn, make, and discover, uscipit esi
                            viimentum laoreet non et odio.
                        </p>
                        <a href="#" class="btn btn-primary me-2">Classroom</a>
                        <a href="#" class="btn btn-outline-primary">View courses</a>
                        <div class="mt-8 mb-0">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- my learning -->


    <div class="row mx-lg-16 py-lg-8 mb-0">
        <div class="col-md-12">
            <h2 class="mb-1 display-5 ">Let's Starting Learning, Titilayomi</h2>
        </div>
        <div class="position-relative">
            <ul class="controls " id="sliderFirstControls">
                <li class="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="slido">
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img
                                    src="assets/images/course/course-react.jpg" alt=""
                                    class="rounded-top-md card-img-top"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html"
                                                                      class="text-inherit">How to
                                    easily create a website with React</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
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
                            <!-- Price -->
                            <div class="lh-1 mt-3">
                                <span class="text-dark fw-bold">$600</span>
                                <del class="fs-6 text-muted">$750</del>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="assets/images/avatar/avatar-1.jpg"
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
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img
                                    src="assets/images/course/course-graphql.jpg" alt=""
                                    class="rounded-top-md card-img-top"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html"
                                                                      class="text-inherit">GraphQL:
                                    introduction to graphQL for beginners</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                    </svg> Advance
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
                                    <img src="assets/images/avatar/avatar-2.jpg"
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
                        <a href="pages/course-single.html" class="card-img-top"><img
                                    src="assets/images/course/course-angular.jpg" alt=""
                                    class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html"
                                                                      class="text-inherit">Angular -
                                    the complete guide for beginner</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
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
                                <span class="fs-6 text-muted">(8,890)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="assets/images/avatar/avatar-3.jpg"
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
                        <a href="pages/course-single.html" class="card-img-top"><img
                                    src="assets/images/course/course-python.jpg" alt=""
                                    class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html"
                                                                      class="text-inherit">The
                                    Python
                                    Course: build web application</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                    </svg> Intermediate
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
                                    <img src="assets/images/avatar/avatar-4.jpg"
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
                        <a href="pages/course-single.html" class="card-img-top"><img
                                    src="assets/images/course/course-graphql.jpg" alt=""
                                    class="rounded-top-md card-img-top"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html"
                                                                      class="text-inherit">GraphQL:
                                    introduction to graphQL for beginners</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                    </svg> Advance
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
                                    <img src="assets/images/avatar/avatar-2.jpg"
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
                        <a href="pages/course-single.html" class="card-img-top"><img
                                    src="assets/images/course/course-angular.jpg" alt=""
                                    class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html"
                                                                      class="text-inherit">Angular -
                                    the complete guide for beginner</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
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
                                <span class="fs-6 text-muted">(8,890)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="assets/images/avatar/avatar-3.jpg"
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
                        <a href="pages/course-single.html" class="card-img-top"><img
                                    src="assets/images/course/course-python.jpg" alt=""
                                    class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html"
                                                                      class="text-inherit">The
                                    Python
                                    Course: build web application</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                    </svg> Intermediate
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
                                    <img src="assets/images/avatar/avatar-4.jpg"
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
            </div>
        </div>
    </div>

    <!-- container -->
    <div class="bg-white py-lg-8 py-8 mt-0">
        <div class="container">
            <div class="py-8 py-lg-0 bg-light-gradient-bottom mt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-1 display-5 fw-bold">Enroll in similar courses</h2>
                            <p class="mb-4 lead">Choose from 32,000 online video courses with new additions published
                                every month.</p>
                        </div>
                    </div>


{{--                    <div class="row">--}}

                        <div class="slido2">
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="#" class="card-img-top">
                                        <img src="{{asset('assets/images/course/course-javascript.jpg')}}" alt=""
                                             class="card-img-top rounded-top-md"></a>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">How
                                                to
                                                easily create a website with React</a></h3>
                                        <ul class="mb-3  list-inline">
                                            <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m</li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                    <rect x="11"
                                                          y="2"
                                                          width="2"
                                                          height="12"
                                                          rx="1"
                                                          fill="#DBD8E9">
                                                    </rect>
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
                                            <span class="fs-6 text-muted">(6,300)</span>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="{{asset('assets/images/avatar/avatar-6.jpg')}}"
                                                     class="rounded-circle avatar-xs"
                                                     alt="">
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
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card  mb-4 card-hover">
                                    <a href="#"
                                       class="card-img-top"><img src="{{asset('assets/images/course/course-graphql.jpg')}}"
                                                                 alt=""
                                                                 class="card-img-top rounded-top-md"></a>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">GraphQL:
                                                introduction to graphQL for beginners</a></h3>
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                    <rect x="11"
                                                          y="2"
                                                          width="2"
                                                          height="12"
                                                          rx="1"
                                                          fill="#754FFE">
                                                    </rect>
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
                                            <span class="fs-6 text-muted">(4,300)</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="{{asset('assets/images/avatar/avatar-7.jpg')}}"
                                                     class="rounded-circle avatar-xs"
                                                     alt="">
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
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card  mb-4 card-hover">
                                    <a href="#"
                                       class="card-img-top"><img src="{{asset('assets/images/course/course-angular.jpg')}}"
                                                                 alt=""
                                                                 class="card-img-top rounded-top-md"></a>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Angular
                                                -
                                                the
                                                complete guide for beginner</a></h3>
                                        <ul class="mb-3  list-inline">
                                            <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                    <rect x="11"
                                                          y="2"
                                                          width="2"
                                                          height="12"
                                                          rx="1"
                                                          fill="#DBD8E9">
                                                    </rect>
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
                                            <span class="fs-6 text-muted">(5,410)</span>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="{{asset('assets/images/avatar/avatar-8.jpg')}}"
                                                     class="rounded-circle avatar-xs"
                                                     alt="">
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
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <a href="#"
                                       class="card-img-top"><img src="{{asset('assets/images/course/course-python.jpg')}}"
                                                                 alt=""
                                                                 class="card-img-top rounded-top-md"></a>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">The
                                                Python
                                                Course: build web application</a></h3>
                                        <ul class="mb-3  list-inline">
                                            <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                    <rect x="11"
                                                          y="2"
                                                          width="2"
                                                          height="12"
                                                          rx="1"
                                                          fill="#DBD8E9"></rect>
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
                                            <span class="fs-6 text-muted">(9,300)</span>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="{{asset('assets/images/avatar/avatar-9.jpg')}}"
                                                     class="rounded-circle avatar-xs"
                                                     alt="">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>

{{--    </div>--}}

    <!-- container -->
    <div class="bg-white py-lg-0 py-8 mt-0">
        <div class="container">
            <div class="py-8 py-lg-0 bg-light-gradient-bottom mt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-lg">Browse Courses</span>
                            <h2 class="mb-1 display-5 fw-bold">Most Recent Courses Recommended for you</h2>
                            <p class="mb-8 lead">Choose from 32,000 online video courses with new additions published
                                every month.</p>
                        </div>
                    </div>


                    <div class="row slido3">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card  mb-4 card-hover">
                                <a href="#"
                                   class="card-img-top"><img src="{{asset('assets/images/course/course-react.jpg')}}"
                                                             alt=""
                                                             class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">How to
                                            easily
                                            create a website with React</a></h3>
                                    <ul class="mb-3  list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m</li>
                                        <li class="list-inline-item">
                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
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
                                        <span class="fs-6 text-muted">(6,300)</span>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="{{asset('assets/images/avatar/avatar-6.jpg')}}"
                                                 class="rounded-circle avatar-xs"
                                                 alt="">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card  mb-4 card-hover">
                                <a href="#" class="card-img-top"><img src="assets/images/course/course-graphql.jpg"
                                                                      alt=""
                                                                      class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">GraphQL:
                                            introduction to graphQL for beginners</a></h3>
                                    <ul class="mb-3 list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                        <li class="list-inline-item">
                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
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
                                        <span class="fs-6 text-muted">(4,300)</span>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-7.jpg"
                                                 class="rounded-circle avatar-xs"
                                                 alt="">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card  mb-4 card-hover">
                                <a href="#" class="card-img-top"><img src="assets/images/course/course-angular.jpg"
                                                                      alt=""
                                                                      class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Angular -
                                            the
                                            complete guide for beginner</a></h3>
                                    <ul class="mb-3  list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                        <li class="list-inline-item">
                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
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
                                        <span class="fs-6 text-muted">(5,410)</span>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-8.jpg"
                                                 class="rounded-circle avatar-xs"
                                                 alt="">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <a href="#" class="card-img-top"><img src="assets/images/course/course-python.jpg"
                                                                      alt=""
                                                                      class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">The
                                            Python
                                            Course: build web application</a></h3>
                                    <ul class="mb-3  list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                        <li class="list-inline-item">
                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
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
                                        <span class="fs-6 text-muted">(9,300)</span>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-9.jpg"
                                                 class="rounded-circle avatar-xs"
                                                 alt="">
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
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card  mb-4 card-hover">
                                <a href="#" class="card-img-top"><img src="assets/images/course/course-react.jpg"
                                                                      alt=""
                                                                      class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">How to
                                            easily
                                            create a website with React</a></h3>
                                    <ul class="mb-3  list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m</li>
                                        <li class="list-inline-item">
                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
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
                                        <span class="fs-6 text-muted">(6,300)</span>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-6.jpg"
                                                 class="rounded-circle avatar-xs"
                                                 alt="">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card  mb-4 card-hover">
                                <a href="#" class="card-img-top"><img src="assets/images/course/course-graphql.jpg"
                                                                      alt=""
                                                                      class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">GraphQL:
                                            introduction to graphQL for beginners</a></h3>
                                    <ul class="mb-3 list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                        <li class="list-inline-item">
                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
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
                                        <span class="fs-6 text-muted">(4,300)</span>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-7.jpg"
                                                 class="rounded-circle avatar-xs"
                                                 alt="">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <a href="#" class="card-img-top"><img src="assets/images/course/course-angular.jpg"
                                                                      alt=""
                                                                      class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Angular -
                                            the
                                            complete guide for beginner</a></h3>
                                    <ul class="mb-3  list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                        <li class="list-inline-item">
                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
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
                                        <span class="fs-6 text-muted">(5,410)</span>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-8.jpg"
                                                 class="rounded-circle avatar-xs"
                                                 alt="">
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
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <a href="#" class="card-img-top"><img src="assets/images/course/course-python.jpg"
                                                                      alt=""
                                                                      class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">The
                                            Python
                                            Course: build web application</a></h3>
                                    <ul class="mb-3  list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                        <li class="list-inline-item">
                                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
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
                                        <span class="fs-6 text-muted">(9,300)</span>
                                    </div>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-9.jpg"
                                                 class="rounded-circle avatar-xs"
                                                 alt="">
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
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(function() {
            tns({
                container: `.slido`,
                loop: false,
                startIndex: 0,
                items: 1,
                nav: false,
                autoplay: true,
                autoplayTimeout: 3500,
                swipeAngle: false,
                speed: 2000,
                autoplayButtonOutput: false,
                mouseDrag: false,
                lazyload: true,
                gutter: 12,
                controlsContainer: `#sliderFirstControls`,
                responsive: {
                    768: {
                        items: 2,
                        edgePadding: 0,
                    },
                    990: {
                        items: 4,
                        edgePadding: 0,
                    }
                }
            });
            tns({
                container: `.slido2`,
                loop: false,
                startIndex: 0,
                items: 1,
                nav: false,
                autoplay: true,
                autoplayTimeout: 3500,
                swipeAngle: false,
                speed: 2000,
                autoplayButtonOutput: false,
                mouseDrag: false,
                lazyload: true,
                gutter: 12,
                // controlsContainer: `#slido_controls`,
                responsive: {
                    768: {
                        items: 2,
                        edgePadding: 0,
                    },
                    990: {
                        items: 4,
                        edgePadding: 0,
                    }
                }
            });

        })

    </script>

@endsection
