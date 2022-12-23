<style>
    .five-line {
        text-overflow: ellipsis;
        overflow: hidden;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        white-space: normal;
        -webkit-line-clamp: 5;
    }

    @media (min-width: 1200px) {
        header.navbar-sticky-on {
            position: fixed;
            z-index: 1020;
            top: 0;
            left: 0;
            right: 0;
            background-color: #fff;
            -webkit-animation: fadeInDown 0.5s;
            animation: fadeInDown 0.5s;
            width: 100%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        header.navbar-sticky-on .navbar-top {
            display: none !important;
        }

        header.navbar-sticky-on .navbar-brand {
            padding: 14px 0;
        }

        header.navbar-sticky-on .navbar-brand .navbar-brand-item {
            height: 22px;
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
                               href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fe fe-bell"></i>
                            </a>
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
                                                Instructor
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="{{route('my-courses.learning')}}">
                                            My Learning
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            My Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            My Wishlist
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Purchase History
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Public Profile
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="fe fe-power me-2"></i>Sign Out
                                        </a>
                                    </li>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarBrowse"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               data-bs-display="static">
                                Course Categories
                            </a>
                            <ul class="dropdown-menu dropdown-menu-arrow" data-bs-auto-close="outside"
                                style="width:200px"
                                id="drop_categories" aria-labelledby="navbarBrowse">

                            </ul>
                        </li>
                    </ul>
                    <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
                    <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                        <input type="search" class="form-control ps-6" placeholder="Search Courses"/>
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
                                   href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="fe fe-bell"></i>
                                </a>
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
                                                    Instructor
                                                </a>
                                            </li>
                                        @endif
                                        <li>
                                            <a class="dropdown-item" href="{{route('my-courses.learning')}}">
                                                My Learning
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                My Cart
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                My Wishlist
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                Purchase History
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                Public Profile
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}">
                                                <i class="fe fe-power me-2"></i>Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

@endif

<script>
    $(function () {
        let jsonfile = `{{asset('json_files/categories_and_subcategories.json')}}`
        getCats()

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
                    <a class="dropdown-item spe dropdown-list-group-item dropdown-toggle show fw-light" href="javascript:void(0)" aria-expanded="false">${cats.name}</a>
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
    });
</script>
