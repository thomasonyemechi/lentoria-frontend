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
                            <h3 class="mb-0">Course Landing Page</h3>
                        </div>
                        <div class="card-body">

                            <form id="updateCourseForm">
                                <input type="hidden" id="course_id">
                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>Course Title</b></label>
                                    <input id="courseTitle" name="title" class="form-control" type="text"
                                        placeholder="Course Title" maxlength="60" />
                                    <small>Write a 60 character course title.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="courseSubtitle" class="form-label"><b>Course Subtitle</b></label>
                                    <input id="courseSubtitle" name="subtitle" type="text" name="courseSubtitle"
                                        class="form-control" type="text" placeholder="Course Subtitle" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"><b>Course Description</b></label>
                                    <textarea class="form-control" name="description" id="course_description">

									</textarea>
                                </div>

                                <div class="row">
                                    <label class="form-label"><b>Basic Info</b></label>
                                    <div class="mb-3 col-4">
                                        <select class="form-control" name="language" id="course_language" data-width="100%">
                                            <option value="english">English</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-4">
                                        <select class="form-control" name="level" id="course_level" data-width="100%">
                                            <option value="">Select level</option>
                                            <option value="1">Beignner</option>
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

                                <div class="row">

                                    <div class="mb-3 col-4">
                                        <select class="form-control" name="category_id" id="selcategory">
                                            <option value="">Select a category</option>
                                        </select>
                                    </div>

                                </div>


                                <div class="custom-file-container" data-upload-id="courseCoverImg" id="courseCoverImg">
                                    <label class="form-label"><b>Course image</b>
                                        <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image"></a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" id="course_image"
                                            class="custom-file-container__custom-file__custom-file-input"
                                            accept=".jpg,.png,.gif,.jpeg" />
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <small class="mt-3 d-block">Upload your course image here. It must meet
                                        our course image quality standards to be accepted.Important guidelines: 750x422
                                        pixels; .jpg, .jpeg, .gif, or
                                        .png. no text on the image.</small>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>

                                <div class="custom-file-container">
                                    <label class="form-label" for="promo_video"><b>Promo Video</b></label>
                                    <input type="file" class="form-control" name="promo_video" id="promo_video" />
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-success btn-block review-btn" id="updateCourse">Submit For
                                        Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {


            function setTopic(category_id) {
                cat = category_id;
                $.ajax({
                    method: 'get',
                    url: api_url + 'admin/topics/' + cat,
                }).done((res) => {
                    selectsub = $('#selsubcat');
                    selectsub.html('<option selected disabled>Select Course Sub Category</option>')
                    res.data.map(dat => {
                        selectsub.append(`<option value="${dat.id}">${dat.name}</option>`);
                    })
                }).fail((res) => {
                    concatError(res.responseJSON);
                    console.log(res)
                });
            }



            $('#selcategory').on("change click", function(e) {
                e.preventDefault();
                setTopic($(this).val());
            })


            $('#updateCourseForm').on('submit', function(e) {
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
                if (!title || !subtitle || !description || !language || !level || !category_id || !
                    topic_id) {
                    salat('All Fields Required', 1);
                    return
                }
                var form_data = new FormData();
                if (image != 0 || video != 0) {
                    form_data.append('image', document.getElementById('course_image').files[0]);
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

                for (const pair of form_data.entries()) {
                    console.log(`${pair[0]}, ${pair[1]}`);
                }
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

            })
        })
    </script>
@endsection
