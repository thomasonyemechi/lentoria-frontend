@extends('layouts.instructor')
@section('page_title', 'Affiliate | Dashboard')
@section('page_content')

    <div class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            {!!affiliateInfo() !!}
            <!-- Page Content -->
            <div class="row mt-0 mt-md-4">
                @include('affiliate.nav')
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-12 d-flex flex-lg-fill align-items-stretch">
                            <!-- Card -->
                            <div class="card mb-4 cardd">
                                <div class="p-2">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Account Balance</span>
                                    <h3 class="mt-2 fs-4 fw-bold mb-1 align-items-center">
                                        N 467.34
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12  d-flex flex-lg-fill align-items-stretch">
                            <!-- Card -->
                            <div class="card mb-4 cardd">
                                <div class="p-2">
                                    <span class="fs-6 text-uppercase fw-semi-bold">RPV Bonus</span>
                                    <h3 class="mt-2 fs-4 fw-bold mb-1 align-items-center">
                                        N 12,000
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12 d-flex flex-lg-fill align-items-stretch">
                            <!-- Card -->
                            <div class="card mb-4 cardd">
                                <div class="p-2">
                                    <span class="fs-6 text-uppercase fw-semi-bold">SPV Bonus</span>
                                    <h3 class="mt-2 fs-4 fw-bold mb-1 align-items-center">
                                        N 46.80
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 col-12 d-flex flex-lg-fill align-items-stretch">
                            <!-- Card -->
                            <div class="card mb-4 cardd">
                                <div class="p-2">
                                    <span class="fs-6 text-uppercase fw-semi-bold">Monthly earning</span>
                                    <h3 class="mt-2 fs-4 fw-bold mb-1 align-items-center">
                                        N 400,000.80
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <!-- Card header -->
                        <div class="card-header border-bottom-0">
                            <h3 class="h4 mb-0">All Sales Transaction</h3>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive border-0">
                            <table class="table mb-0">
                                <!-- Table head -->
                                <thead class="table-light">
                                <tr>
                                    <th scope="col" class="border-0">DATE</th>
                                    <th scope="col" class="border-0">AMOUNT</th>
                                    <th scope="col" class="border-0">TYPE</th>
                                    <th scope="col" class="border-0">STATUS</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Card -->
    </div>

    <hr class="my-0">


    <script>
        $(function () {
            function getAccountSummary() {
                $.ajax({
                    method: 'get',
                    url: api_url + `affiliate/account_summary/20046`
                }).done(function (res) {
                    console.log(res);
                }).fail(function (res) {
                    console.log(res);
                })
            }

            getAccountSummary();
        })
    </script>
@endsection
