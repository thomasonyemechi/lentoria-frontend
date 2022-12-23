@extends('layouts.instructor')
@section('page_title',"Instructors Dashboard")

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            {!! instructorInfo() !!}

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('layouts.sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="mb-0">Courses</h3>
                            <span>Manage your courses and its update like live, draft and
                                insight.</span>
                        </div>
                        <div class="card-body">
                            <form class="row">
                                <div class="col-lg-9 col-md-7 col-12 mb-lg-0 mb-2">
                                    <input type="search" class="form-control" placeholder="Search Your Courses"/>
                                </div>
                                <div class="col-lg-3 col-md-5 col-12">
                                    <select class="selectpicker" data-width="100%">
                                        <option value="">Date Created</option>
                                        <option value="Newest">Newest</option>
                                        <option value="High Rated">High Rated</option>
                                        <option value="Law Rated">Law Rated</option>
                                        <option value="High Earned">High Earned</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive border-0 overflow-y-hidden">
                            <table class="table mb-0 text-nowrap" id="course_table">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col" class="border-0">Courses</th>
                                    <th scope="col" class="border-0">Students</th>
                                    <th scope="col" class="border-0">Rating</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0"></th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {

            fetchCourses();

            function fetchCourses() {
                body = $('#course_table tbody')
                $.ajax({
                    method: 'get',
                    url: api_url + 'admin/fetch_my_course',
                    beforeSend: () => {
                        body.html(`
                        <tr>
                            <td colspan="4" class="text-center">
                                <div class="d-flex justify-content-center">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                            </td>
                        </tr>
                        `)
                    },
                }).done(function (res) {
                    body.html('')
                    console.log(res.data.data)
                    res.data.data.map(cat => {
                        body.append(`
                        <tr>
                            <td class="border-top-0">
                                <div class="d-lg-flex">
                                    <div>
                                        <a href="#">
                                            <img src="${imageUrl(cat.image)}" alt="" onerror="this.src='../../assets/images/image.jpeg';"
                                                class="rounded img-4by3-lg" /></a>
                                    </div>
                                    <div class="ms-lg-3 mt-2 mt-lg-0">
                                        <h4 class="mb-1 h5">
                                            <a href="/instructor/course/${cat.slug}?type=${cat.course_type}" class="text-inherit">
                                                ${cat.title}
                                            </a>
                                        </h4>
                                        <ul class="list-inline fs-6 mb-0">
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    ${levelBar(cat.level)}
                                                </svg>${checkLevel(cat.level)}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td class="border-top-0">0</td>
                            <td class="border-top-0">
                                <span class="text-warning">0.0<i class="mdi mdi-star"></i></span>(0)
                            </td>
                            <td class="border-top-0">
                                ${courseStatus(cat.published)}
                            </td>
                        </tr>
                        `)
                    })

                }).fail(function (res) {
                    salat('An error occurred while fetching your data', 1);
                })
            }
        });
    </script>
@endsection
