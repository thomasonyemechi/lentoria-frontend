<style>
    .navbar-nav .nav-item .nav-link {
        padding: .5rem 1.5rem;
        display: flex;
        align-items: center;
        color: #beb9cd;
        font-weight: 500;
        line-height: 1.8;
        transition: all .5s;
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #ecebf1;
    }

    .navbar-nav .nav-item .nav-link:hover .nav-icon {
        color: #ecebf1;
        opacity: 1;
    }

    .navbar-nav .nav-item .nav-link.active {
        color: #ecebf1;
    }

    .navbar-nav .nav-item .nav-link.active .nav-icon {
        color: #ecebf1;
        opacity: 1;
    }

    .navbar-nav .nav-item .nav-link[data-bs-toggle=collapse] {
        position: relative;
    }

    .navbar-nav .nav-item .nav-link[data-bs-toggle=collapse]:after {
        display: block;
        content: "\e92e";
        font-family: Feather, serif;
        margin-left: auto;
        transition: .5s ease;
        position: absolute;
        right: 1.5rem;
    }

    .navbar-nav .nav-item [aria-expanded=true].nav-link[data-bs-toggle=collapse]:after {
        transform: rotate(180deg);
        transition: all .3s ease-in;
    }

    .navbar-nav .nav-icon {
        opacity: .6;
        font-size: 1.1rem;
        transition: all .5s;
    }

    .navbar-nav .nav .nav-item .nav-link {
        padding: .25rem 3rem;
    }

    .navbar-nav .nav .nav-item .nav-link:hover {
        color: #fff;
    }

    .navbar-nav .nav .nav-item .nav .nav-item .nav-link {
        padding: .25rem 3.5rem;
    }

    .navbar-nav .nav .nav-item .nav .nav-item .nav-link:hover {
        color: #fff;
    }

    .navbar-nav .nav .nav-item .nav .nav-item .nav .nav-item .nav-link {
        padding: .25rem 4.2rem;
    }

    .navbar-nav .nav .nav-item .nav .nav-item .nav .nav-item .nav-link:hover {
        color: #fff;
    }

    .cardd {
        flex-basis: 100%;

    }
</style>
<div class="col-lg-4 col-md-5 col-12">

    <!-- User profile -->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
        <!-- Menu -->
        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
        <!-- Button -->
        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="fe fe-menu"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav">
            <div class="navbar-nav flex-column">
                <ul class="list-unstyled ms-n2 mb-4" id="sideNavbar">
                    <!-- Nav item -->
                    <li @class(['nav-item','active'=>request()->routeIs('affiliate.dashboard')])>
                        <a class="nav-link"
                           href="{{ route('affiliate.dashboard') }}"><i
                                class="fe fe-home nav-icon"></i> Dashboard</a>
                    </li>
                    @php
                        $status1 = [route('affiliate.how')=>true,route('affiliate.marketing')=>true][request()->getUri ()] ?? false;
                    @endphp
                    <li class="nav-item" id="sideNavbar">
                        <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                           data-bs-target="#navDashboard" aria-expanded="{{ ($status1 == 1)?'true':'false'  }}"
                           aria-controls="navDashboard">
                            <i class="nav-icon fe fe-book me-2"></i> Tutorials
                        </a>
                        <div id="navDashboard" class="collapse {{ ($status1==1)?'show':'' }} ms-4"
                             data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li @class(['nav-item','active'=>request()->routeIs('affiliate.how')])>
                                    <a class="nav-link " href="{{ route('affiliate.how') }}">
                                        How to get started
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li @class(['nav-item','active'=>request()->routeIs('affiliate.marketing')])>
                                    <a class="nav-link " href="{{ route('affiliate.marketing') }}">
                                        Digital Marketing

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li @class(['nav-item','active'=>request()->routeIs('affiliate.linkshared')])>
                        <a class="nav-link" href="{{ route('affiliate.linkshared') }}"><i
                                class="fe fe-link nav-icon"></i>Links
                            Analysis</a>
                    </li>

                    @php
                        $status2 = [route('affiliate.active-users')=>true,route('affiliate.inactive-users')=>true,route('affiliate.membership')=>true,route('affiliate.leadership')=>true][request()->getUri()] ?? false;
                    @endphp
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                           data-bs-target="#navReferrals" aria-expanded="{{($status2==1)?'true':'false'}}"
                           aria-controls="navReferrals">
                            <i class="nav-icon fe fe-users me-2"></i>Manage Referrals
                        </a>
                        <div id="navReferrals" class="collapse {{($status2==1)?'show':''}} ms-4"
                             data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li @class(['nav-item','active'=>request()->routeIs('affiliate.active-users')])>
                                    <a class="nav-link  " href="{{ route('affiliate.active-users') }}">
                                        Active Referrals
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li @class(['nav-item','active'=>request()->routeIs('affiliate.inactive-users')])>
                                    <a class="nav-link " href="{{ route('affiliate.inactive-users') }}">
                                        Inactive Referrals
                                    </a>
                                </li>
                                <li @class(['nav-item','active'=>request()->routeIs('affiliate.membership')])>
                                    <a class="nav-link " href="{{ route('affiliate.membership') }}">
                                        Membership Package
                                    </a>
                                </li>
                                <li @class(['nav-item','active'=>request()->routeIs('affiliate.leadership')])>
                                    <a class="nav-link " href="{{ route('affiliate.leadership') }}">
                                        Leadership
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li @class(['nav-item','active'=>request()->routeIs('affiliate.compensation')])>
                        <a class="nav-link" href="{{ route('affiliate.compensation') }}"><i
                                class="fe fe-shopping-bag nav-icon"></i>Compensation plan</a>
                    </li>

                    <li @class(['nav-item','active'=>request()->routeIs('affiliate.statistics')])>
                        <a class="nav-link" href="{{ route('affiliate.statistics') }}"><i
                                class="fe fe-bar-chart nav-icon"></i>Marketing
                            Statistics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#affiliate_resource.php"><i class="fe fe-star nav-icon"></i>Affiliate
                            Resource Centre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#affiliate_revenue.php"><i class="fe fe-lock nav-icon"></i>Revenue
                            Sharing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#affiliate_shareholder"><i
                                class="fe fe-refresh-cw nav-icon"></i>Livepetal Shareholder</a>
                    </li>
                    <li @class(['nav-item','active'=>request()->routeIs('affiliate.terms')])>
                        <a class="nav-link" target="_blank" href="{{ route('affiliate.terms') }}"><i
                                class="fe fe-settings nav-icon"></i>Terms & Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<script>
    $(function () {
        $("#refferral_btn").click(async function (e) {
            e.preventDefault();
            const shareData = {
                title: 'MDN',
                text: 'Learn web development on MDN!',
                url: 'https://developer.mozilla.org'
            }
            try {
                await navigator.share(shareData);
                console.log('MDN shared successfully');
            } catch (err) {
                console.log(err);
            }

        })
    })
</script>
