@extends('layouts.instructor')

@section('page_title')
    Add Courses
@endsection

@section('page_content')
    <div class="py-4 py-lg-6 bg-primary">
        <div class="container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <!-- Content -->
                        <div class="mb-4 mb-lg-0">
                            <h1 class="text-white mb-1">Add New Course</h1>
                            <p class="mb-0 text-white lead">
                                Just fill the form and create your courses.
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('instructor.courses') }}" class="btn btn-white ">Back to Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="pb-12">
        <div class="container">
            <div id="courseForm" class="bs-stepper">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                        <!-- Stepper Button -->
                        <div class="bs-stepper-header shadow-sm" role="tablist">
                            <div class="step" data-target="#test-l-1">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger1"
                                    aria-controls="test-l-1">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Course Type</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-2">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger2"
                                    aria-controls="test-l-2">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Course Category</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-3">
                                <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3"
                                    aria-controls="test-l-3">
                                    <span class="bs-stepper-circle">3 </span>
                                    <span class="bs-stepper-label">Course Title</span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content mt-5">
                            <form onSubmit="return false">
                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade"
                                    aria-labelledby="courseFormtrigger1">
                                    <div class="card mb-3 ">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0">Course Type</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                                                        <div class="card-body py-6">
                                                            <div class="mt-4">
                                                                <h5 class="text-white">Unlimited Access</h5>
                                                                <p class="text-white-50 fs-6">
                                                                    Upgrade your plan from a Free trial, to select ‘Business
                                                                    Plan’.
                                                                    Start Now
                                                                </p>
                                                                <a href="#!" class="btn btn-white btn-sm mt-2">Select</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-4">
                                                    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                                                        <div class="card-body py-6">
                                                            <div class="mt-4">
                                                                <h5 class="text-white">Unlimited Access</h5>
                                                                <p class="text-white-50 fs-6">
                                                                    Upgrade your plan from a Free trial, to select ‘Business
                                                                    Plan’.
                                                                    Start Now
                                                                </p>
                                                                <a href="#!" class="btn btn-white btn-sm mt-2">Select</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-4">
                                                    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                                                        <div class="card-body py-6">
                                                            <div class="mt-4">
                                                                <h5 class="text-white">Unlimited Access</h5>
                                                                <p class="text-white-50 fs-6">
                                                                    Upgrade your plan from a Free trial, to select ‘Business
                                                                    Plan’.
                                                                    Start Now
                                                                </p>
                                                                <a href="#!" class="btn btn-white btn-sm mt-2">Select</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="courseForm.next()">
                                        Next
                                    </button>
                                </div>
                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"
                                    aria-labelledby="courseFormtrigger2">
                                    <div class="card mb-3  border-0">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0">Course Category</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Select Course Cateory</label>
                                                <select class="selectpicker" data-width="100%">
                                                    <option value="">Select Cateory</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Select Course Sub-Cateory</label>
                                                <select class="selectpicker" data-width="100%">
                                                    <option value="">Select Sub-Cateory</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-secondary" onclick="courseForm.previous()">
                                            Previous
                                        </button>
                                        <button class="btn btn-primary" onclick="courseForm.next()">
                                            Next
                                        </button>
                                    </div>
                                </div>
                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade"
                                    aria-labelledby="courseFormtrigger3">
                                    <div class="card mb-3  border-0">
                                        <div class="card-header border-bottom px-4 py-3">
                                            <h4 class="mb-0">Course Title</h4>
                                        </div>
                                        <div class="card-body ">
                                            <div class="mb-3">
                                                <label for="courseTitle" class="form-label">Course Title</label>
                                                <input id="courseTitle" class="form-control" type="text"
                                                    placeholder="Course Title" />
                                                <small>Write a 60 character course title.</small>

                                            </div>

                                            <div class="mb-3">
                                                <label for="courseTitle" class="form-label">Course Title</label>
                                                <textarea class="form-control" rows=2></textarea>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-secondary" onclick="courseForm.previous()">
                                                    Previous
                                                </button>
                                                <button class="btn btn-primary" onclick="courseForm.next()">
                                                    Next
                                                </button>
                                            </div>
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
@endsection
