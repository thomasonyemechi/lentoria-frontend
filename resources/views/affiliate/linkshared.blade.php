@extends('layouts.instructor')
@section('page_title','Affiliate | LinksShared')
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
