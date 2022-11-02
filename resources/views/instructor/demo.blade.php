@extends('layouts.instructor')
@section('page_title',"demo")

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

@endsection