@extends('layouts.instructor')
@section('page_title','Affiliate | LinksShared')
@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="pt-16 rounded-top-md"
                         style="background: url(../../assets/images/background/profile-bg.jpg) no-repeat;background-size: cover;"></div>
                    <div
                            class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
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
                                    <img src="{{asset('assets/images/svg/checked-mark.svg')}}" alt="" height="30" width="30"/>
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
                                    <h1 class="mb-1 fw-bold">Links Analysis and Courses Shared</h1>
                                </div>
                                <!-- table  -->
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th>Links</th>
                                            <th>Clicks</th>
                                            <th>End Result</th>
                                            <th>Conversation</th>
                                        </tr>
                                        </thead>
                                        <!--  <tbody>
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

                                         </tbody> -->
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
