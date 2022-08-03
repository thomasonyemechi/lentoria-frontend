@extends('layouts.instructor')
@section('page_title')
    Course | {{ $slug }}
@endsection

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">

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
                                    <p>You must enter at least 4 learning objectives or outcomes that learners can expect to
                                        achieve after completing your course.</p>
                                    <input class="form-control what_you_will_learn mb-2" type="text"
                                        placeholder="Example: Define the roles and responsibilities of a project manager"
                                        maxlength="160" />
                                    <input class="form-control what_you_will_learn mb-2" type="text"
                                        placeholder="Example: Estimate project timelines and budgets" maxlength="160" />
                                    <input class="form-control what_you_will_learn mb-2" type="text"
                                        placeholder="Example: Identify and manage project risks" maxlength="160" />
                                    <input class="form-control what_you_will_learn mb-2" type="text"
                                        placeholder="Example: Complete a case study to manage a project from conception to completion"
                                        maxlength="160" />
                                    <a href="javascript:;" class="mt-3 add_input" data-class="what_you_will_learn">
                                        <b> <i class="fe fe-plus"></i> Add More To your Response</b>
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>What are the requirements or
                                            prerequisites for taking your course?</b></label>
                                    <p>List the required skills, experience, tools or equipment learners should have prior
                                        to taking your course.
                                        If there are no requirements, use this space as an opportunity to lower the barrier
                                        for beginners.</p>
                                    <input class="form-control requirements mb-2" type="text"
                                        placeholder="Example: No programming experience needed. You will learn everything you need to know"
                                        maxlength="160" />
                                    <a href="javascript:;" class="mt-3 add_input" data-class="requirements">
                                        <b> <i class="fe fe-plus"></i> Add More To your Response</b>
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>Who is this course for?</b></label>
                                    <p>Write a clear description of the intended learners for your course who will find your
                                        course content valuable.
                                        This will help you attract the right learners to your course.</p>
                                    <input class="form-control learners mb-2" type="text"
                                        placeholder="Example: Beginner Python developers curious about data science"
                                        maxlength="160" />
                                    <a href="javascript:;" class="mt-3 add_input" data-class="learners">
                                        <b> <i class="fe fe-plus"></i> Add More To your Response</b>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-success btn-block review-btn">Save Answers</button>
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

            $('body').on('click', '.add_input', function() {
                cla = $(this).data('class');
                obj = $(`.${cla}`)
                last = obj[obj.length - 1];
                if (last.value == '' || last.value == null) { console.log(last.value); return; }
                $( `<input class="form-control ${cla} mb-2" type="text" placeholder="Add more to your response" maxlength="160" />` ).insertAfter( last );
            })

            $('#updateLearners').on('submit', function (e) {
                e.preventDefault();
                
            })

        })
    </script>
@endsection
