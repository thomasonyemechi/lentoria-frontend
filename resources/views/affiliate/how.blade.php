@extends('layouts.instructor')
@section('page_title','Affiliate | How')
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
                        <div class="card mb-4">
                            <!-- Card header -->
                            <div class="card-header border-bottom-0">
                                <h3 class="h3 mb-0">How To Get Started</h3>
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
