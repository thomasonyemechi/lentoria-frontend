@extends('layouts.instructor')
@section('page_title')
    Instructors Dashboard
@endsection

@section('page_content')
    <style>

        .scroller::-webkit-scrollbar {
            width: 1px;
        }

        .scroller::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .scroller::-webkit-scrollbar-thumb {
            -webkit-border-radius: 10px;
            border-radius: 10px;
            background: rgba(70, 58, 58, 0.8);
            -webkit-box-shadow: inset 0 0 6px rgba(234, 218, 218, 0.5);
        }

        .scroller::-webkit-scrollbar-thumb:window-inactive {
            background: rgba(93, 74, 74, 0.4);
        }
    </style>
    <div class="pt-5 pb-5">
        <div class="container">
            {!! instructorInfo() !!}
            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('layouts.sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Balance</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                         <span class="bal">&#8358;0.00</span>
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>Earning this month</span>
                                        <span class="badge bg-success ms-2">$0</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Sales</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                        0
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>New this month</span>
                                        <span class="badge bg-info ms-2">0+</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Courses Rating</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                        0.0
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>Rating this month</span>
                                        <span class="badge bg-warning ms-2">0+</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header border-bottom-0">
                            <h3 class="h4 mb-0">Questionnaire</h3>
                            <span>All questions are to be answered before being submitted</span>
                        </div>
                        <div id="questionnaire" class="bs-stepper mb-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <!-- Stepper Button -->
                                        <div class="d-none d-lg-block">
                                            <div class="bs-stepper-header shadow-sm overflow-auto scroller"
                                                 role="tablist">
                                                <div class="step" data-target="#test-l-1">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger1" aria-controls="test-l-1">
                                                        <span class="bs-stepper-circle">1</span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-2">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger2" aria-controls="test-l-2">
                                                        <span class="bs-stepper-circle">2</span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-3">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger3" aria-controls="test-l-3">
                                                        <span class="bs-stepper-circle">3 </span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-4">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger4" aria-controls="test-l-4">
                                                        <span class="bs-stepper-circle">4 </span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-5">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger5" aria-controls="test-l-5">
                                                        <span class="bs-stepper-circle">5 </span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-6">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger6" aria-controls="test-l-6">
                                                        <span class="bs-stepper-circle">6 </span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-7">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger7" aria-controls="test-l-7">
                                                        <span class="bs-stepper-circle">7 </span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-8">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger8" aria-controls="test-l-8">
                                                        <span class="bs-stepper-circle">8 </span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-9">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger9" aria-controls="test-l-9">
                                                        <span class="bs-stepper-circle">9 </span>
                                                    </button>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-l-10">
                                                    <button type="button" class="step-trigger" role="tab"
                                                            id="qnairetrigger10" aria-controls="test-l-10">
                                                        <span class="bs-stepper-circle">10 </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center opacity-50 loader mt-10">
                                            <div class="spinner-border text-bold fs-3 text-black-100"
                                                 style="width: 5rem; height: 5rem;" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content mt-5">
                                            <form onSubmit="return false" id="queform">
                                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger1">

                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-end">
                                                        <button class="btn btn-primary fibtn" onclick="qnaire.next()">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger2">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary nxt" onclick="qnaire.next()">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger3">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary" onclick="qnaire.next()">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger4">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary" onclick="qnaire.next()">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-5" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger5">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary" onclick="qnaire.next()">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-6" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger6">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary" onclick="qnaire.next()">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-7" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger7">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary" onclick="qnaire.next()">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-8" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger8">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary" onclick="qnaire.next()">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-9" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger9">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary" onclick="qnaire.next();">
                                                            Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="test-l-10" role="tabpanel" class="bs-stepper-pane fade"
                                                     aria-labelledby="qnairetrigger10">
                                                    <!-- Button -->
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-secondary" onclick="qnaire.previous()">
                                                            Previous
                                                        </button>
                                                        <button class="btn btn-primary" id="lastbtn">
                                                            Submit
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
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#questionnaire").length && document.addEventListener("DOMContentLoaded", (function () {
            qnaire = new Stepper(document.querySelector("#questionnaire"), {
                linear: 1,
                animation: !0
            })
        }));

        $(function () {
            getQuestions();
            getBalance();

            function getBalance() {
                info = @js(session('info'));
                live_id = info.data.live_id;
                $.ajax({
                    url: api_url + `admin/balance/${live_id}`,
                }).done(res => {
                    console.log(res);
                    $(".bal").html(`${naira(res.balance)}`);
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                })
            }

            function getQuestions() {
                $.ajax({
                    url: api_url + 'fetch_instructor_questions',
                    beforeSend: () => {
                        $(".fibtn").parent().addClass('d-none');
                    }
                }).done(res => {
                    $(".loader").remove();
                    $("#test-l-1")
                        .prepend(questionaire(res.data[0].question, res.data[0].a, res.data[0].b, res.data[0].c, res.data[0].d, res.data[0].id));
                    $("#test-l-2")
                        .prepend(questionaire(res.data[1].question, res.data[1].a, res.data[1].b, res.data[1].c, res.data[1].d, res.data[1].id));
                    $("#test-l-3")
                        .prepend(questionaire(res.data[2].question, res.data[2].a, res.data[2].b, res.data[2].c, res.data[2].d, res.data[2].id));
                    $("#test-l-4")
                        .prepend(questionaire(res.data[3].question, res.data[3].a, res.data[3].b, res.data[3].c, res.data[3].d, res.data[3].id));
                    $("#test-l-5")
                        .prepend(questionaire(res.data[4].question, res.data[4].a, res.data[4].b, res.data[4].c, res.data[4].d, res.data[4].id));
                    $("#test-l-6")
                        .prepend(questionaire(res.data[5].question, res.data[5].a, res.data[5].b, res.data[5].c, res.data[5].d, res.data[5].id));
                    $("#test-l-7")
                        .prepend(questionaire(res.data[6].question, res.data[6].a, res.data[6].b, res.data[6].c, res.data[6].d, res.data[6].id));
                    $("#test-l-8")
                        .prepend(questionaire(res.data[7].question, res.data[7].a, res.data[7].b, res.data[7].c, res.data[7].d, res.data[7].id));
                    $("#test-l-9")
                        .prepend(questionaire(res.data[8].question, res.data[8].a, res.data[8].b, res.data[8].c, res.data[8].d, res.data[8].id));
                    $("#test-l-10")
                        .prepend(questionaire(res.data[9].question, res.data[9].a, res.data[9].b, res.data[9].c, res.data[9].d, res.data[9].id));
                    $(".fibtn").parent().removeClass('d-none');
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                });
            }

            function questionaire(que, a, b, c, d, id) {
                let question = "";
                question += `<div class="card mb-3 question border-0" data-id="${id}">
        <div class="card-header border-bottom px-4 py-3">
            <h3 class="mb-0">${que}</h3>
        </div>
        <div class="card-body">
            <div class="vstack gap-2">
                <!-- Feed ques item -->
                <div>
                    <input type="radio" class="btn-check a" name="ques${id}" id="${id}option1">
                    <label class="btn btn-outline-primary w-100 opt-a" for="${id}option1">${a}</label>
                </div>
                <!-- Feed ques item -->
                <div>
                    <input type="radio" class="btn-check b" name="ques${id}" id="${id}option2">
                    <label class="btn btn-outline-primary w-100 opt-b" for="${id}option2">${b}</label>
                </div>
                <!-- Feed ques item -->
                <div>
                    <input type="radio" class="btn-check c" name="ques${id}" id="${id}option3">
                    <label class="btn btn-outline-primary w-100 opt-c" for="${id}option3">${c}</label>
                </div>
                <!-- Feed ques item -->
                <div>
                    <input type="radio" class="btn-check d" name="ques${id}" id="${id}option4">
                    <label class="btn btn-outline-primary w-100 opt-d" for="${id}option4">${d}</label>
                </div>
            </div>
        </div>
    </div>`;
                return question;
            }

            $("#lastbtn").click(function (e) {
                e.preventDefault();
                but = $(this);
                questions = pushToArray();
                answers = [];
                questions.forEach(que => {
                    ansd = que.answer;
                    answers.push(ansd);
                });
                if (answers.includes("")) {
                    salat("Answer all questions before submitting", 1);
                    return;
                }
                $.ajax({
                    url: api_url + "admin/submit_questionnaire",
                    method: "POST",
                    data: {
                        type: 2,
                        questions: questions,
                    },
                    beforeSend: () => {
                        btn(but, '', 'before');
                    }
                }).done(res => {
                    btn(but, 'Submit', 'after');
                    salat(res.message);
                    $("#queform")[0].reset();
                    qnaire.reset();

                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    btn(but, 'Submit', 'after');
                })

            })
        })

        function pushToArray() {
            que_card = $(".question");
            arr = [];
            que_card.map((que) => {
                que = que_card[que];
                id = $(que).data('id');
                name = `ques${id}`
                let opt = $(que).find('input:checked');
                question = $(que).find('h3').html();
                optionA = $(que).find($('.opt-a')).html();
                optionB = $(que).find($('.opt-b')).html();
                optionC = $(que).find($('.opt-c')).html();
                optionD = $(que).find($('.opt-d')).html();
                if (opt.length > 0) {
                    opt = opt.attr('class').split(' ')[1];
                } else {
                    opt = '';
                }
                let ans = {
                    id: id,
                    question: question,
                    answer: opt,
                    a: optionA,
                    b: optionB,
                    c: optionC,
                    d: optionD,
                };
                arr.push(ans)
            })

            return arr;
        }
    </script>
@endsection
