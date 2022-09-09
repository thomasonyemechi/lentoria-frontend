@extends('layouts.admin')
@section('page_title')
    Course Submited For Review
@endsection

@php
    $page = $_GET['page'] ?? 1;
@endphp

@section('page_content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                <div class="mb-3 mb-md-0">
                    <h1 class="mb-1 h2 fw-bold">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin/dashboard">Dashboard</a>
                            </li>

                            <li class="breadcrumb-item active">
                                <a href="#">Under Review Courses</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{--  --}}

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card rounded-3">
                <div class="card-header border-bottom-0 p-0 bg-white">
                    <h3></h3>
                </div>
                <div class="p-4 row">
                    <!-- Form -->
                    <form class="d-flex align-items-center col-12 col-md-12 col-lg-12">
                        <span class="position-absolute ps-3 search-icon">
                            <i class="fe fe-search"></i>
                        </span>
                        <input type="search" class="form-control ps-6" placeholder="Search Course" />
                    </form>
                </div>
                <div></div>
                <div>
                    <!-- Table -->
                    <div class="tab-content" id="tabContent">
                        <!--Tab pane -->
                        <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="border-0 text-uppercase">
                                                Courses
                                            </th>
                                            <th scope="col" class="border-0 text-uppercase">
                                                Instructor
                                            </th>
                                            <th scope="col" class="border-0 text-uppercase">
                                                STATUS
                                            </th>
                                            <th scope="col" class="border-0 text-uppercase">
                                                ACTION
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="courses_body">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer border-top-0 page_links">

                </div>


            </div>

        </div>

    </div>

    <script>
        function fetchCourses() {
            $.ajax({
                method: 'get',
                url: api_url + `admin/under_review_courses?page=<?= $page ?>`,
            }).done(function(res) {
                body = $('#courses_body')
                body.html('')
                res.data.data.map(course => {
                    body.append(`
                        <tr>
                            <td class="border-top-0">
                                <a href="/admin/course_review/${course.slug}?published=${course.published}" class="text-inherit">
                                    <div class="d-lg-flex align-items-center">
                                        <div>
                                            <img src="${api_root+'assets/uploads/'+course.image}"
                                                alt="" class="img-4by3-lg rounded" />
                                        </div>
                                        <div class="ms-lg-3 mt-2 mt-lg-0">
                                            <h4 class="mb-1 text-primary-hover">
                                                ${course.title}
                                            </h4>
                                            <span class="text-inherit">Added on ${ formatDate(course.created_at) }</span>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td class="align-middle border-top-0">
                                <div class="d-flex align-items-center">
                                    <img src="${api_root+'assets/avatar/user.jpg'}" alt=""
                                        class="rounded-circle avatar-xs me-2" />
                                    <h5 class="mb-0">${course.user.firstname+' '+course.user.lastname}</h5>
                                </div>
                            </td>
                            <td class="align-middle border-top-0">
                                <span
                                    class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>Pending
                            </td>
                            <td class="align-middle border-top-0">
                                <a href="#" class="btn btn-outline-white btn-sm">Reject</a>
                                <a href="#" class="btn btn-success btn-sm">Approve</a>
                            </td>
                        </tr>

                    `)
                })
                $('.page_links').append(adminPaginate(res.data.links));

            }).fail(function(res) {
                salat('An error occured while fetching your data', 1);
            })
        }

        fetchCourses();

    </script>
@endsection
