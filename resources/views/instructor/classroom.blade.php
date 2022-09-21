@extends('layouts.instructor')
@section('page_title',"Instructor Classroom")
@section('page_content')
    <script>
        let urlSearchParams = new URLSearchParams(window.location.search);
        let para = urlSearchParams.get('type');
        if (para != 2) {
            history.back();
        }
    </script>
    <style>
        html {
            --scrollbarBG: #CFD8DC;
            --thumbBG: #A9A9A9;
        }

        .blackboard {
            border: tan solid 12px;
            border-top: #bda27e solid 12px;
            border-left: #b19876 solid 12px;
            border-bottom: #c9ad86 solid 12px;
            box-shadow: 0px 0px 6px 5px rgba(58, 18, 13, 0), 0px 0px 0px 2px #c2a782, 0px 0px 0px 4px #a58e6f, 3px 4px 8px 5px rgba(0, 0, 0, 0.5);
            background-image: radial-gradient(circle at left 30%, rgba(34, 34, 34, 0.3), rgba(34, 34, 34, 0.3) 80px,
            rgba(34, 34, 34, 0.5) 100px, rgba(51, 51, 51, 0.5) 160px, rgba(51, 51, 51, 0.5)),
            linear-gradient(215deg, transparent, transparent 100px, #222 260px, #222 320px, transparent),
            radial-gradient(circle at right, #111, rgba(51, 51, 51, 1));
            background-color: #333;
            object-fit: contain;
        }

        .blackboard:before {
            box-sizing: border-box;
            display: block;
            position: relative;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(175deg, transparent, transparent 40px, rgba(120, 120, 120, 0.1) 100px,
            rgba(120, 120, 120, 0.1) 110px, transparent 220px, transparent), linear-gradient(200deg, transparent 80%,
            rgba(50, 50, 50, 0.3)), radial-gradient(ellipse at right bottom, transparent, transparent 200px,
            rgba(80, 80, 80, 0.1) 260px, rgba(80, 80, 80, 0.1) 320px, transparent 400px, transparent);
            border: #2c2c2c solid 2px;
            content: "Welcome to lentoria Virtual Live Classroom";
            font-family: 'Permanent Marker', cursive;
            font-size: 2.2em;
            color: rgba(238, 238, 238, 0.7);
            text-align: center;
        }

        .no-txt {
            box-sizing: border-box;
            display: block;
            position: relative;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(175deg, transparent, transparent 40px, rgba(120, 120, 120, 0.1) 100px,
            rgba(120, 120, 120, 0.1) 110px, transparent 220px, transparent), linear-gradient(200deg, transparent 80%,
            rgba(50, 50, 50, 0.3)), radial-gradient(ellipse at right bottom, transparent, transparent 200px,
            rgba(80, 80, 80, 0.1) 260px, rgba(80, 80, 80, 0.1) 320px, transparent 400px, transparent);
            border: #2c2c2c solid 2px;
            content: "Welcome to lentoria Virtual Live Classroom";
            font-family: 'Permanent Marker', cursive;
            font-size: 2.2em;
            color: rgba(238, 238, 238, 0.7);
            text-align: center;
        }

        .re.blackboard:before {
            display: none;
        }

        .whiteboard {
            border: tan solid 12px;
            border-top: #bda27e solid 12px;
            border-left: #b19876 solid 12px;
            border-bottom: #c9ad86 solid 12px;
            box-shadow: 0 0 6px 5px rgba(58, 18, 13, 0), 0 0 0 2px #c2a782, 0px 0px 0px 4px #a58e6f, 3px 4px 8px 5px rgba(0, 0, 0, 0.5);
        }

        .thin {
            scrollbar-width: thin;
            scrollbar-color: var(--thumbBG) var(--scrollbarBG);
        }

        .thin::-webkit-scrollbar {
            width: 10px;
            opacity: 0.5;
        }


        .thin::-webkit-scrollbar-thumb {
            background-color: var(--thumbBG);
            border-radius: 10px;
            border: 5px solid var(--scrollbarBG);
        }
    </style>
    <div class="mt-5 course-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Tab content -->
                    <div class="tab-content content" id="course-tabContent">
                        <div class="tab-pane fade show active overflow-visible">
                            <div class="row justify-content-between mb-4">
                                <div class="col-sm-12 col-lg-5 col-md-5">
                                    <h1 class="mb-0 text-capitalize tit">Instructor Class
                                        Board</h1>
                                </div>
                                <div class="col-sm-12 col-lg-7 col-md-7 d-lg-flex d-md-flex justify-content-lg-end justify-content-md-end align-self-auto btns">
                                    <span class="bt p-sm-0 d-none">
                                        <a href="javascript:void(0)"
                                           class="text-primary btn-sm classroom vid-btn"
                                           data-link=""><i
                                                    class="mdi mdi-video" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom img-btn"
                                           data-link=""><i
                                                    class="mdi mdi-image" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom text-btn"
                                           data-link=""><i
                                                    class="mdi mdi-file-document" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom code-btn"
                                           data-link=""><i
                                                    class="mdi mdi-xml" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom comm-btn"
                                           data-link=""><i
                                                    class="mdi mdi-comment-account" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-success btn-sm classroom push-btn"
                                           id="push_btn"><i class="mdi mdi-send" style="font-size: 26px;"></i></a>
                                    </span>
                                </div>
                            </div>
                            <!-- Video -->
                            <div class="embed-responsive d-block overflow-auto p-0 blackboard no-scroll"
                                 id="class_container" style="height: 300px;">

                            </div>
                            <div class="embed-responsive d-none overflow-auto p-0 whiteboard no-scroll px-2 small"
                                 id="text_container" style="height: 300px;">

                            </div>
                            <div class="embed-responsive position-relative d-none p-0 blackboard re no-scroll"
                                 id="video_container" style="height: 300px;">
                                <video-js
                                        class="position-absolute top-0 end-0 start-0 end-0 bottom-0 h-100 w-100 vjs-theme-fantasy"
                                        id="vid">
                                </video-js>
                            </div>
                            <div class="pb-10 mt-4 d-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis eius incidunt
                                    itaque iure labore molestiae perspiciatis sed sint. Accusamus delectus dolore,
                                    eos fuga nam eobcaecati quas quos. Blanditiis, temporibus voluptatum?
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet consectetur
                                    consequatur culpa deserunt, dolore earum eos et facilis hic ipsa itaque molestias
                                    necessitatibus nemo nobis quaerat tempora tenetur velit. Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Accusantium asperiores blanditiis commodi culpa eos
                                    ipsa itaque, molestiae nam non odit officiis pariatur possimus provident quos
                                    recusandae reprehenderit sint vel voluptates! Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Aliquid cum, deleniti distinctio doloremque ea
                                    eligendi error exercitationem facere fuga illum ipsam ipsum nulla quidem quod sit,
                                    veritatis vitae voluptate voluptatibus. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Ab eum illum nam tempora vel velit veritatis voluptatibus! Animi
                                    dolor dolores impedit modi nobis porro recusandae tempore temporibus vel, velit,
                                    voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem
                                    eaque eum facere maxime necessitatibus neque nisi qui ratione voluptates. Aliquam
                                    aliquid architecto, atque doloribus laboriosam magni molestiae quis velit.
                                </p>
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
    <div class="card course-sidebar mt-4" id="courseAccordion">
        <!-- List group -->
        {{--        <div class="thin" style="height: 90vh; margin-bottom: 15px; overflow: auto; scroll-behavior: smooth;">--}}
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
    {{--    </div>--}}

    <script>
        $(function () {

            $("#vid").bind("contextmenu", function () {
                return false;
            });

            const player = videojs('vid', {
                "controls": true,
                autoplay: false,
                preload: "auto",
                responsive: true,
                liveui: true,
                fill: true,
                // fluid: true,
                metadata: true,
                notSupportedMessage: "An Error Occured While Fetching Video or No Video Available For This Course",
                // playbackRates: [1, 1.5, 2],
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
            player.on('pause', function (e) {
                whereYouAt = player.currentTime();
                console.log(whereYouAt);
            });
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
                            <a class="mb-2 d-flex justify-content-between align-items-center load-con text-decoration-none" data-vid="${lecs.main_content}" data-img="${lecs.image}" data-lec_id="${lecs.id}" style="cursor: pointer;">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm  rounded-circle me-2"><i
                                        class="fe fe-airplay fs-4"></i></span>
                                <span class="lectit">${lecs.title}</span>
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
                        height: '90vh',
                        size: '8px',
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
            }

            $(document).on('click', '.load-con', function (e) {
                e.preventDefault();
                let img_link = $(this).data('img');
                let video_link = $(this).data('vid');
                let lecture_id = $(this).data('lec_id');
                let lec_tit = $(this).find($(".lectit")).html();
                $(".tit").html(lec_tit);
                let span = $(".btns").find($("span")).removeClass('d-none');
                $(".img-btn").data('link', img_link);
                $(".vid-btn").data('link', video_link);
                $(".code-btn").data('link', lecture_id);
                $(".text-btn").data('link', lecture_id);
                $("#class_container").html('');
                $("#text_container").html('');
                Array.prototype.slice.call(document.getElementsByClassName('classroom')).forEach(el => {
                    if (el.classList.contains('d-none')) {
                        el.classList.remove('d-none');
                    }
                })
            });


            function checkIsSelected() {
                let buttons = document.querySelectorAll(".classroom");
                Array.prototype.slice.call(buttons).forEach((v) => {
                    if (v.classList.contains('is-selected')) {
                        return v.classList.remove('is-selected');
                    }
                });
            }

            $(document).on('click', ".img-btn", function (e) {
                e.preventDefault();
                let img_link = $(this).data('link');
                let img = `<img src="${imageUrl(img_link)}" onerror="this.src='../../assets/images/image.jpeg'" class="w-100 h-100" />`;
                if ($('#class_container').hasClass('d-none')) {
                    $("#class_container").removeClass('d-none');
                    $("#class_container").addClass('d-block');
                    $("#video_container").addClass('d-none');
                    $("#text_container").addClass('d-none');
                    player.ready(function () {
                        player.pause();
                    });
                }
                $("#class_container").html(img);
                $("#class_container").addClass('re');
                checkIsSelected();
                $(this).addClass("is-selected");

            });

            $(document).on('click', '.vid-btn', function (e) {
                e.preventDefault();
                let vid_link = $(this).data('link');
                if (!player.src()) {
                    player.ready(function () {
                        player.src(imageUrl(`a43ai55gQHVbymNG54pGK6GMRUgk2c0Yf7OSL8V8.mp4`));
                    });
                }
                console.log(player.src());
                if ($('#video_container').hasClass('d-none')) {
                    $("#video_container").removeClass('d-none');
                    $("#video_container").addClass('d-block');
                    $("#class_container").addClass('d-none');
                    $("#text_container").addClass('d-none');
                }
                checkIsSelected();
                $(this).addClass("is-selected");
            });
            $(document).on('click', '.code-btn', function (e) {
                e.preventDefault();
                let code_link = $(this).data('link');
                console.log(code_link);
                $("#class_container").html('');
                $("#class_container").addClass('re');
                if ($('#class_container').hasClass('d-none')) {
                    $("#class_container").removeClass('d-none');
                    $("#class_container").addClass('d-block');
                    $("#video_container").addClass('d-none');
                    $("#text_container").addClass('d-none');
                    player.ready(function () {
                        player.pause();
                    });
                }
                checkIsSelected();
                $(this).addClass("is-selected");

                let code = localStorage.getItem(`lecture_${code_link}_code`);
                if (code) {
                    code = JSON.parse(code);
                    let coded = `<pre>
                                    <code id="codii" class="language-${code.language}">
                                        ${code.code}
                                    </code>
                                </pre>`
                    $("#class_container").html(coded);
                    return Prism.highlightElement(document.getElementById('codii'));
                }
                $.ajax({
                    url: api_url + `admin/get_lecture_code/${code_link}`,
                    beforeSend: () => {
                        $("#class_container").html(`
            <div class="d-flex justify-content-center opacity-50 align-self-center mt-lg-22 mt-md-16 mt-13" id="loader2">
                <div class="spinner-border text-white" style="width: 5rem; height: 5rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>`);
                    }
                }).done(res => {
                    let data = res.data;
                    data = JSON.parse(data);
                    if (data) {
                        let lang = data.language;
                        let code = data.code;
                        let coded = `<pre>
                                    <code id="codii" class="language-${lang}">
                                        ${code}
                                    </code>
                                </pre>`
                        $("#class_container").html(coded);
                        Prism.highlightElement(document.getElementById('codii'))
                        let codes = {
                            language: lang,
                            code: code,
                        };
                        localStorage.setItem(`lecture_${code_link}_code`, JSON.stringify(codes));
                    }
                    $("#class_container").html(`<h3 class="text-white" style="font-family: 'Permanent Marker', cursive;">No Code Available Yet</h3>`);

                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                });
            });

            $(".text-btn").click(function (e) {
                e.preventDefault();
                let text_link = $(this).data('link');
                console.log(text_link);
                $("#text_container").html('');
                // $("#class_container").addClass('re');
                if ($('#text_container').hasClass('d-none')) {
                    $("#class_container").addClass('d-none');
                    $("#text_container").removeClass('d-none');
                    $("#video_container").addClass('d-none');
                    player.ready(function () {
                        player.pause();
                    });
                }
                checkIsSelected();
                $(this).addClass("is-selected");
                let txt = localStorage.getItem(`lecture_${text_link}_text`);
                if (txt) {
                    return $("#text_container").html(txt);
                }
                $.ajax({
                    url: api_url + `admin/get_lecture_text/${text_link}`,
                    beforeSend: () => {
                        $("#text_container").html(`
            <div class="d-flex justify-content-center opacity-50 align-self-center mt-lg-22 mt-md-16 mt-13" id="loader2">
                <div class="spinner-border text-white" style="width: 5rem; height: 5rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>`);
                    }
                }).done(res => {
                    console.log(res);
                    let data = res.data;
                    if (data) {
                        $("#text_container").html(data);
                        localStorage.setItem(`lecture_${text_link}_text`, data);
                    }
                    $("#class_container").removeClass('d-none');
                    $("#class_container").html(`<h3 class="text-white" style="font-family: 'Permanent Marker', cursive;">No Text Available Yet</h3>`);
                    $("#text_container").addClass('d-none');
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    $("#text_container").html("");
                });

            });

            $(".push-btn").click(function (e) {
                e.preventDefault();
                let selected = document.getElementsByClassName("is-selected")[0];
                selected.classList.add('d-none');
            })
        });
    </script>

@endsection
