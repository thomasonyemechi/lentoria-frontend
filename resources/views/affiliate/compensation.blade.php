@extends('layouts.instructor')
@section('page_title', 'Affiliate | Compensation')
@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="pt-16 rounded-top-md"
                        style="
                background: url(../../assets/images/background/profile-bg.jpg) no-repeat;
                background-size: cover;
              ">
                    </div>
                    <div
                        class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                    class="avatar-xl rounded-circle border border-4 border-white position-relative"
                                    alt="" />
                                <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Verified">
                                    <img src="{{ asset('assets/images/svg/checked-mark.svg') }}" alt=""
                                        height="30" width="30" />
                                </a>
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-0">Jenny Wilson</h2>
                                <p class="mb-0 d-block">@Jennywilson</p>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary btn-sm d-none d-md-block">Copy Referral Link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Content -->
            <div class="row mt-0 mt-md-4">
                @include('affiliate.nav')
                <div class="col-lg-8 col-md-7 col-12">
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
                                <div class="table-responsive" id="comp_plan_table">
                                    <table class="table text-nowrap mb-0">
                                        <thead style="background-color: #036; color:#fff">
                                            <tr>
                                                <th colspan="6">
                                                    <div class="text-center">
                                                        <span class="spinner-border spinner-border-sm"
                                                            aria-hidden="true"></span> <span>Loading Data ... </span>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                    {{-- <table class="table text-nowrap mb-0">
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
                                    </table> --}}
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
    <script>
        $(function() {

            function getCompensationPlans() {
                $.ajax({
                    method: 'GET',
                    url: api_url + `affiliate/compensation_plan`,
                }).done(function(res) {
                    table = $('#comp_plan_table');
                    table.html('');
                    res.map((data) =>
                        table.append(`
                    <table class="table text-nowrap mb-0">
                                        <thead style="background-color: #036; color:#fff">
                                            <tr>
                                                <th colspan="6">${data.title} Membership Plan
                                                    <span style="float: right">Upgrade fee: #${money(data.upgrade_fee)}</span>
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
                                                <td>${data.x_data[0].stage_title}</td>
                                                <td>${(data.x_data[0].x1 == 0) ? '-' : data.x_data[0].x1+'%'}</td>
                                                <td>${(data.x_data[0].x2 == 0) ? '-' : data.x_data[0].x2+'%'}</td>
                                                <td>${(data.x_data[0].x3 == 0) ? '-' : data.x_data[0].x3+'%'}</td>
                                                <td>${(data.x_data[0].x4 == 0) ? '-' : data.x_data[0].x4+'%'}</td>
                                                <td>${(data.x_data[0].x5 == 0) ? '-' : data.x_data[0].x5+'%'}</td>
                                            </tr>
                                            <tr>
                                                <td>${data.x_data[1].stage_title}</td>
                                                <td>${(data.x_data[1].x1 == 0) ? '-' : data.x_data[1].x1+'%'}</td>
                                                <td>${(data.x_data[1].x2 == 0) ? '-' : data.x_data[1].x2+'%'}</td>
                                                <td>${(data.x_data[1].x3 == 0) ? '-' : data.x_data[1].x3+'%'}</td>
                                                <td>${(data.x_data[1].x4 == 0) ? '-' : data.x_data[1].x4+'%'}</td>
                                                <td>${(data.x_data[1].x5 == 0) ? '-' : data.x_data[1].x5+'%'}</td>
                                            </tr>
                                            <tr>
                                                <td>${data.x_data[2].stage_title}</td>
                                                <td>${(data.x_data[2].x1 == 0) ? '-' : data.x_data[2].x1+'%'}</td>
                                                <td>${(data.x_data[2].x2 == 0) ? '-' : data.x_data[2].x2+'%'}</td>
                                                <td>${(data.x_data[2].x3 == 0) ? '-' : data.x_data[2].x3+'%'}</td>
                                                <td>${(data.x_data[2].x4 == 0) ? '-' : data.x_data[2].x4+'%'}</td>
                                                <td>${(data.x_data[2].x5 == 0) ? '-' : data.x_data[2].x5+'%'}</td>
                                            </tr>
                                            <tr>
                                                <td>${data.x_data[3].stage_title}</td>
                                                <td>${(data.x_data[3].x1 == 0) ? '-' : data.x_data[3].x1+'%'}</td>
                                                <td>${(data.x_data[3].x2 == 0) ? '-' : data.x_data[3].x2+'%'}</td>
                                                <td>${(data.x_data[3].x3 == 0) ? '-' : data.x_data[3].x3+'%'}</td>
                                                <td>${(data.x_data[3].x4 == 0) ? '-' : data.x_data[3].x4+'%'}</td>
                                                <td>${(data.x_data[3].x5 == 0) ? '-' : data.x_data[3].x5+'%'}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                  `))
                }).fail(function(res) {
                    console.log(res);
                })
            }
            getCompensationPlans();
        })
    </script>
@endsection
