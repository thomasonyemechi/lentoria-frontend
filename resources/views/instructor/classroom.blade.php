@extends('layouts.instructor')
@section('page_title',"Instructor Classroom")
@section('page_content')

    <div class="mt-5 course-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Tab content -->
                    <div class="tab-content content" id="course-tabContent">
                        <div class="tab-pane fade show active">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div>
                                    <h1 class=" mb-0 text-truncate-line-2 tit">Instructor Class Board</h1>
                                </div>
                                <div>
                                    <span class="p-4 bt">
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom"><i
                                                    class="mdi mdi-video mdi-36px"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom"><i
                                                    class="mdi mdi-image mdi-36px"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom"><i
                                                    class="mdi mdi-message mdi-36px"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom"><i
                                                    class="mdi mdi-xml mdi-36px"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom"><i
                                                    class="mdi mdi-comment-account mdi-36px"></i></a>
                                        <a href="javascript:void(0)" class="btn-danger d-none"
                                           id="btnpush">PUSH</a>
                                    </span>
                                    <!-- Dropdown -->
                                    <span class="dropdown">
                                        <a href="#" class="ms-2 text-muted" id="dropdownInfo"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-help-circle"></i>
                                            </a>
                                            <span class="dropdown-menu dropdown-menu-lg p-3 dropdown-menu-end"
                                                  aria-labelledby="dropdownInfo">
                                                Video for the selected course
                                            </span>
                                        </span>
                                    <!-- Dropdown -->
                                    <span class="dropdown">
                                            <a class="text-muted text-decoration-none" href="#" role="button"
                                               id="shareDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu dropdown-menu-end"
                                                  aria-labelledby="shareDropdown1">
                                                <span class="dropdown-header">Share</span>
                                                <a class="dropdown-item" href="#"><i
                                                            class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
                                                <a class="dropdown-item" href="#"><i
                                                            class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
                                                <a class="dropdown-item" href="#"><i
                                                            class="fab fa-linkedin dropdown-item-icon"></i>Linked In</a>
                                                <a class="dropdown-item" href="#"><i
                                                            class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
                                            </span>
                                        </span>
                                </div>
                            </div>
                            <!-- Video -->
                            <div class="embed-responsive position-relative w-100 d-block overflow-hidden p-0 d-block"
                                 id="vid_container" style="height: 600px;">
                            </div>
                            <div class="d-flex justify-content-center my-22 d-none" id="vid_preloader">
                                <div class="spinner-grow" role="status" style="width: 5rem; height: 5rem;">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <div class="card course-sidebar" id="courseAccordion">
        <!-- List group -->
        <ul class="list-group list-group-flush" id="course_list">
            <li class="list-group-item">
                <h4 class="mb-0">Table of Content</h4>
            </li>
            <!-- List group item -->
            <div class="d-flex justify-content-center opacity-50 align-self-lg-center mt-lg-22" id="loader">
                <div class="spinner-grow text-black-100" style="width: 5rem; height: 5rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </ul>
    </div>

    <script>
        $(function () {
            $("#vid").bind("contextmenu", function () {
                return false;
            });
            console.log(sessionStorage.getItem("courseimage"));
            // const player = videojs('vid', {
            //     "controls": true,
            //     autoplay: false,
            //     preload: "auto",
            //     responsive: true,
            //     liveui: true,
            //     fill: true,
            //     // fluid: true,
            //     metadata: true,
            //     notSupportedMessage: "An Error Occured While Fetching Video or No Video Available For This Course",
            //     // playbackRates: [1, 1.5, 2],
            //     userActions: {
            //         hotkeys: function (event) {
            //             // `space` key = pause
            //             if (event.which === 32) {
            //                 if (this.paused()) {
            //                     this.play();
            //                 } else {
            //                     this.pause();
            //                 }
            //             }
            //         }
            //     }
            // });
            // player.on('error', function (e) {
            //     console.log(e);
            //     e.stopImmediatePropagation();
            //     var error = player.error();
            //     // player.createModal('Error Occured!');
            //     error.message = "An Error Occurred";
            // });
            // player.on('pause', function (e) {
            //     whereYouAt = player.currentTime();
            //     console.log(whereYouAt);
            // });
            const slug = @js($slug);
            getSections(slug);

            function getSections(slug) {
                $.ajax({
                    method: 'GET',
                    url: api_url + 'admin/sections_lectures/' + slug,
                }).done(res => {
                    console.log(res);
                    $("#loader").remove();
                    res.data.map(sections => {
                        lectures = "";
                        if (sections.lectures.length > 0) {
                            sections.lectures.map(lecs => {
                                lectures += `
                            <a class="mb-2 d-flex justify-content-between align-items-center vidwatch text-decoration-none" data-vid="${lecs.main_content}" style="cursor: pointer;">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm  rounded-circle me-2"><i
                                        class="fe fe-play  fs-6"></i></span>
                                <span class="lectit active">${lecs.title}</span>
                            </div>
                            <div class="text-truncate">
                                <span>${convertStoMs(lecs.duration)}</span>
                            </div>
                        </a>
                            `;
                            });
                        } else {
                            lectures += `
                        <a class="mb-2 d-flex justify-content-between align-items-center text-decoration-none text-black" style="cursor: pointer;">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i
                                        class="fe fe-x-circle  fs-6"></i></span>
                                <span>No Lectures Available For This Section</span>
                            </div>
                        </a>
                            `;
                        }

                        $("#course_list").append(`
                        <li class="list-group-item">
                <!-- Toggle -->
                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0 cr_con" data-bs-toggle="collapse"
                    href="#course${sections.id}" role="button" aria-expanded="false" aria-controls="#course${sections.id}">
                    <div class="me-auto sectit">
                            ${sections.title}
                    </div>
                    <!-- Chevron -->
                    <span class="chevron-arrow  ms-4">
                        <i class="fe fe-chevron-down fs-4"></i>
                    </span>
                </a>
                <!-- Row -->
                <!-- Collapse -->
                <div class="collapse" id="course${sections.id}" data-bs-parent="#courseAccordion">
                    <div class="py-4 nav" id="course-tab${sections.id}" role="tablist" aria-orientation="vertical"
                        style="display: inherit;">
                        ${lectures}
                    </div>
                </div>
            </li>
                        `);
                    });
                    if (res.data.length > 0) {
                        first = document.querySelector('.cr_con');
                        $(first).attr('aria-expanded', true);
                        next = first.nextElementSibling;
                        next.classList.add('show');
                    }
                    $("#course_list").slimScroll({
                        // width: '500px',
                        height: '500px',
                        size: '10px',
                        color: 'grey',
                        // alwaysVisible: true,
                        // distance: '20px',
                        railVisible: true,
                        railColor: '#222',
                        railOpacity: 0.3,
                        wheelStep: 10,
                        allowPageScroll: false,
                        disableFadeOut: true
                    });
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                });
            };


            $(document).on('click', '.vidwatch', function (e) {
                var video_link = $(this).data('vid');
                grandparent = $(this).parent().parent().prev();
                $("#st").html(grandparent.find($("div.sectit")).text());
                lecture_title = $(this).find($("span.lectit")).html();
                $("#lt").html(lecture_title);
                e.preventDefault();
                player.ready(function () {
                    player.src(
                        video_url + video_link
                    );
                });
            });


        });
    </script>

@endsection