<nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
    <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
    <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="fe fe-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="sidenav">
        <div class="navbar-nav flex-column">
            <span class="navbar-header">Course Basic Info</span>
            <ul class="list-unstyled ms-n2 mb-0">
                <li class="nav-item @if (request()->routeIs('instructor.course')) active @endif">
                    <a class="nav-link" href="/instructor/course/{{$type}}/{{ $slug }}"><i
                            class="fe fe-home nav-icon"></i>Course Information</a>
                </li>
            </ul>
            <ul class="list-unstyled ms-n2 mb-0">
                <li class="nav-item @if (request()->routeIs('instructor.learners')) active @endif">
                    <a class="nav-link" href="/instructor/goals/{{$type}}/{{ $slug }}"><i
                            class="fe fe-users nav-icon"></i>Intended learners</a>
                </li>
            </ul>
            <span class="navbar-header">Create your content</span>
            <ul class="list-unstyled ms-n2 mb-0">
                <li class="nav-item @if (request()->routeIs('instructor.curriculum')) active @endif">
                    <a class="nav-link"
                       href="/instructor/curriculum/{{$type}}/{{ $slug }}"><i
                            @class(["nav-icon","fe","fe-book-open"])></i>
                        Curriculum
                    </a>
                </li>
                @if($type == 4)
                    <li @class(['nav-item','active'=>request()->routeIs('instructor.upload-ebook')])>
                        <a class="nav-link"
                           href="/instructor/upload-ebook/{{$type}}/{{ $slug }}"><i
                                @class(["nav-icon","fe","fe-upload"])></i>
                            Upload Ebook
                        </a>
                    </li>
                @endif

            </ul>
            <span class="navbar-header">Publish your course</span>
            <ul class="list-unstyled ms-n2 mb-0">
                @if($type != 4)
                    <li class="nav-item @if (request()->routeIs('instructor.course_review')) active @endif">
                        <a class="nav-link" target="_blank"
                           href="/instructor/course_review/{{$type}}/{{ $slug }}"><i
                                class="fe fe-video nav-icon"></i>Course Preview</a>
                    </li>
                @endif
                <li class="nav-item @if (request()->routeIs('instructor.pricing')) active @endif">
                    <a class="nav-link" href="/instructor/pricing/{{$type}}/{{ $slug }}"><i
                            class="fe fe-dollar-sign nav-icon"></i>Pricing</a>
                </li>
                <li class="nav-item @if (request()->routeIs('instructor.course_message')) active @endif">
                    <a class="nav-link"
                       href="/instructor/course_message/{{$type}}/{{ $slug }}"><i
                            class="fe fe-message-circle nav-icon"></i>Course messages </a>
                </li>
            </ul>


            <span class="navbar-header">Guide</span>
            <ul class="list-unstyled ms-n2 mb-4">
                <li class="nav-item @if (request()->routeIs('instructor.faq')) active @endif">
                    <a class="nav-link" href="/instructor/faq/{{$type}}/{{ $slug }}"><i
                            class="bi bi-question nav-icon"></i>FAQ</a>
                </li>
            </ul>
            @if($type==1)
                <span class="navbar-header">Classroom</span>
                <ul class="list-unstyled ms-n2 mb-4">
                    <li class="nav-item @if (request()->routeIs('instructor.classroom')) active @endif">
                        <a class="nav-link" target="_blank"
                           href="/instructor/classroom/{{$type}}/{{ $slug }}"><i
                                class="mdi mdi-google-classroom nav-icon"></i>Classroom</a>
                    </li>
                </ul>
            @endif

            <div class="d-none publish-div">
                <span class="navbar-header">Submit for review</span>
                <ul class="list-unstyled ms-n2 mb-4">
                    <li class="nav-item d-flex justify-content-lg-center justify-content-sm-start">
                        <button class="pub-btn review-btn btn btn-xs btn-primary me-lg-4 w-100">Submit</button>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>

<script>
    $(function () {
        $(".pub-btn").click(function (e) {
            e.preventDefault();
            let but = $(this);
            let slug = @js($slug);
            $.ajax({
                url: api_url + `admin/publish_course`,
                method: "post",
                data: {
                    slug: slug,
                },
                beforeSend: () => {
                    btn(but, '', 'before');
                }
            }).done(res => {
                console.log(res);
                salat(res.message);
                btn(but, 'Submit', 'after');
                $('.publish-div').remove();
            }).fail(res => {
                console.log(res);
                err = res.responseJSON
                delete err.message;
                concatError2(err);
                btn(but, 'Submit', 'after');
            })
        })
    })
</script>
