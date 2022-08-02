@extends('layouts.instructor')
@section('page_title')
    Course |
@endsection

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('instructor.side')
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
                                    <input type="search" class="form-control" placeholder="Search Your Courses" />
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
                            <table class="table mb-0 text-nowrap">
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
                                    <tr>
                                        <td class="border-top-0">
                                            <div class="d-lg-flex">
                                                <div>
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/course/course-wordpress.jpg') }}"
                                                            alt="" class="rounded img-4by3-lg" /></a>
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 h5">
                                                        <a href="#" class="text-inherit">
                                                            Create a Website with WordPress
                                                        </a>
                                                    </h4>
                                                    <ul class="list-inline fs-6 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="far fa-clock me-1"></i>1h 30m
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2"
                                                                    height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2"
                                                                    height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2"
                                                                    height="12" rx="1" fill="#DBD8E9">
                                                                </rect>
                                                            </svg>Beginner
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0">11,200</td>
                                        <td class="border-top-0">
                                            <span class="text-warning">4.5<i class="mdi mdi-star"></i></span>(3,250)
                                        </td>
                                        <td class="border-top-0">
                                            <span class="badge bg-success">Live</span>
                                        </td>
                                        <td class="text-muted border-top-0">
                                            <span class="dropdown dropstart">
                                                <a class="text-muted text-decoration-none" href="#" role="button"
                                                    id="courseDropdown" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                    aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown">
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




    <div class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="newCatgoryLabel">
                        Create New Category
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 mb-2">
                            <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Write a Category" id="title"
                                required>
                            <small>Field must contain a unique value</small>
                        </div>
                        <div class="mb-3 mb-2">
                            <label class="form-label">Slug</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="slug">https://example.com</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="slug"
                                    placeholder="designcourses" required>
                            </div>
                            <small>Field must contain a unique value</small>
                        </div>
                        <div class="mb-3 mb-2">
                            <label class="form-label">Parent</label>
                            <select class="selectpicker" data-width="100%">
                                <option value="">Select</option>
                                <option value="Course">Course</option>
                                <option value="Tutorial">Tutorial</option>
                                <option value="Workshop">Workshop</option>
                                <option value="Company">Company</option>
                            </select>
                        </div>
                        <div class="mb-3 mb-3">
                            <label class="form-label">Description</label>
                            <div id="editor">
                                <br>
                                <h4>One Ring to Rule Them All</h4>
                                <br>
                                <p>
                                    Three Rings for the
                                    <i> Elven-kingsunder</i> the sky,
                                    <br> Seven for the
                                    <u>Dwarf-lords</u> in halls of stone, Nine for Mortal Men,
                                    <br> doomed to die, One for the Dark Lord on his dark throne.
                                    <br> In the Land of Mordor where the Shadows lie.
                                    <br>
                                    <br>
                                </p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Enabled</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="customSwitch1" checked>
                                <label class="form-check-label" for="customSwitch1"></label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Add New Category</button>
                            <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(function() {

            $('.con_pay').on('click', function() {
                $('#checkout').modal('show');
            })

            $('.btn-close').on('click', function() {
                $('#checkout').modal('hide');
            })
        })
    <script>
@endsection
