@extends('layouts.instructor')
@section('page_title', 'Lentoria || Checkout Success')
@section('page_content')
    <script>
        if (window.location.pathname == "/checkout_success/course") {
            if (sessionStorage.getItem("courseinfo") == "" || sessionStorage.getItem("courseinfo") == null) {
                window.location.href = "/";
            }
        } else if (window.location.pathname == "/checkout_success/activation") {
            if (sessionStorage.getItem("packageinfo") == "" || sessionStorage.getItem("packageinfo") == null) {
                window.location.href = "/";
            }
        }
    </script>
    <div class="py-lg-6 py-4 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div>
                        <h2 class="text-white display-4 mb-0">Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card  mb-3 mb-lg-0">
                        <div class="card-body text-center">
                            <h1 class="mb-0" style="font-size:80px"><i class="fa fa-check-circle text-success"></i></h1>

                            <h1> PAYMENT SUCCESSFUL!</h1>
                            <button class="btn btn-primary">Dashboard</button>
                        </div>
                    </div>
                    <div class="card  mb-4 bg-white mt-10">
                        <div class="card-header">
                            <h3 class="mb-0">Order details</h3>
                        </div>
                        @if (request()->routeIs('checkout_success.course'))
                            <div class="card-body">
                                <h4>Course Title</h4>
                                <span id="ctitle"><p
                                            class="animate__animated animate__flash animate__slow animate__infinite">loading...</p></span>
                                <hr>

                                <h4>Description</h4>
                                <span id="cdesc"><p
                                            class="animate__animated animate__flash animate__slow animate__infinite">loading...</p></span>
                            </div>
                        @elseif (request()->routeIs('checkout_success.activation'))
                            <div class="card-body">
                                <h4>Package</h4>
                                <span id="pname"><p
                                            class="animate__animated animate__flash animate__slow animate__infinite">loading...</p></span>
                                <hr>

                                <h4>Description</h4>
                                <span id="pdesc"><p
                                            class="animate__animated animate__flash animate__slow animate__infinite">loading...</p></span>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12">
                    <div class="card mb-3 mb-4">
                        <div class="card-header">
                            <h3 class="mb-0">Payment Summary</h3>
                        </div>

                        <div class="p-4">
                            <div class="mb-1">
                                <span class="text-dark h4" id="prodprice">
                                    Price: <p
                                            class="d-inline animate__animated animate__flash animate__slow animate__infinite">loading...</p>
                                </span>
                            </div>
                            <div class="mb-3">
                                <span class="text-dark h4" id="prodtype">
                                    Transaction Type: <p
                                            class="d-inline animate__animated animate__flash animate__slow animate__infinite">loading...</p>
                                </span>
                            </div>
                            <b>Other Information</b>
                            <ul class="list-unstyled mb-0">
                                @if (request()->routeIs('checkout_success.course'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="fas fa-user"></i></span>
                                        <span>3-6 months mentorship</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="fa fa-scroll"></i></span>
                                        <span><span class="fw-bold text-dark">offline </span>materials </span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="fa fa-trophy"></i></span>
                                        <span><span class="fw-bold text-dark">certificate </span>upon completion</span>
                                    </li>
                                @elseif (request()->routeIs('checkout_success.activation'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span class="pinfo"><p
                                                    class="d-inline animate__animated animate__flash animate__slow animate__infinite">loading...</p></span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span class="pinfo"><p
                                                    class="d-inline animate__animated animate__flash animate__slow animate__infinite">loading...</p></span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span class="pinfo"><p
                                                    class="d-inline animate__animated animate__flash animate__slow animate__infinite">loading...</p></span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.onvisibilitychange = (e) => {
            if (document.visibilityState == "hidden") {
                if (window.location.pathname == "/checkout_success/course") {
                    if (sessionStorage.getItem("courseinfo") != "" || sessionStorage.getItem("courseinfo") != null) {
                        sessionStorage.removeItem("courseinfo");
                    }
                } else if (window.location.pathname == "/checkout_success/activation") {
                    if (sessionStorage.getItem("packageinfo") != "" || sessionStorage.getItem("packageinfo") != null) {
                        sessionStorage.removeItem("packageInfo");
                    }
                }
            }
        }
        $(function () {
            if (window.location.pathname == "/checkout_success/course") {
                course_info = JSON.parse(sessionStorage.getItem("courseinfo"));
                console.log(course_info);
                $("#prodprice").html(`Price: ${naira(course_info.course_price)}`);
                $("#ctitle").html(`${course_info.course_title}`);
                $("#prodtype").html(`Transaction Type: ${course_info.transaction_type}`);
                $("#cdesc").html(`${course_info.course_description}`);

                $("button").click(function (e) {
                    sessionStorage.removeItem("courseinfo");
                    window.location.href = "/"
                })
            } else if (window.location.pathname == "/checkout_success/activation") {
                package_info = JSON.parse(sessionStorage.getItem("packageinfo"));
                $("#prodprice").html(`Price: ${naira(package_info.price)}`);
                $("#prodtype").html(`Transaction Type: ${package_info.tansaction_type}`);
                $("#pname").html(package_info.product_type);
                $("#pdesc").html(package_info.product_desc);
                $("#ctitle").html(`${package_info.course_title}`);
                $("#cdesc").html(`${package_info.course_description}`);
                Array.prototype.slice.call(document.getElementsByClassName('pinfo')).map((x, i) => {
                    c = package_info.package_info[i];
                    x.innerHTML = c;
                });

                $("button").click(function (e) {
                    sessionStorage.removeItem("packageinfo");
                    window.location.href = "/"
                });

            }

        })
    </script>
@endsection
