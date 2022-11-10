@extends('layouts.instructor')
@section('page_title','Affiliate | Compensation')
@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            @include('affiliate.nav-top')
            <!-- Page Content -->
            <div class="row mt-0 mt-md-4">
                @include('affiliate.nav')
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">

                        <!-- basic table -->
                        <div class="col-xl-12 col-12 mb-5">
                            <div class="card">
                                <!-- card header  -->
                                <div class="card-header">
                                    <h1 class="mb-1 fw-bold">Compensation Plan</h1>
                                </div>
                                <hr>
                                <!-- table  -->
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead style="background-color: #036; color:#fff">
                                        <tr>
                                            <th colspan="6">Membership Plan
                                                <span style="float: right">Upgrade fee: #10,000</span>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Position</th>
                                            <th>G1</th>
                                            <th>G2</th>
                                            <th>G3</th>
                                            <th>G4</th>
                                            <th>G5</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Team Manager</td>
                                            <td>10%</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Team Leader</td>
                                            <td>10%</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>District Manager</td>
                                            <td>10%</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Senior Manager</td>
                                            <td>10%</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- Card -->
            </div>
        </div>
    </div>

    <hr class="my-0">
@endsection
