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
                    <!-- Card -->
                    <div class="card mb-4" id="cur_card">
                        <div class="card-header border-bottom px-4 py-3">
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-0 pt-3">Curriculum</h4>
                                <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm" id="addsec1">Add
                                    Section</a>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body ">
                            <input type="hidden" id="course_id"/>
                            <x-add-section-card id="addseccard" type="add"/>

                            <div class="main">

                            </div>
                            <x-add-section-card id="addseccard2" type="add"/>
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0)" class="btn btn-sm btn-outline-primary" id="addsec2">Add
                                Section</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="editSectionModal" tabindex="-1" role="dialog" aria-labelledby="editSectionModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editSectionModalLabel">
                        Edit Section
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <input type="hidden" name="section_id">
                        <div class="row mb-3">
                            <div class="col-lg-12 col-md-8 col-12">
                                <label for="" class="text-bold fw-semi-bold text-dark">Course Title</label>
                                <input type="text" name="title" class="form-control mb-1" placeholder="Enter a title">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-lg-12 col-md-8 col-12">
                                <label for="cgain" class="text-bold fw-semi-bold text-dark">What will
                                    Students Learn in this course</label>
                                <input type="text" id="cgain" name="gain" class="form-control mb-2"
                                       placeholder="Enter a learning objective">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-sm" type="submit">
                                Save Section
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

    <!--Modal -->
    <div class="modal fade" id="addLectureModal" tabindex="-1" role="dialog" aria-labelledby="addLectureModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addLectureModalLabel">
                        Add Lecture
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="row text-start g-3">
                        <input type="hidden" name="section_id">
                        <div class="col-md-12">
                            <label for="" class="text-bold fw-semi-bold text-dark">Lecture Title</label>
                            <input class="form-control" name="title" type="text" placeholder="Enter Lecture Title">
                        </div>
                        <div class="col-12 mt-3">
                            <label for="c_desc" class="text-bold fw-semi-bold text-dark">Lecture Description</label>
                            <x-textarea id="c_desc" name="c_desc"/>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-sm" type="submit">
                                Save Lecture
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

    <!--Modal -->
    <div class="modal fade" id="editLectureModal" tabindex="-1" role="dialog" aria-labelledby="editLectureModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editLectureModalLabel">
                        Edit Lecture
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="row text-start g-3" id="editLectureForm">
                        <input type="hidden" name="lecture_id">
                        <input type="hidden" name="section_id">
                        <div class="col-md-12">
                            <label for="" class="text-bold fw-semi-bold text-dark">Lecture Title</label>
                            <input class="form-control" name="title" type="text" placeholder="Enter Lecture Title">
                        </div>
                        <div class="col-12 mt-3">
                            <label for="edit_desc" class="text-bold fw-semi-bold text-dark">Lecture Description</label>
                            <x-textarea id="edit_desc" name="edit_desc"/>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-sm" type="submit">
                                Save
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

    <!--Modal -->
    <div class="modal fade" id="addVideoModal" tabindex="-1" role="dialog" aria-labelledby="addVideoModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addVideoModalLabel">
                        Add Video Content
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">

                    <form hidden id="video_info">
                        <input type="hidden" name="lecture_id" id="lecu_id"/>
                        <input type="hidden" name="section_id"/>
                        <input type="hidden" name="lecture_title" id="lecu_title"/>
                        <input type="hidden" name="lecture_description" id="lecu_desc"/>
                        <input type="hidden" name="video_length" id="video_length"/>
                    </form>
                    <form class="row text-start g-3" id="addVideoForm" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <input name="video" type="file" id="file_upload"/>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-white btn-sm" data-bs-dismiss="modal" aria-label="Close">
                                Close
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--Modal -->
    <div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addImageModalLabel">
                        Add Image Content
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">

                    <form hidden id="image_info">
                        <input type="hidden" name="lecture_id"/>
                    </form>
                    <form class="row text-start g-3" id="addImageForm" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <input name="image" type="file" id="image_upload"/>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-white btn-sm" data-bs-dismiss="modal" aria-label="Close">
                                Close
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--Modal -->
    <div class="modal fade" id="addTextModal" tabindex="-1" role="dialog" aria-labelledby="addTextModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addTextModalLabel">
                        Add Text Content
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row text-start g-3" id="addTextForm">
                        <input type="hidden" name="lecture_id"/>
                        <div class="col-md-12">
                            <x-textarea id="textcontent" name="textcontent" type="2"/>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-sm" type="submit">
                                Submit
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

    <!--Modal -->
    <div class="modal fade" id="addTextModal2" tabindex="-1" role="dialog" aria-labelledby="addTextModal2Label"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addTextModal2Label">
                        Add Text Content
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row text-start g-3" id="addTextForm2">
                        <input type="hidden" name="lecture_id"/>
                        <div class="col-md-12">
                            <x-textarea id="textcontent2" name="textcontent2" type="2"/>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-sm" type="submit">
                                Submit
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
    <div class="modal fade" id="addCodeModal" tabindex="-1" role="dialog" aria-labelledby="addCodeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addCodeModalLabel">
                        Add Code
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row text-start g-3" id="addCodeForm">
                        <input type="hidden" name="lecture_id"/>
                        <div class="col-md-12 mb-3">
                            <label for="lang">Select a language</label>
                            <select name="lang" id="lang" class="form-control" required>
                                <option value="" selected disabled>...Select a language</option>
                                <option value="css">CSS</option>
                                <option value="html">HTML</option>
                                <option value="js">JavaScript</option>
                                <option value="aspnet">ASP.NET</option>
                                <option value="c">C</option>
                                <option value="csharp">C#</option>
                                <option value="cpp">C++</option>
                                <option value="django">Django</option>
                                <option value="dart">Dart</option>
                                <option value="git">Git</option>
                                <option value="java">Java</option>
                                <option value="lisp">Lisp</option>
                                <option value="Markdown">Markdown</option>
                                <option value="matlab">MATLAB</option>
                                <option value="mongodb">MongoDB</option>
                                <option value="php">PHP</option>
                                <option value="py">Python</option>
                                <option value="r">R</option>
                                <option value="razor">Razor C#</option>
                                <option value="jsx">React JSX</option>
                                <option value="jsx">Ruby</option>
                                <option value="ts">TypeScript</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <textarea id="codearea" name="codearea" class="form-control border-2" rows="3"></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-sm" type="submit">
                                Submit
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
        $(document).ready(function () {
            interval = setInterval(() => {
                cid = $("#course_id").val();
                type = $("#ctype").val();

                if (cid != "" && type != "") {
                    clearInterval(interval);
                    getAllSections(cid, type)
                }
            }, 200);

            function contentType(type) {
                but = "";
                if (type == 1) {
                    but +=
                        `<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addVideoModal" class="btn btn-secondary btn-sm vidmodal">Add Video Content +</a> `
                } else if (type == 2) {
                    but +=
                        `<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addVideoModal" class="btn btn-secondary btn-sm vidmodal">Add Video Content +</a>&nbsp;&nbsp;`
                    but +=
                        `<a href="javascript:void(0)" class="btn btn-secondary btn-sm textmodal2" data-bs-target="#addTextModal2" data-bs-toggle="modal">Add Text Content +</a>&nbsp;&nbsp;`
                    but +=
                        `<a href="javascript:void(0)" class="btn btn-secondary btn-sm imgmodal" data-bs-target="#addImageModal" data-bs-toggle="modal">Add Image Content +</a>&nbsp;&nbsp;`
                    but +=
                        `<a href="javascript:void(0)" class="btn btn-secondary btn-sm codemodal" data-bs-target="#addCodeModal" data-bs-toggle="modal">Add Code +</a> `
                } else if (type == 3) {
                    but +=
                        `<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addTextModal" class="btn btn-secondary btn-sm textmodal">Add Text Content +</a>`
                }
                return but;
            }

            window.URL = window.URL || window.webkitURL;

            document.getElementById('file_upload').onchange = setFileInfo;

            function setFileInfo() {
                var file = this.files;
                var video = document.createElement('video');
                video.preload = 'metadata';

                video.onloadedmetadata = function () {
                    window.URL.revokeObjectURL(video.src);
                    var duration = video.duration;
                    if (duration > 654) {
                        salat("This file is more than 10 minutes long", 1);
                        $("#file_upload").fileinput('clear');
                    } else {
                        $("input#video_length").val(duration);
                    }

                }

                video.src = URL.createObjectURL(file[0]);
            }

            function updateMainContent(url) {
                lecture_id = $("#lecu_id").val();
                duration = $("input#video_length").val();
                $.ajax({
                    url: api_url + "admin/update_lecture_video",
                    method: "POST",
                    data: {
                        uri: url,
                        lecture_id: lecture_id,
                        duration: duration,
                    }
                }).done(res => {
                    console.log(res);
                }).fail(res => {
                    console.log(res);
                })
            }

            function updateMainContent2(lecture_id, content, bt) {
                $.ajax({
                    url: api_url + "admin/update_lecture_text",
                    method: "POST",
                    data: {
                        lecture_id: lecture_id,
                        content: content,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                    $("#addTextModal").modal('hide');
                    textcontent.setData("");
                    grandparent2.find($("div.mc")).html(content);
                    btn(bt, 'Submit', 'after');
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    btn(bt, 'Submit', 'after');
                })
            }

            function updateTextContent(lecture_id, content, bt) {
                $.ajax({
                    url: api_url + "admin/update_lecture_article",
                    method: "POST",
                    data: {
                        lecture_id: lecture_id,
                        text: content,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                    $("#addTextModal2").modal('hide');
                    textcontent2.setData("");
                    grandparent2.find($("div.tc")).html(content);
                    btn(bt, 'Submit', 'after');
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    btn(bt, 'Submit', 'after');
                })
            }

            function updateCodeContent(lecture_id, code, lang, bt) {
                $.ajax({
                    url: api_url + "admin/update_lecture_code",
                    method: "POST",
                    data: {
                        lecture_id: lecture_id,
                        language: lang,
                        code: code,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                    $("#addCodeModal").modal('hide');
                    btn(bt, 'Submit', 'after');
                    $("#addCodeForm")[0].reset();
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    btn(bt, 'Submit', 'after');
                })
            }

            $("#addCodeForm").submit(function (e) {
                e.preventDefault();
                but = $(this).find($('button[type="submit"]'));
                lecture_id = $(this).find($('input[name="lecture_id"]')).val();
                code = $(this).find($('textarea')).val();
                lang = $(this).find($('select[name="lang"]')).val();
                updateCodeContent(lecture_id, code, lang, but);
            });


            $(document).on('click', '.textmodal', function (e) {
                e.preventDefault();
                grandparent2 = $(this).parent().parent().parent();
                lect_id = grandparent2.find($("input.lec_id")).val();
                main_con = grandparent2.find($("div.mc")).html();
                $("#addTextForm").find($('input[name="lecture_id"]')).val(lect_id);
                textcontent.setData(main_con);
            })

            $(document).on('click', '.textmodal2', function (e) {
                e.preventDefault();
                grandparent2 = $(this).parent().parent().parent();
                lect_id = grandparent2.find($("input.lec_id")).val();
                main_con = grandparent2.find($("div.tc")).html();
                $("#addTextForm2").find($('input[name="lecture_id"]')).val(lect_id);
                textcontent2.setData(main_con);
            })

            $(document).on('click', '.imgmodal', function (e) {
                e.preventDefault();
                grandparent2 = $(this).parent().parent().parent();
                lect_id = grandparent2.find($("input.lec_id")).val();
                $("#image_info").find($('input[name="lecture_id"]')).val(lect_id);
            })

            $(document).on('click', '.codemodal', function (e) {
                e.preventDefault();
                grandparent3 = $(this).parent().parent().parent();
                lect_id = grandparent3.find($("input.lec_id")).val();
                $("#addCodeForm").find($('input[name="lecture_id"]')).val(lect_id);
            })

            function mainContentField(type, content, text) {
                field = ""
                if (type == 3) {
                    field += `<div class="mc" hidden>${content}</div>`
                } else if (type == 2) {
                    field += `<div class="tc" hidden>${text}</div>`
                }
                return field;
            }

            $("#addTextForm").submit(function (e) {
                e.preventDefault();
                lecture_id = $(this).find($('input[name="lecture_id"]')).val();
                content = textcontent.getData();
                bt = $(this).find($("button[type='submit']"));
                if (!content) {
                    salat("Text field is required", 1);
                    return;
                }
                updateMainContent2(lecture_id, content, bt);
            })

            $("#addTextForm2").submit(function (e) {
                e.preventDefault();
                lecture_id = $(this).find($('input[name="lecture_id"]')).val();
                content = textcontent2.getData();
                bt = $(this).find($("button[type='submit']"));
                if (!content) {
                    salat("Text field is required", 1);
                    return;
                }
                updateTextContent(lecture_id, content, bt);
            })


            $("#file_upload").fileinput({
                uploadUrl: "https://cors-anywhere.herokuapp.com/corsdemo/https://vi.beelsacademy.com/api/video",
                allowedFileExtensions: ['mp4', 'ogg'],
                // allowedFileTypes: ['video'],
                removeFromPreviewOnError: true,
                dropZoneEnabled: false,
                theme: "bs5",
                // browseOnZoneClick: true,
                uploadAsync: true,
                fileActionSettings: {
                    showZoom: false,
                    showUpload: false,
                },
                mergeAjaxCallbacks: true,
                uploadExtraData: function (previewId, index) {
                    return {
                        title: $("#lecu_title").val(),
                        lecture_id: $("#lecu_id").val(),
                        duration: $("input#video_length").val(),
                    };
                },
            }).on('fileuploaded', function (event, data) {
                var form = data.form,
                    files = data.files,
                    extra = data.extra,
                    response = data.response,
                    reader = data.reader;
                updateMainContent(response.url);
                $("#addVideoModal").modal("hide");
                $("#file_upload").fileinput('clear');
            });

            $("#image_upload").fileinput({
                uploadUrl: api_url + 'admin/update_lecture_image',
                browseOnZoneClick: true,
                fileActionSettings: {
                    showZoom: false,
                    showUpload: false,
                },
                allowedFileTypes: ['image'],

                uploadAsync: true,
                mergeAjaxCallbacks: true,
                uploadExtraData: function (previewId, index) {
                    lecture_id = $("#image_info").find($('input[name="lecture_id"]')).val()
                    return {
                        lecture_id: lecture_id,
                    };
                },
            }).on('fileuploaded', function (event, data) {
                var form = data.form,
                    files = data.files,
                    extra = data.extra,
                    response = data.response,
                    reader = data.reader;
                $("#addImageModal").modal("hide");
                salat(response.message);
                $("#image_upload").fileinput('clear');
            });
            ;

            $('#addsec1').click(function (e) {
                e.preventDefault();
                card = $(document).find($('#addseccard2'))
                if (!card.hasClass('d-none')) {
                    card.addClass('d-none');
                    card.find($('form'))[0].reset();
                }
                $('#addseccard').fadeOut('slow', () => {
                    $('#addseccard').removeClass('d-none');
                })

            });
            $('#addsec2').click(function (e) {
                e.preventDefault();
                card = $(document).find($('#addseccard'))
                if (!card.hasClass('d-none')) {
                    card.addClass('d-none');
                    card.find($('form'))[0].reset();
                }
                $('#addseccard2').removeClass('d-none');
            });


            function getAllSections(cid, type) {
                // course_id = $('#course_id').val();
                cardbody = $('#cur_card').find($('.main'))
                i = cardbody.find($('.section')).length;
                $.ajax({
                    method: 'GET',
                    url: api_url + 'admin/get_sections/' + cid,
                    beforeSend: () => {
                        cardbody.html(`
                    <div class="d-flex justify-content-center">
                        <div class="spinner-border text-black-100" style="width: 5rem; height: 5rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                        `);
                    },
                }).done(res => {
                    console.log(res);
                    if (res.data.length == 0) {
                        cardbody.html(`<div class="bg-light-secondary rounded p-2 mb-4 dummy">
                        <div class="d-inline-block me-3"><p class="text-capitalize fw-bold text-dark fs-4">Section 1:</p></div>
                            <div class="d-inline-block me-3">
                            <span class="d-inline-block me-3"><h4 class="text-capitalize">Introduction</h4></span>
                            <span class="d-inline-block"><a href="javascript:void(0)" class="me-1 text-inherit alt_section" data-bs-toggle="tooltip" data-placement="top"
                                title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                <a href="javascript:void(0)" class="me-1 text-inherit sec_del" data-bs-toggle="tooltip" data-placement="top"
                                title="Delete"><i class="fe fe-trash-2 fs-6"></i></a></span></div>
                                    <!-- List group -->
                                    <div class="list-group list-group-flush border-top-0" id="courseList">
                                        <div id="courseOne">
                                            <div class="list-group-item rounded px-3 mb-1" id="introduction">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                            <span class="align-middle">Introduction</span>
                                                        </a>
                                                    </h5>
                                                    <div><a href="#" class="me-1 text-inherit"
                                                            data-bs-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fe fe-edit fs-6 alt_section"></i></a>
                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Delete"><i
                                                                class="fe fe-trash-2 fs-6"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm mt-3 alt_section">Add Lecture +</a>
                                </div>`)
                        return;
                    }
                    cardbody.html('');
                    i = 1;
                    res.data.map(sec => {
                        lectures = ''
                        sec.lectures.forEach(lec => {

                            lectures += `
                        <div class="list-group-item rounded px-3 mb-1" id="${stripLower(lec.title + lec.id)}">
                            <div class="d-flex align-items-center justify-content-between lec_details">
                                <h5 class="mb-0">
                                <a href="#" class="text-inherit">
                                    <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                    <span class="align-middle text-capitalize lec_tit">${lec.title}</span>
                                    <input type="hidden" name="lec_desc" class="lec_desc" value="${lec.description}" />
                                    <input type="hidden" name="lec_id" class="lec_id" value="${lec.id}" />
                                    <input type="hidden" name="sec_id" class="sec_id" value="${lec.section_id}" />
                                    ${mainContentField(type, lec.main_content ?? '', lec.text ?? '')}
                                </a>
                                </h5>
                                <div><a href="javascript:void(0)" class="me-1 text-inherit edit_lec" data-bs-toggle="tooltip" data-placement="top"
                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                    title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                    data-bs-target="#collapselist${lec.id}" aria-expanded="false"
                                    aria-controls="collapselist${lec.id}">
                                    <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span></a>
                                </div>
                            </div>
                            <div id="collapselist${lec.id}" class="collapse" aria-labelledby="${stripLower(lec.title + lec.id)}"
                                data-bs-parent="#lecture${lec.section_id}">
                                <div class="card-body">
                                ${contentType(type)}
                                </div>
                            </div>
                        </div>
                        `
                        })
                        cardbody.append(`
                    <div class="bg-light-secondary rounded p-2 mb-4 section">
                            <div class="d-inline-block me-3"><p class="text-capitalize fw-bold text-dark fs-4">Section ${i++}:</p></div>
                            <div class="d-inline-block me-3">
                            <input type="hidden" name="section_id" value="${sec.id}" />
                            <input type="hidden" name="gain" value="${sec.course_gain}" />
                            <span class="d-inline-block me-3"><h4 class="text-capitalize sec_title">${sec.title}</h4></span>
                            <span class="d-inline-block"><a href="javascript:void(0)" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                title="Edit"><i class="sec_edit fe fe-edit fs-6"></i></a>
                                <a href="javascript:void(0)" class="me-1 text-inherit sec_del" data-bs-toggle="tooltip" data-placement="top"
                                title="Delete"><i class="fe fe-trash-2 fs-6"></i></a></span></div>
                                <div class="list-group list-group-flush border-top-0" id="lecList${sec.id}">
                                    <div id="lecture${sec.id}">
                                        ${lectures}
                                    </div>
                                </div>
                            <div><button class="btn btn-outline-primary btn-sm mt-3 addlec" data-bs-toggle="modal"
                                data-bs-target="#addLectureModal">Add Lecture +</button></div>

                        </div>
                `)
                    })
                }).fail(res => {
                    concatError(res.responseJSON);
                })
            }

            $(document).on('click', '.alt_section', function (e) {
                e.preventDefault();
                card = $(document).find($('#addseccard2'))
                if (!card.hasClass('d-none')) {
                    card.addClass('d-none');
                    card.find($('form'))[0].reset();
                }
                $('#addseccard').removeClass('d-none');
            })


            form = $("div.addseccard").find($('form'));
            form.submit(function (e) {
                e.preventDefault();
                title = $(this).find('input[name="title"]').val();
                gain = $(this).find('input[name="purpose"]').val();
                course_id = $('#course_id').val();
                bt = $('form').find('button[type="submit"]');
                if (!title || !gain) {
                    salat('All Fields Required', 1);
                    return;
                }
                cardbody = $('#cur_card').find($('.main'))
                i = cardbody.find($('.section')).length;
                dummy = cardbody.find($("div.dummy"));
                $.ajax({
                    method: "POST",
                    url: api_url + `admin/add_section`,
                    data: {
                        course_id: course_id,
                        title: title,
                        gain: gain,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                    btn(bt, 'Add Section', 'after');
                    if (dummy) {
                        dummy.remove();
                    }
                    cardbody.append(`<div class="bg-light-secondary rounded p-2 mb-4 section">
                            <div class="d-inline-block me-3"><p class="text-capitalize fw-bold text-dark fs-4">Section ${++i}:</p></div>
                            <div class="d-inline-block me-3">
                            <input type="hidden" name="section_id" value="${res.id}" />
                            <input type="hidden" name="gain" value="${gain}" />
                            <span class="d-inline-block me-3"><h4 class="text-capitalize sec_title">${title}</h4></span>
                            <span class="d-inline-block"><a href="javascript:void(0)" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                title="Edit"><i class="sec_edit fe fe-edit fs-6"></i></a>
                                <a href="javascript:void(0)" class="me-1 text-inherit sec_del" data-bs-toggle="tooltip" data-placement="top"
                                title="Delete"><i class="fe fe-trash-2 fs-6"></i></a></span></div>
                                <div class="list-group list-group-flush border-top-0" id="lecList${res.id}">
                                    <div id="lecture${res.id}">

                                    </div>
                                </div>
                            <div><button href="#" class="btn btn-outline-primary btn-sm mt-3 addlec" data-bs-toggle="modal"
                                data-bs-target="#addLectureModal">Add Lecture +</button></div>

                        </div>`)
                    $('form').each(function () {
                        this.reset()
                    });
                    $('.addseccard').addClass('d-none');
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON)
                    btn(bt, 'Add Section', 'after');
                })


            });
            $('.closecard').each((i, obj) => {
                $(obj).find($('a')).on('click', function (e) {
                    e.preventDefault();
                    $(this).closest($('.addseccard')).addClass('d-none');
                    $(this).closest($('.addseccard')).find('form')[0].reset()
                });
            });


            $(document).on('click', '.section', function (e) {
                e.preventDefault();

                if ($(event.target).hasClass('sec_edit')) {
                    section = $(this);
                    title = section.find($('.sec_title')).html();
                    gain = section.find($('input[name="gain"]')).val();
                    section_id = section.find($('input[name="section_id"]')).val();

                    $('#editSectionModal').modal('show');
                    form = $('#editSectionModal').find($('form'));
                    form.find($('input[name="title"]')).val(title);
                    form.find($('input[name="section_id"]')).val(section_id);
                    form.find($('input[name="gain"]')).val(gain);

                }

            });


            form = $('#editSectionModal').find($('form'));
            form.submit(function (e) {
                e.preventDefault();
                title = $(this).find($('input[name="title"]')).val();
                id = $(this).find($('input[name="section_id"]')).val();
                gain = $(this).find($('input[name="gain"]')).val();
                course_id = $('#course_id').val();
                bt = $(this).find($('button[type="submit"]'));

                if (!title || !gain) {
                    salat('All Fields Required', 1);
                    return;
                }

                $.ajax({
                    url: api_url + `admin/update_section`,
                    method: 'POST',
                    data: {
                        title: title,
                        id: id,
                        gain: gain,
                        course_id: course_id,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    },
                }).done(res => {
                    console.log(res);
                    btn(bt, 'Save Section', 'after');
                    section.find($('.sec_title')).html(title);
                    section.find($('input[name="gain"]')).val(gain);
                    salat(res.message);
                    $('#editSectionModal').modal('hide');
                }).fail(res => {
                    btn(bt, 'Save Section', 'after');
                    concatError(res.responseJSON);
                })
            })


            $(document).on('click', '.section', function (e) {
                e.preventDefault();
                if ($(event.target).hasClass('addlec')) {
                    section = $(this);
                    section_id = section.find($('input[name="section_id"]')).val();
                    form = $('#addLectureModal').find($('form'))
                    form.find($('input[name="section_id"]')).val(section_id);
                }

            });
            $('#addLectureModal').find($('form')).submit(function (e) {
                e.preventDefault();
                title = $(this).find($('input[name="title"]')).val();
                section_id = $(this).find($('input[name="section_id"]')).val();
                description = $(this).find($('textarea')).val();
                bt = $(this).find($('button[type="submit"]'));
                type = $("#ctype").val();

                if (!title || !description) {
                    salat('All Fields Required', 1);
                    return;
                }
                $.ajax({
                    url: api_url + `admin/add_lecture`,
                    method: 'POST',
                    data: {
                        title: title,
                        section_id: section_id,
                        description: description,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    },
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                    btn(bt, 'Save Lecture', 'after');
                    $(document).find($(`#lecture${section_id}`)).append(`
                        <div class="list-group-item rounded px-3 mb-1" id="${stripLower(title + res.id)}">
                            <div class="d-flex align-items-center justify-content-between lec_details">
                                <h5 class="mb-0">
                                <a href="#" class="text-inherit">
                                    <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                    <span class="align-middle text-capitalize lec_tit">${title}</span>
                                    <input type="hidden" name="lec_desc" class="lec_desc" value="${description}" />
                                    <input type="hidden" name="lec_id" class="lec_id" value="${res.id}" />
                                    <input type="hidden" name="sec_id" class="sec_id" value="${section_id}" />
                                    ${mainContentField(type, "", "")}
                                </a>
                                </h5>
                                <div><a href="javascript:void(0)" class="me-1 text-inherit edit_lec" data-bs-toggle="tooltip" data-placement="top"
                                    title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                    title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                    data-bs-target="#collapselist${res.id}" aria-expanded="false"
                                    aria-controls="collapselist${res.id}">
                                    <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span></a>
                                </div>
                            </div>
                            <div id="collapselist${res.id}" class="collapse" aria-labelledby="${stripLower(title + res.id)}"
                                data-bs-parent="#lecture${section_id}">
                                <div class="card-body">
                                ${contentType(type)}
                                </div>
                            </div>
                            </div>
                        `)
                    $('#addLectureModal').modal('toggle')
                    form[0].reset();
                    try {
                        c_desc.setData('')
                    } catch (error) {
                        console.error(error);
                    }
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                    btn(bt, 'Save Lecture', 'after');

                })
            })

            $(document).on('click', '.edit_lec', function (e) {
                e.preventDefault();
                parent = $(this).closest($("div.lec_details"));

                title = parent.find($("span.lec_tit")).html();
                id = parent.find($("input[name='lec_id']")).val();
                description = parent.find($("input[name='lec_desc']")).val();
                sec_id = parent.find($("input[name='sec_id']")).val();

                form = $("#editLectureModal").find($('form'));
                form.find($('input[name="title"]')).val(title);
                form.find($('input[name="lecture_id"]')).val(id);
                form.find($('input[name="section_id"]')).val(sec_id);
                edit_desc.setData(description);
                $("#editLectureModal").modal('show');

            })

            $("#editLectureForm").submit(function (e) {
                e.preventDefault();
                form = $(this);
                title = form.find($('input[name="title"]')).val();
                id = form.find($('input[name="lecture_id"]')).val();
                section_id = form.find($('input[name="section_id"]')).val();
                description = form.find($('textarea[name="edit_desc"]')).val();
                bt = form.find($('button[type="submit"]'));

                $.ajax({
                    url: api_url + 'admin/update_lecture',
                    method: 'POST',
                    data: {
                        title: title,
                        section_id: section_id,
                        id: id,
                        description: description,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(res => {
                    console.log(res);
                    btn(bt, 'Save', 'after');
                    salat(res.message);
                    parent.find($("span.lec_tit")).html(title);
                    parent.find($("input[name='lec_id']")).val(id);
                    parent.find($("input[name='lec_desc']")).val(description);
                    parent.find($("input[name='sec_id']")).val(section_id);
                    $("#editLectureModal").modal('hide');
                }).fail(res => {
                    console.log(res);
                    btn(bt, 'Save', 'after');
                    concatError(res.responseJSON);
                })

            });

            $(document).on('click', '.vidmodal', function (e) {
                e.preventDefault();
                grandparent = $(this).parent().parent().parent();
                title = grandparent.find($("span.lec_tit")).html();
                description = grandparent.find($("input.lec_desc")).val();
                lecture_id = grandparent.find($("input.lec_id")).val();

                video_form = $("#video_info");
                video_form.find($('input[name="lecture_id"]')).val(lecture_id);
                video_form.find($('input[name="lecture_title"]')).val(title);
                video_form.find($('input[name="lecture_description"]')).val(description);
            })


        });
    </script>
@endsection
