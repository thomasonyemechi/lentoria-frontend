<style>
    .five-line {
        text-overflow: ellipsis;
        overflow: hidden;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        white-space: normal;
        -webkit-line-clamp: 5;
    }

    .search-results-container {
        background-color: #fff;
        border: 1px solid #d1d7dc;
        left: 25%;
        /*padding: 1.6rem;*/
        margin-top: 0.1rem;
        position: absolute;
        right: 0;
        top: 100%;
        transform-origin: top;
        z-index: 10000;
        overflow: auto;
        padding: 0.8rem 0;
        max-width: 400px;
        border-radius: 1px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);

    }

    .search-results-close {
        position: absolute;
        top: -5px;
        right: 0;
        cursor: pointer;
    }

    .search-results li {
        padding: 0.5rem;
        cursor: pointer;
    }

    .search-results li:hover {
        background-color: #f5f5f5;
    }

    @media (width <= 990px) {
        .search-results-container {
            max-width: 100%;
            left: 0;
            margin-inline: 0.2rem;
        }
    }
</style>
@if(!request()->routeIs('instructor.course_review'))
    <header class="navbar-light">
        <nav class="navbar navbar-expand-lg navbar-default">
            <div class="container-fluid px-0">
                <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo1.png') }}" alt=""/></a>
                <!-- Mobile view nav wrap -->
                <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">
                    @if (!session('info'))
                        <li class="dropdown d-inline-block stopevent">
                            <button class="btn btn-outline-white btn-xs me-2"
                                    style="border: 1px solid #036;border-radius: 1px;" data-bs-target="#login_modal"
                                    data-bs-toggle="modal" aria-expanded="false">
                                <span>Login</span>
                            </button>
                        </li>
                        <li class="dropdown d-inline-block stopevent">
                            <button class="btn btn-primary btn-xs" data-bs-target="#signup_modal" data-bs-toggle="modal"
                                    style="border-radius: 1px;" aria-expanded="false">
                                <span>Sign up</span>
                            </button>
                        </li>
                    @endif
                    @if (session('info'))
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
                               href="#"
                               role="button" data-bs-toggle="dropdown">
                                <i class="fe fe-bell"> </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end shadow">
                                <div>
                                    <div
                                        class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                        <span class="h5 mb-0">Notifications</span>
                                        <a href="javascript:void(0)" class="text-muted"><span class="align-middle"><i
                                                    class="fe fe-settings me-1"></i></span></a>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <p class="text-muted">No notifications</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" data-bs-toggle="dropdown">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar"
                                         src="{{ userAvatar() }}"
                                         class="rounded-circle"/>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end shadow">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="{{ userAvatar() }}"
                                                 class="rounded-circle"/>
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">{{ userDetail(1) }}</h5>
                                            <p class="mb-0 text-muted">{{ userDetail(2) }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    @if (session('info')['instructor'] == 1 && !request()->is('instructor/*'))
                                        <li>
                                            <a class="dropdown-item" href="{{ route('instructor.dashboard') }}">
                                                Instructor Dashboard
                                            </a>
                                        </li>
                                    @elseif (session('info')['instructor']!=1)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('become_instructor') }}">
                                                Become Instructor
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="{{route('my-courses.learning')}}">
                                            My Learning
                                        </a>
                                    </li>
                                    {{--                                    <li>--}}
                                    {{--                                        <a class="dropdown-item" href="#">--}}
                                    {{--                                            My Cart--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a class="dropdown-item" href="#">--}}
                                    {{--                                            My Wishlist--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                </ul>--}}
                                    {{--                                <div class="dropdown-divider"></div>--}}
                                    {{--                                <ul class="list-unstyled">--}}
                                    {{--                                    <li>--}}
                                    {{--                                        <a class="dropdown-item" href="#">--}}
                                    {{--                                            Purchase History--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                </ul>--}}
                                    <div class="dropdown-divider"></div>
                                    {{--                                    <ul class="list-unstyled">--}}
                                    {{--                                        <li>--}}
                                    {{--                                            <a class="dropdown-item" href="#">--}}
                                    {{--                                                Public Profile--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                    {{--                                    <div class="dropdown-divider"></div>--}}
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}">
                                                <i class="fe fe-power me-2"></i>Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>

                <!-- Button -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <!-- Collapse -->
                <div class="collapse w-100 navbar-collapse" id="navbar-default">
                    <ul class="navbar-nav navbar-nav-scroll">
                        <li class="nav-item dropdown d-none d-md-none d-lg-block">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarBrowse"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               data-bs-display="static">
                                Course Categories
                            </a>
                            <ul class="dropdown-menu dropdown-menu-arrow"
                                style="width:200px"
                                id="drop_categories" aria-labelledby="navbarBrowse">

                            </ul>
                        </li>
                    </ul>

                    <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center search-form">
                                        <span class="position-absolute ps-3 search-icon">
                                            <i class="fe fe-search"></i>
                                        </span>
                        <input x-data @input.debounce.500ms="searchCourses($event,$event.target.value)"
                               class="form-control ps-6 search-courses"
                               placeholder="Search Courses"/>
                    </form>

                    <ul class="navbar-nav navbar-right-wrap ms-auto d-none d-lg-block">

                        @if (!session('info'))
                            <li class="dropdown d-inline-block stopevent">
                                <button class="btn btn-outline-white btn-sm"
                                        style="border: 1px solid #036;border-radius: 1px;" data-bs-target="#login_modal"
                                        data-bs-toggle="modal" aria-expanded="false">
                                    <span><big>Login</big></span>
                                </button>
                            </li>
                            <li class="dropdown d-inline-block stopevent m-1">
                                <button class="btn btn-primary btn-sm" style="border-radius: 1px;"
                                        data-bs-target="#signup_modal" data-bs-toggle="modal" aria-expanded="false">
                                    <span><big>Sign up</big></span>
                                </button>
                            </li>
                        @endif

                        @if (session('info'))
                            <li class="dropdown d-inline-block stopevent">
                                <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
                                   href="#" role="button" id="dropdownNotificationSecond" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-bell"> </i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg"
                                     aria-labelledby="dropdownNotificationSecond">
                                    <div>
                                        <div
                                            class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                            <span class="h5 mb-0">Notifications</span>
                                            <a href="javascript:void(0)" class="text-muted"><span
                                                    class="align-middle"><i
                                                        class="fe fe-settings me-1"></i></span></a>
                                        </div>
                                        <ul class="list-group list-group-flush ">
                                            <li class="list-group-item">
                                                <p class="text-muted">No notifications</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown ms-2 d-inline-block">
                                <a class="rounded-circle" href="#" data-bs-toggle="dropdown"
                                   data-bs-display="static" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{ userAvatar() }}"
                                             class="rounded-circle"/>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                                <img alt="avatar" src="{{ userAvatar() }}"
                                                     class="rounded-circle"/>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1">{{ userDetail(1) }}</h5>
                                                <p class="mb-0 text-muted">{{ userDetail(2) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        @if (session('info')['instructor'] == 1 && !request()->is('instructor/*'))
                                            <li>
                                                <a class="dropdown-item" href="{{ route('instructor.dashboard') }}">
                                                    Instructor Dashboard
                                                </a>
                                            </li>
                                        @elseif (session('info')['instructor']!=1)
                                            <li>
                                                <a class="dropdown-item" href="{{ route('become_instructor') }}">
                                                    Become Instructor
                                                </a>
                                            </li>
                                        @endif
                                        <li>
                                            <a class="dropdown-item" href="{{route('my-courses.learning')}}">
                                                My Learning
                                            </a>
                                        </li>
                                        {{--                                        <li>--}}
                                        {{--                                            <a class="dropdown-item" href="#">--}}
                                        {{--                                                My Cart--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </li>--}}
                                        {{--                                        <li>--}}
                                        {{--                                            <a class="dropdown-item" href="#">--}}
                                        {{--                                                My Wishlist--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </li>--}}
                                        {{--                                    </ul>--}}
                                        {{--                                    <div class="dropdown-divider"></div>--}}
                                        {{--                                    <ul class="list-unstyled">--}}
                                        {{--                                        <li>--}}
                                        {{--                                            <a class="dropdown-item" href="#">--}}
                                        {{--                                                Purchase History--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </li>--}}
                                        {{--                                    </ul>--}}
                                        {{--                                        <ul class="list-unstyled">--}}
                                        {{--                                            <li>--}}
                                        {{--                                                <a class="dropdown-item" href="#">--}}
                                        {{--                                                    Public Profile--}}
                                        {{--                                                </a>--}}
                                        {{--                                            </li>--}}
                                        {{--                                        </ul>--}}
                                        <div class="dropdown-divider"></div>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}">
                                                    <i class="fe fe-power me-2"></i>Sign Out
                                                </a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <ul class="search-results-container d-none hidden">
                <div class="mb-3">
                    <button type="button" class="btn-close search-results-close" aria-label="Close">
                        <i class="fe fe-x-circle"></i>
                    </button>
                </div>
                <div class="search-results">

                </div>
            </ul>
        </nav>
    </header>

@endif

<script>
    let coursesFile = `{{asset('json_files/all-courses.json')}}`;
    let courses;

    function searchCourses(event, keyword) {

        let results;
        const resultContainer = document.querySelector('.search-results-container .search-results');
        if (keyword.trim() !== '') {
            results = searchItems(courses, keyword);
            resultContainer.innerHTML = '';
            if (results && results.length > 0) {
                results.forEach(res => {
                    const li = document.createElement('li');
                    li.textContent = res.title;
                    li.dataset['link'] = res.link;
                    li.classList.add('search-result');
                    resultContainer.appendChild(li);
                })
                resultContainer.parentElement.classList.remove('d-none', 'hidden');
            } else {
                const li = document.createElement('li');
                li.textContent = "No matching result";
                resultContainer.appendChild(li);
                resultContainer.parentElement.classList.remove('d-none', 'hidden');
            }

        } else {
            resultContainer.parentElement.classList.add('d-none', 'hidden');
        }

    }

    let searchResults = document.querySelector(".search-results");
    const url = `${app_url}/c`
    searchResults.addEventListener("click", (event) => {
        if (event.target.classList.contains("search-result")) {
            const target = event.target;
            const link = target.dataset['link'];
            window.open(`${url}/${link}`, '_blank');
        }
    });


    $(function () {
        let jsonfile = `{{asset('json_files/categories_and_subcategories.json')}}`;

        getCats();

        function getCats() {
            $.getJSON(jsonfile).done(res => {
                res.data.map(cats => {
                    sub_topic = '';

                    cats.topics.map(tops => {
                        sub_topic += `
                        <li>
                            <a class="dropdown-item fw-light" href="javascript:void(0)">${tops.name}</a>
                        </li>
                        `;
                    });
                    $("#drop_categories").append(`
                <li class="dropdown-submenu dropend">
                    <a class="dropdown-item spe dropdown-list-group-item dropdown-toggle show fw-light" data-bs-toggle="dropdown" href="javascript:void(0)" aria-expanded="false">${cats.name}</a>
                    <ul class="dropdown-menu" style="width: 310px;">
                        ${sub_topic}
                    </ul>
                </li>
                    `);
                });
            }).fail(res => {
                console.log(res);
                concatError(res);
            });

        }


        $.getJSON(coursesFile).done(res => {
            courses = res;
        }).fail(res => {
            console.log(res);
            concatError(res);
        });

        $(".search-results-close").on('click', function (evt) {
            evt.preventDefault();
            const resultContainer = $(".search-results-container");
            resultContainer.addClass('d-none');
            resultContainer.addClass('hidden');

        })


        const searchForm = $(".search-form");
        searchForm.on('submit', function (event) {
            event.preventDefault();

            let input = $(this).find($("input"));
            const value = input.val();


            // Set the search parameter using the value of the input
            const searchParams = new URLSearchParams(window.location.search);
            searchParams.set("q", value);

            // Check if the current path is not "/course_list"
            if (window.location.pathname !== "/courses") {
                // Open the URL in a new tab with the updated search parameter
                const url = `${app_url}/courses?` + searchParams.toString();
                window.open(url, "_blank");
            } else {
                // Redirect to the same URL with the updated search parameter
                window.location.href = `${app_url}/courses?` + searchParams.toString();
            }

        })
    });


</script>
