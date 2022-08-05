<nav class="navbar navbar-expand-lg navbar-default">
    <div class="container-fluid px-0">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo1.png') }}" alt="" /></a>
        <!-- Mobile view nav wrap -->

        <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">
            @if (!session('info'))
                <li class="dropdown d-inline-block stopevent">
                    <button class="btn btn-outline-white btn-xs me-2" style="border: 1px solid #754ffe;border-radius: 1px;"
                        data-bs-target="#login_modal" data-bs-toggle="modal" aria-expanded="false">
                        <span>Login</span>
                    </button>
                </li>
                <li class="dropdown d-inline-block stopevent">
                    <button class="btn btn-primary btn-xs" style="border-radius: 1px;" aria-expanded="false">
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
                            <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                class="rounded-circle" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow">
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                        class="rounded-circle" />
                                </div>
                                <div class="ms-3 lh-1">
                                    <h5 class="mb-1">Annette Black</h5>
                                    <p class="mb-0 text-muted">annette@geeksui.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="dropdown-item" href="#">
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
                                    My Wihslist
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
                                <a class="dropdown-item" href="#">
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
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-bs-display="static">
                        Course Categories
                    </a>
                    <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
                        <li class="dropdown-submenu dropend">
                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                Web Development
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Bootstrap</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        React
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        GraphQl</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Gatsby</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Grunt</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Svelte</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Meteor</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        HTML5</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Angular</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropend">
                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                Design
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Graphic Design</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Illustrator
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        UX / UI Design</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Figma Design</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Adobe XD</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Sketch</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Icon Design</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="course-category.html">
                                        Photoshop</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="course-category.html" class="dropdown-item">
                                Mobile App
                            </a>
                        </li>
                        <li>
                            <a href="course-category.html" class="dropdown-item">
                                IT Software
                            </a>
                        </li>
                        <li>
                            <a href="course-category.html" class="dropdown-item">
                                Marketing
                            </a>
                        </li>
                        <li>
                            <a href="course-category.html" class="dropdown-item">
                                Music
                            </a>
                        </li>
                        <li>
                            <a href="course-category.html" class="dropdown-item">
                                Life Style
                            </a>
                        </li>
                        <li>
                            <a href="course-category.html" class="dropdown-item">
                                Business
                            </a>
                        </li>
                        <li>
                            <a href="course-category.html" class="dropdown-item">
                                Photography
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
                <span class="position-absolute ps-3 search-icon">
                    <i class="fe fe-search"></i>
                </span>
                <input type="search" class="form-control ps-6" placeholder="Search Courses" />
            </form>

            <ul class="navbar-nav navbar-right-wrap ms-auto d-none d-lg-block">

                @if (!session('info'))
                    <li class="dropdown d-inline-block stopevent">
                        <button class="btn btn-outline-white btn-sm"
                            style="border: 1px solid #754ffe;border-radius: 1px;" data-bs-target="#login_modal"
                            data-bs-toggle="modal" aria-expanded="false">
                            <span><big>Login</big></span>
                        </button>
                    </li>
                    <li class="dropdown d-inline-block stopevent m-1">
                        <button class="btn btn-primary btn-sm" style="border-radius: 1px;" data-bs-target="#signup_modal"
                            data-bs-toggle="modal" aria-expanded="false">
                            <span><big>Sign up</big></span>
                        </button>
                    </li>
                @endif


                @if (session('info'))
                    <li class="dropdown d-inline-block stopevent">
                        <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
                            href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fe fe-heart"> </i>
                        </a>
                    </li>

                    <li class="dropdown ms-2 d-inline-block">
                        <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                    class="rounded-circle" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="mb-1">{{ username() }}</h5>
                                        <p class="mb-0 text-muted">braid@lentoria.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="#">
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
                                        My Wihslist
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
