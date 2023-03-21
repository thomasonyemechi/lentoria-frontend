@extends('layouts.instructor')
@section('page_title','Lentoria || Learning')
@section('page_content')

    <style>
        .text-ellipsis {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        @supports (-webkit-line-clamp: 2) {
            .text-ellipsis {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: initial;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }

        }

        .meter {
            height: 4px;
            position: relative;
            background: #e2dfee;
            border-radius: 25px;
            padding: 0;
            box-shadow: inset 0 -1px 1px rgba(255, 255, 255, 0.3);
        }

        .meter > span {
            display: block;
            height: 100%;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            background-color: #036;
            /*background-image: linear-gradient(center bottom, rgb(43, 194, 83) 37%, rgb(84, 240, 84) 69%);*/
            box-shadow: inset 0 2px 9px rgba(255, 255, 255, 0.3),
            inset 0 -2px 6px rgba(0, 0, 0, 0.4);
            position: relative;
            overflow: hidden;
        }
    </style>
    <!-- Page Content -->
    <div class="py-lg-8 py-0 bg-auto mb-0"
         style="background: url(../../assets/images/hero/hero-graphics.svg)no-repeat , linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%), rgba(221, 218, 255, 0.3) ; background-size: cover; background-position: top center;">
        <div class="container">
            <!-- Hero Section -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="py-8 py-lg-0 text-center">
                        <h1 class="display-4 fw-bold mb-0 text-primary"><span class="text-dark px-0 px-md-0">Build Better</span>
                            <span class="headingTyped text-primary"></span>
                        </h1>
                        <p class="mb-4 h4 text-dark">
                            watch, play, learn, make, discover and build skills with courses on lentoria
                        </p>
                        <div class="mt-8 mb-0">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- my learning -->


    <div class="row mx-lg-16 py-lg-8 mb-0">
        <div class="col-md-12 px-4 text-center text-sm-start">
            <h2 class="mb-1 display-5 ">Let's Starting Learning, {{user()->lastname}}</h2>
        </div>
        <div class="row mx-auto my_courses">
            <div class="pt-8 d-flex justify-content-center align-items-center opacity-50 loader">
                <div class="spinner-border fs-3 text-bold text-black-100" style="width: 4rem; height: 4rem;"
                     role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <!-- container -->
    <div class="row mx-lg-16 py-lg-8 mb-0">
        <div class="py-8 py-lg-0 bg-light-gradient-bottom mt-0">
            <div class="row ms-2">
                <div class="col-md-12">
                    <h2 class="mb-1 display-5 fw-bold">Enroll in similar courses</h2>
                    <p class="mb-4 lead">Choose from 32,000 online video courses with new additions published
                        every month.</p>
                </div>
            </div>

            <div class="row mx-auto similar_courses">
                <div class="pt-8 d-flex justify-content-center align-items-center opacity-50 loader2">
                    <div class="spinner-border fs-3 text-bold text-black-100" style="width: 4rem; height: 4rem;"
                         role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script>
        $(function () {
            getMyCourses();
            getSimilarCourses();

            function putLinkByType(type,slug){
                const links = {
                    '4': `/my-courses/t/ebooks/${slug}`,
                    'default': `/my-courses/${slug}`,
                };

                return links[type] || links['default'];

            }

            function getMyCourses() {
                $.get(`${api_url}user/courses`).done(res => {
                    const data = res.data;
                    $(".loader").remove();
                    if (data.length > 0) {
                        data.forEach(course => {
                            $(".my_courses").append(`
                            <div class="item col-6 col-sm-4 col-md-3 d-flex align-items-stretch">
                                <div class="card mb-4 card-hover">
                                    <a href="${putLinkByType(course.course_type,course.slug)}" class="card-img-top"><img
                                            src="${imageUrl(course.image)}" alt="" onerror="this.src='../../assets/images/image.jpeg'"
                                            class="rounded-top-md card-img-top"></a>
                                    <div class="card-body">
                                        <h4 class="mb-2 text-ellipsis">
                                            <a href="${putLinkByType(course.course_type,course.slug)}" class="text-inherit">${course.title}</a>
                                        </h4>
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item"><i class="fa fa-book me-1"></i>${course.lectures_count} lectures</li>
                                        </ul>
                                        <span class="fs-6">
                                            <a href="${putLinkByType(course.course_type,course.slug)}">START COURSE</a>
                                        </span>
                                    </div>
                                </div>
                            </div>`)
                        });
                    } else {
                        $(".my_courses").append(
                            `<div class="text-center mt-4">
                                <h4 class="text-gray-500">No courses purchased yet</h4>
                            </div>`
                        )
                    }
                }).fail(res => {
                    console.log(res);
                })
            }

            function getSimilarCourses() {
                $.get(`${api_url}user/similar_courses`).done(res => {
                    const data = res.data;
                    $(".loader2").remove();
                    if (data.length > 0) {
                        data.forEach(course => {
                            $(".similar_courses").append(`
                        <div class="item col-6 col-sm-4 col-md-3 d-flex align-items-stretch">
                            <div class="card mb-4 card-hover">
                                <a href="/course/${course.id}/${course.slug}" class="card-img-top">
                                    <img src="${imageUrl(course.image)}" alt="" onerror="this.src='../../assets/images/image.jpeg'"
                                         class="card-img-top rounded-top-md"></a>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h3 class="h4 mb-2 text-truncate-line-2 ">
                                        <a href="/course/${course.id}/${course.slug}" class="text-inherit">${course.title}</a>
                                    </h3>
                                     <ul class="mb-3 list-inline">
                                    <li class="list-inline-item">
                                        <svg class="me-1 mt-n1" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            ${levelBar(course.level)}
                                        </svg>
                                        ${checkLevel(course.level)}
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span class="text-bold font-weight-bolder fs-3 text-black">
                                       ${naira(percentage(course.price, 50))}
                                    </span>
                                    <span class="text-bold text-decoration-line-through fs-4 text-black">${naira(course.price)}</span>
                                </div>
                                </div>
                                <!-- Card footer -->
                               <div class="card-footer">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto">
                                        <img src="../../assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ms-2">
                                        <span>${course.user.firstname} ${course.user.lastname}</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="text-muted bookmark">
                                            <i class="fe fe-bookmark"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                       </div>
                            `)
                        })
                    } else {
                        $(".similar_courses").append(`
                            <div class="text-center mt-2">
                                <h4 class="text-gray-500">No similar courses available</h4>
                            </div>`);
                    }
                })
            }

        })

    </script>

@endsection
