@extends('layouts.instructor')
@section('page_title', 'Course | Course Review')

@section('page_content')
    <div class="mt-5 course-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Tab content -->
                    <div class="tab-content content" id="course-tabContent">
                        <div class="tab-pane fade show active" id="course-intro" role="tabpanel"
                            aria-labelledby="course-intro-tab">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div>
                                    <h3 class=" mb-0  text-truncate-line-2">Introduction </h3>
                                </div>
                                <div>
                                    <!-- Dropdown -->
                                    <span class="dropdown">
                                        <a href="#" class="ms-2 text-muted" id="dropdownInfo"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-help-circle"></i>
                                        </a>
                                        <span class="dropdown-menu dropdown-menu-lg p-3 dropdown-menu-end"
                                            aria-labelledby="dropdownInfo">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            cupiditate consequatur rerum eius ad ut officiis
                                        </span>
                                    </span>
                                    <!-- Dropdown -->
                                    <span class="dropdown">
                                        <a class="text-muted text-decoration-none" href="#" role="button"
                                            id="shareDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <span class="dropdown-menu dropdown-menu-end" aria-labelledby="shareDropdown1">
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
                            <div class="embed-responsive  position-relative w-100 d-block overflow-hidden p-0"
                                style="height: 600px;">
                                <iframe class="position-absolute top-0 end-0 start-0 end-0 bottom-0 h-100 w-100"
                                    src="https://player.vimeo.com/video/743561062?portrait=0&byline=0&title=0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <div class="card course-sidebar " id="courseAccordion">
        <!-- List group -->
        <ul class="list-group list-group-flush course-list">
            <li class="list-group-item">
                <h4 class="mb-0">Table of Content</h4>
            </li>
            <!-- List group item -->
            <li class="list-group-item">
                <!-- Toggle -->
                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0" data-bs-toggle="collapse"
                    href="#courseTwo" role="button" aria-expanded="false" aria-controls="courseTwo">
                    <div class="me-auto">
                        Introduction to JavaScript
                    </div>
                    <!-- Chevron -->
                    <span class="chevron-arrow  ms-4">
                        <i class="fe fe-chevron-down fs-4"></i>
                    </span>
                </a>
                <!-- Row -->
                <!-- Collapse -->
                <div class="collapse show" id="courseTwo" data-bs-parent="#courseAccordion">
                    <div class="py-4 nav" id="course-tabOne" role="tablist" aria-orientation="vertical"
                        style="display: inherit;">
                        <a class="mb-2 d-flex justify-content-between align-items-center text-decoration-none"
                            id="course-intro-tab" href="javascript:void(0)" role="tab" aria-selected="true">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm  rounded-circle me-2"><i
                                        class="fe fe-play  fs-6"></i></span>
                                <span>Introduction</span>
                            </div>
                            <div class="text-truncate">
                                <span>1m 7s</span>
                            </div>
                        </a>
                        <a class="mb-2 d-flex justify-content-between align-items-center text-inherit text-decoration-none"
                            id="course-development-tab" role="tab" aria-selected="false">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm  rounded-circle me-2"><i
                                        class="fe fe-play  fs-6"></i></span>
                                <span>Installing Development Software</span>
                            </div>
                            <div class="text-truncate">
                                <span>3m 11s</span>
                            </div>
                        </a>
                        <a class="mb-2 d-flex justify-content-between align-items-center text-inherit text-decoration-none"
                            id="course-project-tab" role="tab" aria-selected="false">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm  rounded-circle me-2"><i
                                        class="fe fe-play  fs-6"></i></span>
                                <span>Hello World Project from GitHub</span>
                            </div>
                            <div class="text-truncate">
                                <span>2m 33s</span>
                            </div>
                        </a>
                        <a class="d-flex justify-content-between align-items-center text-inherit text-decoration-none"
                            id="course-website-tab" role="tab" aria-selected="false">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm  rounded-circle me-2"><i
                                        class="fe fe-play  fs-6"></i></span>
                                <span>Our Sample Website</span>
                            </div>
                            <div class="text-truncate">
                                <span>2m 15s</span>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <script src="https://player.vimeo.com/api/player.js"></script>

    <script>
        const iframe = document.querySelector('iframe');
        const player = new Vimeo.Player(iframe);

        player.on('play', function() {
            console.log('played the video!');
        });
    </script>
@endsection
