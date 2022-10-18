@extends('layouts.instructor')
@section('page_title')
    Course | {{ $slug }}
@endsection

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            @include('instructor.course_name')
            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('instructor.side')
                </div>

                <div class="col-lg-9 col-md-8 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="mb-0">Course Landing Page</h3>
                                <button class="btn btn-success btn-xs" data-bs-toggle="modal"
                                        data-bs-target="#editShortLinkModal">customise short-link
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <form id="updateCourseForm">
                                <input type="hidden" id="course_id">
                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>Course Title</b></label>
                                    <div class="d-flex justify-content-center align-items-center border bg-white pe-2">
                                        <input id="courseTitle" name="title" class="form-control border-0" type="text"
                                               placeholder="Course Title" maxlength="60">
                                        <div>
                                            <span id="count" class="fw-bold">60</span>
                                        </div>
                                    </div>
                                    <small>Write a 60 character course title.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="courseSubtitle" class="form-label"><b>Course Subtitle</b></label>
                                    <input id="courseSubtitle" name="courseSubtitle"
                                           class="form-control" type="text" placeholder="Course Subtitle"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"><b>Course Description</b></label>
                                    <x-textarea name="description" id="course_description"/>
                                </div>

                                <div class="row">
                                    <label class="form-label"><b>Basic Info</b></label>
                                    <div class="mb-3 col-4">
                                        <select class="form-control" name="language" id="course_language"
                                                data-width="100%">
                                            <option value="english">English</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-4">
                                        <select class="form-control" name="level" id="course_level" data-width="100%">
                                            <option value="">Select level</option>
                                            <option value="1">Beginner</option>
                                            <option value="2">Intermediate</option>
                                            <option value="3">Advanced</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-4">
                                        <select class="form-control" id="selcourse_type">
                                            <option value="">Select Course Type</option>
                                            <option value="1">Virtual Live Training</option>
                                            <option value="2">Recorded Course</option>
                                            {{-- <option value="3">Premium Training</option> --}}
                                        </select>
                                    </div>
                                </div>

                                <div class="row justify-content-end">

                                    <div class="mb-3 col-4">
                                        <select class="form-control" name="category_id" id="selcategory">
                                            <option value="">Select a category</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-4">
                                        <select class="form-control" name="topic_id" id="selsubcat">
                                            <option value="">Select a SubCategory</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="custom-file-container" data-upload-id="courseCoverImg" id="courseCoverImg">
                                    <label class="form-label"><b>Course image</b>
                                        <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                           title="Clear Image"></a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" id="course_image" class="form-control"
                                               accept=".jpg,.png,.gif,.jpeg"/>
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760"/>
                                        <span class="custom-file-container__custom-file__custom-file-control"
                                              hidden></span>
                                    </label>
                                    <small class="mt-3 d-block">Upload your course image here. It must meet
                                        our course image quality standards to be accepted.Important guidelines: 750x422
                                        pixels; .jpg, .jpeg, .gif, or
                                        .png. no text on the image.</small>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>

                                <div class="custom-file-container">
                                    <label class="form-label" for="promo_video"><b>Promo Video</b></label>
                                    <input type="file" class="form-control" name="promo_video" id="promo_video"/>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-success btn-block" id="updateCourse">Submit For
                                        Review
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal -->
        <div class="modal fade" id="editShortLinkModal" tabindex="-1" role="dialog"
             aria-labelledby="editShortLinkModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="editShortLinkModalLabel">
                            Edit Short Link
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row text-start g-3" id="editLinkForm">
                            <div class="col-md-12">
                                <label for="twitter" class="form-label">Short Link</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="shortlink-addon">https://www.lentoria.com/</span>
                                    <input type="text" class="form-control" name="shortlink" placeholder="Shortlink"
                                           id="shortlink" aria-describedby="shortlink-addon">
                                </div>
                                <span class="text-sm d-none" id="valmess"></span>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {

                let subcategories;
                const jsonfile = `{{asset('subcategories.json')}}`;
                getLoadSubCategories();

                function getLoadSubCategories() {
                    $.getJSON(jsonfile, res => subcategories = res);
                }

                // function setTopic() {
                //     cat = category_id;
                //     $.ajax({
                //         method: 'get',
                //         url: api_url + 'admin/topics/' + cat,
                //     }).done((res) => {
                //         selectsub = $('#selsubcat');
                //         selectsub.html('<option selected disabled>Select Course Sub Category</option>')
                //         res.data.map(dat => {
                //             selectsub.append(`<option value="${dat.id}">${dat.name}</option>`);
                //         })
                //     }).fail((res) => {
                //         concatError(res.responseJSON);
                //         console.log(res)
                //     });
                // }


                $("#courseTitle").on("input", function (e) {
                    e.preventDefault();
                    let length = $(this).val().length
                    let maxlength = 60;
                    return $('#count').html(maxlength - length);
                })

                $('#selcategory').on("change", function (e) {
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


                $('#updateCourseForm').on('submit', function (e) {
                    e.preventDefault();
                    id = $('#course_id').val();
                    title = $('#courseTitle').val();
                    subtitle = $('#courseSubtitle').val();
                    description = $('#course_description').val();
                    language = $('#course_language').val();
                    level = $('#course_level :selected').val();
                    category_id = $('#selcategory :selected').val();
                    topic_id = $('#selsubcat :selected').val();
                    course_type = $('#selcourse_type :selected').val();
                    purpose = $('#purpose').val();
                    image = $('#course_image').get(0).files.length;
                    video = $('#promo_video').get(0).files.length;
                    if (!title || !subtitle || !description || !language || !level || !category_id || !topic_id) {
                        salat('All Text Fields Required', 1);
                        return
                    }
                    let form_data = new FormData();
                    if (image != 0) {
                        form_data.append('image', document.getElementById('course_image').files[0]);
                    }
                    if (video != 0) {
                        form_data.append('video', document.getElementById('promo_video').files[0]);
                    }

                    form_data.append('id', id);
                    form_data.append('title', title);
                    form_data.append('subtitle', subtitle);
                    form_data.append('description', description);
                    form_data.append('language', language);
                    form_data.append('level', level);
                    form_data.append('category_id', category_id);
                    form_data.append('topic_id', topic_id);
                    form_data.append('course_type', course_type);

                    $.ajax({
                        method: 'POST',
                        url: api_url + 'admin/course_update',
                        data: form_data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: () => {
                            btn($('#updateCourse'), '', 'before');
                        }
                    }).done((res) => {
                        btn($('#updateCourse'), 'Submit For Review', 'after');
                        salat(res.message)
                    }).fail((res) => {
                        concatError(res.responseJSON)
                        console.log(res)
                        btn($('#updateCourse'), 'Submit For Review', 'after');
                    })

                });


                $("#editLinkForm").submit(function (e) {
                    e.preventDefault();
                    link = $('#shortlink').val();
                    id = $('#course_id').val();
                    bt = $(this).find($("button[type='submit']"));
                    let newlink = link.replace(/ /g, '');
                    $.ajax({
                        url: api_url + 'admin/update_link',
                        method: "POST",
                        data: {
                            link: newlink,
                            course_id: id,
                        },
                        beforeSend: () => {
                            btn(bt, '', 'before');
                        }
                    }).done(res => {
                        btn(bt, 'Submit', 'after');
                        console.log(res);
                    }).fail(res => {
                        concatError(res.responseJSON);
                        console.log(res);
                        btn(bt, 'Submit', 'after');
                    })
                })

                function validateShortlink(link) {
                    $.ajax({
                        url: api_url + 'admin/vaildate_link',
                        method: "POST",
                        data: {
                            link: link,
                        },
                        beforeSend: () => {
                            $("#editLinkForm").find($("button[type='submit']")).attr('disabled', 'true');
                        }
                    }).done(res => {
                        let valmess = $("#valmess");
                        if (res.status == true) {
                            valmess.removeClass("d-none");
                            if (valmess.hasClass("text-danger")) {
                                valmess.removeClass("text-danger");
                            }
                            valmess.addClass("text-success");
                            valmess.html(res.message);
                            $("#editLinkForm").find($("button[type='submit']")).attr('disabled', false);
                        } else if (res.status == false) {
                            valmess.removeClass("d-none");
                            if (valmess.hasClass("text-success")) {
                                valmess.removeClass("text-success");
                            }
                            valmess.addClass("text-danger");
                            valmess.html(res.message);
                            $("#editLinkForm").find($("button[type='submit']")).attr('disabled', false);
                        }
                        let messageTimeout = setTimeout(() => {
                            valmess.addClass("d-none");
                        }, 3000);

                        if (valmess.hasClass("d-none")) {
                            clearTimeout(messageTimeout);
                        }
                    }).fail(res => {
                        console.log(res);
                        $("#editLinkForm").find($("button[type='submit']")).attr('disabled', false);
                    })
                }

                //setup before functions
                let typingTimer; //timer identifier
                let doneTypingInterval = 900;
                let input = $('#shortlink');

                //on keyup, start the countdown
                input.on('keyup', function () {
                    clearTimeout(typingTimer);
                    typingTimer = setTimeout(doneTyping, doneTypingInterval);
                });

                //on keydown, clear the countdown
                input.onkeydown = () => clearTimeout(typingTimer);

                //"finished typing," do something
                function doneTyping() {
                    link = input.val();
                    validateShortlink(link);
                }
            })
        </script>
@endsection
