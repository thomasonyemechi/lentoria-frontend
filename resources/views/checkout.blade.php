@extends('layouts.instructor')
@section('page_title', 'Checkout')
@section('page_content')
    <!-- Page header -->
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
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Payment Method</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <input type="hidden" id="cid" />
                            @if (request()->is('checkout/course/*'))
                                <input type="hidden" value="{{ $slug }}" id="slug" />
                            @elseif (request()->is('checkout/instructor_activation/*/*'))
                                <input type="hidden" id="inspackid" value="{{ $id }}" />
                            @elseif (request()->is('checkout/affiliate_activation/*/*'))
                                <input type="hidden" id="affpackid" value="{{ $id }}" />
                            @endif
                            <div class="row">
                                <label>
                                    <div class="form-check me-3" id="cardpay"
                                        style="border: 1px solid; border-width: thin; height: 42px !important; margin-top:10px">
                                        <div class="row">
                                            <div class="form-check me-3" style="padding:7px 33px; cursor: pointer;">
                                                <input type="radio" id="cardRadioone" name="cardRadioone"
                                                    class="form-check-input" checked>Credit or Debit card
                                                <span style="padding-left: 4px;">
                                                    <i class="fab fa-cc-amex me-1 text-primary"></i>
                                                    <i class="fab fa-cc-mastercard me-1 text-primary"></i>
                                                    <i class="fab fa-cc-visa text-primary"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <label>
                                    <div class="form-check me-3" id="wallpay"
                                        style="border: 1px solid; border-width: thin; height: 42px !important; margin-top: 10px; cursor: pointer;">
                                        <div class="form-check" style="padding-top: 7px;">
                                            <input type="radio" id="cardRadioTwo" name="cardRadioone"
                                                class="form-check-input" />Livepetal Account
                                            <div style="float:right; padding-right:10px">
                                                <span id="bal" class="text-sm">
                                                    <div class="spinner-border text-primary mb-2" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </span>
                                                <input type="hidden" id="hidbal">
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="col-md-12 mt-3 justify-content-center">
                                    <button class="btn btn-primary pay-btn" id="flutterpay" disabled
                                        trans-type="@if (request()->is('checkout/instructor_activation/*/*')) ins_activation @elseif(request()->is('checkout/affiliate_activation/*/*')) aff_activation @elseif(request()->is('checkout/course/*'))course_purchase @endif">Card
                                        Payment</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    @if (request()->is('checkout/course/*'))
                        <div class="card mb-4 bg-white mt-10">
                            <div class="card-header">
                                <h3 class="mb-0">Order details</h3>
                            </div>
                            <div class="card-body">

                                <h4>Title</h4>
                                <span id="ctit">The title</span>
                                <hr>

                                <h4>Description</h4>
                                <span id="cdesc">The description</span>
                            </div>
                        </div>
                    @elseif (request()->is('checkout/instructor_activation/3/*'))
                        <div class="card mb-4 bg-white mt-10">
                            <div class="card-header">
                                <h3 class="mb-0">Order details</h3>
                            </div>
                            <div class="card-body">

                                <h4>Package</h4>
                                <span id="ptit">Standard</span>
                                <hr>

                                <h4>Description</h4>
                                <h5 class="mb-1">Everything in Starter, plus:</h5>
                                <span>Access to become an instructor,Access to instructor training package & 1 paid
                                    course.</span>
                            </div>
                        </div>
                    @elseif (request()->is('checkout/instructor_activation/4/*'))
                        <div class="card mb-4 bg-white mt-10">
                            <div class="card-header">
                                <h3 class="mb-0">Order details</h3>
                            </div>
                            <div class="card-body">

                                <h4>Package</h4>
                                <span>Premium</span>
                                <hr>

                                <h4>Description</h4>
                                <h5 class="mb-1">Everything in Standard, plus:</h5>
                                <span>Access to instuctor success challenge, a Unique store, and to 3 paid courses.</span>
                            </div>
                        </div>
                    @elseif (request()->is('checkout/instructor_activation/5/*'))
                        <div class="card mb-4 bg-white mt-10">
                            <div class="card-header">
                                <h3 class="mb-0">Order details</h3>
                            </div>
                            <div class="card-body">

                                <h4>Package</h4>
                                <span>Professional</span>
                                <hr>

                                <h4>Description</h4>
                                <h5 class="mb-1">Everything in Premium, plus:</h5>
                                <span>Access to store automation, customizable store and access to unlimited paid
                                    courses.</span>
                            </div>
                        </div>
                    @elseif (request()->is('checkout/affiliate_activation/2/*'))
                        <div class="card mb-4 bg-white mt-10">
                            <div class="card-header">
                                <h3 class="mb-0">Order details</h3>
                            </div>
                            <div class="card-body">

                                <h4>Package</h4>
                                <span>Basic</span>
                                <hr>

                                <h4>Description</h4>
                                <span>To start your Affiliate journey today you will get access to all our Core
                                    Services.</span>
                            </div>
                        </div>
                    @elseif (request()->is('checkout/affiliate_activation/3/*'))
                        <div class="card mb-4 bg-white mt-10">
                            <div class="card-header">
                                <h3 class="mb-0">Order details</h3>
                            </div>
                            <div class="card-body">

                                <h4>Package</h4>
                                <span>Standard</span>
                                <hr>

                                <h4>Description</h4>
                                <span>Become Instructor unlimited team profits, and access to Short Links Services.</span>
                            </div>
                        </div>
                    @elseif (request()->is('checkout/affiliate_activation/4/*'))
                        <div class="card mb-4 bg-white mt-10">
                            <div class="card-header">
                                <h3 class="mb-0">Order details</h3>
                            </div>
                            <div class="card-body">

                                <h4>Package</h4>
                                <span>Premium</span>
                                <hr>

                                <h4>Description</h4>
                                <span>Access to special features and all features in the previous packages.</span>
                            </div>
                        </div>
                    @endif

                </div>

                <div class="col-lg-4 col-md-12 col-12">
                    <div class="card mb-3 mb-4">
                        <div class="card-header">
                            <h3 class="mb-0">Payment Summary</h3>
                        </div>
                        <div class="p-4">
                            <div class="mb-1">
                                @if (request()->is('checkout/course/*'))
                                    <span class="text-dark h4" id="prodprice">Price: &#8358; 20,000</span>
                                    <input type="hidden" id="c-price">
                                @elseif(request()->is('checkout/instructor_activation/3/*'))
                                    <span class="text-dark h4" id="actprice">Price: &#8358;
                                        15,000</span>
                                    <input type="hidden" id="a-price" value="15000">
                                @elseif(request()->is('checkout/instructor_activation/4/*'))
                                    <span class="text-dark h4" id="actprice">Price: &#8358;
                                        40,000</span>
                                    <input type="hidden" id="a-price" value="40000">
                                @elseif(request()->is('checkout/instructor_activation/5/*'))
                                    <span class="text-dark h4" id="actprice">Price: &#8358;
                                        115,000</span>
                                    <input type="hidden" id="a-price" value="115000">
                                @elseif (request()->is('checkout/affiliate_activation/2/*'))
                                    <span class="text-dark h4" id="actprice">Price: &#8358; 5,000</span>
                                    <input type="hidden" id="af-price" value="5000">
                                @elseif (request()->is('checkout/affiliate_activation/3/*'))
                                    <span class="text-dark h4" id="actprice">Price: &#8358; 15,000</span>
                                    <input type="hidden" id="af-price" value="15000">
                                @elseif (request()->is('checkout/affiliate_activation/4/*'))
                                    <span class="text-dark h4" id="actprice">Price: &#8358; 40,000</span>
                                    <input type="hidden" id="af-price" value="40000">
                                @endif
                            </div>
                            <div class="mb-3">
                                @if (request()->is('checkout/course/*'))
                                    <span class="text-dark h4" id="prodtype">Transaction Type: Course
                                        Purchase</span>
                                @elseif (request()->is('checkout/instructor_activation/*/*'))
                                    <span class="text-dark h4" id="prodtype">Transaction Type:
                                        Instructor
                                        Activation</span>
                                @elseif (request()->is('checkout/affliate_activation/*'))
                                    <span class="text-dark h4" id="prodtype">Transaction Type: Affliate
                                        Activation</span>
                                @endif
                            </div>
                            <b>Other Information</b>

                            <ul class="list-unstyled mb-0">
                                @if (request()->is('checkout/course/*'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>3-6 months mentorship</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="fa fa-scroll"></i></span>
                                        <span><span class="fw-bold text-dark">Offline </span>Materials
                                        </span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="fa fa-trophy"></i></span>
                                        <span><span class="fw-bold text-dark">Certificate </span>upon
                                            completion</span>
                                    </li>
                                @elseif (request()->is('checkout/instructor_activation/3/*'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Become an Instructor</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Instructor Paid Training Package </span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>1 Paid Course</span>
                                    </li>
                                @elseif (request()->is('checkout/instructor_activation/4/*'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Instructor success challenge</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Unique Store</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>3 Paid Courses</span>
                                    </li>
                                @elseif (request()->is('checkout/instructor_activation/5/*'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Store Automation</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Customizable Store</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Unlimited Paid Courses</span>
                                    </li>
                                @elseif (request()->is('checkout/affiliate_activation/2/*'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Affiliate Training Package</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Free Unique Affiliate Links</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Unlimited Store Links</span>
                                    </li>
                                @elseif (request()->is('checkout/affiliate_activation/3/*'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Become Instuctor</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Team Profits</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Short Links Services</span>
                                    </li>
                                @elseif (request()->is('checkout/affiliate_activation/4/*'))
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Access to Success Challenge</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Global Profit Sharing</span>
                                    </li>
                                    <li class="mb-1">
                                        <span class="text-success me-1"><i class="far fa-check-circle"></i></span>
                                        <span>Unique Affiliate Store</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script>
        $(function() {
            if ($("#slug").length) {
                slug = $("#slug").val();
                console.log(slug);
                fetchCourseInfo(slug);
            }
            getBalance();

            $("button").removeAttr("disabled");

            function courseSetStorage() {
                course_title = $('#ctit').html();
                course_description = $('#cdesc').html();
                course_price = $('#c-price').val();
                course_info = {
                    course_title,
                    course_description,
                    course_price
                };
                sessionStorage.setItem("courseinfo", JSON.stringify(course_info));
            }

            // function packageSetStorage(){

            // }


            $("#wallpay").click(function(e) {
                var button = $("button.pay-btn");
                if (button.attr("id") == "flutterpay") {
                    button.attr("id", "livepay");
                    button.html("Wallet Payment");
                }
            });

            $("#cardpay").click(function(e) {
                var button = $("button.pay-btn");
                if (button.attr("id") == "livepay") {
                    button.attr("id", "flutterpay");
                    button.html("Card Payment");
                }
            });

            function fetchCourseInfo(slug) {
                $.ajax({
                    type: "get",
                    url: api_url + `course_info2/${slug}`,
                }).done(function(res) {
                    console.log(res);
                    $('#cid').val(res.data.id);
                    $('#ctit').html(res.data.title);
                    $('#cdesc').append(res.data.description);
                    $('#c-price').val(`${res.data.price}`);
                    $('#prodprice').html(`Price: &#8358; ${res.data.price}`);
                    // $("#prodtype").html(`Product Type: ${res.data.course_info.type}`)
                }).fail(function(res) {
                    console.log(res);
                    concatError(res.responseJSON);

                });
            }

            function getBalance() {
                if (@js(session('info'))) {
                    info = @js(session('info'));
                    live_id = info.data.live_id;
                    $.ajax({
                        url: api_url + `admin/balance/${live_id}`,
                    }).done(res => {
                        $("input#hidbal").val(res.balance);
                        $("#bal").html(`NGN ${res.balance}`);
                    }).fail(res => {
                        console.log(res);
                        concatError(res.responseJSON);
                    })
                } else {
                    $("#bal").html(`Login to see balance`);
                }
            };


            function courseWalletPurchase(course_id) {
                $.ajax({
                    url: api_url + `admin/wallet_purchase`,
                    method: 'POST',
                    data: {
                        course_id: course_id,
                    },
                    beforeSend: () => {
                        btn(livepay, '', 'before');
                    },
                }).done(res => {
                    salat(res.message);
                    btn(livepay, 'Wallet Payment', 'after');
                    courseSetStorage();
                    setTimeout(() => {
                        window.location.href = "/checkout_success"
                    }, 3000);
                }).fail(res => {
                    console.log(res);
                    btn(livepay, 'Wallet Payment', 'after');
                    concatError(res.responseJSON);
                })
            }

            function walletActivation(plan, ins) {
                $.ajax({
                    url: api_url + `admin/activate_from_wallet`,
                    method: "POST",
                    data: {
                        plan: plan,
                        instructor: ins,
                    },
                    beforeSend: () => {
                        btn(livepay, '', 'before');
                    },
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                    btn(livepay, 'Wallet Payment', 'after');
                }).fail(res => {
                    console.log(res);
                    btn(livepay, 'Wallet Payment', 'after');
                    concatError(res.responseJSON);
                })
            }

            function cardActivation(price, plan_id, ins, type) {
                FlutterwaveCheckout({
                    public_key: "FLWPUBK_TEST-8c6efffe5995bec0a8aa9e9d3699589e-X",
                    tx_ref: randomString(12),
                    amount: price,
                    currency: "NGN",
                    payment_options: "card,ussd",
                    callback: function(payment) {
                        console.log(payment);
                        if (payment.status == "successful") {
                            tx_id = payment.tx_ref;
                            amount = payment.amount;
                            verifyInsCardPurchase(tx_id, plan_id, ins);
                        }
                    },
                    onclose: function(incomplete) {
                        if (incomplete || window.verified === false) {
                            salat('Transaction cancelled', 1);
                        }
                    },
                    meta: {
                        user_id: user_id,
                    },
                    customer: {
                        email: email,
                        phone_number: phone,
                        name: name,
                    },
                    customizations: {
                        title: "Package Activation",
                        description: `Activation of ${type} Package`,
                    },
                });
            }


            function cardCoursePurchase(price) {
                FlutterwaveCheckout({
                    public_key: "FLWPUBK_TEST-8c6efffe5995bec0a8aa9e9d3699589e-X",
                    tx_ref: randomString(12),
                    amount: price,
                    currency: "NGN",
                    payment_options: "card,ussd",
                    callback: function(payment) {
                        console.log(payment);
                        if (payment.status == "successful") {
                            tx_id = payment.tx_ref;
                            amount = payment.amount;
                            verifyCourseCardPurchase(tx_id, amount, course_id);
                        }
                    },
                    onclose: function(incomplete) {
                        if (incomplete || window.verified === false) {
                            salat('Transaction cancelled', 1);
                        }
                    },
                    meta: {
                        user_id: user_id,
                    },
                    customer: {
                        email: email,
                        phone_number: phone,
                        name: name,
                    },
                    customizations: {
                        title: "Course Purchase",
                        description: "Payment for buying a course",
                    },
                });
            }

            function verifyCourseCardPurchase(tx_id, amount, course_id) {
                $.ajax({
                    url: api_url + "admin/card_purchase",
                    method: "POST",
                    data: {
                        amount: amount,
                        transaction_id: tx_id,
                        course_id: course_id,
                    },
                }).done(res => {
                    salat(res.message);
                    setStorage();
                    setTimeout(() => {
                        window.location.href = "/checkout_success";
                    }, 2000);
                }).fail(res => {
                    console.log(res);
                    concatError(res);
                })
            };

            function verifyInsCardPurchase(tx_id, plan_id, ins) {
                $.ajax({
                    url: api_url + "admin/activate_from_card",
                    method: "POST",
                    data: {
                        instructor: ins,
                        plan: plan_id,
                        transaction_id: tx_id,
                    },
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                }).fail(res => {
                    console.log(res);
                    concatError(res.responseJSON);
                })
            }


            $(document).on('click', '#livepay', function(e) {
                e.preventDefault();
                trans_type = $(this).attr("trans-type");
                livepay = $(this);
                bal = parseInt($("input#hidbal").val());
                if (!@js(session('info'))) {
                    $("#signup_modal").modal("show");
                    return;
                }

                if (trans_type.trim() == "course_purchase") {
                    price = parseInt($("#c-price").val());
                    course_id = $("#cid").val();
                    if (bal < price) {
                        salat("Insufficient funds", 1);
                        return;
                    }
                    if (window.confirm("Confirm Wallet Payment")) {
                        courseWalletPurchase(course_id);
                    }
                    return;
                } else if (trans_type.trim() == "ins_activation") {
                    price = parseInt($("#a-price").val());
                    plan = $("#inspackid").val();
                    if (window.confirm("Confirm Wallet Payment")) {
                        walletActivation(plan, 1);
                    }
                    return;
                } else if (trans_type.trim() == "aff_activation") {
                    plan = $("#affpackid").val();
                    if (window.confirm("Confirm Wallet Payment")) {
                        walletActivation(plan, 0);
                    }
                }
            });


            $(document).on('click', '#flutterpay', function(e) {
                e.preventDefault();
                trans_type = $(this).attr("trans-type");
                info = @js(session('info'));
                course_id = $("#cid").val();
                user_id = info.data.id;
                email = info.data.email;
                phone = info.data.phone;
                name = `${info.data.firstname} ${info.data.lastname}`;
                if (!@js(session('info'))) {
                    $("#signup_modal").modal("show");
                    return;
                }
                if (window.confirm('Confirm Card Payment')) {
                    if (trans_type.trim() == "course_purchase") {
                        price = $("#c-price").val();
                        cardCoursePurchase(price);
                    } else if (trans_type.trim() == "ins_activation") {
                        price = $("#a-price").val();
                        plan_id = $("#inspackid").val();
                        cardActivation(price, plan_id, 1, "Instructor");
                    } else if (trans_type.trim() == "aff_activation") {
                        price = $("#af-price").val();
                        plan_id = $("#affpackid").val();
                        cardActivation(price, plan_id, 0, "Affiliate");
                    }
                }

            });
        })
    </script>
@endsection
