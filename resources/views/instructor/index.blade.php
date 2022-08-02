@extends('layouts.instructor')
@section('page_title')
    Instructors Dashboard
@endsection

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            {!! instructorInfo() !!}

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('layouts.sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Revenue</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                        $467.34
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>Earning this month</span>
                                        <span class="badge bg-success ms-2">$203.23</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">students Enrollments</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                        12,000
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>New this month</span>
                                        <span class="badge bg-info ms-2">120+</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <div class="p-4">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Courses Rating</span>
                                    <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
                                        4.80
                                    </h2>
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span>Rating this month</span>
                                        <span class="badge bg-warning ms-2">10+</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card mb-4">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="h4 mb-0">Earnings</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div id="earning" class="apex-charts"></div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card mb-4">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="h4 mb-0">Order</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div id="orderColumn" class="apex-charts"></div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <!-- Card header -->
                        <div class="card-header border-bottom-0">
                            <h3 class="h4 mb-0">Best Selling Courses</h3>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive border-0">
                            <table class="table mb-0">
                                <!-- Table head -->
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="border-0">COURSES</th>
                                        <th scope="col" class="border-0">SALES</th>
                                        <th scope="col" class="border-0">AMOUNT</th>
                                        <th scope="col" class="border-0"></th>
                                    </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody>
                                    <tr>
                                        <td class="align-middle border-top-0">
                                            <a href="#">
                                                <div class="d-lg-flex align-items-center">
                                                    <img src="assets/images/course/course-laravel.jpg" alt=""
                                                        class="rounded img-4by3-lg" />
                                                    <h5 class="mb-0 ms-lg-3 mt-2 mt-lg-0 text-primary-hover">
                                                        Building Scalable APIs with GraphQL
                                                    </h5>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="align-middle border-top-0">34</td>
                                        <td class="align-middle border-top-0">$3,145.23</td>
                                        <td class="text-muted align-middle border-top-0">
                                            <span class="dropdown dropstart">
                                                <a class="text-muted text-decoration-none" href="#" role="button"
                                                    id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                    aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                    <span class="dropdown-header">Setting </span>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <a href="#">
                                                <div class="d-lg-flex align-items-center">
                                                    <img src="assets/images/course/course-sass.jpg" alt=""
                                                        class="rounded img-4by3-lg" />
                                                    <h5 class="mb-0 ms-lg-3 mt-2 mt-lg-0 text-primary-hover">
                                                        HTML5 Web Front End Development
                                                    </h5>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="align-middle">30</td>
                                        <td class="align-middle">$2,611.82</td>
                                        <td class="text-muted align-middle">
                                            <span class="dropdown dropstart">
                                                <a class="text-muted text-decoration-none" href="#" role="button"
                                                    id="courseDropdown2" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                                    <span class="dropdown-header">Setting </span>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <a href="#">
                                                <div class="d-lg-flex align-items-center">
                                                    <img src="assets/images/course/course-vue.jpg" alt=""
                                                        class="rounded img-4by3-lg" />
                                                    <h5 class="mb-0 ms-lg-3 mt-2 mt-lg-0 text-primary-hover">
                                                        Learn JavaScript Courses from Scratch
                                                    </h5>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="align-middle">26</td>
                                        <td class="align-middle">$2,372.19</td>
                                        <td class="text-muted align-middle">
                                            <span class="dropdown dropstart">
                                                <a class="text-muted text-decoration-none" href="#" role="button"
                                                    id="courseDropdown3" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                                    <span class="dropdown-header">Setting </span>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle border-bottom-0">
                                            <a href="#">
                                                <div class="d-lg-flex align-items-center">
                                                    <img src="assets/images/course/course-react.jpg" alt=""
                                                        class="rounded img-4by3-lg" />
                                                    <h5 class="mb-0 ms-lg-3 mt-2 mt-lg-0 text-primary-hover">
                                                        Get Started: React Js Courses
                                                    </h5>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="align-middle border-bottom-0">20</td>
                                        <td class="align-middle border-bottom-0">$1,145.23</td>
                                        <td class="text-muted align-middle border-bottom-0">
                                            <span class="dropdown dropstart">
                                                <a class="text-muted text-decoration-none" href="#" role="button"
                                                    id="courseDropdown4" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                                    <span class="dropdown-header">Setting </span>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
