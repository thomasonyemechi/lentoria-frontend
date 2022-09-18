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
                            <h3 class="mb-0">Intended learners</h3>
                        </div>
                        <div class="card-body">
                            <p>
                                The following descriptions will be publicly visible on your Course Landing Page and will
                                have a direct impact on your
                                course performance.
                                These descriptions will help learners decide if your course is right for them.
                            </p>
                            <form id="updateLearners">
                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>What will students learn in your
                                                                                   course?</b></label>
                                    <p>You must enter at least 4 learning objectives or outcomes that learners can
                                       expect to
                                       achieve after completing your course.</p>
                                    <input class="form-control what_you_will_learn mb-2" type="text"
                                           placeholder="Example: Define the roles and responsibilities of a project manager"
                                           maxlength="160"/>
                                    <input class="form-control what_you_will_learn mb-2" type="text"
                                           placeholder="Example: Estimate project timelines and budgets"
                                           maxlength="160"/>
                                    <input class="form-control what_you_will_learn mb-2" type="text"
                                           placeholder="Example: Identify and manage project risks" maxlength="160"/>
                                    <input class="form-control what_you_will_learn mb-2" type="text"
                                           placeholder="Example: Complete a case study to manage a project from conception to completion"
                                           maxlength="160"/>
                                    <a href="javascript:;" class="mt-3 add_input" data-class="what_you_will_learn">
                                        <b> <i class="fe fe-plus"></i> Add More To your Response</b>
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>What are the requirements or
                                                                                   prerequisites for taking your
                                                                                   course?</b></label>
                                    <p>List the required skills, experience, tools or equipment learners should have
                                       prior
                                       to taking your course.
                                       If there are no requirements, use this space as an opportunity to lower the
                                       barrier
                                       for beginners.</p>
                                    <input class="form-control requirements mb-2" type="text"
                                           placeholder="Example: No programming experience needed. You will learn everything you need to know"
                                           maxlength="160"/>
                                    <a href="javascript:;" class="mt-3 add_input" data-class="requirements">
                                        <b> <i class="fe fe-plus"></i> Add More To your Response</b>
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>Who is this course for?</b></label>
                                    <p>Write a clear description of the intended learners for your course who will find
                                       your
                                       course content valuable.
                                       This will help you attract the right learners to your course.</p>
                                    <input class="form-control learners mb-2" type="text"
                                           placeholder="Example: Beginner Python developers curious about data science"
                                           maxlength="160"/>
                                    <a href="javascript:;" class="mt-3 add_input" data-class="learners">
                                        <b> <i class="fe fe-plus"></i> Add More To your Response</b>
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <label for="purposeTitle" class="form-label"><b>Purpose Of taking this
                                                                                    course</b></label>
                                    <p></p>
                                    <input class="form-control purpose mb-2" type="text"
                                           placeholder="Purpose Of taking this course?" maxlength="160"/>
                                    <a href="javascript:;" class="mt-3 add_input" data-class="purpose">
                                        <b> <i class="fe fe-plus"></i> Add More To your Response</b>
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <label for="purposeTitle" class="form-label"><b>Job Opportunities</b></label>
                                    <x-textarea id="opportunities" name="opportunities"/>
                                </div>

                                <input type="hidden" name="course_id">
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="updateLearners btn btn-success">Save
                                                                                                 Answers
                                    </button>
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
            fetchLearners(@js($slug));

            $(document).on('click', '.updateLearners', function (e) {
                e.preventDefault();
                form = $('#updateLearners'); ///wywl == what you will learn
                bt = $(".updateLearners");

                id = $(form).find('input[name="course_id"]').val()

                wywls = $(form).find('.what_you_will_learn');
                jo = opportunities.getData();
                new_wywl = [];
                wywls.map(len => {
                    len = wywls[len];
                    if (len.value) {
                        new_wywl.push(len.value)
                    }
                })


                requirements = $(form).find('.requirements');
                new_req = []
                requirements.map(req => {
                    req = requirements[req];
                    if (req.value) {
                        new_req.push(req.value)
                    }
                })


                learners = $(form).find('.learners');
                new_len = []
                learners.map(le => {
                    le = learners[le];
                    if (le.value) {
                        new_len.push(le.value)
                    }
                })

                purpose = $(form).find('.purpose');
                new_pur = []
                purpose.map(pu => {
                    pu = purpose[pu];
                    if (pu.value) {
                        new_pur.push(pu.value)
                    }
                })

                $.ajax({
                    method: 'post',
                    url: api_url + 'admin/course_update_info',
                    data: {
                        course_id: id,
                        what_you_will_learn: new_wywl,
                        course_requirement: new_req,
                        course_audience: new_len,
                        purpose: new_pur,
                        opportunities: jo,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before')
                    }
                }).done(function (res) {
                    btn(bt, 'Save Answers', 'after')
                    salat(res.message);
                }).fail(function (res) {
                    console.log(res);
                    concatError(res.responseJSON);
                    btn(bt, 'Save Answers', 'after')
                })

            })

            $('body').on('click', '.add_input', function () {
                cla = $(this).data('class');
                obj = $(`.${cla}`)
                last = obj[obj.length - 1];
                if (last.value == '' || last.value == null) {
                    return;
                }
                $(`<input class="form-control ${cla} mb-2" type="text" placeholder="Add more to your response" maxlength="160" />`)
                    .insertAfter(last);
            })

            function fetchLearners(slug) {
                $.ajax({
                    url: api_url + `admin/course/intended_learners/${slug}`,
                }).done(res => {
                    let data = res.data[0];
                    let req = parse(data.course_requirement);
                    let opp = data.opportunities;
                    let pur = parse(data.purpose);
                    let aud = parse(data.course_audience);
                    let wywl = parse(data.what_you_will_learn);
                    let wywls = Array.prototype.slice.call(document.querySelectorAll(".what_you_will_learn"));
                    let audience = Array.prototype.slice.call(document.querySelectorAll(".learners"));
                    let purpose = Array.prototype.slice.call(document.querySelectorAll(".purpose"));
                    let requirements = Array.prototype.slice.call(document.querySelectorAll(".requirements"));
                    opportunities.setData(opp ?? "");
                    fillForm(wywls, wywl, ".what_you_will_learn");
                    fillForm(audience, aud, ".learners");
                    fillForm(purpose, pur, ".purpose");
                    fillForm(requirements, req, ".requirements");
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                })
            }

            function fillForm(el_arr, data_arr, selector) {
                if (el_arr.length == data_arr.length) {
                    Array.prototype.slice.call(document.querySelectorAll(selector)).forEach((x, i) => {
                        dat = data_arr[i];
                        x.value = dat;
                    });
                } else if (el_arr.length < data_arr.length) {
                    console.log(el_arr, data_arr);
                    let diff = data_arr.length - el_arr.length;
                    console.log(diff);
                    let obj = $(`${selector}:last`);
                    obj.multiply(diff).insertAfter(obj);


                    // for (let i = 0; i < diff; i++) {
                    //     obj.clone().insertAfter(obj);
                    // }
                    Array.prototype.slice.call(document.querySelectorAll(selector)).forEach((x, i) => {
                        dat = data_arr[i];
                        x.value = dat;
                    });
                }
            }


        })
    </script>
@endsection
