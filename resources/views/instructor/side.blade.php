<nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
    <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
    <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
        data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="fe fe-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="sidenav">
        <div class="navbar-nav flex-column">
            <span class="navbar-header">Plan Your Course</span>
            <ul class="list-unstyled ms-n2 mb-4">
                <li class="nav-item">
                    <a class="nav-link" href="/instructor/goals/{{ $slug }}"><i
                            class="fe fe-home nav-icon"></i>Intended learners</a>
                </li>
            </ul>
            <span class="navbar-header">Create your content</span>
            <ul class="list-unstyled ms-n2 mb-0">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fe fe-settings nav-icon"></i>Curriculum</a>
                </li>
            </ul>
            <span class="navbar-header">Publish your course</span>
            <ul class="list-unstyled ms-n2 mb-0">
                <li class="nav-item">
                    <a class="nav-link" href="/instructor/course/{{ $slug }}"><i class="fe fe-settings nav-icon"></i>Course landing page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/instructor/pricing/{{ $slug }}"><i
                            class="fe fe-settings nav-icon"></i>Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/instructor/course_message/{{ $slug }}"><i class="fe fe-settings nav-icon"></i>Course messages </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
