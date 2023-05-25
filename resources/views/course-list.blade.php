@extends('layouts.instructor')
@section('page_title', 'Lentoria || Course List')

@section('page_content')
    <style>
        /* Card styles */
        .card {
            border: none;
            box-shadow: none;
            background-color: #fff;
        }

        .card-body {
            padding: 16px;
        }

        .card-footer {
            background-color: #fff;
            padding: 16px;
        }

        /* Skeleton styles */
        .skeleton-loader {
            position: relative;
        }

        .skeleton-img {
            width: 100%;
            height: 150px;
            background-color: #f3f3f3;
            animation: pulse 1s ease-in-out infinite;
        }

        .skeleton-text {
            width: 100%;
            height: 16px;
            margin-bottom: 8px;
            background-color: #f3f3f3;
            animation: pulse 1s ease-in-out infinite;
        }

        .skeleton-rating {
            width: 80px;
            height: 16px;
            background-color: #f3f3f3;
            margin-bottom: 8px;
            display: inline-block;
            vertical-align: middle;
            animation: pulse 1s ease-in-out infinite;
        }

        .skeleton-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f3f3f3;
            display: inline-block;
            vertical-align: middle;
            animation: pulse 1s ease-in-out infinite;
        }

        .skeleton-bookmark {
            width: 24px;
            height: 24px;
            background-color: #f3f3f3;
            border-radius: 50%;
            display: inline-block;
            vertical-align: middle;
            animation: pulse 1s ease-in-out infinite;
        }

        @keyframes pulse {
            0% {
                opacity: 0.5;
            }
            50% {
                opacity: 0.8;
            }
            100% {
                opacity: 0.5;
            }
        }

    </style>
    <!-- Page header -->
    <div class="bg-primary py-4 py-lg-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div>
                        <h1 class="mb-0 text-white display-4">Lentoria Courses</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                    <div class="row d-lg-flex justify-content-between align-items-center">
                        <div class="col-md-6 col-lg-8 col-xl-9" id="length_info">
                            <h4 class="mb-3 mb-lg-0">Displaying 9 out of 68 courses</h4>
                        </div>
                        <div class="d-inline-flex col-md-6 col-lg-4 col-xl-3 ">
                            <!-- List  -->
                            <select class="selectpicker" data-width="100%">
                                <option value="">Sort by</option>
                                <option value="Newest">Newest</option>
                                <option value="Free">Free</option>
                                <option value="Most Popular">Most Popular</option>
                                <option value="Highest Rated">Highest Rated</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12 mb-4 mb-lg-0">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">

                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Filter</h4>
                                <a id="clearFilters" style="cursor: pointer" class="mb-0">Clear Filters</a>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body border-top">
                            <span class="dropdown-header px-0 mb-2">Level</span>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" name="course_level" class="form-check-input" value="1"
                                       id="beginnerTwoCheck">
                                <label class="form-check-label" for="beginnerTwoCheck">Beginner</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" name="course_level" class="form-check-input" value="2"
                                       id="intermediateCheck">
                                <label class="form-check-label" for="intermediateCheck">Intermediate</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" name="course_level" class="form-check-input" value="3"
                                       id="AdvancedTwoCheck">
                                <label class="form-check-label" for="AdvancedTwoCheck">Advanced</label>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <span class="dropdown-header px-0 mb-2">Type</span>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" name="course_type" class="form-check-input" value="1"
                                       id="courseLevelOne">
                                <label class="form-check-label" for="courseLevelOne">Virtual Live Trainings</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" name="course_type" class="form-check-input" value="2"
                                       id="courseLevelTwo">
                                <label class="form-check-label" for="courseLevelTwo">Recorded Courses</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" name="course_type" class="form-check-input" value="3"
                                       id="courseLevelThree">
                                <label class="form-check-label" for="courseLevelThree">Discovery Programs</label>
                            </div>
                            <div class="form-check mb-1">
                                <input type="checkbox" name="course_type" class="form-check-input" value="4"
                                       id="courseLevelFour">
                                <label class="form-check-label" for="courseLevelFour">E-books</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class="col-xl-9 col-lg-9 col-md-8 col-12">

                    <div class="row d-none" id="item_list"></div>
                    <div id="skeleton_loaders" class="row d-none">
                    </div>
                </div>
            </div>
            <div id="paginated_links"></div>
        </div>
    </div>

    <script>
        $(function () {
            const searchParams = new URLSearchParams(window.location.search);
            const searchValue = searchParams.get("q");

            getCourses(searchValue, `${api_url}search_courses`);


            function getCourses(input, uri) {
                const courseLevels = [];
                const courseTypes = [];

                const category_slug = `{{isset($slug) && $slug && $slug !== 'null' ? $slug : ''}}`;
                // get all selected course levels
                $('input[name="course_level"]:checked').each(function () {
                    courseLevels.push($(this).val());
                });
                // get all selected course types
                $('input[name="course_type"]:checked').each(function () {
                    courseTypes.push($(this).val());
                });

                $.ajax({
                    method: "POST",
                    url: uri,
                    data: {
                        query: input,
                        course_level: courseLevels,
                        course_type: courseTypes,
                        category_slug: category_slug ?? ''
                    },
                    beforeSend: () => {
                        let loaders = ``;
                        for (let i = 0; i < 12; i++) {
                            loaders += `
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4 card-hover skeleton-loader">
                                    <div class="skeleton-img"></div>
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2 skeleton-text"></h4>
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item skeleton-text"></li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="skeleton-rating"></span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <div class="skeleton-avatar"></div>
                                            </div>
                                            <div class="col ms-2 skeleton-text"></div>
                                            <div class="col-auto">
                                                <div class="skeleton-bookmark"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`
                        }
                        $("#skeleton_loaders").html(loaders).removeClass('d-none');
                    }
                }).done(res => {
                    console.log(res);
                    $("#skeleton_loaders").addClass('d-none');
                    const items_container = $("#item_list");
                    const data = res.data.data;
                    const total = res.total;

                    if (!data || data.length === 0) {
                        items_container.html(
                            `<div class="col-12 mt-3 text-center d-flex flex-column justify-content-center align-items-center">
                            <img src="/assets/images/data_not_found.svg" width="300px" height="150px" alt="not found">
                            <h3 class="text-muted">No matching results</h3>
                            <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center search-form">
                                        <span class="position-absolute ps-3 search-icon">
                                            <i class="fe fe-search"></i>
                                        </span>
                            <input
                               class="form-control ps-6 search-again"
                               placeholder="Search again"/>
                            </form>
                            </div>`).removeClass('d-none');
                    } else {
                        let items = '';

                        const length_container = $("#length_info")
                        length_container.html(`<h4 class="mb-3 mb-lg-0">Displaying ${data.length} out of ${total} courses</h4>`)
                        data.forEach(item => {
                            items += `
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="card card-hover mb-3">
                                    <a href="/c/${item.link}" class="card-img-top" target="_blank"><img
                                            src="${imageUrl(item.image)}" onerror="this.src='../../assets/images/image.jpeg';" alt=""
                                            class="rounded-top-md card-img-top course_image"></a>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-2 text-truncate-line-2"><a href="/c/${item.link}" target="_blank"
                                                class="text-inherit" >${item.title}</a></h4>
                                        <!-- List -->
                                        <ul class="mb-3 list-inline">
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    ${levelBar(item.level)}
                                                </svg>
                                                ${checkLevel(item.level)}
                                            </li>
                                        </ul>
                                        <div class="lh-1">
                                            <span class="text-bold font-weight-bolder fs-3 text-black">
                                               ${naira(percentage(item.price, 50))}
                                            </span>
                                            <span class="text-bold text-decoration-line-through fs-4 text-black">${naira(item.price)}</span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <img src="${imageUrl(item.user.instructor.image)}" onerror="this.src='../../assets/images/avatar/avatar-1.jpg';"
                                                    class="rounded-circle avatar-xs" alt="">
                                            </div>
                                            <div class="col ms-2">
                                                <span>${item.user.firstname} ${item.user.lastname}</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-muted bookmark">
                                                    <i class="fe fe-bookmark"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`
                            return items;
                        })

                        const pagination = extractPaginationData(res);
                        items_container.html(items).removeClass('d-none');
                        $("#paginated_links").html(generatePagination(pagination));

                    }
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                })
            }

            $(document).on("click", "a.pagination-link", function (evt) {
                evt.preventDefault();
                const href = $(this).attr('href');

                console.log(href)
                getCourses(searchValue, href);
            });


            $("input[name='course_level'],input[name='course_type']").on('change', function (e) {
                e.preventDefault();
                getCourses(searchValue, `${api_url}search_courses`);
            });

            $(document).on('click', '#clearFilters', function (e) {
                e.preventDefault();
                if ($("input[name='course_type'], input[name='course_level']").is(':checked')) {
                    $("input[name='course_type'], input[name='course_level']").prop('checked', false);
                    getCourses(searchValue, `${api_url}search_courses`);
                }

            })
        })
    </script>
@endsection
