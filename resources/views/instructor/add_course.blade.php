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
                                    <span class="bs-stepper-label">Course Type</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-2">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger2"
                                    aria-controls="test-l-2">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Course Category</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-3">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3"
                                    aria-controls="test-l-3">
                                    <span class="bs-stepper-circle">3 </span>
                                    <span class="bs-stepper-label">Course Title</span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content mt-5">
                            <form onSubmit="return false">
                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade"
                                    aria-labelledby="courseFormtrigger1">
                                    <div class="card mb-3 ">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0">Course Type</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                                                        <div class="card-body py-6">
                                                            <div class="mt-4">
                                                                <h5 class="text-white">Virtual Live Training</h5>
                                                                <p class="text-white-50 fs-6">
                                                                    Designed to replicate the experience and benefit of
                                                                    attending a face-to-face training course
                                                                </p>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-white btn-sm mt-2 seltype"
                                                                    data-type="1">Select</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                                                        <div class="card-body py-6">
                                                            <div class="mt-4">
                                                                <h5 class="text-white">Recorded Course</h5>
                                                                <p class="text-white-50 fs-6">
                                                                    Add Course Materials For Students To Learn At Their Own
                                                                    Pace
                                                                </p>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-white btn-sm mt-2 seltype"
                                                                    data-type="2">Select</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                                                        <div class="card-body py-6">
                                                            <div class="mt-4">
                                                                <h5 class="text-white">Unlimited Access</h5>
                                                                <p class="text-white-50 fs-6">
                                                                    Upgrade your plan from a Free trial, to select ‘Business
                                                                    Plan’.
                                                                    Start Now
                                                                </p>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-white btn-sm mt-2 seltype"
                                                                    data-type="3">Select</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="course_type">

                                            </div>

                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="courseForm.next()">
                                        Next
                                    </button>
                                </div>
                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"
                                    aria-labelledby="courseFormtrigger2">
                                    <div class="card mb-3  border-0">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0">Course Category</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Select Course Cateory</label>
                                                <select class="form-control" id="selectcat" data-width="100%">
                                                    <option value="">Select Cateory</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Select Course Sub-Cateory</label>
                                                <select class="form-control" id="selsubcat" data-width="100%">
                                                    <option value="">Select Sub-Cateory</option>
                                                </select>
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
                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade"
                                    aria-labelledby="courseFormtrigger3">
                                    <div class="card mb-3  border-0">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0">Course Title</h4>
                                        </div>
                                        <div class="card-body ">
                                            <div class="mb-3">
                                                <label for="courseTitle" class="form-label">Course Title</label>
                                                <div
                                                    class="d-flex justify-content-center align-items-center border bg-white pe-2">
                                                    <input id="courseTitle" name="title" class="form-control border-0"
                                                        type="text" placeholder="Course Title" maxlength="60">
                                                    <div>
                                                        <span id="count" class="fw-bold">60</span>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="mb-3">
                                                <label for="courseDesc" class="form-label">Course Subtitle</label>
                                                <input class="form-control" type="text" placeholder="Course Subtitle"
                                                    id="courseSubtitle" />
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-secondary" onclick="courseForm.previous()">
                                                    Previous
                                                </button>
                                                <button class="btn btn-primary" id="addCourse">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {

            $("#courseTitle").on("keyup", function(e) {
                e.preventDefault();
                length = $(this).val().length
                maxlength = 60;
                counter = $('#count').html(maxlength - length);
            })


            $('.seltype').on('click', function(e) {
                e.preventDefault();
                var type = $(this).data('type');
                $('#course_type').val(type);
            })

            function loadCategory() {
                selcat = $('#selectcat');
                selcat.html('<option disabled selected>Select Category</option>');
                $.ajax({
                    method: 'get',
                    url: api_url + 'admin/category',
                }).done(function(res) {
                    res.data.map(dat => {
                        selcat.append(`<option value="${dat.id}">${dat.name}</option>`);
                    })
                }).fail(function(res) {
                    concatError(res.responseJSON);
                    console.log(res)
                })
            }

            loadCategory()
            $('#selectcat').on("click", function(e) {
                e.preventDefault();
                cat = $(this).val();
                $.ajax({
                    method: 'get',
                    url: api_url + 'admin/topics/' + cat,
                }).done(function(res) {
                    selectsub = $('#selsubcat');
                    selectsub.html('<option selected disabled>Select Course Topic</option>')
                    res.data.map(dat => {
                        selectsub.append(`<option value="${dat.id}">${dat.name}</option>`);
                    })
                }).fail(function(res) {
                    concatError(res.responseJSON);
                    console.log(res)
                });
            });

            $('#addCourse').on('click', function(e) {
                e.preventDefault();
                course_type = $('#course_type').val();
                category_id = $('#selectcat :selected').val();
                topic_id = $('#selsubcat :selected').val();
                title = $('#courseTitle').val();
                subtitle = $('#courseSubtitle').val();
                bt = $('#addCourse');
                if (!course_type || !category_id || !subtitle || !title || !topic_id) {
                    salat('All Fields Required', 1);
                    return
                }

                $.ajax({
                    method: 'POST',
                    url: api_url + 'admin/create_new_course',
                    data: {
                        course_type: course_type,
                        category_id: category_id,
                        topic_id: topic_id,
                        title: title,
                        subtitle: subtitle,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(function(res) {
                    console.log(res);
                    location.href = `/instructor/course/${res.slug}`
                    btn(bt, 'Submit', 'after');
                }).fail(function(res) {
                    concatError(res.responseJSON);
                    console.log(res)
                    btn(bt, 'Submit', 'after');
                })
            })


        });
    </script>
@endsection
