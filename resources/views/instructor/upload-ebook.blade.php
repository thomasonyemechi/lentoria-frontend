@extends('layouts.instructor')
@section('page_title', "Course | $slug")

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
                                <h4 class="mb-0 pt-3">Uploader</h4>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body ">
                            <form class="row text-start g-3" id="addVideoForm" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <label for="book_title">Book Title</label>
                                    <input type="text" class="form-control" name="book_title" id="book_title"/>
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" name="course_id" id="course_id"/>
                                    <input name="file" type="file" id="e_book-uploader"/>
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


            let interval = setInterval(() => {
                cid = $("#course_id").val();

                console.log(cid);
                if (cid != "") {
                    clearInterval(interval);
                }
            }, 200);

            $("#e_book-uploader").fileinput({
                uploadUrl: "https://lentoria.site/api/book",
                allowedFileExtensions: [
                    'pdf'
                ],
                removeFromPreviewOnError: true,
                dropZoneEnabled: true,
                theme: "bs5",
                browseOnZoneClick: true,
                uploadAsync: true,
                fileActionSettings: {
                    showZoom: false,
                    showUpload: false,
                },
                uploadExtraData: function (previewId, index) {
                    return {
                        course_id: $("#course_id").val(),
                        title: $("#book_title").val()
                    };
                },
                mergeAjaxCallbacks: false,
                previewFileIcon: '<i class="fas fa-file"></i>',
                preferIconicPreview: true, // this will force thumbnails to display icons for following file extensions
                previewFileIconSettings: { // configure your icon file extensions
                    'doc': '<i class="fas fa-file-word text-primary"></i>',
                    'xls': '<i class="fas fa-file-excel text-success"></i>',
                    'ppt': '<i class="fas fa-file-powerpoint text-danger"></i>',
                    'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
                    'zip': '<i class="fas fa-file-archive text-muted"></i>',
                    'htm': '<i class="fas fa-file-code text-info"></i>',
                    'txt': '<i class="fas fa-file-text text-info"></i>',
                    'mov': '<i class="fas fa-file-movie-o text-warning"></i>',
                    'mp3': '<i class="fas fa-file-audio text-warning"></i>',
                    // note for these file types below no extension determination logic
                    // has been configured (the keys itself will be used as extensions)
                    'jpg': '<i class="fas fa-file-image text-danger"></i>',
                    'gif': '<i class="fas fa-file-image text-warning"></i>',
                    'png': '<i class="fas fa-file-image text-primary"></i>'
                },
                previewFileExtSettings: { // configure the logic for determining icon file extensions
                    'doc': function (ext) {
                        return ext.match(/(doc|docx)$/i);
                    },
                    'xls': function (ext) {
                        return ext.match(/(xls|xlsx)$/i);
                    },
                    'ppt': function (ext) {
                        return ext.match(/(ppt|pptx)$/i);
                    },
                    'zip': function (ext) {
                        return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
                    },
                    'htm': function (ext) {
                        return ext.match(/(htm|html)$/i);
                    },
                    'txt': function (ext) {
                        return ext.match(/(txt|ini|csv|java|php|js|css)$/i);
                    },
                    'mov': function (ext) {
                        return ext.match(/(avi|mpg|mkv|mov|mp4|3gp|webm|wmv)$/i);
                    },
                    'mp3': function (ext) {
                        return ext.match(/(mp3|wav)$/i);
                    },
                },
            }).on('fileuploaded', function (event, data) {
                let form = data.form,
                    files = data.files,
                    extra = data.extra,
                    response = data.response,
                    reader = data.reader;
                $("#e_book-uploader").fileinput('clear');
                $("#book_title").val("");
                location.href = @js(route('instructor.pricing',['type'=>$type,'slug'=>$slug]));
            }).on('fileuploaderror', function (event, data) {
                let response = data.jqXHR.responseJSON;
                let errorMsg = '';
                let errorContainer = $(document).find('.kv-fileinput-error');
                if (response && response.errors) {
                    response.errors.forEach(function (error) {
                        errorMsg += `<li>${error}</li>`;
                    })
                    errorContainer.html(`<ul>${errorMsg}</ul>`);
                }
            });
        });
    </script>
@endsection
