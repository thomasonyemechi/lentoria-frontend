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
                            <h3 class="mb-0">Course Messages</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                Write messages to your students (optional) that will be sent automatically when they join or
                                complete your course
                                to encourage students to engage with course content. If you do not wish to send a welcome or
                                congratulations
                                message, leave the text box blank.
                            </div>
                            <input type="hidden" id="mycourse_id" />
                            <form id="addMessageForm">

                                <div class="mb-3">
                                    <label class="form-label"><b>Welcome Message</b></label>
                                    <textarea id="welmess" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Congratulations Message</b></label>
                                    <textarea id="cermess" class="form-control"></textarea>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-success btn-block review-btn" id="addMessage">Add
                                        Message</button>
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
            var check = setInterval(() => {
                val = $('input[name="course_info_29"]').val()
                if (val != "") {
                    clearInterval(check);

                    dat = JSON.parse(val);

                    $('#welmess').val(dat.welcome_message);
                    $('#cermess').val(dat.certification_message);
                    $('#mycourse_id').val(dat.id);
                }
            }, 500);

            $('#addMessageForm').submit(function(e) {
                e.preventDefault();
                course_id = $('#mycourse_id').val();
                welcome_message = $('#welmess').val();
                certification_message = $('#cermess').val();
                $.ajax({
                    method: 'POST',
                    url: api_url + 'admin/course_messageupdate',
                    data: {
                        course_id: course_id,
                        welcome_message: welcome_message,
                        certification_message: certification_message
                    },
                    beforeSend: () => {
                        btn($('#addMessage'), '', 'before');
                    }
                }).done((res) => {
                    console.log(res);
                    salat(res.message);
                    btn($('#addMessage'), 'Add Message', 'after');
                }).fail((res) => {
                    concatError(res.responseJSON)
                    console.log(res)
                    btn($('#addMessage'), 'Add Message', 'after');
                });
            });

        })
    </script>
@endsection
