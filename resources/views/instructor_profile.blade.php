@extends('layouts.instructor')
@section('page_title')
    Instructor
@endsection

@section('page_content')
    <!-- Bg -->
    <div class="py-20"
        style="background: url(/assets/images/background/profile-bg.jpg) no-repeat;background-position: center;"></div>
    <!-- User info -->
    <div class="card p-lg-2 pt-2 pt-lg-0 rounded-0 border-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="d-flex align-items-center">
                        <div class="position-relative mt-n9">
                            <img src="/assets/images/avatar/avatar-1.jpg" alt=""
                                class="rounded-circle avatar-xxl border-white border border-4 position-relative">
                            <a href="#" class="position-absolute top-0 end-0 me-2" data-bs-toggle="tooltip"
                                data-placement="top" title="Verified">
                                <img src="/assets/images/svg/checked-mark.svg" alt="" height="30"
                                    width="30" />
                            </a>
                        </div>
                        <div class="ms-3">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0 fw-bold me-2" id="ins-name">Instructor Name</h3>
                                <span class="badge bg-light-primary text-primary">Instructor</span>
                            </div>
                            <span class="fs-6" id="ins-headline">Instructor Qualification</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="fs-4 mt-4 mt-lg-0 pb-2 pb-lg-0 d-lg-flex justify-content-end">
                        <a href="javascript:void(0)" class="mdi mdi-youtube text-muted me-2" id="ins-youtube"></a>
                        <a href="javascript:void(0)" class="mdi mdi-link-variant text-muted me-2" id="ins-website"></a>
                        <a href="javascript:void(0)" class="mdi mdi-linkedin text-muted me-2" id="ins-instagram"></a>
                        <a href="javascript:void(0)" class="mdi mdi-facebook text-muted me-2" id="ins-facebook"></a>
                        <a href="javascript:void(0)" class="mdi mdi-twitter text-muted" id="ins-twitter"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="py-5 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Card -->
                    <div class="card border-0 mb-4">
                        <!-- Card body -->
                        <div class="card-body">
                            <h4>About me</h4>
                            <p id="inst-info">

                            </p>
                            {{-- <a href="#" class="btn-link"> Read more</a> --}}
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card border-0 mb-4 mb-lg-0">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div>
                                    <h4 class="mb-0 fw-bold" id="noc">No of Courses</h4>
                                    <p class="fs-6 mb-0">Courses</p>
                                </div>
                                <div>
                                    <span><i class="fe fe-file-text fs-3"></i></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                <div>
                                    <h4 class="mb-0 fw-bold" id="nos">No of Students</h4>
                                    <p class="fs-6 mb-0">Total Students</p>
                                </div>
                                <div>
                                    <span><i class="fe fe-users fs-3"></i></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="mb-0 fw-bold">No of Reviews</h4>
                                    <p class="fs-6 mb-0">Reviews</p>
                                </div>
                                <div>
                                    <span><i class="fe fe-star fs-3"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <!-- Card -->
                    <div class="card border-0">
                        <!-- Card header -->
                        <div class="card-header">
                            <h4 class="mb-0">
                                My Courses <span class="text-muted fs-6">(12)</span>
                            </h4>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <!-- List group -->
                            <ul class="list-group list-group-flush" id="ins_courses">
                                <!-- List group item -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            fetchInstructorInfo();
            fetchMyCourses();

            function fetchInstructorInfo() {
                id = {{ $id }}
                $.ajax({
                    type: "get",
                    url: api_url + `instructor_info/${id}`,
                }).done(function(res) {
                    console.log(res);
                    $('#inst-info').html(res.data.instructor_info.biography);
                    $('#noc').html(res.data.no_of_courses);
                    $('#ins-headline').html(res.data.instructor_info.headline);
                    $('#ins-name').html(`${res.data.basic_info.firstname} ${res.data.basic_info.lastname}`);
                    $('#ins-youtube').attr('href',`https://${res.data.instructor_info.youtube}`);
                    $('#ins-website').attr('href',`https://${res.data.instructor_info.website_url}`);
                    $('#ins-instagram').attr('href',`https://${res.data.instructor_info.linkedin}`);
                    $('#ins-twitter').attr('href',`https://${res.data.instructor_info.twitter}`);
                    $('#ins-facebook').attr('href',`https://${res.data.instructor_info.facebook}`);
                }).fail(function(res) {
                    // location.href = {{ url()->previous() }}
                });
            }
        })

        function fetchMyCourses() {
            id = {{ $id }}
            $.ajax({
                type: "get",
                url: api_url + `instructor_courses/${id}`,
            }).done(function(res) {
                ins_courses = $('#ins_courses');
                ins_courses.html('');
                res.data.data.map(course => {
                    ins_courses.append(`
                <li class="list-group-item px-0 pb-3 pt-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#">
                                            <div class="d-lg-flex align-items-center">
                                                <div>
                                                    <img src="/assets/images/course/course-wordpress.jpg" alt=""
                                                        class="rounded img-4by3-lg" />
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="text-primary-hover">
                                                        ${course.title}
                                                    </h4>
                                                    <ul class="list-inline fs-6 mb-0 text-inherit">
                                                        <li class="list-inline-item">
                                                            <svg class="mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                ${levelBar(course.level)}
                                                            </svg>
                                                            ${checkLevel(course.level)}
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="mdi mdi-star me-n1 text-warning"></i>
                                                            <i class="mdi mdi-star me-n1 text-warning"></i>
                                                            <i class="mdi mdi-star me-n1 text-warning"></i>
                                                            <i class="mdi mdi-star me-n1 text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <span class="text-warning">0.0</span>
                                                            <span class="text-muted">(0)</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                        <div>
                                            <!-- Dropdown -->
                                            <span class="dropdown dropstart">
                                                <a class="text-muted text-decoration-none" href="#" role="button"
                                                    id="courseDropdown" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                    aria-expanded="true">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown">
                                                    <span class="dropdown-header">Share</span>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fab fa-linkedin dropdown-item-icon"></i>Linked
                                                        In</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                `);
                })
            }).fail(function(res) {

            });

        }
    </script>
@endsection
