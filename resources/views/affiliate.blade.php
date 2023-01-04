@extends('layouts.instructor')

@section('page_title', 'Lentoria || Become Affiliate')

@section('page_content')
    <style>
        label.btn:hover {
            text-shadow: 0 3px 2px rgba(0, 0, 0, 0.4);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1)
        }
        button.outline-btn:disabled, a.outline-btn:disabled {
            cursor: not-allowed !important;
        }
    </style>
    <!-- Hero Content -->
    <div class="bg-primary">
        <div class="container">
            <!-- Hero Section -->
            <div class="row align-items-center g-0">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="py-5 py-lg-0">
                        <h1 class="text-white display-3 fw-bold">Earn money promoting online courses</h1>
                        <p class="text-white mb-4 lead">
                            Become an affiliate to learn how to earn constant cash flow by simply promoting quality
                            online
                            courses. We will show you how to automate the entire process.
                        </p>
                        <a class="btn btn-outline-white text-white mt-4 mb-1 gsbtn outline-btn"
                           href="javascript:void(0)">Get
                            Started</a>

                    </div>
                </div>
                <div class=" col-xl-6 col-lg-6 col-md-12 text-lg-end text-center p-5">
                    <img src="{{ asset('assets/images/teach.png') }}" alt="" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-lg-12 pb-lg-3 pt-8">
        <div class="container">
            <div class="row mb-10 justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <!-- caption -->
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">Learn how to sell
                        anything online</span>
                    <h2 class="mb-2 display-4 fw-bold ">Become a professional top-ranking Affiliate</h2>
                    <p class="lead">The Lentoria Affiliate Programme introduces you to a complete sales automation
                        process
                        that will teach you how to set up a system that automatically generates massive sales for you
                        and
                        keep you earning while you are away</p>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <!-- features -->
                    <div class="mb-4">
                        <!-- icon -->
                        <div class="display-2 text-primary">
                            <i class="fe fe-settings fe-a"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>No skill Required</h3>
                            <p class="fs-4">
                                You don’t need to have any experience with professional training. The program will take
                                you
                                from start to expertise</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="mb-4">
                        <div class="display-2 text-primary">
                            <i class="fe fe-user"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>Equip you with right Tools</h3>
                            <p class="fs-4">Our tools provide all the guide you need to create multiple simultaneous
                                online selling systems to work for you 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <!-- features -->
                    <div class="mb-4">
                        <!-- icon -->
                        <div class="display-2 text-primary">
                            <i class="fe fe-award"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>Get you Certified</h3>
                            <p class="fs-4">You will be trained with practical tools by industry experts to sell any
                                type
                                of digital product with very high success rate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <!-- features -->
                    <div class="mb-4">
                        <!-- icon -->
                        <div class="display-2 text-primary">
                            <i class="fe fe-users"></i>
                        </div>
                        <!-- para -->
                        <div class="mt-4">
                            <h3>Help you Build Audience</h3>
                            <p class="fs-4">Lentoria accelerated marketing and sales program will help you generate all
                                the
                                sales you need to cash out regularly</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-10 justify-content-center">
                <div class="col-lg-8 col-md-12 pt-4 col-12 text-center">
                    <p class="lead"><big>No one is born an expert affiliate. It is a skill anyone can learn and begin to
                            demonstrate expertise within few days with dedication and commitment and start generating
                            massive cash flow</big></p>
                    <p><a href="javascript:void(0)" class="btn btn-outline-primary mt-4 gsbtn">Become an Affiliate
                            Now</a>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="py-lg-16 pt-10 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-right-md-6 col-12 mb-6">
                    <!-- caption -->
                    <h2 class="display-4 mb-3 fw-bold text-white">Why become an Affiliate?</h2>
                    <p class="lead text-white">The answer is simple! To create online systems that guarantees multiple
                        independent streams of quality income. You most likely want to create machine-like systems that
                        can
                        do the work for you and help you generate a lot of cashflow even while you are away.</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-4">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-school-outline mdi-48px text-primary lh-1 "></i></div>
                            <h3 class="mb-2">Learn how to create Sales systems</h3>
                            <p class="mb-0"><big>You don't have to pay to create sales systems. You can master the game
                                    and even become a sales consultant</big></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-4">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-account-group mdi-48px text-primary lh-1 "></i></div>
                            <h3 class="mb-2">Creatively engage your sales strategy</h3>
                            <p class="mb-0"><big>Understanding how to engage your sales skills will put you in control
                                    and
                                    help you drive massive sales</big></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- card -->
                    <div class="card mb-4 mb-lg-0">
                        <!-- card body -->
                        <div class="card-body p-4">
                            <!-- icon -->
                            <div class="mb-3"><i class="mdi mdi-finance mdi-48px text-primary lh-1 "></i></div>
                            <h3 class="mb-2">Quality Mentorship: You are not left alone</h3>
                            <p class="mb-0"><big>The mentorship Lentoria provides will take you from a complete novice
                                    to
                                    the position of a strong mentor</big></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 text-center">
                    <a href="javascript:void(0)" class="btn btn-outline-white mt-5 text-white gsbtn outline-btn">Become
                        an Affiliate
                        Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-lg-12 pb-lg-3 pt-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 text-center">
                    <!-- caption -->
                    <span class="text-primary mb-3 d-block text-uppercase fw-semi-bold ls-xl">Take the bold step to
                        expanding your opportunities</span>
                    <h2 class="mb-2 display-4 fw-bold ">Simple Steps with Great Financial Returns</h2>
                    <p class="lead">You can kick-start your journey towards becoming an expert affiliate with just
                        simple
                        bold steps in the right direction. You will practically learn how to sell anything online by
                        creating reliable online sales systems.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-lg-12 pb-lg-3 pb-6 pt-0">

        <div class="row bg-primary">
            <div class="col-lg-6 text-center m-0 p-8">
                <h1 class="text-white display-4">Take full control of your online business</h1>
                <h2 class="lead text-white">The Lentoria affiliate programme gives you the freedom to structure the way
                    you
                    want to work and decide how quick you want to achieve your financial goals. This is a sure pathway
                    to
                    financial freedom. The skills learned are applicable to any industry making you a general sales
                    consultant. </h2>
            </div>
            <div class="col-lg-6 m-0 p-0">

                <img src="{{asset('assets/images/new_img/d0c31f3543.jpg')}}" width="100%" alt=""/>

            </div>
        </div>

    </div>

    <div class="py-10 bg-white">
        <div class="container">

            <!-- gallery -->

            <div class="row">
                <!-- row -->
                <div class="col-md-6 offset-right-md-6">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold mb-3">Simple Steps to Success</h1>
                    <!-- para -->
                    <p class="lead">
                    </p>
                </div>
                <div class="col-lg-3">
                    <!-- counter -->
                    <h1>1</h1>
                    <div class="border-top pt-4 mt-0 mb-5">
                        <h3 class="mb-2">Get Equipped and Learn the Tricks </h3>
                        <p class=""><big>Being a good instructor start from being able to get prepared and be ready to
                                tackle any challenges that are ahead of you during the course.</big></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- counter -->
                    <h1>2</h1>
                    <div class="border-top pt-4 mt-0 mb-5">
                        <h3 class="mb-2">Create Strategic Sales Systems</h3>
                        <p class=""><big>Generate a comprehensive and attractive sales strategy that communicates
                                more value about what you can offer. </big></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- counter -->
                    <h1>3</h1>
                    <div class="border-top pt-4 mt-0 mb-5">
                        <h3 class="mb-2">Take the Affiliate Success Challenge</h3>
                        <p class=""><big>Our experts will help you re-package your course and make it highly
                                professional and globally acceptable</big></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- counter -->
                    <h1>4</h1>
                    <div class="border-top pt-4 mt-0 mb-5">
                        <h3 class="mb-2">Create Reliable Global Audience</h3>
                        <p class=""><big>Make your choice of topic to teach and streamline it to target the kind
                                of audience you want to attract</big></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="pb-16 pt-10"--}}
    {{--         style=" background-size: cover; background: rgba(221, 218, 255, 0.3) linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%) top center;">--}}
    {{--        <!-- Container -->--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="offset-xl-1 col-xl-10 col-12">--}}
    {{--                    <!-- Row -->--}}
    {{--                    <div class="row mb-0">--}}
    {{--                        <div class="col-lg-10 col-md-12 col-12 mb-8">--}}
    {{--                            <!-- Heading -->--}}
    {{--                            <h2 class="display-4 fw-bold">Our instructors are saying--}}
    {{--                            </h2>--}}
    {{--                            <!-- Para -->--}}
    {{--                            <p class="h2 text-muted">Lentoria has greatly impacted their lives positively</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-md-12 col-12">--}}
    {{--                            <div class="position-relative">--}}
    {{--                                <!-- controls -->--}}
    {{--                                <ul class="controls-testimonial controls  justify-content-start"--}}
    {{--                                    id="sliderTestimonialSecondControls">--}}
    {{--                                    <li class="prev me-2 ms-0">--}}
    {{--                                        <i class="fe fe-chevron-left"></i>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="next">--}}
    {{--                                        <i class="fe fe-chevron-right"></i>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                                <!-- slider -->--}}
    {{--                                <div class="sliderTestimonialSecond">--}}

    {{--                                    <div class="item">--}}
    {{--                                        <div class="row">--}}
    {{--                                            <div class="col-lg-6">--}}
    {{--                                                <img src="{{asset('assets/images/new_img/626c62d596.jpg')}}"--}}
    {{--                                                     class="d-block w-100"--}}
    {{--                                                     alt="...">--}}
    {{--                                            </div>--}}
    {{--                                            <div class="col-lg-6">--}}
    {{--                                                <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Mind--}}
    {{--                                                    afterlife desires when you love with death.--}}
    {{--                                                    Psychic densities feels most graces.--}}
    {{--                                                    The seeker forgets vision which is not ultimate.--}}
    {{--                                                    evil histories discovers most chaos.--}}
    {{--                                                    the karma experiences hypnosis which is not further.--}}
    {{--                                                    be bright."</p>--}}
    {{--                                                <p><b>Paulo Dichone</b><br>--}}
    {{--                                                    Developer (Android Speciality)</p>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="item">--}}
    {{--                                        <div class="row">--}}
    {{--                                            <div class="col-lg-6">--}}
    {{--                                                <img src="{{asset('assets/images/coding.jpg')}}" class="d-block w-100"--}}
    {{--                                                     alt="...">--}}
    {{--                                            </div>--}}
    {{--                                            <div class="col-lg-6">--}}
    {{--                                                <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Space--}}
    {{--                                                    balance and you will be handled essentially.--}}
    {{--                                                    Inner purposes views most careers.--}}
    {{--                                                    The sun facilitates purpose which is not inward.--}}
    {{--                                                    inner lights hears most tantras.--}}
    {{--                                                    an ultimate form of reincarnation is the vision.--}}
    {{--                                                    be important."</p>--}}
    {{--                                                <p><b>John Blue</b><br>--}}
    {{--                                                    Developer (Android Speciality)</p>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="item">--}}
    {{--                                        <div class="row">--}}
    {{--                                            <div class="col-lg-6">--}}
    {{--                                                <img src="{{asset('assets/images/learn.jpg')}}" class="d-block w-100"--}}
    {{--                                                     alt="...">--}}
    {{--                                            </div>--}}
    {{--                                            <div class="col-lg-6">--}}
    {{--                                                <p class="fs-3 text-dark lh-lg mb-4 mt-4">"Lama--}}
    {{--                                                    contact and you will be discovered confidently.--}}
    {{--                                                    The therapist feels.--}}
    {{--                                                    The creator acquires everything which is not crystal.--}}
    {{--                                                    soft afterlife's syntheses most politics.--}}
    {{--                                                    a superior form of history is the relativity.--}}
    {{--                                                    be ultimate."</p>--}}
    {{--                                                <p><b>Paul Reeves</b><br>--}}
    {{--                                                    Developer (Android Speciality)</p>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="py-lg-13 py-8 bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <!-- User info -->
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
                    <div class="text-center mb-6 px-md-6">
                        <h1 class="text-white display-3 fw-semi-bold ">
                            Affiliate Membership Plans
                        </h1>
                        <p class="text-white lead mb-8">
                            Membership plans that guarantees your consistent earning as an affiliate. Membership fees
                            are
                            one time payments and each membership plan opens up a new stream of income
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-n8 pb-10" id="plancon">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card  border border-primary mb-3">
                        <!-- Card Body -->
                        <div class="p-5 text-center">
                            <div class="mb-5">
                                <h2 class="fw-bold">BASIC</h2>
                                <p class="mb-0 ">To start your Affiliate journey today you will get <span
                                        class="text-dark fw-medium">Access to All our Core Services </span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h3 mb-0 fw-bold">N</span>
                                <div class="price-card--price-number toggle-price-content odometer"
                                     data-price-monthly="0"
                                     data-price-yearly="0">5,000
                                </div>

                            </div>
                            <div class="d-grid">
                                <a href="{{ url('checkout/affiliate_activation/2/' . Str::random(8)) }}"
                                   class="btn btn-primary">Activate Now</a>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="p-5">
                            <h4 class="fw-bold mb-4">All core features, including:</h4>
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Affiliate Training Package</span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Free Unique Affiliate Links </span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Unlimited Store Links</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card border border-primary mb-3 mb-lg-0">
                        <!-- Card Body -->
                        <div class="p-5 text-center">
                            <div class="mb-5">
                                <h2 class="fw-bold">STANDARD</h2>
                                <p class="mb-0 ">Become Instructor<span class="text-dark fw-medium"> unlimited team
                                        profits, and access to Short Links Services.</span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h3 mb-0 fw-bold">N</span>
                                <div class="price-card--price-number toggle-price-content odometer"
                                     data-price-monthly="39" data-price-yearly="99">15,000
                                </div>
                            </div>
                            <div class="d-grid">

                                <a href="{{ url('checkout/affiliate_activation/3/' . Str::random(8)) }}"
                                   class="btn btn-primary">Activate Now</a>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="p-5">
                            <h4 class="fw-bold mb-4">Everything in Starter, plus:</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Become Instuctor</span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Team Profits </span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-success me-2"><i class="far fa-check-circle"></i></span>
                                    <span class="fw-bold text-dark">Short Links Services </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card  border border-primary mb-3 mb-lg-0">
                        <!-- Card Body -->
                        <div class="p-5 text-center">
                            <div class="mb-5">
                                <h2 class="fw-bold">PREMIUM</h2>
                                <p class="mb-0 "><span class="text-dark fw-medium">Access to special features </span>
                                    and
                                    all features in the previous packages.
                                </p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h3 mb-0 fw-bold">N</span>
                                <div class="price-card--price-number toggle-price-content odometer"
                                     data-price-monthly="99" data-price-yearly="199">40,000
                                </div>

                            </div>
                            <div class="d-grid">
                                <a href="{{ url('checkout/affiliate_activation/4/' . Str::random(8)) }}"
                                   class="btn btn-primary">Activate Now</a>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="p-5">
                            <h4 class="fw-bold mb-4">Everything in Standard, plus:</h4>
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span class="text-primary me-2"><i
                                            class="far fa-check-circle text-success"></i></span>
                                    <span class="fw-bold text-dark">Access to Success Challenge </span>

                                </li>
                                <li class="mb-1">
                                    <span class="text-primary me-2"><i
                                            class="far fa-check-circle text-success"></i></span>
                                    <span class="fw-bold text-dark">Global
                                        Profit Sharing </span>
                                </li>
                                <li class="mb-1">
                                    <span class="text-primary me-2"><i
                                            class="far fa-check-circle text-success"></i></span>
                                    <span class="fw-bold text-dark">Unique Affiliate Store </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-0">
    <div class="bg-primary-a"
         style="background-color: #036 !important; background-repeat: no-repeat; background-size: cover; background-position: top center;  margin: left -100px right -100px; padding-bottom: 60px; padding-top: 60px;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-12">
                    <h2 class="display-4 text-white">Join learners worldwide</h2>
                    <p class="lead text-white px-lg-12 mb-6">Effective learning starts with assessment. Learning a new
                        skill is hard work—Lentoria makes it easier.</p>
                    <div class="d-grid d-md-block">
                        <button
                            @disabled(session('info')) class="btn btn-outline-white text-white mb-2 mb-md-0 outline-btn"
                            data-bs-target="#signup_modal"
                            data-bs-toggle="modal">Start Learning
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(function () {
            $(".gsbtn").click(function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#plancon').offset().top
                }, 'slow');
            })



            function pushToArray() {
                que_card = $(".question");
                arr = [];
                que_card.map((que) => {
                    que = que_card[que];
                    id = $(que).data('id');
                    name = `ques${id}`
                    var opt = $(que).find('input:checked');
                    question = $(que).find('h3').html();
                    optionA = $(que).find($('.opt-a')).html();
                    optionB = $(que).find($('.opt-b')).html();
                    optionC = $(que).find($('.opt-c')).html();
                    optionD = $(que).find($('.opt-d')).html();
                    if (opt.length > 0) {
                        opt = opt.attr('class').split(' ')[1];
                    } else {
                        opt = '';
                    }
                    ans = {
                        id: id,
                        question: question,
                        answer: opt,
                        a: optionA,
                        b: optionB,
                        c: optionC,
                        d: optionD,
                    }
                    arr.push(ans)
                })

                return arr;
            }

        });
    </script>

@endsection
