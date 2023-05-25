@extends('layouts.instructor')
@section('page_title')
    Course || {{ explode('_',$slug)[1]}}
@endsection
@section('page_content')
    <style>
        /* article container */
        .article-container {
            position: relative;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        /* text viewer with overflow */
        .text-viewer {
            max-height: 600px; /* set the maximum height */
            overflow-y: auto; /* allow vertical scrolling */
            background-color: #ffffff; /* set the background color */
            border-radius: 5px;
            padding: 10px;
            word-break: break-word;
        }

        .prev-button,
        .next-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background-color: transparent;
            z-index: 2;
        }

        .prev-button {
            left: 0;
            margin-left: -15px; /* add a margin to the left */
        }

        .next-button {
            right: 0;
            margin-right: -30px; /* add a margin to the right */
        }

        .button-icon {
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: #ffffff;
            border: 1px solid #d1d1d1;
            border-radius: 50%;
            cursor: pointer;
        }

        .button-icon:hover {
            background-color: #d1d1d1;
        }

        .button-icon:focus {
            outline: none;
        }

        .button-icon i {
            width: 24px;
            height: 24px;
            font-weight: bold;
            font-size: 24px;
            fill: #000000;
        }

        @media (width >= 630px) {
            /* Style the tooltip */
            .button-icon:hover::after {
                content: attr(data-tooltip);
                background-color: black;
                color: white;
                padding: 5px 10px;
                border-radius: 5px;
                position: absolute;
                bottom: 100%;
                left: 50%;
                transform: translateX(-50%);
                white-space: nowrap;
                opacity: 0;
                transition: opacity 0.3s;
            }

            .button-icon:hover::after {
                opacity: 1;
            }

        }
    </style>
    <!-- Text section -->
    <div class="p-lg-5 py-5">
        <div class="container">
            <div class="row main-container">
                <div class="col-lg-12 col-md-12 col-12 mb-5">
                    <div class="article-container">
                        <div class="text-viewer">
                            {{-- text-content--}}
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-center">
                                    <h3>Welcome to our course!</h3>
                                    <p class="lead mb-5">Select a lecture from the list to get started</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="130px"
                                         width="130px" fill="#036">
                                        <path
                                            d="M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M18,10H6v-2h12V10z M18,14H6v-2h12V14z M14,18H6v-2h8V18z"/>
                                    </svg>

                                </div>
                            </div>

                        </div>
                        <div class="prev-button d-none">
                            <button class="button-icon position-relative previous-btn" data-tooltip="previous article">
                                <i class="fe fe-chevron-left"></i>
                            </button>
                        </div>

                        <div class="next-button d-none">
                            <button class="button-icon position-relative next-btn" data-tooltip="next article">
                                <i class="fe fe-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Content -->
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-12 mb-4 mb-xl-0 order-last order-sm-0">
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
                                    <img src="../assets/images/avatar/avatar-1.jpg"
                                         class="rounded-circle avatar-md instructor-image"
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
                <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-4 mb-sm-0">
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
            // Initialize current section and lecture index
            let currentSectionIndex = -1;
            let currentLectureIndex = -1;
            let globalSections = [];
            getSectionsAndLectures(@js($slug));
            getCourseInfo(@js($slug));
            getFaqs(@js($slug));


            function getSectionsAndLectures(slug) {
                $.get(`${api_url}user/section_lectures/${slug}`).done(res => {
                    const sections = res.data;
                    globalSections = res.data;
                    console.log(globalSections);
                    let lectures = "";
                    if (!sections.length) {
                        $("#section_lecture_container").html(
                            `<li class="list-group-item">
                                <a href="#"
                                   class="d-flex justify-content-between align-items-center text-inherit text-decoration-none text-read">
                                    <div class="text-truncate">
                                        <span
                                            class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i
                                                class="mdi mdi-cancel fs-4"></i></span>
                                        <span>No Lectures Available</span>
                                    </div>
                                </a>
                            </li>`
                        )
                        return;
                    }
                    sections.forEach((section, index) => {
                        let lectures = '';
                        section.lectures.forEach((lecture, lectureIndex) => {
                            lectures += `<li class="list-group-item">
                                            <a href="#" data-section-index="${index}" data-lecture-index="${lectureIndex}"
                                               class="d-flex justify-content-between align-items-center text-inherit text-decoration-none text-read">
                                                <div class="text-truncate">
                                                    <span
                                                        class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i
                                                            class="mdi mdi-text fs-4"></i></span>
                                                    <span>${lecture.title}</span>
                                                </div>
                                              <!--  <div class="content-container d-none">

                                                </div> -->
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
                    currentSectionIndex = currentLectureIndex = 0;
                }).fail(res => {
                    console.log(res);
                })
            }

            function getCourseInfo(slug) {
                $.get(`${api_url}user/get_course_info/${slug}`).done(res => {
                    const data = res.data;
                    console.log(data)
                    $(".course-title").html(data.course_info.title);
                    $(".course-info svg").html(levelBar(data.course_info.level));
                    $(".course-info span").html(checkLevel(data.course_info.level));
                    $(".instructor-name").html(`${data.instructor_info.firstname} ${data.instructor_info.lastname}`);
                    $(".instructor-image").attr('src', imageUrl(data.instructor_info.image));
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

            function setActiveLecture(sectionIndex, lectureIndex) {
                $(".text-read").each(function (i) {
                    $(this).removeClass('text-white').addClass('text-inherit');
                    $(this).parent().removeClass('active');
                });

                const activeLecture = $(`.text-read[data-section-index="${sectionIndex}"][data-lecture-index="${lectureIndex}"]`);
                activeLecture.addClass('text-white').removeClass('text-inherit');
                activeLecture.parent().addClass('active');

                // Collapse the previous section and open the next section
                const previousAccordion = $(`.accordion-item[data-section-index="${sectionIndex - 1}"]`);
                const nextAccordion = $(`.accordion-item[data-section-index="${sectionIndex}"]`);

                if (previousAccordion.length) {
                    previousAccordion.find(".accordion-collapse").collapse('hide');
                }

                if (nextAccordion.length) {
                    nextAccordion.find(".accordion-collapse").collapse('show');
                }
            }


            $(document).on('click', '.text-read', function (e) {
                e.preventDefault();
                const sectionIndex = parseInt($(this).data('section-index'));
                const lectureIndex = parseInt($(this).data('lecture-index'));
                currentSectionIndex = sectionIndex;
                currentLectureIndex = lectureIndex
                const mainContent = globalSections[sectionIndex].lectures[lectureIndex].main_content;
                const title = globalSections[sectionIndex].lectures[lectureIndex].title;
                setActiveLecture(sectionIndex, lectureIndex);
                const textViewer = $(".text-viewer");
                textViewer.html(`<article>
                        <h1 class="fw-semi-bold mb-2 text-capitalize">${title}</h1>
                        ${mainContent}
                    </article>`);
                // Check if prev and next buttons are already shown before toggling display property
                $('.prev-button, .next-button').removeClass('d-none');
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            });

            // Load content to text viewer
            function loadContent() {
                const section = globalSections[currentSectionIndex];
                const lecture = section.lectures[currentLectureIndex];
                const content = lecture.main_content;
                const textViewer = $(".text-viewer");
                setActiveLecture(currentSectionIndex, currentLectureIndex);
                textViewer.html(
                    `<article>
                        <h1 class="fw-semi-bold mb-2 text-capitalize">${lecture.title}</h1>
                        ${content}
                    </article>`
                );
            }

            function handleNextButtonClick() {
                let sectionLength = globalSections[currentSectionIndex].lectures.length - 1;

                // Check if the current section is the active one
                let isActiveSection = $(`#course${globalSections[currentSectionIndex].id}`).hasClass('show');

                if (!isActiveSection) {
                    // Collapse current section if it's not the active one
                    $(`#course${globalSections[currentSectionIndex].id}`).collapse('hide');
                }

                if (currentLectureIndex < sectionLength) {
                    // If there are more lectures in the current section, increment the lecture index
                    currentLectureIndex++;
                } else if (currentSectionIndex < globalSections.length - 1) {
                    // If there are no more lectures in the current section, but there are more sections, go to the next section
                    currentSectionIndex++;
                    currentLectureIndex = 0;
                } else {
                    return;
                }

                // Expand next section
                $(`#course${globalSections[currentSectionIndex].id}`).collapse('show');

                // Load content to text viewer
                loadContent();

                // Highlight active item
                setActiveLecture(currentSectionIndex, currentLectureIndex);


                // Hide next button if on last lecture in last section
                // if (currentSectionIndex == globalSections.length - 1 && currentLectureIndex == sectionLength) {
                //     $('.next-btn').addClass('d-none');
                // }
                // if (currentSectionIndex == 0 && currentLectureIndex == 0) {
                //     $('#prevBtn').addClass('d-none');
                // }
            }

            function handlePrevButtonClick() {
                // Check if the current section is already active
                if (!$(`#course${globalSections[currentSectionIndex].id}`).hasClass('show')) {
                    // Collapse current section if it's not active
                    $(`#course${globalSections[currentSectionIndex].id}`).collapse('hide');
                }

                if (currentLectureIndex > 0) {
                    // If there are previous lectures in the current section, decrement the lecture index
                    currentLectureIndex--;
                } else if (currentSectionIndex > 0) {
                    // If there are no previous lectures in the current section, but there are previous sections, go to the previous section
                    currentSectionIndex--;
                    currentLectureIndex = globalSections[currentSectionIndex].lectures.length - 1;
                }

                // Check if the previous section is already active
                if (!$(`#course${globalSections[currentSectionIndex].id}`).hasClass('show')) {
                    // Expand previous section if it's not active
                    $(`#course${globalSections[currentSectionIndex].id}`).collapse('show');
                }

                // Load content to text viewer
                loadContent();

                // Highlight active item
                setActiveLecture(currentSectionIndex, currentLectureIndex);

                // if (currentSectionIndex == globalSections.length - 1 && currentLectureIndex == sectionLength) {
                //     $('.next-btn').addClass('d-none');
                // }
                // if (currentSectionIndex == 0 && currentLectureIndex == 0) {
                //     $('#prevBtn').addClass('d-none');
                // }
            }


            $(".previous-btn").click(function (e) {
                e.preventDefault();
                handlePrevButtonClick();
            })
            $(".next-btn").click(function (e) {
                e.preventDefault();
                handleNextButtonClick();
            })
        })
    </script>
@endsection
