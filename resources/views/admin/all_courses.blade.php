@extends('layouts.admin')
@section('page_title')
    Courses Overview
@endsection

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
                                <a href="#">All Courses</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



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
                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="courses-tab">
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap" id="courses_table">
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
                                            <th scope="col" class="border-0 text-uppercase"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="12">
                                                <div class="text-center">
                                                    <span class="spinner-border spinner-border-sm"
                                                        aria-hidden="true"></span> <i>Loading Courses ... </i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top-0">
                    <nav aria-label="Page navigation example">
                    </nav>
                </div>
            </div>

        </div>

    </div>

    <script>
        function fetchallCourses() {

            tb = $('#courses_table').find('tbody');

            $.ajax({
                method: 'get',
                url: api_url + `admin/fetch_all_courses`
            }).done(function(res) {
                console.log(res.data.data.length);
                
                if (res.data.data.length == 0) {
                    tb.find('div').html('No data found...');
                } else {
                    tb.html(``);
                    res.data.data.forEach(course => {
                        tb.append(`
                    <tr>
                        <td class="border-top-0">
                            <a href="#" class="text-inherit">
                                <div class="d-lg-flex align-items-center">
                                    <div>
                                        <img src="${image_url+course.image}"
                                            alt="" class="img-4by3-lg rounded" />
                                    </div>
                                    <div class="ms-lg-3 mt-2 mt-lg-0">
                                        <h4 class="mb-1 text-primary-hover">
                                            ${course.title}
                                        </h4>
                                        <span class="text-inherit">Added on ${formatDate(course.created_at)}</span>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td class="align-middle border-top-0">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">${course.user.lastname +` `+ course.user.firstname}</h5>
                            </div>
                        </td>
                        <td class="align-middle border-top-0">
                            <span
                                class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>${course.published}
                        </td>
                        <td class="align-middle border-top-0">
                            <a href="#" class="btn btn-outline-white btn-sm">Reject</a>
                            <a href="#" class="btn btn-success btn-sm">Approved</a>
                        </td>
                        <td class="align-middle border-top-0">
                            <span class="dropdown dropstart">
                                <a class="text-decoration-none text-muted" href="#" role="button"
                                    id="courseDropdown1" data-bs-toggle="dropdown"
                                    data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-x-circle dropdown-item-icon"></i>Reject with
                                        Feedback</a>
                                </span>
                            </span>
                        </td>
                    </tr>
                    `)
                    });
                }

            }).fail(function(res) {
                console.log(res);
                tb.find('div').html(errorFetchingDataRefresh());
            })
        }

        fetchallCourses();
    </script>
@endsection
