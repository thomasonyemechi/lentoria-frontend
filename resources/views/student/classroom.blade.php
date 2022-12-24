@extends('layouts.instructor')
@section('page_title')
    Course || {{ explode('_',$slug)[1]}}
@endsection
@section('page_content')
    <!-- Video section -->
    <div class="p-lg-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 mb-5">
                    <div class="rounded-3 position-relative w-100 d-block overflow-hidden p-0" style="height: 400px;">
                        <video-js id="vid"
                                  class="position-absolute top-0 end-0 start-0 end-0 bottom-0 h-100 w-100"></video-js>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-12 mb-4 mb-xl-0">
                    <!-- Card -->
                    <div class="card mb-5">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1 class="fw-semi-bold mb-2 course-title">
                                    Course Title
                                </h1>
                            </div>
                            <div class="d-flex mb-5">
                                <span>
                                  <i class="mdi mdi-star me-n1 text-warning"></i>
                                  <i class="mdi mdi-star me-n1 text-warning"></i>
                                  <i class="mdi mdi-star me-n1 text-warning"></i>
                                  <i class="mdi mdi-star me-n1 text-warning"></i>
                                  <i class="mdi mdi-star-half-full text-warning"></i>
                                  <span class="fw-medium">(140)</span>
                                </span>
                                <span class="ms-4 d-none d-md-block course-info">
                                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">

                                  </svg>
                                  <span>
                                    Level
                                  </span>
                                </span>
                                <span class="ms-4 d-none d-md-block">
                                  <i class="mdi mdi-account-multiple-outline"></i>
                                  <span>Enrolled</span>
                                </span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-md"
                                         alt=""/>
                                    <div class="ms-2 lh-1">
                                        <h4 class="mb-1 instructor-name">Lentoria</h4>
                                        <p class="fs-6 mb-0 instructor-email">instructor@lentoria</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-lt-tab" id="tab" role="tablist">
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link active" id="description-tab" data-bs-toggle="pill"
                                   href="#description" role="tab"
                                   aria-controls="description" aria-selected="false">Description</a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link" id="faq-tab" data-bs-toggle="pill" href="#faq" role="tab"
                                   aria-controls="faq"
                                   aria-selected="false">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Card -->
                    <div class="card rounded-3">
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                     aria-labelledby="description-tab">
                                    <div class="mb-4 course_description">
                                        <h3 class="mb-2">Course Descriptions</h3>

                                    </div>
                                    <h4 class="mb-3">What you’ll learn</h4>
                                    <div class="row mb-3 wywl">

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                    <div class="faq-div">
                                        <h3 class="mb-3">Course - Frequently Asked Questions</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                    <div class="card" id="courseAccordion">
                        <div>
                            <ul class="list-group list-group-flush" id="section_lecture_container">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $("#vid").bind("contextmenu", function () {
                return false;
            });
            getSectionsAndLectures(@js($slug));
            getCourseInfo(@js($slug));
            getFaqs(@js($slug));
            const player = videojs('vid', {
                controls: true,
                autoplay: false,
                preload: "auto",
                responsive: true,
                liveui: true,
                fill: true,
                metadata: true,
                notSupportedMessage: "An Error Occurred While Fetching Video or No Video Available For This Course",
                userActions: {
                    hotkeys: function (event) {
                        // `space` key = pause
                        if (event.which === 32) {
                            if (this.paused()) {
                                this.play();
                            } else {
                                this.pause();
                            }
                        }
                    }
                }
            });

            function getSectionsAndLectures(slug) {
                $.get(`${api_url}user/section_lectures/${slug}`).done(res => {
                    console.log(res);
                    const sections = res.data;
                    let lectures = "";
                    sections.forEach((section, index) => {
                        section.lectures.forEach(lecture => {
                            lectures += `<li class="list-group-item">
                                            <a href="#" data-vid="${lecture.main_content}"
                                               class="d-flex justify-content-between align-items-center text-inherit text-decoration-none vidwatch">
                                                <div class="text-truncate">
                                                    <span
                                                        class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i
                                                            class="mdi mdi-play fs-4"></i></span>
                                                    <span>${lecture.title}</span>
                                                </div>
                                                <div class="text-truncate">
                                                    <span>${convertStoMs(lecture.duration)}</span>
                                                </div>
                                            </a>
                                        </li>`
                        })
                        $("#section_lecture_container").append(
                            `<li class="list-group-item p-0 bg-transparent">
                                    <a class="h4 mb-0 d-flex align-items-center text-inherit text-decoration-none py-3 px-4"
                                       data-bs-toggle="collapse" href="#course${section.id}" role="button" aria-expanded="false"
                                       aria-controls="course${section.id}">
                                        <div class="me-auto">
                                            ${section.title}
                                            <p class="mb-0 text-muted fs-6 mt-1 fw-normal">${section.lectures_count} lectures</p>
                                        </div>
                                        <span class="chevron-arrow ms-4">
                                            <i class="fe fe-chevron-down fs-4"></i>
                                        </span>
                                    </a>
                                    <div class="collapse ${index == 0 ? 'show' : ''}" id="course${section.id}" data-bs-parent="#courseAccordion">
                                        <ul class="list-group list-group-flush">
                                          ${lectures}
                                        </ul>
                                    </div>
                            </li>`)
                    })
                }).fail(res => {
                    console.log(res);
                })
            }

            function getCourseInfo(slug) {
                $.get(`${api_url}user/get_course_info/${slug}`).done(res => {
                    const data = res.data;
                    $(".course-title").html(data.course_info.title);
                    $(".course-info svg").html(levelBar(data.course_info.level));
                    $(".course-info span").html(checkLevel(data.course_info.level));
                    $(".instructor-name").html(`${data.instructor_info.firstname} ${data.instructor_info.lastname}`);
                    $(".instructor-email").html(data.instructor_info.email);
                    $(".course_description").html(`<p>${data.course_info.description}</p>`);
                    $("#description").append(`<p>${data.course_info.subtitle}</p>`);
                    const wywl = parse(data.wywl);
                    wywl?.forEach(l => {
                        $(".wywl").append(`<li class="d-flex mb-2 col-lg-6 col-md-6 col-sm-12">
                            <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                <span>${l}</span>
                            </li>`)
                    })
                }).fail(res => {
                    console.log(res);
                })
            }

            function getFaqs(slug) {
                $.get(`${api_url}user/get_faqs/${slug}`).done(res => {
                    const faqs = res.data;
                    faqs.forEach(faq => {
                        $(".faq-div").append(
                            `<div class="mb-4">
                            <h4>${faq.question}</h4>
                            <p>${faq.answer}</p>
                        </div>`)
                    })
                }).fail(res => {
                    console.log(res);
                })
            }

            $(document).on('click', '.vidwatch', function (e) {
                e.preventDefault();
                let video_link = $(this).data('vid');
                $(".vidwatch").each(function (i) {
                    $(this).removeClass('text-white').addClass('text-inherit');
                    $(this).parent().removeClass('active');
                })
                $(this).parent().addClass('active');
                $(this).removeClass('text-inherit').addClass('text-white');
                player.ready(function () {
                    player.src(
                        video_url + video_link
                    );
                });
            });
        })
    </script>
@endsection
