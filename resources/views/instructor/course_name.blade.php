<div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="d-flex align-items-center justify-content-between bg-white px-4 pt-2 pb-4 rounded shadow-sm">
            <h3 class="mb-0 mt-3 course-title ">Your Course Title</h3>
            <a href="/instructor/courses" class="mt-3">Back To Courses</a>
        </div>
    </div>
</div>
<input type="hidden" name="course_info_29" id="course_info_29">
<input type="hidden" id="ctype"/>
<script>
    $(function() {
        function getCategory(cat_id) {
            selCategory = $('#selcategory')
            selCategory.html(`<option value="" disabled selected>Select a category</option>`)
            $.ajax({
                method: 'GET',
                url: api_url + 'admin/category',
            }).done((res) => {
                res.data.map(dat => selCategory.append(`<option value="${dat.id}">${dat.name}</option>`))
                $(`#selcategory option[value="${cat_id}"]`).prop("selected", true)
            }).fail(res => {
                concatError(res.responseJSON);
                console.log(res)
            });
        }


        function setTopic2(category_id, topic) {
            cat = category_id;
            $.ajax({
                method: 'get',
                url: api_url + 'admin/topics/' + cat,
            }).done((res) => {
                let selectsub = $('#selsubcat');
                selectsub.html('<option selected disabled>Select Course SubCategory</option>')
                res.data.map(dat => {
                    selectsub.append(`<option value="${dat.id}">${dat.name}</option>`);
                })
                $(`#selsubcat option[value="${topic}"]`).prop("selected", true)
            }).fail((res) => {
                concatError(res.responseJSON);
                console.log(res)
            });
        }

        function fetchLearners() {
            $.ajax({
                method: 'get',
                url: api_url + `admin/course/{{ $slug }}`,
                beforeSend() {
                    $("button").attr('disabled', true);
                }
            }).done(res => {
                console.log(res);
                $('input[name="course_info_29"]').val(JSON.stringify(res.data));
                $('.course-title').html(res.data.title);
                $("#ctype").val(res.data.course_type);
                dat = res.data
                if(dat.published == 0) {$('.publish-div').removeClass('d-none')}
                let published = dat.published;
                sessionStorage.setItem('published', published);
                try {
                    $('#courseTitle').val(dat.title);
                    length = (dat.title).length;
                    $('#count').html(60 - length);
                    $('#courseTitle').html(res.data.title);
                    $('#courseSubtitle').val(dat.subtitle);
                    $('#course_id').val(dat.id);
                    $("#shortlink").val(dat.link);
                    description.setData(dat.description ?? '');
                    $(`#selcourse_type option[value="${dat.course_type}"]`).prop("selected", true);
                    $(`#course_level option[value="${dat.level}"]`).prop("selected", true);
                    $(".custom-file-container__image-preview").css("background-image", `url(${imageUrl(dat.image)}),url(../../assets/images/image.jpeg)`)
                    getCategory(dat.category_id);
                    setTopic2(dat.category_id, dat.topic_id);
                } catch(err) {}
                ////////pricing
                $('.course_price').val(res.data.price)
                $('input[name="course_update_id"]').val(res.data.id)
                $(`select[name="currency"] option[value=${res.data.currency}] `).prop('selected', true)
                $('#updateLearners').find('input[name="course_id"]').val(res.data.id)
                ////messaging
                try {
                    welmess.setData(dat.welcome_message ?? '');
                    cermess.setData(dat.certification_message ?? '');
                    $('#mycourse_id').val(dat.id);
                } catch(err) {}
                $("button").removeAttr('disabled')
                ///section
                $('#course_id').val(dat.id)
            }).fail(res => {
                location.href = "/instructor/dashboard"
                $("button").removeAttr('disabled')
            })
        }


        fetchLearners();

        function countWord(object) {
            length = object.val().length;
            maxlength = 60;
            count = maxlength - length;
            return count;
        }


    })
</script>
