@extends('layouts.instructor')
@section('page_title', 'Lentoria || Welcome')

@section('page_content')
    <style>
        .cta-btn:hover {
            color: #036;
        }
    </style>
    <div class="bg-primary-a" style="background-color: #036;">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="py-5 py-lg-0">
                        <h1 class="text-white display-4 fw-bold">Skill up with Speed</h1>
                        <p class="text-white mb-4 lead">
                            Take the first step towards learning a new skill in your career path or a completely new
                            field
                            and become a professional that is positioned to get hired by the best companies around the
                            world.
                        </p>
                        <a href="javascript:void(0)" class="btn btn-outline-white text-white mt-4">Explore courses</a>
                    </div>
                </div>
                <div class=" col-xl-7 col-lg-6 col-md-12 text-lg-end text-center">
                    <img src="{{asset('assets/images/hero/hero-img.png')}}" alt="" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-4 shadow-sm">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span class="icon-shape icon-lg bg-light-warning rounded-circle text-center
                                text-dark-warning fs-4 ">
                            <i class="fe fe-video"></i>
                        </span>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semi-bold">Quality online courses</h4>
                            <p class="mb-0">Enjoy a variety of fresh topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span
                            class="icon-shape icon-lg bg-light-warning rounded-circle text-center text-dark-warning
                                fs-4 ">
                            <i class="fe fe-users"> </i>
                        </span>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semi-bold">Innovative Instructors</h4>
                            <p class="mb-0">Have access to wide-range of expertise</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="d-flex align-items-center">
                        <span class="icon-shape icon-lg bg-light-warning rounded-circle text-center text-dark-warning
                                fs-4 ">
                            <i class="fe fe-clock"> </i>
                        </span>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semi-bold">Self-paced Learning</h4>
                            <p class="mb-0">Learn on your schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features -->
    <div class="pt-lg-12 pb-lg-3 pt-8">
        <div class="container">
            <div class="row mb-10 justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <!-- caption -->
                    <span class="text-primary-a mb-3 d-block text-uppercase fw-semi-bold ls-xl">Learn with
                        LENTORIA</span>
                    <h2 class="mb-2 display-4 fw-bold ">Become an Expert in your Career</h2>
                    <p class="lead">Acquire new skills that improves your present and prepares you for the future
                    </p>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <!-- features -->
                    <div class="mb-4">
                        <!-- icon -->
                        <div class="display-2 text-primary">
                            <i class="fe fe-settings fe-a"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>Expand your Expertise</h3>
                            <p class="fs-4">Learn skills to build technical expertise in your career</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="mb-4">
                        <div class="display-2 text-primary">
                            <i class="fe fe-user"></i>
                        </div>
                        <div class="mt-4">
                            <h3>Connect with Professionals</h3>
                            <p class="fs-4">Network with experts in your field for bigger career opportunities</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="mb-4">
                        <div class="display-2 text-primary">
                            <i class="fe fe-award"></i>
                        </div>
                        <div class="mt-4">
                            <h3>Earn a Certificate</h3>
                            <p class="fs-4">Become a well-certified professional to earn better jobs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="mb-4">
                        <div class="display-2 text-primary">
                            <i class="fe fe-users"></i>
                        </div>
                        <div class="mt-4">
                            <h3>Upskill your organization</h3>
                            <p class="fs-4">Get promoted and be more relevant in your organization</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top courses-->
    <div class="py-8 py-lg-16 bg-light-gradient-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-lg">Browse Courses</span>
                    <h2 class="mb-1 display-4 fw-bold">The world's top courses</h2>
                    <p class="mb-8 lead">Choose from online video courses with new additions published every month.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tab -->
                    <ul class="nav nav-lb-tab mb-6" id="pills-tab" role="tablist">
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="d-flex justify-content-center opacity-50 loader">
                            <div class="spinner-border text-bold fs-3 text-black-100" style="width: 5rem; height: 5rem;"
                                 role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features -->
    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">

        <div class="row bg-secondary">
            <div class="col-lg-6 m-0 p-0">

                <img src="{{asset('assets/images/coding.jpg')}}" width="100%" alt="image"/>

            </div>
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Skillup with Speed</h1>
                <h2 class="lead text-white">It does not require a lifetime to become a professional and land the
                    right job.
                    Our master classes are designed to get you to master new skills with well-planned
                    practical sessions and simplified class activities tailored towards completing certain class
                    projects</h2>
                <a href="javascript:void(0)" class="btn btn-outline-white text-white mt-4" data-bs-toggle="modal"
                   data-bs-target="#signup_modal">Learn more</a>
            </div>

        </div>

        <div class="row bg-primary">
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Learn with Comfort</h1>
                <h2 class="lead text-white">Lentoria makes it possible for you to learn from anywhere with maximum
                    comfort and at the pace that suits you.
                    Our step-by-step approach makes the entire process a lot
                    easier than you can imagine.
                    Take a bold step today and kick-start your journey to expertise
                </h2>
                <a href="" class="btn btn-outline-white text-white mt-4">Explore courses</a>
            </div>
            <div class="col-lg-6 m-0 p-0">

                <img src="{{asset('assets/images/learn.jpg')}}" width="100%" alt="image"/>

            </div>
        </div>

    </div>


    <div class="pt-lg-4 pb-lg-3 pt-4 pb-6">
        <div class="container" id="cat_pills">
            <h2>Top Categories</h2>
        </div>
    </div>

    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="row bg-primary">
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Earn Money as an Affiliate</h1>
                <h2 class="lead text-white">You can become your own boss and earn decent income promoting excellent
                    online courses, business acceleration programmes and educational resources. Our affiliate
                    programme simplifies every thing and keep you in control of your cash flow game</h2>
                <a href="{{ route('affiliate') }}" class="btn btn-outline-white text-white mt-4 cta-btn">Join Our
                    Affiliate
                    Programme</a>
            </div>
            <div class="col-lg-6 m-0 p-0">

                <img src="{{asset('assets/images/learn.jpg')}}" width="100%" alt="image"/>

            </div>
        </div>
    </div>


    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6 mb-0">
        <div class="row bg-primary mb-0">
            <div class="col-lg-6 m-0 p-0 mb-0">
                <img src="{{asset('assets/images/learn.jpg')}}" width="100%">
            </div>
            <div class="col-lg-6 text-center m-0 p-6">
                <h1 class="text-white display-4">Earn Money Sharing What You Know</h1>
                <h2 class="lead text-white">By simply sharing knowledge and experience, you can turn what you know
                    into a thriving business-generating consistent cash flow even when you are away.
                    Lentoria will make you a pro within days.
                    Nothing can be more satisfying</h2>
                <button class="btn btn-outline-white text-white mt-4 gsbtn">Become an Instructor</button>
            </div>

        </div>
    </div>

    <div class="py-lg-8 bg-light-gradient-top" style="margin-top:-17px;">
        <div class="container mt-0">
            <div class="row mt-0 mb-4 justify-content-center">
                <div class="col-lg-11 col-md-12">
                    <div class="row align-items-center">

                        <div class="col-lg-4 col-md-5 col-12 mb-6">
                            <h2 class="display-4 fw-bold">Create a Thriving Online Business</h2>
                        </div>
                        <div class="offset-lg-1 col-lg-6 col-md-7 col-12 mb-6">
                            <p class="lead">Join coaches and instructors from around the world who use Lentoria to
                                share their knowledge and wealth of experience to millions of students. We provide
                                the tools to make it easy.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <h3 class="fw-semi-bold mb-2">Generate Cash-flow</h3>
                            <p class="fs-4">Earn money every time a student purchases your course and get paid
                                directly to your bank account
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <h3 class="fw-semi-bold mb-2">Empower students</h3>
                            <p class="fs-4">Share what you know and use your wealth of experience to help others
                                become professionals in their fields.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <h3 class="fw-semi-bold mb-2">Join our community</h3>
                            <p class="fs-4">Take advantage of our active community of instructors to help you
                                through your course creation process.
                            </p>
                        </div>
                        <div class="col-md-12 mt-3 justify-content-center">
                            <a href="" class="btn btn-primary gsbtn"> Start Teaching Today</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="bg-primary-a"
         style="background-color: #036 !important; background: url(assets/images/background/course-graphics.svg)no-repeat; background-size: cover; background-position: top center;  margin: left -100px right -100px; padding-bottom: 60px; padding-top: 60px;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-12">
                    <h2 class="display-4 text-white">Join learners worldwide</h2>
                    <p class="lead text-white px-lg-12 mb-6">Effective learning starts with assessment. Learning a new
                        skill is hard work—Lentoria makes it easier.</p>
                    <div class="d-grid d-md-block">
                        <button class="btn btn-success mb-2 mb-md-0" data-bs-target="#signup_modal"
                                data-bs-toggle="modal">Start Learning
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            let jsonfile = `{{asset('json_files/course_by_type.json')}}`;
            let categoryJsonFile = `{{asset('json_files/categories.json')}}`;
            getCategories();
            getCourses();

            $(".gsbtn").click(function (e) {
                e.preventDefault();
                bt = $(".gsbtn");
                info = @js(session('info'));
                if (!info) {
                    window.location.href = "/become-instructor";
                    return;
                }
                if (info && info.instructor == 0) {
                    window.location.href = "/become-instructor";
                } else {
                    window.location.href = "instructor/dashboard";
                }
            });

            function getCourses() {
                $.getJSON(jsonfile).done(res => {
                    $(".loader").remove();
                    const data = res.data;
                    const pills_tabContent = $("#pills-tabContent");
                    const pills_tab = $("#pills-tab");
                    data.forEach((category, index) => {
                        pills_tab.append(
                            `<li class="nav-item" role="presentation">
                                <a class="nav-link ${index == 0 ? 'active' : ''}" id="pills-${stripLower(category.name)}-tab" data-bs-toggle="pill"
                                   href="#pills-${stripLower(category.name)}" role="tab"
                                   aria-controls="pills-${stripLower(category.name)}" aria-selected="${index == 0 ? "true" : "false"}">${category.name}</a>
                            </li>`
                        )

                        let course_string = '';

                        category.courses.forEach(cor => {
                            course_string += `
                                      <div class="item">
                                        <div class="card card-hover mb-3">
                                            <a href="course/${cor.id}/${cor.slug}" class="card-img-top"><img
                                                    src="${imageUrl(cor.image)}" onerror="this.src='../../assets/images/image.jpeg';" alt=""
                                                    class="rounded-top-md card-img-top course_image"></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2"><a href="course/${cor.id}/${cor.slug}"
                                                        class="text-inherit">${cor.title}</a></h4>
                                                <!-- List -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item">
                                                        <svg class="me-1 mt-n1" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            ${levelBar(cor.level)}
                                                        </svg>
                                                        ${checkLevel(cor.level)}
                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span class="text-bold font-weight-bolder fs-3 text-black">
                                                       ${naira(percentage(cor.price, 50))}
                                                    </span>
                                                    <span class="text-bold text-decoration-line-through fs-4 text-black">${naira(cor.price)}</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <img src="../../assets/images/avatar/avatar-1.jpg"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ms-2">
                                                        <span>${cor.user.firstname} ${cor.user.lastname}</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;

                        });
                        pills_tabContent.append(
                            `<div class="tab-pane fade ${index == 0 ? 'show active' : ''}" id="pills-${stripLower(category.name)}" role="tabpanel"
                             aria-labelledby="pills-${stripLower(category.name)}-tab">
                                <div class="position-relative">
                                    <ul class="controls " id="slider_${category.id}_Controls">
                                        <li class="prev">
                                            <i class="fe fe-chevron-left"></i>
                                        </li>
                                        <li class="next">
                                            <i class="fe fe-chevron-right"></i>
                                        </li>
                                    </ul>

                                    <div class="no_${category.id}_Slider">
                                        ${course_string}
                                    </div>
                                </div>
                             </div>`)

                        category.courses.forEach(cor => {
                            if ($(`.no_${cor.category_id}_Slider`).length) {
                                tns({
                                    container: `.no_${cor.category_id}_Slider`,
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
                                    controlsContainer: `#slider_${cor.category_id}_Controls`,
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
                            }
                        });
                    })
                }).fail(res => {
                    console.log(res);
                })
            }

            // function getCoursesByType() {
            //     $.getJSON(jsonfile).done(res => {
            //         console.log(res);
            //         fillCateory($('.firstSlider_body'), res.data[0]);
            //         $(".firstSlider_body").parent().prev().find($(".ctype")).html(res?.data[0]?.type);
            //         fillCateory($('.secondSlider_body'), res.data[1]);
            //         $(".secondSlider_body").parent().prev().find($(".ctype")).html(res?.data[1]?.type);
            //         fillCateory($('.thirdSlider_body'), res.data[2]);
            //         $(".thirdSlider_body").parent().prev().find($(".ctype")).html(res?.data[2]?.type);
            //         $(".loader").remove();
            //     }).fail(res => {
            //         console.log(res);
            //     });
            // }
            //
            // function fillCateory(main_body, data) {
            //     type = data?.id.toString();
            //     tab_list = $(main_body).find('.pills-tab');
            //     course_body = $(main_body).find('.firstSlider');
            //     pills = $(main_body).find('.pills-tabContent');
            //     i = 0;
            //     data?.categories.map((cat, index) => {
            //         tab_list.append(`
            //         <li class="nav-item" role="presentation">
            //             <a class="nav-link ${(i == 0) ? 'active' : ''}"  id="pills-${type}${stripLower(cat.name)}-tab" data-bs-toggle="pill" href="#pills-${type}${stripLower(cat.name)}" data-id="${type}${cat.id}"
            //                 role="tab" aria-controls="pills-${type}${stripLower(cat.name)}" aria-selected="${(i == 0) ? 'true' : 'false'}">${cat.name}</a>
            //         </li>`);
            //
            //         course_string = '';
            //
            //         cat.courses.forEach(cor => {
            //             course_string += `
            //               <div class="item">
            //                 <div class="card card-hover mb-3">
            //                     <a href="course/${cor.id}/${cor.slug}" class="card-img-top"><img
            //                             src="${imageUrl(cor.image)}" onerror="this.src='../../assets/images/image.jpeg';" alt=""
            //                             class="rounded-top-md card-img-top course_image"></a>
            //                     <!-- Card Body -->
            //                     <div class="card-body">
            //                         <h4 class="mb-2 text-truncate-line-2"><a href="course/${cor.id}/${cor.slug}"
            //                                 class="text-inherit">${cor.title}</a></h4>
            //                         <!-- List -->
            //                         <ul class="mb-3 list-inline">
            //                             <li class="list-inline-item">
            //                                 <svg class="me-1 mt-n1" width="16" height="16"
            //                                     viewBox="0 0 16 16" fill="none"
            //                                     xmlns="http://www.w3.org/2000/svg">
            //                                     ${levelBar(cor.level)}
            //                                 </svg>
            //                                 ${checkLevel(cor.level)}
            //                             </li>
            //                         </ul>
            //                         <div class="lh-1">
            //                             <span class="text-bold font-weight-bolder fs-3 text-black">
            //                                ${naira(percentage(cor.price, 50))}
            //                             </span>
            //                             <span class="text-bold text-decoration-line-through fs-4 text-black">${naira(cor.price)}</span>
            //                         </div>
            //                     </div>
            //                     <!-- Card Footer -->
            //                     <div class="card-footer">
            //                         <div class="row align-items-center g-0">
            //                             <div class="col-auto">
            //                                 <img src="../../assets/images/avatar/avatar-1.jpg"
            //                                     class="rounded-circle avatar-xs" alt="">
            //                             </div>
            //                             <div class="col ms-2">
            //                                 <span>${cor.user.firstname} ${cor.user.lastname}</span>
            //                             </div>
            //                             <div class="col-auto">
            //                                 <a href="#" class="text-muted bookmark">
            //                                     <i class="fe fe-bookmark"></i>
            //                                 </a>
            //                             </div>
            //                         </div>
            //                     </div>
            //                 </div>
            //             </div>`;
            //
            //         });
            //
            //
            //         pills.append(
            //             `<div class="tab-pane ${(i == 0) ? 'active show' : ''} fade" id="pills-${type}${stripLower(cat.name)}" role="tabpanel" data-id="${type}${cat.id}"
            //             aria-labelledby="pills-${type}${stripLower(cat.name)}-tab">
            //             <div class="position-relative">
            //
            //                 <ul class="controls" id="slider_${type}${cat.id}_Controls">
            //                     <li class="prev d-block" id="slider_${type}${cat.id}_prev">
            //                         <i class="fe fe-chevron-left"></i>
            //                     </li>
            //                     <li class="next d-block" id="slider_${type}${cat.id}_next">
            //                         <i class="fe fe-chevron-right"></i>
            //                     </li>
            //                 </ul>
            //
            //                 <div class="no_${type}${cat.id}_Slider" id="no_${type}${cat.id}_Slider">
            //                     ${course_string}
            //                 </div>
            //             </div>
            //         </div>
            //         `);
            //
            //         cat.courses.forEach(cor => {
            //             if ($(`.no_${type}${cor.category_id}_Slider`).length) {
            //                 tns({
            //                     container: `.no_${type}${cor.category_id}_Slider`,
            //                     loop: false,
            //                     startIndex: 0,
            //                     items: 1,
            //                     nav: false,
            //                     autoplay: true,
            //                     autoplayTimeout: 3500,
            //                     swipeAngle: false,
            //                     speed: 2000,
            //                     autoplayButtonOutput: false,
            //                     mouseDrag: false,
            //                     lazyload: true,
            //                     gutter: 12,
            //                     controlsContainer: `#slider_${type}${cor.category_id}_Controls`,
            //                     responsive: {
            //                         768: {
            //                             items: 2,
            //                             edgePadding: 0,
            //                         },
            //                         990: {
            //                             items: 4,
            //                             edgePadding: 8,
            //                         }
            //                     }
            //                 });
            //             }
            //         });
            //
            //         i++;
            //     });
            // }

            function getCategories() {
                $.getJSON(categoryJsonFile).done(res => {
                    res.data.map(cat => {
                        $("#cat_pills").append(`
                        <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill m-1">${cat.name}</a>
                        `);
                    });
                }).fail(res => {
                    concatError(res.responseJSON);
                });
            }
        });
    </script>
@endsection
