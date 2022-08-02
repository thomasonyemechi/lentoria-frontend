@extends('layouts.instructor')

@section('page_title')
Add Courses
@endsection

@section('page_content')
<div class="py-4 py-lg-6 bg-primary">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <!-- Content -->
                    <div class="mb-4 mb-lg-0">
                        <h1 class="text-white mb-1">Add New Course</h1>
                        <p class="mb-0 text-white lead">
                            Just fill the form and create your courses.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('instructor.courses') }}" class="btn btn-white ">Back to Course</a>
                        <a href="javascript:void(0)" class="btn btn-success ">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content -->
<div class="pb-12">
    <div class="container">
        <div id="courseForm" class="bs-stepper">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                    <!-- Stepper Button -->
                    <div class="bs-stepper-header shadow-sm" role="tablist">
                        <div class="step" data-target="#test-l-1">
                            <button type="button" class="step-trigger" role="tab" id="courseFormtrigger1"
                                aria-controls="test-l-1">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Basic Information</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-2">
                            <button type="button" class="step-trigger" role="tab" id="courseFormtrigger2"
                                aria-controls="test-l-2">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Courses Media</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-3">
                            <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3"
                                aria-controls="test-l-3">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Sections</span>
                            </button>
                        </div>
                        <div class="bs-stepper-line"></div>
                        <div class="step" data-target="#test-l-4">
                            <button type="button" class="step-trigger" role="tab" id="courseFormtrigger4"
                                aria-controls="test-l-4">
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Settings</span>
                            </button>
                        </div>
                    </div>
                    <!-- Stepper content -->
                    <div class="bs-stepper-content mt-5">
                        <form onSubmit="return false">
                            <!-- Content one -->
                            <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade"
                                aria-labelledby="courseFormtrigger1">
                                <!-- Card -->
                                <div class="card mb-3 ">
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0">Basic Information</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="courseTitle" class="form-label">Course Title</label>
                                            <input id="courseTitle" class="form-control" type="text"
                                                placeholder="Course Title" />
                                            <small>Write a 60 character course title.</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="courseSubTitle" class="form-label">Course Subtitle</label>
                                            <input id="courseTitle" class="form-control" type="text"
                                                placeholder="Course Subtitle" />
                                            <small>Write a subtitle for this course</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="purpose" class="form-label">Who is this course for</label>
                                            <input id="purpose" class="form-control" type="text"
                                                placeholder="Who is this course for ?" />
                                            <small>Write what kind of audience you are expecting</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Language</label>
                                            <select class="selectpicker" data-width="100%">
                                                <option value="">Select Language</option>
                                                <option value="React">English</option>
                                                <option value="Javascript">Yoruba</option>
                                                <option value="HTML">Igbo</option>
                                                <option value="Vue">Hausa</option>
                                            </select>
                                            <small>Select the language for your course</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Courses category</label>
                                            <select class="selectpicker" data-width="100%">
                                                <option value="">Select category</option>
                                                <option value="React">React</option>
                                                <option value="Javascript">Javascript</option>
                                                <option value="HTML">HTML</option>
                                                <option value="Vue">Vue js</option>
                                                <option value="Gulp">Gulp js</option>
                                            </select>
                                            <small>Help people find your courses by choosing
                                                categories that represent your course.</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Courses level</label>
                                            <select class="selectpicker" data-width="100%">
                                                <option value="">Select level</option>
                                                <option value="intermediate">Intermediate</option>
                                                <option value="Beignners">Beignners</option>
                                                <option value="Advance">Advance</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Course Description</label>
                                            <div id="editor">
                                                <p>Insert course description</p>
                                                <p>Some initial <strong>bold</strong> text</p>
                                                <p><br /></p>
                                            </div>
                                            <small>A brief summary of your courses.</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <button class="btn btn-primary" onclick="courseForm.next()">
                                    Next
                                </button>
                            </div>
                            <!-- Content two -->
                            <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"
                                aria-labelledby="courseFormtrigger2">
                                <!-- Card -->
                                <div class="card mb-3  border-0">
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0">Courses Media</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="custom-file-container" data-upload-id="courseCoverImg"
                                            id="courseCoverImg">
                                            <label class="form-label">Course cover image
                                                <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                                    title="Clear Image"></a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file"
                                                    class="custom-file-container__custom-file__custom-file-input"
                                                    accept="image/*" />
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <small class="mt-3 d-block">Upload your course image here. It must meet
                                                our
                                                course image quality standards to be accepted.
                                                Important guidelines: 750x422 pixels; .jpg, .jpeg,.
                                                gif, or .png. no text on the image.</small>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                        <div>
                                            <input type="url" class="form-control" placeholder="Video URL" />
                                        </div>
                                        <small class="mt-3 d-block">Enter a valid video URL. Students who watch a
                                            well-made promo video are 5X more likely to enroll in
                                            your course.
                                        </small>
                                        <div class="mt-3 d-flex justify-content-center position-relative rounded py-14 border-white border rounded bg-cover"
                                            style="background-image: {{ asset('assets/images/course/course-javascript.jpg') }};">
                                            <a class="popup-youtube icon-shape rounded-circle btn-play icon-xl text-decoration-none"
                                                href="https://www.youtube.com/watch?v=JRzWRZahOVU">
                                                <i class="fe fe-play fs-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-secondary" onclick="courseForm.previous()">
                                        Previous
                                    </button>
                                    <button class="btn btn-primary" onclick="courseForm.next()">
                                        Next
                                    </button>
                                </div>
                            </div>
                            <!-- Content three -->
                            <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade"
                                aria-labelledby="courseFormtrigger3">
                                <!-- Card -->
                                <div class="card mb-3  border-0">
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0">Setions</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body ">
                                        <div class="bg-light rounded p-2 mb-4">
                                            <h4>Introduction to JavaScript</h4>
                                            <!-- List group -->
                                            <div class="list-group list-group-flush border-top-0" id="courseList">
                                                <div id="courseOne">
                                                    <div class="list-group-item rounded px-3 mb-1" id="introduction">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="text-inherit">
                                                                    <i
                                                                        class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                    <span class="align-middle">Introduction</span>
                                                                </a>
                                                            </h5>
                                                            <div><a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                <a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fe fe-trash-2 fs-6"></i></a>
                                                                <a href="#" class="text-inherit" aria-expanded="true"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapselistOne"
                                                                    aria-controls="collapselistOne">
                                                                    <span class="chevron-arrow"><i
                                                                            class="fe fe-chevron-down"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapselistOne" class="collapse show"
                                                            aria-labelledby="introduction" data-bs-parent="#courseList">
                                                            <div class="card-body">
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Article +</a>
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Description +</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item rounded px-3 mb-1" id="development">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="text-inherit">
                                                                    <i
                                                                        class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                    <span class="align-middle">Installing
                                                                        Development Software</span>
                                                                </a>
                                                            </h5>
                                                            <div><a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                <a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fe fe-trash-2 fs-6"></i></a>
                                                                <a href="#" class="text-inherit"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapselistTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapselistTwo">
                                                                    <span class="chevron-arrow"><i
                                                                            class="fe fe-chevron-down"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapselistTwo" class="collapse"
                                                            aria-labelledby="development" data-bs-parent="#courseList">
                                                            <div class="card-body">
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Article +</a>
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Description +</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item rounded px-3 mb-1" id="project">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="text-inherit">
                                                                    <i
                                                                        class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                    <span class="align-middle">Hello World Project
                                                                        from GitHub</span>
                                                                </a>
                                                            </h5>
                                                            <div><a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                <a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fe fe-trash-2 fs-6"></i></a>
                                                                <a href="#" class="text-inherit"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapselistThree"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapselistThree">
                                                                    <span class="chevron-arrow"><i
                                                                            class="fe fe-chevron-down"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div id="collapselistThree" class="collapse"
                                                            aria-labelledby="project" data-bs-parent="#courseList">
                                                            <div class="card-body">
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Article +</a>
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Description +</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item rounded px-3 mb-1" id="sample">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="text-inherit">
                                                                    <i
                                                                        class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                    <span class="align-middle">Our Sample
                                                                        Website</span>
                                                                </a>
                                                            </h5>
                                                            <div><a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                <a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fe fe-trash-2 fs-6"></i></a>
                                                                <a href="#" class="text-inherit"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapselistFour"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapselistFour">
                                                                    <span class="chevron-arrow"><i
                                                                            class="fe fe-chevron-down"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div id="collapselistFour" class="collapse"
                                                            aria-labelledby="sample" data-bs-parent="#courseList">
                                                            <div class="card-body">
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Article +</a>
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Description +</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary btn-sm mt-3"
                                                data-bs-toggle="modal" data-bs-target="#addLectureModal">Add Lecture
                                                +</a>
                                        </div>
                                        <div class="bg-light rounded p-2 mb-4">
                                            <h4>JavaScript Beginnings</h4>

                                            <!-- List group -->
                                            <div class="list-group list-group-flush border-top-0" id="courseListSecond">
                                                <div id="courseTwo">
                                                    <div class="list-group-item rounded px-3 mb-1"
                                                        id="introductionSecond">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="text-inherit">
                                                                    <i
                                                                        class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                    <span class="align-middle">Introduction</span>
                                                                </a>
                                                            </h5>
                                                            <div><a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                <a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fe fe-trash-2 fs-6"></i></a>
                                                                <a href="#" class="text-inherit"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapselistFive"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapselistFive">
                                                                    <span class="chevron-arrow"><i
                                                                            class="fe fe-chevron-down"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div id="collapselistFive" class="collapse"
                                                            aria-labelledby="introductionSecond"
                                                            data-bs-parent="#courseListSecond">
                                                            <div class="card-body">
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Article +</a>
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Description +</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item rounded px-3 mb-1"
                                                        id="developmentSecond">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="text-inherit">
                                                                    <i
                                                                        class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                    <span class="align-middle">Installing
                                                                        Development Software</span>
                                                                </a>
                                                            </h5>
                                                            <div><a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                <a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fe fe-trash-2 fs-6"></i></a>
                                                                <a href="#" class="text-inherit"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapselistSix"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapselistSix">
                                                                    <span class="chevron-arrow"><i
                                                                            class="fe fe-chevron-down"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div id="collapselistSix" class="collapse"
                                                            aria-labelledby="developmentSecond"
                                                            data-bs-parent="#courseListSecond">
                                                            <div class="card-body">
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Article +</a>
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Description +</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item rounded px-3 mb-1" id="projectSecond">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="text-inherit">
                                                                    <i
                                                                        class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                    <span class="align-middle">Hello World Project
                                                                        from GitHub</span>
                                                                </a>
                                                            </h5>
                                                            <div><a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                <a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fe fe-trash-2 fs-6"></i></a>
                                                                <a href="#" class="text-inherit"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapselistSeven"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapselistSeven">
                                                                    <span class="chevron-arrow"><i
                                                                            class="fe fe-chevron-down"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div id="collapselistSeven" class="collapse"
                                                            aria-labelledby="projectSecond"
                                                            data-bs-parent="#courseListSecond">
                                                            <div class="card-body">
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Article +</a>
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Description +</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item rounded px-3 mb-1" id="sampleSecond">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">
                                                                <a href="#" class="text-inherit">
                                                                    <i
                                                                        class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                    <span class="align-middle">Our Sample
                                                                        Website</span>
                                                                </a>
                                                            </h5>
                                                            <div><a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                <a href="#" class="me-1 text-inherit"
                                                                    data-bs-toggle="tooltip" data-placement="top"
                                                                    title="Delete"><i
                                                                        class="fe fe-trash-2 fs-6"></i></a>
                                                                <a href="#" class="text-inherit"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapselistEight"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapselistEight">
                                                                    <span class="chevron-arrow"><i
                                                                            class="fe fe-chevron-down"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div id="collapselistEight" class="collapse"
                                                            aria-labelledby="sampleSecond"
                                                            data-bs-parent="#courseListSecond">
                                                            <div class="card-body">
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Article +</a>
                                                                <a href="#" class="btn btn-secondary btn-sm">Add
                                                                    Description +</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary btn-sm mt-3"
                                                data-bs-toggle="modal" data-bs-target="#addLectureModal">Add Lecture
                                                +</a>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#addSectionModal">Add Section</a>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-secondary" onclick="courseForm.previous()">
                                        Previous
                                    </button>
                                    <button class="btn btn-primary" onclick="courseForm.next()">
                                        Next
                                    </button>
                                </div>
                            </div>
                            <!-- Content four -->
                            <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade"
                                aria-labelledby="courseFormtrigger4">
                                <!-- Card -->
                                <div class="card mb-3  border-0">
                                    <div class="card-header border-bottom px-4 py-3">
                                        <h4 class="mb-0">Requirements</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <input name='tags' value='jquery, bootstrap' autofocus>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-22">
                                    <!-- Button -->
                                    <button class="btn btn-secondary mt-5" onclick="courseForm.previous()">
                                        Previous
                                    </button>
                                    <button type="submit" class="btn btn-danger mt-5">
                                        Submit For Review
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
