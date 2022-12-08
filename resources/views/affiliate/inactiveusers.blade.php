@extends('layouts.instructor')
@section('page_title','Affiliate | InactiveUsers')
@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="pt-16 rounded-top-md"
                         style="background: url(../../assets/images/background/profile-bg.jpg) no-repeat;background-size: cover;"></div>
                    <div class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-nonerounded-bottom-md shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                <img src="{{asset('assets/images/avatar/avatar-1.jpg')}}"
                                     class="avatar-xl rounded-circle border border-4 border-white position-relative"
                                     alt=""/>
                                <a href="#"
                                   class="position-absolute top-0 end-0"
                                   data-bs-toggle="tooltip"
                                   data-placement="top"
                                   title=""
                                   data-original-title="Verified">
                                    <img src="{{asset('assets/images/svg/checked-mark.svg')}}"
                                         alt=""
                                         height="30"
                                         width="30"/>
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
