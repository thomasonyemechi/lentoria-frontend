@extends('layouts.instructor')
@section('page_title',"Instructor Classroom")
@section('page_content')
    <!--suppress ProblematicWhitespace -->
    <script>
        let urlSearchParams = new URLSearchParams(window.location.search);
        let para = urlSearchParams.get('type');
        if (!para || para != 2) {
            history.back();
        }
    </script>
    <style>
        .blackboard {
            border: tan solid 12px;
            border-top: #bda27e solid 12px;
            border-left: #b19876 solid 12px;
            border-bottom: #c9ad86 solid 12px;
            box-shadow: 0 0 6px 5px rgba(58, 18, 13, 0), 0 0 0 2px #c2a782, 0 0 0 4px #a58e6f, 3px 4px 8px 5px rgba(0, 0, 0, 0.5);
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

        .re.blackboard:before {
            display: none;
        }

        .whiteboard {
            border: tan solid 12px;
            border-top: #bda27e solid 12px;
            border-left: #b19876 solid 12px;
            border-bottom: #c9ad86 solid 12px;
            box-shadow: 0 0 6px 5px rgba(58, 18, 13, 0), 0 0 0 2px #c2a782, 0 0 0 4px #a58e6f, 3px 4px 8px 5px rgba(0, 0, 0, 0.5);
        }

        .message-input {
            height: 90px !important;
        }

        .chat-avatar {
            white: 36px;
            height: 36px;
            float: left;
            margin-right: 10px;
        }

        .chat-user-name {
            padding: 10px;
        }

        .chat-user {
            padding: 8px 10px;
            border-bottom: 1px solid #e7eaec;
        }

        .chat-user a {
            color: inherit;
        }

        .chat-view {
            z-index: 20012;
        }

        .chat-users,
        .chat-statistic {
            margin-left: -30px;
        }

        @media (max-width: 992px) {
            .chat-users,
            .chat-statistic {
                margin-left: 0;
            }
        }

        .chat-view .ibox-content {
            padding: 0;
        }

        .chat-message {
            padding: 10px 20px;
        }

        .message-avatar {
            height: 48px;
            width: 48px;
            border: 1px solid #e7eaec;
            border-radius: 4px;
            margin-top: 1px;
        }

        .chat-discussion .chat-message.left .message-avatar {
            float: left;
            margin-right: 10px;
        }

        .chat-discussion .chat-message.right .message-avatar {
            float: right;
            margin-left: 10px;
        }

        .message {
            background-color: #fff;
            border: 1px solid #e7eaec;
            text-align: left;
            display: block;
            padding: 10px 20px;
            position: relative;
            border-radius: 4px;
        }

        .chat-discussion .chat-message.left .message-date {
            float: right;
        }

        .chat-discussion .chat-message.right .message-date {
            float: left;
        }

        .chat-discussion .chat-message.left .message {
            text-align: left;
            margin-left: 55px;
        }

        .chat-discussion .chat-message.right .message {
            text-align: right;
            margin-right: 55px;
        }

        .message-date {
            font-size: 10px;
            color: #888888;
        }

        .message-content {
            display: block;
        }

        .chat-discussion {
            background: #eee;
            padding: 15px;
            height: 400px;
            overflow-y: auto;
        }

        .chat-users {
            overflow-y: auto;
            height: 400px;
        }

        .chat-message-form .form-group {
            margin-bottom: 0;
        }

        .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
        }

        .ibox.collapsed .ibox-content {
            display: none;
        }

        .ibox.collapsed .fa.fa-chevron-up:before {
            content: "\f078";
        }

        .ibox.collapsed .fa.fa-chevron-down:before {
            content: "\f077";
        }

        .ibox:after,
        .ibox:before {
            display: table;
        }

        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 3px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            min-height: 48px;
        }

        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }

        .ibox-footer {
            color: inherit;
            border-top: 1px solid #e7eaec;
            font-size: 90%;
            background: #ffffff;
            padding: 10px 15px;
        }

        .message-input {
            height: 90px !important;
        }

        .form-control, .single-line {
            background-color: #FFFFFF;
            background-image: none;
            border: 1px solid #e5e6e7;
            border-radius: 1px;
            color: inherit;
            display: block;
            padding: 6px 12px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 100%;
            font-size: 14px;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }

        .btn-circle i {
            position: relative;
            top: -1px;
        }

        @media only screen and (min-width: 768px) {
            .scroller::-webkit-scrollbar {
                width: 5px;
            }

            .scroller::-webkit-scrollbar-track {
                width: 5px;
                background: #f5f5f5;
            }

            .scroller::-webkit-scrollbar-thumb {
                width: 1em;
                background-color: #ddd;
                outline: 1px solid slategrey;
                border-radius: 1rem;
            }
        }

        .load-wrapper {
            position: relative;
            height: 100%;
            width: 100%;
            background-color: rgb(211, 211, 211);
            z-index: 44;
            overflow: hidden;
            border-radius: 5px;
        }

        .activity {
            position: absolute;
            left: -45%;
            height: 100%;
            width: 45%;
            background-image: linear-gradient(to left, rgba(251, 251, 251, .05), rgba(251, 251, 251, .3), rgba(251, 251, 251, .6), rgba(251, 251, 251, .3), rgba(251, 251, 251, .05));
            background-image: -moz-linear-gradient(to left, rgba(251, 251, 251, .05), rgba(251, 251, 251, .3), rgba(251, 251, 251, .6), rgba(251, 251, 251, .3), rgba(251, 251, 251, .05));
            background-image: -webkit-linear-gradient(to left, rgba(251, 251, 251, .05), rgba(251, 251, 251, .3), rgba(251, 251, 251, .6), rgba(251, 251, 251, .3), rgba(251, 251, 251, .05));
            animation: loading 1s infinite;
            z-index: 45;
        }

        @keyframes loading {
            0% {
                left: -45%;
            }
            100% {
                left: 100%;
            }
        }

    </style>
    <div class="mt-5 course-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Tab content -->
                    <div class="tab-content content" id="course-tabContent">
                        <div class="tab-pane fade show active overflow-visible" id="btns_container">
                            <div class="row justify-content-between mb-4">
                                <div class="col-sm-12 col-lg-5 col-md-5">
                                    <h1 class="mb-0 text-capitalize tit">Instructor Class
                                        Board</h1>
                                </div>
                                <div class="col-sm-12 col-lg-7 col-md-7 d-lg-flex d-md-flex justify-content-lg-end justify-content-md-end align-self-auto btns">
                                    <span class="bt p-sm-0 d-none">
                                        <a href="javascript:void(0)"
                                           class="text-primary btn-sm classroom vid-btn"
                                           data-link="" data-lec_id="" data-type="video"><i
                                                    class="mdi mdi-video" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom img-btn"
                                           data-link="" data-lec_id="" data-type="image"><i
                                                    class="mdi mdi-image" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom text-btn"
                                           data-link="" data-lec_id="" data-type="text"><i
                                                    class="mdi mdi-file-document" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom code-btn"
                                           data-link="" data-lec_id="" data-type="code"><i
                                                    class="mdi mdi-xml" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom comm-btn"
                                           data-link="" data-lec_id="" data-type="comment"><i
                                                    class="mdi mdi-comment-account" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-success btn-sm d-none push-btn"
                                           id="push_btn"><i class="mdi mdi-send push-icon"
                                                            style="font-size: 26px;"></i></a></span>
                                </div>
                            </div>
                            <!-- Boards -->
                            <div class="embed-responsive overflow-auto p-0 blackboard board no-scroll"
                                 id="class_container" style="height: 300px;">

                            </div>
                            <div class="embed-responsive d-none overflow-auto p-0 whiteboard board no-scroll px-2 small"
                                 id="text_container" style="height: 300px;">

                            </div>
                            <div class="embed-responsive position-relative d-none p-0 blackboard board re no-scroll"
                                 id="video_container" style="height: 300px;">
                                <video-js
                                        class="position-absolute top-0 end-0 start-0 end-0 bottom-0 h-100 w-100 vjs-theme-fantasy"
                                        id="vid">
                                </video-js>
                            </div>
                            <div class="embed-responsive position-relative d-none top-0 mb-lg-10 mb-md-10 mb-sm-3 end-0 start-0 bottom-0 p-0 h-100 w-100 board scroller"
                                 id="chat_container" style="height: 300px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox">
                                            <div class="ibox-content">
                                                <strong>Commment Board</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox chat-view">
                                            <div class="ibox-title">
                                                <small class="pull-right text-muted last-sent">Last message: Mon Jan 26
                                                    2022 - 18:39:23</small>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="chat-discussion scroller" id="chat_discussion">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="chat-message-form">
                                                            <div class="form-group">
                                                                <div class="d-flex justify-content-center align-items-center border bg-white pe-2">
                                                                <textarea class="form-control message-input border-0"
                                                                          style="resize: none;"
                                                                          name="message"
                                                                          placeholder="Enter message text"></textarea>
                                                                    <button id="send-button"
                                                                            class="fw-bold btn btn-lg btn-circle btn-primary">
                                                                        <i class="fa fa-paper-plane"></i>
                                                                    </button>
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
                            <div class="pb-10 mt-4 d-block">
                                <p>Lorem ipsum dolor sit amet, consecrate radicalising elite. Blandish eis incident
                                    image ire labor molest perspicacity sed saint. Accusal delegates color,
                                    eos fugal nam defecation quasi quo. Blandish, temporise voluptuary?
                                    Lorem ipsum dolor sit amet, consecrate radicalising elite. Liquid amet consecrate
                                    consequent gulp dedent, color arum eos et facility hic ipsa image molests
                                    necessitates nemo nobs query temporary tenet valid. Lorem ipsum dolor sit amet,
                                    consecrate radicalising elite. Accusation aspersions blandish common gulp eos
                                    ipsa itaque, molestiae nam non odit officious paginator possums provident quo
                                    recusandae reprehenderit sint vel voluptates! Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Aliquid cum, deleniti distinctio doloremque ea
                                    eligendi error exercitationem facere fuga illum ipsam ipsum nulla quidem quod sit,
                                    veritatis vitae voluptate voluptatibus. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Ab eum illum nam tempora vel valid veritas voluptuous! Anime
                                    dolor dolores impeded mod nobs poor redundancy temporal temporise vel, valid,
                                    voluptuous. Lorem ipsum dolor sit amet, consecrate radicalising elite. Alias au tem
                                    equal eum face maxime necessitates deque nisei qui ration voluptuous. Aliquot
                                    liquid architect, antique dolorous laborious magna molest quits valid.
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
        <ul class="list-group list-group-flush" id="course_list">
            <li class="list-group-item">
                <h4 class="mb-0">Table of Content</h4>
            </li>
            <!-- List group item -->
            <li class="d-flex justify-content-center align-self-lg-center mt-lg-22" id="loader">
                <div class="spinner-border text-black-100" style="width: 5rem; height: 5rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </li>

        </ul>
    </div>


    <script>
        $(function () {

            const user_detail = `{{userDetail(1)}}`;
            const user_avatar = `{{userAvatar()}}`;
            $("#vid").bind("contextmenu", () => {return false;});

            const player = videojs('vid', {
                "controls": true,
                autoplay: false,
                preload: "auto",
                responsive: true,
                liveui: true,
                fill: true,
                // fluid: true,
                metadata: true,
                notSupportedMessage: "An Error Occurred While Fetching Video or No Video Available For This Course",
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
                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0 cr_con" data-bs-toggle="collapse"
                    href="#course${sections.id}" role="button" aria-expanded="false" aria-controls="#course${sections.id}">
                    <div class="me-auto sectit">
                            ${sections.title}
                    </div>
                    <span class="chevron-arrow  ms-4">
                        <i class="fe fe-chevron-down fs-4"></i>
                    </span>
                </a>
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
                        $(first).attr('aria-expanded', 'true');
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
                let img_link = $(this).data('img'), video_link = $(this).data('vid'),
                    lecture_id = $(this).data('lec_id'), lec_tit = $(this).find($(".lectit")).html(),
                    img_btn = $(".img-btn"), vid_btn = $(".vid-btn"), code_btn = $(".code-btn"),
                    text_btn = $(".text-btn"), comm_btn = $(".comm-btn"), class_container = $("#class_container");
                $(".tit").html(lec_tit);
                $(".btns").find($("span")).removeClass('d-none');
                img_btn.data('link', img_link);
                img_btn.data('lec_id', lecture_id);
                vid_btn.data('link', video_link);
                vid_btn.data('lec_id', lecture_id);
                code_btn.data('link', lecture_id);
                code_btn.data('lec_id', lecture_id);
                text_btn.data('link', lecture_id);
                text_btn.data('lec_id', lecture_id);
                comm_btn.data('lec_id', lecture_id);
                comm_btn.data('link', lecture_id);
                class_container.html('');
                $("#text_container").html('');
                hideBoards();
                class_container.removeClass('re');
                class_container.removeClass('d-none');
                Array.prototype.slice.call(document.getElementsByClassName('classroom')).forEach(el => {
                    if (el.classList.contains('d-none')) {
                        el.classList.remove('d-none');
                    }
                });
                $("#push_btn").addClass('d-none');
                $("html, body").animate({
                    scrollTop: $("#btns_container").offset().top
                }, 500);
            });


            function checkIsSelected() {
                let buttons = document.querySelectorAll(".classroom");
                Array.prototype.slice.call(buttons).forEach((el) => {
                    if (el.classList.contains('is-selected')) {
                        return el.classList.remove('is-selected');
                    }
                });
            }

            function hideBoards() {
                let boards = document.querySelectorAll(".board");
                Array.prototype.slice.call(boards).forEach((el) => {
                    if (!el.classList.contains('d-none')) {
                        return el.classList.add('d-none');
                    }
                })
            }

            function showPushBtn() {
                let push_btn = $("#push_btn")
                if (push_btn.hasClass("d-none")) {
                    return push_btn.removeClass("d-none");
                }
            }

            $(document).on('click', ".img-btn", function (e) {
                e.preventDefault();
                let img_link = $(this).data('link');
                let img = `<img src="${imageUrl(img_link)}" onerror="this.src='../../assets/images/image.jpeg'" class="w-100 h-100" />`;
                let class_container = $("#class_container");
                hideBoards();
                class_container.removeClass("d-none");
                player.ready(() => player.pause());
                class_container.html(img);
                class_container.addClass('re');
                checkIsSelected();
                $(this).addClass("is-selected");
                showPushBtn();
            });

            $(document).on('click', '.vid-btn', function (e) {
                e.preventDefault();
                let vid_link = $(this).data('link');
                // if (!player.src()) {
                player.ready(() => player.src(videoUrl(vid_link)));
                // }
                hideBoards();
                $("#video_container").removeClass("d-none")
                checkIsSelected();
                $(this).addClass("is-selected");
                showPushBtn();
            });
            $(document).on('click', '.code-btn', function (e) {
                e.preventDefault();
                let code_link = $(this).data('link');
                let class_container = $("#class_container")
                console.log(code_link);
                class_container.html('');
                class_container.addClass('re');
                hideBoards();
                player.ready(() => player.pause());
                class_container.removeClass('d-none');
                checkIsSelected();
                $(this).addClass("is-selected");
                showPushBtn();

                let code = localStorage.getItem(`lecture_${code_link}_code`);
                if (!code) {
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
                        console.log(data);
                        if (data !== null) {
                            let lang = data.language;
                            let code = data.code;
                            let coded = `<pre>
                                    <code id="codii" class="language-${lang}">
                                        ${code}
                                    </code>
                                </pre>`
                            let codes = {
                                language: lang,
                                code: code,
                            };
                            localStorage.setItem(`lecture_${code_link}_code`, JSON.stringify(codes));
                            $("#class_container").html(coded);
                            return Prism.highlightElement(document.getElementById('codii'));
                        } else {
                            return $("#class_container").html(`<h3 class="text-white" style="font-family: 'Permanent Marker', cursive;">No Code Available Yet</h3>`);
                        }
                    }).fail(res => {
                        console.log(res);
                        concatError(res.responseJSON);
                    });

                } else {
                    code = JSON.parse(code);
                    let coded = `<pre>
                                    <code id="codii" class="language-${code.language}">
                                        ${code.code}
                                    </code>
                                </pre>`
                    $("#class_container").html(coded);

                    return Prism.highlightElement(document.getElementById('codii'));
                }
            });

            $(".text-btn").click(function (e) {
                e.preventDefault();
                let text_link = $(this).data('link');
                let text_container = $("#text_container");
                text_container.html('');
                hideBoards();
                text_container.removeClass('d-none');
                player.ready(() => player.pause());
                checkIsSelected();
                $(this).addClass("is-selected");
                showPushBtn();
                let txt = localStorage.getItem(`lecture_${text_link}_text`);
                if (txt) {
                    return text_container.html(txt);
                }
                $.ajax({
                    url: api_url + `admin/get_lecture_text/${text_link}`,
                    beforeSend: () => {
                        $("#text_container").html(`
            <div class="d-flex justify-content-center align-self-center mt-lg-22 mt-md-16 mt-13" id="loader8">
                <div class="spinner-border text-black-50" style="width: 5rem; height: 5rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>`);
                    }
                }).done(res => {
                    console.log(res);
                    let data = res.data;
                    if (data) {
                        localStorage.setItem(`lecture_${text_link}_text`, data);
                        return $("#text_container").html(data);
                    } else {
                        return $("#text_container").html(`<h3 class="text-black-50" style="font-family: 'Permanent Marker', cursive;">No Text Available Yet</h3>`);
                    }
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    $("#text_container").html("");
                });

            });

            $(".comm-btn").click(function (e) {
                e.preventDefault();
                hideBoards();
                let lec_id = $(this).data('lec_id');
                $("#chat_container").removeClass('d-none');
                $("#push_btn").addClass("d-none");
                getComments(lec_id);
            });

            function getComments(lecture_id) {
                let chat_discuss = $("div.chat-discussion");
                $.ajax({
                    url: api_url + `admin/get_class_comments/${lecture_id}`,
                    beforeSend: () => {
                        chat_discuss.html(`
                            <div class="load-wrapper">
                               <div class="activity"></div>
                            </div>`)
                    }
                }).done(res => {
                    console.log(res);
                    if (res.data.length == 0) {return chat_discuss.html(" ");}
                    let chats = "";
                    res.data.forEach(chat => {
                        chats += `<div class="chat-message left">
                            <img class="message-avatar" src="${user_avatar}"
                                 alt="profile-img">
                            <div class="message">
                                <a class="message-author" href="javascript:void(0)">${user_detail}</a>
                                <span class="message-date">${formatDate(chat.created_at)}</span>
                                <span class="message-content">${chat.comment}</span>
                            </div>
                       </div>`
                    });
                    let last = res.data.pop();
                    let last_date = formatDate(last.created_at);
                    chat_discuss.html(chats);
                    $(".last-sent").html(last_date);
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    return chat_discuss.html(" ");
                })
            }

            $(".push-btn").click(function (e) {
                e.preventDefault();
                let target = e.target;
                if (!target.classList.contains('push-icon')) {return false;}
                let selected = $(".is-selected").eq(0);
                let content = selected.data('link');
                let lecture_id = selected.data('lec_id');
                let type = selected.data('type');

                let text_html = $("#text_container").html();
                let code_html = $("#class_container").html();
                if (type == "image" && content == null || content == "") {
                    return salat("No image available for this lecture", 1);
                } else if (type == "video" && content == null || content == "") {
                    return salat("No video available for this lecture", 1);
                } else if (type == "code" && code_html == `<h3 class="text-white" style="font-family: 'Permanent Marker', cursive;">No Code Available Yet</h3>`) {
                    return salat("No codes available for this lecture", 1);
                } else if (type == "text" && text_html == `<h3 class="text-black-50" style="font-family: 'Permanent Marker', cursive;">No Text Available Yet</h3>`) {
                    return salat("No text available for this lecture yet", 1);
                }

                pushContent(type, lecture_id);
            })

            $("#send-button").click(function (e) {
                e.preventDefault();
                let chat_area = $("textarea[name='message']");
                if (chat_area.val() == "") {return false;}
                let lecture_id = $(".comm-btn").data('lec_id');
                let chats = chat_area.val();
                const date = new Date();
                let formatted_date = new Intl.DateTimeFormat('en-GB', {
                    weekday: "short",
                    day: "2-digit",
                    month: "short",
                    year: "numeric",
                    hour: "2-digit",
                    minute: "2-digit",
                    second: "2-digit",
                }).format(date);

                formatted_date = formatted_date.replace(",", "").replace(",", " -");
                $.ajax({
                    url: api_url + `admin/push_to_classroom`,
                    method: "POST",
                    data: {
                        lecture_id: lecture_id,
                        content: "comment",
                        comment: chats,
                    },
                    beforeSend: () => {
                        $(this).attr('disabled', 'true');
                    }
                }).done(res => {
                    console.log(res);
                    let chat_discuss = $("div.chat-discussion");
                    if (res.message) {
                        chat_discuss.append(`
                       <div class="chat-message left">
                            <img class="message-avatar" src="${user_avatar}"
                                 alt="profile-img">
                            <div class="message">
                                <a class="message-author" href="javascript:void(0)">${user_detail}</a>
                                <span class="message-date">${formatted_date}</span>
                                <span class="message-content">${chat_area.val()}</span>
                            </div>
                       </div>`);
                        smoothScrollBottom("chat_discussion");
                        chat_area.val("");
                        $(this).removeAttr('disabled');
                    }
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    $(this).removeAttr('disabled');
                })
            })


            function pushContent(type, lec_id) {
                $.ajax({
                    url: api_url + `admin/push_to_classroom`,
                    method: "POST",
                    data: {
                        lecture_id: lec_id,
                        content: type,
                    },
                    beforeSend: () => {
                        $("#push_btn").html(`<div class="spinner-border spinner-border-sm text-success" style="width: 1.5625rem; height: 1.5625rem;" role="status"><span class="visually-hidden">Loading...</span></div>`)
                    }
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                    $("#push_btn").html(`<i class="mdi mdi-send push-icon" style="font-size: 26px;"></i>`);
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    $("#push_btn").html(`<i class="mdi mdi-send push-icon" style="font-size: 26px;"></i>`);
                });
            }

            function formatDate(date) {
                let dt = new Date(date);
                let formatted_date = new Intl.DateTimeFormat('en-GB', {
                    weekday: "short",
                    day: "2-digit",
                    month: "short",
                    year: "numeric",
                    hour: "2-digit",
                    minute: "2-digit",
                    second: "2-digit",
                }).format(dt);

                formatted_date = formatted_date.replace(",", "").replace(",", " -");
                return formatted_date;
            }

            const smoothScrollBottom = (id) => {
                const element = $(`#${id}`);
                element.animate({
                    scrollTop: element[0].scrollHeight
                }, 500);
            }

            const smoothScrollTop = (id) => {
                const element = $(`#${id}`);
                element.animate({
                    scrollTop: 0
                }, 500);
            }
        });
    </script>

@endsection
