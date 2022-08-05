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
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="mb-0">Pricing</h3>
                        </div>
                        <div class="card-body">
                            <form id="updatePrice">
                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>Course Price Tier</b></label>
                                    <p>
                                        If you intend to offer your course for free, the total length of video content must
                                        be less than 2 hours.
                                    </p>
                                    <div class="d-flex ">
                                        <select class="form-control" name="currency" style="width: 100px">
                                            <option value="NGN" selected>NGN</option>
                                            <option value="USD">USD</option>
                                        </select>
                                        <input type="number" step='0.1' class="form-control course_price ms-3"
                                            style="width:200px" />
                                        <input type="hidden" name="course_update_id"/>
                                        <button type="submit" class=" ms-3 btn btn-success">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            function pickInfo() {
                data = $('#course_info_29').val();
                return data;
            }


            setTimeout(function() {
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
        $(function() {
            $('#updatePrice').on('submit', function(e) {
                e.preventDefault();
                form = $(this);
                price = $(form).find('input[type="number"]').val();
                id = $(form).find('input[name="course_update_id"]').val();
                cur = $(form).find('select[name="currency"]').val();
                bt = $(form).find('button');

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
                }).done(function(res) {
                    btn(bt, 'Save', 'after')
                    salat(res.message);
                }).fail(function(res) {
                    btn(bt, 'Save', 'after')
                    concatError(res.responseJSON);
                })
                console.log(price, cur);
            })
        })
    </script>
@endsection
