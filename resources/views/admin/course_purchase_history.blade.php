@extends('layouts.admin')
@section('page_title')
    Courses Overview
@endsection

@section('page_content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                <div class="mb-3 mb-md-0">
                    <h1 class="mb-1 h2 fw-bold">Course Transactions</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin/dashboard">Dashboard</a>
                            </li>

                            <li class="breadcrumb-item active">
                                <a href="#">Purchase History</a>
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
                <div class="table-responsive border-0 overflow-y-hidden">
                    <table class="table mb-0 text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="border-0 text-uppercase">
                                    Topic
                                </th>
                                <th scope="col" class="border-0 text-uppercase">
                                    Category
                                </th>
                                <th scope="col" class="border-0 text-uppercase">
                                    Description
                                </th>
                                <th scope="col" class="border-0 text-uppercase">
                                    Courses
                                </th>
                                <th scope="col" class="border-0 text-uppercase"></th>
                            </tr>
                        </thead>
                        <tbody id="topic_body">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script></script>
@endsection
