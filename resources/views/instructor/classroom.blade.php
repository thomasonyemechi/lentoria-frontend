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

        .blackboard3:before {
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
                                    <h1 class="text-truncate-line-2 mb-0 tit">Instructor Class Board</h1>
                                </div>
                                <div class="col-sm-12 col-lg-7 col-md-7 d-lg-flex d-md-flex justify-content-lg-end justify-content-md-end align-self-auto btns">
                                    <span class="bt p-sm-0 d-none">
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom vid-btn"><i
                                                    class="mdi mdi-video" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom img-btn"><i
                                                    class="mdi mdi-image" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom msg-btn"><i
                                                    class="mdi mdi-file-document" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom code-btn"><i
                                                    class="mdi mdi-xml" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-primary btn-sm classroom comm-btn"><i
                                                    class="mdi mdi-comment-account" style="font-size: 26px;"></i></a>
                                        <a href="javascript:void(0)" class="text-success btn-sm classroom push-btn"
                                           id="push_btn"><i class="mdi mdi-send" style="font-size: 26px;"></i></a>
                                    </span>
                                </div>
                            </div>
                            <!-- Video -->
                            <div class="embed-responsive d-block p-0 blackboard"
                                 id="class_container" style="height: 300px;">

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
                            <a class="mb-2 d-flex justify-content-between align-items-center load-con text-decoration-none" data-vid="${lecs.main_content}" data-img="${lecs.image}" style="cursor: pointer;">
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
                console.log(img_link, video_link);
                let span = $(".btns").find($("span")).removeClass('d-none');
                let img_btn = $(".img-btn").attr('data-link', img_link);
                let vid_btn = $(".vid-btn").attr('data-link', video_link);
            });

            $(".img-btn").click(function (e) {
                e.preventDefault();
                let img_link = $(this).data('link');
                let img = `<img src="${imageUrl(img_link)}" class="w-100 h-100"/>`;
                $("#class_container").html(img);
                // $("#class_container").addClass('re');
            })
        });
    </script>

@endsection
