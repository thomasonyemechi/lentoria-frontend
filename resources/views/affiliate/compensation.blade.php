@extends('layouts.instructor')
@section('page_title', 'Affiliate | Compensation')
@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            {!!affiliateInfo() !!}
            <div class="row mt-0 mt-md-4">
                @include('affiliate.nav')
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="row">
                        <div class="col-xl-12 col-12 mb-5">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="mb-1 fw-bold">Compensation Plan</h1>
                                </div>
                                <hr>
                                <div class="table-responsive" id="comp_plan_table">
                                    <table class="table text-nowrap mb-0">
                                        <thead style="background-color: #036; color:#fff;">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-0">
    <script>
        $(function () {
            getCompensationPlans();

            function getCompensationPlans() {
                $.ajax({
                    method: 'GET',
                    url: api_url + `affiliate/compensation_plan`,
                }).done(function (res) {
                    console.log(res);
                    table = $('#comp_plan_table');
                    table.html('');
                    res.map((data) =>
                        table.append(`
                            <table class="table text-nowrap mb-0">
                                <thead style="background-color: #036; color:#fff;">
                                    <tr>
                                        <th colspan="6">${data.title} Membership Plan
                                            <span style="float: right;">Upgrade fee: #${naira(data.upgrade_fee)}</span>
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
                                        <td>${(data.x_data[0].x1 == 0) ? '-' : data.x_data[0].x1 + '%'}</td>
                                        <td>${(data.x_data[0].x2 == 0) ? '-' : data.x_data[0].x2 + '%'}</td>
                                        <td>${(data.x_data[0].x3 == 0) ? '-' : data.x_data[0].x3 + '%'}</td>
                                        <td>${(data.x_data[0].x4 == 0) ? '-' : data.x_data[0].x4 + '%'}</td>
                                        <td>${(data.x_data[0].x5 == 0) ? '-' : data.x_data[0].x5 + '%'}</td>
                                    </tr>
                                    <tr>
                                        <td>${data.x_data[1].stage_title}</td>
                                        <td>${(data.x_data[1].x1 == 0) ? '-' : data.x_data[1].x1 + '%'}</td>
                                        <td>${(data.x_data[1].x2 == 0) ? '-' : data.x_data[1].x2 + '%'}</td>
                                        <td>${(data.x_data[1].x3 == 0) ? '-' : data.x_data[1].x3 + '%'}</td>
                                        <td>${(data.x_data[1].x4 == 0) ? '-' : data.x_data[1].x4 + '%'}</td>
                                        <td>${(data.x_data[1].x5 == 0) ? '-' : data.x_data[1].x5 + '%'}</td>
                                    </tr>
                                    <tr>
                                        <td>${data.x_data[2].stage_title}</td>
                                        <td>${(data.x_data[2].x1 == 0) ? '-' : data.x_data[2].x1 + '%'}</td>
                                        <td>${(data.x_data[2].x2 == 0) ? '-' : data.x_data[2].x2 + '%'}</td>
                                        <td>${(data.x_data[2].x3 == 0) ? '-' : data.x_data[2].x3 + '%'}</td>
                                        <td>${(data.x_data[2].x4 == 0) ? '-' : data.x_data[2].x4 + '%'}</td>
                                        <td>${(data.x_data[2].x5 == 0) ? '-' : data.x_data[2].x5 + '%'}</td>
                                    </tr>
                                    <tr>
                                        <td>${data.x_data[3].stage_title}</td>
                                        <td>${(data.x_data[3].x1 == 0) ? '-' : data.x_data[3].x1 + '%'}</td>
                                        <td>${(data.x_data[3].x2 == 0) ? '-' : data.x_data[3].x2 + '%'}</td>
                                        <td>${(data.x_data[3].x3 == 0) ? '-' : data.x_data[3].x3 + '%'}</td>
                                        <td>${(data.x_data[3].x4 == 0) ? '-' : data.x_data[3].x4 + '%'}</td>
                                        <td>${(data.x_data[3].x5 == 0) ? '-' : data.x_data[3].x5 + '%'}</td>
                                    </tr>
                                </tbody>
                            </table>
                  `))
                }).fail(function (res) {
                    console.log(res);
                })
            }

        })
    </script>
@endsection
