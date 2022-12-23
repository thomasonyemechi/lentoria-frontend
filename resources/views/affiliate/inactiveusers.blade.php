@extends('layouts.instructor')
@section('page_title','Affiliate | InactiveUsers')
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

                        <!-- basic table -->
                        <div class="col-xl-12 col-12 mb-5">
                            <div class="card">
                                <!-- card header  -->
                                <div class="card-header">
                                    <h1 class="mb-1 fw-bold">Inactive Referrals</h1>
                                </div>
                                <!-- table  -->
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0 in_active_referrals">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone-No</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td colspan="5">
                                                    <div class="text-center">
                                                        <span class="spinner-border spinner-border-sm"
                                                            aria-hidden="true"></span> <span>Loading Data ... </span>
                                                    </div>
                                                </td>
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


    <script>
        $(function() {
            function getInactiveUsers() {
                $.ajax({
                    method: 'get',
                    url: api_url + `affiliate/inactive_referrals/<?= user()->live_id ?>`
                }).done(function(res) {
                    table = $('.in_active_referrals')
                    table = $(table).find('tbody')
                    table.html('');
                    // if (res.length == 0) {
                    //     table.html(`
                    //         <tr>
                    //             <td colspan="5">
                    //                 <div class="text-center">
                    //                     <span>No data found </span>
                    //                 </div>
                    //             </td>
                    //         </tr>
                    //     `);
                    //     return
                    // }
                    res.map((user, index) => {
                        table.append(`
                            <tr>
                                <td>${index+1}</td>
                                <td>${user.firstname + ' '+ user.lastname}</td>
                                <td>${user.email}</td>
                                <td>${user.phone}</td>
                                <td>-</td>
                            </tr>
                        `)
                    })
                }).fail(function(res) {
                    console.log(res);
                })
            }
            getInactiveUsers();
        })
    </script>
@endsection
