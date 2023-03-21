@extends('layouts.instructor')
@section('page_title')
    Pricing | {{ $slug }}
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
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="mb-0">Pricing</h3>
                            </div>
                            <div class="card-body">
                                <form id="updatePrice">
                                    <div class="mb-3">
                                        <label for="courseTitle" class="form-label"><b>Course Price Tier</b></label>
                                        <p>
                                            The minimum price of a course must be &#8358;2,500
                                        </p>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 col-lg-2 mb-3">
                                                <select class="form-control" name="currency">
                                                    <option value="NGN" selected>&#8358;</option>
                                                </select>
                                            </div>
                                            <div class="col-7 col-sm-4 col-lg-3 mb-3">
                                                <input type="number" min="2500" step='0.1'
                                                       class="form-control course_price"/>
                                            </div>
                                            <input type="hidden" class="d-none" name="course_update_id"/>
                                            <div class="col-12 col-sm-4 col-lg-3">
                                                <button type="submit" class="w-100 btn btn-primary">Save and Next
                                                </button>
                                            </div>
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

    <script>
        $(document).ready(function () {

            function pickInfo() {
                data = $('#course_info_29').val();
                return data;
            }


            setTimeout(function () {
                data = '';

                i = 0;
                while (!data || data) {
                    new_data = pickInfo();
                    if (new_data) {
                        data = new_data;
                        return;
                    }

                    if (i == 1000) {
                        console.log('we reached');
                        return;
                    }
                    console.log(i++);
                    console.log(new_data)
                    data = new_data;

                }

            }, 3000)

        });
        $(function () {
            $('#updatePrice').on('submit', function (e) {
                e.preventDefault();
                let published = sessionStorage.getItem('published');
                if (published && published != 0) {
                    salat('This course has been submitted for review and cannot be edited', 1);
                    return;
                }
                form = $(this);
                price = $(form).find('input[type="number"]').val();
                id = $(form).find('input[name="course_update_id"]').val();
                cur = $(form).find('select[name="currency"]').val();
                bt = $(form).find('button');
                const params = new URL(document.location).searchParams;
                const type = params.get('type');
                $.ajax({
                    method: 'post',
                    url: api_url + `admin/update_price`,
                    data: {
                        course_id: id,
                        price: price,
                        currency: cur
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before')
                    }
                }).done(function (res) {
                    btn(bt, 'Save and Next', 'after')
                    salat(res.message);
                    setTimeout(() => {
                        location.href = `/instructor/course_message/{{$type}}/{{$slug}}`
                    }, 1000)
                }).fail(function (res) {
                    btn(bt, 'Save and Next', 'after')
                    concatError(res.responseJSON);
                })
                console.log(price, cur);
            })
        })
    </script>
@endsection
