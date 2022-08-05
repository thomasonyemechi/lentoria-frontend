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
                                        <select class="form-control" style="width: 100px" >
                                            <option selected>NGN</option>
                                            <option >USD</option>
                                        </select>
                                        <input type="number" class="form-control ms-3" style="width:200px" >
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
        $(function() {

        })
    </script>
@endsection
