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
                            <h3 class="mb-0">Frequently Asked Questions</h3>
                        </div>
                        <div class="card-body">

                            <form id="faqForm">
                                <input type="hidden" id="course_id">
                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>Question</b></label>
                                    <textarea name="question"
                                              id="que"
                                              class="form-control border-2"
                                              rows="3"
                                              style="resize: none;"></textarea>
                                    <small class="ms-0">Write a question</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"><b>Answer</b></label>
                                    <textarea name="answer"
                                              id="ans"
                                              rows="5"
                                              class="form-control border-2"
                                              style="resize: none;"></textarea>
                                    <small class="ms-0">Write the answer</small>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary btn-block" type="submit">Add FAQ</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-8 col-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="mb-0">My FAQs</h3>
                                <span>Edit Your Questions and Answers</span>
                            </div>
                            {{-- <div class="card-body">
                                <form class="row">
                                    <div class="col-lg-9 col-md-7 col-12 mb-lg-0 mb-2">
                                        <input type="search" class="form-control" placeholder="Search Your Courses" />
                                    </div>
                                    <div class="col-lg-3 col-md-5 col-12">
                                        <select class="selectpicker" data-width="100%">
                                            <option value="">Date Created</option>
                                            <option value="Newest">Newest</option>
                                            <option value="High Rated">High Rated</option>
                                            <option value="Law Rated">Law Rated</option>
                                            <option value="High Earned">High Earned</option>
                                        </select>
                                    </div>
                                </form>
                            </div> --}}
                            <!-- Table -->
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap" id="faq_table">
                                    <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="border-0">#</th>
                                        <th scope="col" class="border-0">Question</th>
                                        <th scope="col" class="border-0">Answer</th>
                                        <th scope="col" class="border-0"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal -->
        <div class="modal fade"
             id="editQuestionModal"
             tabindex="-1"
             role="dialog"
             aria-labelledby="editQuestionModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="editQuestionModalLabel">
                            Edit Question
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row text-start g-3" id="editQuestionForm">
                            <input type="hidden" name="question_id">
                            <div class="mb-3">
                                <label for="courseTitle" class="form-label"><b>Question</b></label>
                                <textarea name="question"
                                          class="form-control border-2"
                                          rows="3"
                                          style="resize: none;"></textarea>
                                <small class="ms-0">Write a question</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Answer</b></label>
                                <textarea name="answer"
                                          rows="5"
                                          class="form-control border-2"
                                          style="resize: none;"></textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    Save FAQ
                                </button>
                                <button class="btn btn-outline-white btn-sm" data-bs-dismiss="modal" aria-label="Close">
                                    Close
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                interval = setInterval(() => {
                    cid = $("#course_id").val()
                    if(cid != "") {
                        clearInterval(interval);
                        getQuestions(cid);
                    }
                }, 200);


                function getQuestions(cid) {
                    body = $("#faq_table tbody")
                    sn = 1;
                    $.ajax({
                        url: api_url + `admin/fetch_faq/${cid}`,
                        beforeSend: () => {
                            body.html(`
                        <tr id="loader">
                            <td colspan="4" class="text-center">
                                <div class="d-flex justify-content-center">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        `)
                        },
                    }).done(res => {
                        body.html('');
                        res.data.map(faq => {
                            body.append(`
                        <tr data-que_id="${faq.id}" id="que${faq.id}" class="que-tr">
                            <td>${sn++}</td>
                            <td class="border-top-0">${faq.question}</td>
                            <td class="border-top-0">${faq.answer}</td>
                            <td class="text-muted border-top-0">
                                <span class="dropdown dropstart">
                                    <a class="text-muted text-decoration-none" href="#" role="button"
                                        id="questionDropdown${faq.id}" data-bs-toggle="dropdown"
                                        data-bs-offset="-20,20" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <span class="dropdown-menu" aria-labelledby="questionDropdown${faq.id}">
                                        <span class="dropdown-header">Settings</span>
                                        <a class="dropdown-item edit-que" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                        <a class="dropdown-item del-que" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                    </span>
                                </span>
                            </td>
                        </tr>
                        `)
                        })

                    }).fail(res => {
                        console.log(res);
                        concatError(res.responseJSON);
                        body.empty();
                    })
                }


                function deleteQuestion(id) {
                    let published = sessionStorage.getItem('published');
                    if(published && published != 0) {
                        salat('This course has been submitted for review and cannot be edited', 1);
                        return;
                    }
                    $.ajax({
                        url: api_url + 'admin/delete_faq',
                        method: 'post',
                        data: {
                            id: id,
                        },
                    }).done(res => {
                        tr = $(document).find($(`tr#que${id}`))
                        tr.fadeOut("fast", () => {
                            tr.remove()
                            Array.from(document.querySelector("#faq_table tbody").rows)
                                 .map((row, index) => row.children[0].innerHTML = index + 1);
                        })
                    }).fail(res => {
                        console.log(res);
                        concatError(res);
                    })
                }

                $(document).on('click', '.edit-que', function(e) {
                    e.preventDefault();
                    let published = sessionStorage.getItem('published');
                    if(published && published != 0) {
                        salat('This course has been submitted for review and cannot be edited', 1);
                        return;
                    }
                    tr = $(this).closest($("tr.que-tr"))
                    id = tr.data("que_id");
                    question = tr.find($("td:nth-child(2)")).html();
                    answer = tr.find($("td:nth-child(3)")).html();
                    $("#editQuestionModal").modal('show');

                    form = $("#editQuestionModal").find($("form"));

                    form.find($('textarea[name="question"]')).val(question);
                    form.find($('textarea[name="answer"]')).val(answer);
                    form.find($('input[name="question_id"]')).val(id);
                });


                $("#editQuestionForm").submit(function(e) {
                    e.preventDefault();
                    let published = sessionStorage.getItem('published');
                    if(published && published != 0) {
                        salat('This course has been submitted for review and cannot be edited', 1);
                        return;
                    }
                    form = $(this);
                    bt = $(form).find($('button[type="submit"]'));
                    question = form.find($('textarea[name="question"]')).val();
                    answer = form.find($('textarea[name="answer"]')).val();
                    id = form.find($('input[name="question_id"]')).val();

                    $.ajax({
                        url: api_url + `admin/edit_faq`,
                        method: 'post',
                        data: {
                            id: id,
                            question: question,
                            answer: answer,
                        },
                        beforeSend: () => {
                            btn(bt, '', 'before');
                        },
                    }).done(res => {
                        console.log(res);
                        salat(res.message);
                        btn(bt, 'Save FAQ', 'after');
                        tr = $(document).find($(`tr#que${id}`));
                        tr.find($("td:nth-child(2)")).html(question);
                        tr.find($("td:nth-child(3)")).html(answer);
                        form[0].reset();
                        $("#editQuestionModal").modal('hide');
                    }).fail(res => {
                        console.log(res);
                        concatError(res.responseJSON);
                        btn(bt, 'Save FAQ', 'after');
                    })
                })

                $(document).on('click', '.del-que', function(e) {
                    e.preventDefault();
                    tr = $(this).closest($("tr.que-tr"))
                    id = tr.data("que_id");
                    if(confirm("Are you sure you want to delete this question ?")) {
                        deleteQuestion(id);
                    }

                })


                $("#faqForm").submit(function(e) {
                    e.preventDefault();
                    let published = sessionStorage.getItem('published');
                    if(published && published != 0) {
                        salat('This course has been submitted for review and cannot be edited', 1);
                        return;
                    }
                    form = $(this);
                    course_id = $(form).find($("input#course_id")).val();
                    bt = $(form).find($('button[type="submit"]'));
                    que = $(form).find($("#que")).val();
                    ans = $(form).find($("#ans")).val();
                    body = $("#faq_table tbody")
                    $.ajax({
                        url: api_url + `admin/add_faq`,
                        method: 'post',
                        data: {
                            course_id: course_id,
                            question: que,
                            answer: ans,
                        },
                        beforeSend: () => {
                            btn(bt, '', 'before');
                        }
                    }).done(res => {
                        console.log(res);
                        btn(bt, 'Add FAQ', 'after');
                        salat(res.message);
                        form[0].reset();
                        body.append(`
                        <tr data-que_id="${res.id}" id="que${res.id}" class="que-tr">
                            <td>${serialNo()}</td>
                            <td class="border-top-0">${que}</td>
                            <td class="border-top-0">${ans}</td>
                            <td class="text-muted border-top-0">
                                <span class="dropdown dropstart">
                                    <a class="text-muted text-decoration-none" href="#" role="button"
                                        id="questionDropdown${res.id}" data-bs-toggle="dropdown"
                                        data-bs-offset="-20,20" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <span class="dropdown-menu" aria-labelledby="questionDropdown${res.id}">
                                        <span class="dropdown-header">Settings</span>
                                        <a class="dropdown-item edit-que" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                        <a class="dropdown-item del-que" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                    </span>
                                </span>
                            </td>
                        </tr>
                    `)
                        $("html, body").animate({
                            scrollTop: $("#faq_table").offset().top
                        }, 'slow');
                    }).fail(res => {
                        console.log(res);
                        concatError(res.responseJSON);
                        btn(bt, 'Add FAQ', 'after');
                    })
                })
            })
        </script>
@endsection
