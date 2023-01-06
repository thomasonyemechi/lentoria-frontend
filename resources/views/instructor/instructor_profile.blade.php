@extends('layouts.instructor')

@section('page_title', 'Instructor Social Profile')

@section('page_content')

    <div class="pt-5 pb-5">
        <div class="container">
            {!! instructorInfo() !!}
            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('layouts.sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card header -->
                        <!-- Card header -->
                        <div class="card-header border-bottom-0 p-0">
                            <div>
                                <!-- Nav -->
                                <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#profile"
                                           role="tab" aria-controls="table" aria-selected="true">Lentoria Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="table-tab" data-bs-toggle="pill" href="#profile_pic"
                                           role="tab" aria-controls="table" aria-selected="true">Profile Picture</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active overlay" id="profile" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <form id="editProfileForm">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="fristname" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="firstname" readonly
                                                           value="{{ names(1) }}" name="fname"/>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="lastname" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="lastname" readonly
                                                           value="{{ names(2) }}" name="lname"/>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="headine" class="form-label">Headline</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="Instructor at Lentoria" id="headline"
                                                           name="headline"/>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="biography" class="form-label">Biography</label>
                                                    <x-textarea id="biography" name="biography" type="1"/>
                                                    <small>Your biography should have at least 50 characters, links and
                                                        coupon codes are not permitted.</small>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="lang" class="form-label">Language</label>
                                                    <select type="text" class="form-control"
                                                            placeholder="Instructor at Lentoria" id="lang" name="lang">
                                                        <option value="english">English</option>
                                                        <option value="french">French</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group mb-3">
                                                    <label for="name" class="form-label">Website</label>
                                                    <input type="text" class="form-control shadow-none"
                                                           placeholder="Url"
                                                           id="site" name="site"/>
                                                </div>
                                                <label for="twitter" class="form-label">Twitter</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"
                                                          id="twitter-addon">https://www.twitter.com/</span>
                                                    <input type="text" class="form-control" name="twitter"
                                                           placeholder="Username" id="twitter"
                                                           aria-describedby="twitter-addon3">
                                                </div>
                                                <label for="face" class="form-label">Facebook</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"
                                                          id="facebook-addon">https://www.facebook.com/</span>
                                                    <input type="text" class="form-control" placeholder="Username"
                                                           id="face" name="face"/>
                                                </div>
                                                <label for="linked" class="form-label">LinkedIn</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"
                                                          id="linkedin-addon">https://www.linkedin.com/</span>
                                                    <input type="text" class="form-control" placeholder="Resource ID"
                                                           id="linked" name="linked"/>
                                                </div>

                                                <label for="yout" class="form-label">Youtube</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"
                                                          id="youtube-addon">https://www.youtube.com/</span>
                                                    <input type="text" class="form-control" placeholder="Username"
                                                           id="yout" name="you"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="profile_pic" role="tabpanel"
                                     aria-labelledby="profile_pic-tab">
                                    <small class="text-muted">Minimum 200x200 pixels, Maximum 6000x6000 pixels</small>
                                    <form class="row text-start g-3" id="addVideoForm" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <input name="profile_pic" type="file" id="file_upload"/>
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

    <script>
        $(function () {
            instructorInfo();
            $("#file_upload").fileinput({
                uploadUrl: "https://lentoria.site/api/video",
                allowedFileTypes: ['image'],
                minImageWidth: 200,
                minImageHeight: 200,
                maxImageWidth: 6000,
                maxImageHeight: 6000,
                removeFromPreviewOnError: true,
                dropZoneEnabled: true,
                resizeImage: true,
                theme: "bs5",
                browseOnZoneClick: true,
                uploadAsync: true,
                fileActionSettings: {
                    showZoom: true,
                    showUpload: false,
                },
                mergeAjaxCallbacks: false,
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
            });
            $("#editProfileForm").submit(function (e) {
                e.preventDefault();
                form = $(this);
                bt = form.find($('button[type="submit"]'));
                id = $(document).find($("#user_id")).val();
                headline = form.find($('input[name="headline"]')).val();
                biography = form.find($('textarea[name="biography"]')).val();
                language = form.find($('select[name="lang"]')).val();
                website_url = form.find($('input[name="site"]')).val();
                twitter = form.find($('input[name="twitter"]')).val();
                facebook = form.find($('input[name="face"]')).val();
                linkedin = form.find($('input[name="linked"]')).val();
                youtube = form.find($('input[name="you"]')).val();

                if (!headline) {
                    salat("headline field is required", 1);
                    return;
                } else if (!biography) {
                    salat("biography field is required", 1);
                    return;
                }

                $.ajax({
                    url: api_url + 'admin/update_instructor_profile',
                    method: 'POST',
                    data: {
                        id: id,
                        headline: headline,
                        biography: biography,
                        language: language,
                        website_url: website_url,
                        twitter: twitter,
                        facebook: facebook,
                        linkedin: linkedin,
                        youtube: youtube,
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    },
                }).done(res => {
                    btn(bt, 'Save', 'after');
                    salat(res.message);
                }).fail(res => {
                    console.log(res);
                    btn(bt, 'Save', 'after');
                    concatError(res.responseJSON);
                });
            });

            function instructorInfo() {
                $.ajax({
                    url: api_url + 'admin/instructor_info',
                }).done(res => {
                    console.log(res);
                    data = res.data[0];
                    form = $("#editProfileForm");
                    form.find($('input[name="headline"]')).val(data.headline);
                    biography.setData(data.biography);
                    form.find($('select[name="lang"]')).val(data.language);
                    form.find($('input[name="site"]')).val(data.website_url);
                    form.find($('input[name="twitter"]')).val(data.twitter);
                    form.find($('input[name="face"]')).val(data.facebook);
                    form.find($('input[name="linked"]')).val(data.linkedin);
                    form.find($('input[name="you"]')).val(data.youtube);
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                })
            }
        })
    </script>
@endsection
