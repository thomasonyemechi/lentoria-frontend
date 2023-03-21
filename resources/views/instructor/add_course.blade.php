@extends('layouts.instructor')

@section('page_title','Add Courses')

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
                            <a href="{{ route('instructor.courses') }}" class="btn btn-white ">Back to Courses</a>
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
                                        aria-controls="test-l-2" disabled>
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Course Category</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-3">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3"
                                        aria-controls="test-l-3" disabled>
                                    <span class="bs-stepper-circle">3</span>
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
                                            <div class="d-flex justify-content-between">
                                                <h4 class="mb-0">Course Type</h4>
                                                <span
                                                    class="badge show-selected bg-dark-primary py-2 px-3 fs-5">0</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row" id="course_types_container">
                                                <input type="hidden" id="course_type">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"
                                     aria-labelledby="courseFormtrigger2">
                                    <div class="card mb-3  border-0">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0">Course Category</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Select Course Category</label>
                                                <select class="form-control" id="selectcat" data-width="100%">
                                                    <option value="">Select Category</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Select Course Sub-Category</label>
                                                <select class="form-control" id="selsubcat" data-width="100%">
                                                    <option value="">Select Sub-Category</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <select class="form-control" name="level" id="course_level"
                                                        data-width="100%">
                                                    <option value="">Select level</option>
                                                    <option value="1">Beginner</option>
                                                    <option value="2">Intermediate</option>
                                                    <option value="3">Advanced</option>
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
                                                       id="courseSubtitle"/>
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
        $(function () {
            let subcategories;
            const jsonfile = `{{asset('json_files/subcategories.json')}}`;
            getLoadSubCategories();

            getCourseTypes();

            function getLoadSubCategories() {
                $.getJSON(jsonfile, res => subcategories = res);
            }

            function getCourseTypes() {
                $.get(`${api_url}admin/fetch_types`).done(res => {
                    res.message.forEach(type => {
                        $("#course_types_container").append(
                            `<div class="col-md-4 d-flex align-items-stretch mx-auto justify-content-center">
                                <div class="card flex-fill bg-dark-primary shadow-none text-center mx-4 my-8">
                                    <div class="card-body py-6">
                                        <div class="mt-4">
                                            <h5 class="text-white">${type.type}</h5>
                                            <p class="text-white-50 fs-6">
                                                ${type.description}
                                            </p>
                                            <a href="javascript:void(0)"
                                               class="btn btn-white btn-sm mt-2 seltype"
                                               data-type="${type.id}">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>`
                        )
                    });
                })
            }

            $("#courseTitle").on("input", function (e) {
                e.preventDefault();
                let length = $(this).val().length
                let maxlength = 60;
                return $('#count').html(maxlength - length);
            })


            function loadCategory() {
                selcat = $('#selectcat');
                selcat.html('<option disabled selected>Select Category</option>');
                $.ajax({
                    method: 'get',
                    url: api_url + 'admin/category',
                }).done(res => {
                    res.data.map(dat => selcat.append(`<option value="${dat.id}">${dat.name}</option>`))
                }).fail(res => {
                    concatError(res.responseJSON);
                    console.log(res)
                })
            }

            loadCategory()
            $('#selectcat').on("click", function (e) {
                e.preventDefault();
                let cat = $(this).val();
                if (cat) {
                    let subcats = subcategories.data[cat];
                    let selectsub = $('#selsubcat');
                    selectsub.html('<option selected disabled>Select Course Topic</option>');
                    if (subcats) {
                        subcats.forEach(sub => selectsub.append(`<option value="${sub.id}">${sub.name}</option>`))
                    }
                }
            });

            $('#addCourse').on('click', function (e) {
                e.preventDefault();
                let course_type = $('#course_type').val();
                let category_id = $('#selectcat :selected').val();
                let topic_id = $('#selsubcat :selected').val();
                let course_level = $('#course_level :selected').val();
                let title = $('#courseTitle').val();
                let subtitle = $('#courseSubtitle').val();
                bt = $('#addCourse');
                if (!category_id || !subtitle || !title || !topic_id) {
                    salat('All Fields Required', 1);
                    return
                }

                $.ajax({
                    method: 'POST',
                    url: api_url + 'admin/create_new_course',
                    data: {
                        course_level: course_level,
                        course_type: course_type,
                        category_id: category_id,
                        topic_id: topic_id,
                        title: title,
                        subtitle: subtitle,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(res => {
                    location.href = `/instructor/course/${res.course_type}/${res.slug}`
                    btn(bt, 'Submit', 'after');
                }).fail(res => {
                    concatError(res.responseJSON);
                    btn(bt, 'Submit', 'after');
                })
            })

            $(document).on('click', '.seltype', function (e) {
                e.preventDefault();
                const selected = $(e.target).data('type');
                $('#course_type').val(selected);
                $(".show-selected").html(selected);
                setTimeout(() => courseForm.next(), 1000)
            })


        });
    </script>
@endsection
