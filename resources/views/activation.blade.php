@extends('layouts.instructor')
@section('page_title', 'Lentoria || Activation')
@section('page_content')
    <div class="py-lg-13 py-8 bg-primary">
        <div class="container">
            <!-- Page header -->
            <div class="row align-items-center">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
                    <div class="text-center mb-6 px-md-8">
                        <h1 class="text-white display-3 fw-bold">
                            Activate Instructor's Account
                        </h1>
                        <p class="text-white lead mb-4">
                            Discover an avenue to make your soft skill into revenue.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="mt-n8 pb-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-12"></div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card border-0 mb-3 mb-lg-0">
                        <!-- Card body -->
                        <div class="p-5 text-center">
                            <img src="{{ asset('assets/images/logo2.png') }}" alt="" class="mb-5"/>
                            <div class="mb-5">
                                <h2 class="fw-bold">Basic Package</h2>
                                <p class="mb-0">
                                    Become an
                                    <span class="text-dark fw-medium">instructor, add courses and earn some money.</span>
                                    One Time Payment.
                                </p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="fs-2 text-dark fw-bold">
                                    &#8358;2,500
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="button" id="bain" class="btn btn-primary">Become an Instructor</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12"></div>
            </div>
        </div>
    </div>
    <!-- FAQ -->
    <div class="py-lg-10 pt-15 py-5">
        <div class="container">
            <div class="row">
                <!-- Row -->
                <div class="col-md-12 col-12">
                    <div class="mb-8 text-center">
                        <h2 class="h1">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <!-- Col -->
                <div class="col-md-6 col-lg-4 col-12 mb-3">
                    <h4>Will I be charged now for a FREE trial?</h4>
                    <p>
                        Vestibulum pulvinar est at erat laoreet fringilla. Nullam
                        imperdiet, augue non vestibulum triuam quam, at maximus ex mauris
                        a felis.
                    </p>
                </div>
                <!-- Col -->
                <div class="col-md-6 col-lg-4 col-12 mb-3">
                    <h4>How does a Course subscription work?</h4>
                    <p>
                        Donec tempus imperdiet libero quis ultricies. Donec nunc nisi,
                        imperdiet nec porta ultrices, accumsan a nibh.
                    </p>
                </div>
                <!-- Col -->
                <div class="col-md-6 col-lg-4 col-12 mb-3">
                    <h4>Can I cancel anytime?</h4>
                    <p>
                        Yes, Pellentesque habitant morbi tristique senectus et netus
                        fficitur eget lacus eu, gravida blandit sem. Duis aliquam
                        convallis tempor.
                    </p>
                </div>
                <!-- Col -->
                <div class="col-md-6 col-lg-4 col-12 mb-3">
                    <h4>How long is my personal free trial?</h4>
                    <p>
                        Aliquam vel sodales est. Mauris eu dignissim dolor. Praesent
                        scelerisque dolor risus, quis viverra interdum turpis tincidunt
                        interdum.
                    </p>
                </div>
                <!-- Col -->
                <div class="col-md-6 col-lg-4 col-12 mb-3">
                    <h4>What are Course team plan?</h4>
                    <p>
                        Quisque accumsan odio sed congue u eleifend est porttitor nisi
                        lobortis, sit aget dolor rhoncus tincidunt vel a mauris.
                    </p>
                </div>
                <!-- Col -->
                <div class="col-md-6 col-lg-4 col-12 mb-3">
                    <h4>Are the lectures downloadable?</h4>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et
                        malesuada fitur eget lacus eu, gravida blandit sem.
                    </p>
                </div>
                <!-- Col -->
                <div class="col-md-12 col-12 mt-lg-10 mt-4">
                    <!-- Card-->
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Have other questions?</h4>
                                <span>Send us a mail via:
                                    <a href="mailto:support@lentoria.com"
                                       target="_blank">support@lentoria.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script>
        $(function () {

            info = @js(Session::get('info'));
            user_id = info.data.id;
            email = info.data.email;
            phone = info.data.phone;
            name = `${info.data.firstname} ${info.data.lastname}`;


            $("#bain").click(function (e) {
                e.preventDefault();
                makePayment();
            })

            function makePayment() {
                FlutterwaveCheckout({
                    public_key: "FLWPUBK_TEST-8c6efffe5995bec0a8aa9e9d3699589e-X",
                    tx_ref: randomString(12),
                    amount: 2500,
                    currency: "NGN",
                    payment_options: "card,ussd",
                    callback: function (payment) {
                        console.log(payment);
                        if (payment.status == "successful") {
                            tx_id = payment.tx_ref;
                            amount = payment.amount;
                            verifyTransactionOnBackend(tx_id, amount);
                        }
                    },
                    onclose: function (incomplete) {
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
                        title: "Become an Instructor",
                        description: "Payment for becoming an instructor",
                    },
                });
            }


            function verifyTransactionOnBackend(tx_id, amount) {
                $.ajax({
                    url: api_url + "admin/payto_become_instructor",
                    method: "POST",
                    data: {
                        amount: amount,
                        transaction_id: tx_id,
                    },
                }).done(res => {
                    console.log(res);
                    salat(res.message);
                    setTimeout(() => {
                        window.location.href = "instructor/dashboard";
                    }, 2000);

                }).fail(res => {
                    console.log(res);
                    concatError(res);
                })
            }
        })
    </script>
@endsection
