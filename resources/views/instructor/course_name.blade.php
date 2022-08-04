<div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="d-flex align-items-center justify-content-between bg-white px-4 pt-2 pb-4 rounded shadow-sm">
            <h3 class="mb-0 mt-3 course-title ">Your Course Title</h3>
            <a href="/instructor/courses" class="mt-3">Back To Courses</a>
        </div>
    </div>
</div>
<input type="hidden" name="course_info_29" id="course_info_29">
<script>
    $(function() {
        function fetchLearners() {
            $.ajax({
                method: 'get',
                url: api_url + `admin/course/{{ $slug }}`
            }).done(function(res) {
                $('input[name="course_info_29"]').val(JSON.stringify(res.data))
                $('.course-title').html(res.data.title)
            }).fail(function(res) {
                location.href = "/instructor/dashboard"
            })
        }

        fetchLearners();


    })
</script>
