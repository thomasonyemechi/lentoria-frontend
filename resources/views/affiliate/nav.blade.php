<style>
    .navbar-nav .nav-item .nav-link {
        padding: .5rem 1.5rem;
        display: flex;
        align-items: center;
        /* gap: 1.5em; */
        color: #beb9cd;
        font-weight: 500;
        line-height: 1.8;
        transition: all .5s
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #ecebf1
    }

    .navbar-nav .nav-item .nav-link:hover .nav-icon {
        color: #ecebf1;
        opacity: 1
    }

    .navbar-nav .nav-item .nav-link.active {
        color: #ecebf1
    }

    .navbar-nav .nav-item .nav-link.active .nav-icon {
        color: #ecebf1;
        opacity: 1
    }

    .navbar-nav .nav-item .nav-link[data-bs-toggle=collapse] {
        position: relative
    }

    .navbar-nav .nav-item .nav-link[data-bs-toggle=collapse]:after {
        display: block;
        content: "\e92e";
        font-family: Feather;
        margin-left: auto;
        transition: .5s ease;
        position: absolute;
        right: 1.5rem
    }

    .navbar-nav .nav-item [aria-expanded=true].nav-link[data-bs-toggle=collapse]:after {
        transform: rotate(180deg);
        transition: all .3s ease-in
    }

    .navbar-nav .nav-icon {
        opacity: .6;
        font-size: 1.1rem;
        transition: all .5s
    }

    .navbar-nav .nav-divider {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(65, 60, 94, .5)
    }

    .navbar-nav .nav .nav-item .nav-link {
        padding: .25rem 3rem
    }

    .navbar-nav .nav .nav-item .nav-link:hover {
        color: #fff
    }

    .navbar-nav .nav .nav-item .nav .nav-item .nav-link {
        padding: .25rem 3.5rem
    }

    .navbar-nav .nav .nav-item .nav .nav-item .nav-link:hover {
        color: #fff
    }

    .navbar-nav .nav .nav-item .nav .nav-item .nav .nav-item .nav-link {
        padding: .25rem 4.2rem
    }

    .navbar-nav .nav .nav-item .nav .nav-item .nav .nav-item .nav-link:hover {
        color: #fff
    }

    .cardd {
        width: 100%;
       
    }

    .vertical {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
    .carddd{
        height: 80%;
        position: relative;
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
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('affiliate.dashboard') }}"><i
                                class="fe fe-home nav-icon"></i> Dashboard</a>
                    </li>
                    <li class="nav-item" id="sideNavbar">
                        <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                            <i class="nav-icon fe fe-book me-2"></i> Tutorials
                        </a>
                        <div id="navDashboard" class="collapse ms-4" data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('affiliate.how') }}">
                                        How to get started
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('affiliate.marketing') }}">
                                        Digital Marketing

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('affiliate.statistics') }}"><i
                                class="fe fe-star nav-icon"></i>Marketing
                            Statistics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navReferrals" aria-expanded="false" aria-controls="navReferrals">
                            <i class="nav-icon fe fe-book me-2"></i>Manage Referrals
                        </a>
                        <div id="navReferrals" class="collapse ms-4" data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link  " href="{{ route('affiliate.active-users') }}">
                                        Active Referrals
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('affiliate.inactive-users') }}">
                                        Inactive Referrals
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('affiliate.membership') }}">
                                        Membership Package
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ route('affiliate.leadership') }}">
                                        Leadership
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('affiliate.compensation') }}"><i
                                class="fe fe-shopping-bag nav-icon"></i>Compensation plan</a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('affiliate.linkshared') }}"><i
                                class="fe fe-book nav-icon"></i>Links
                            Analysis</a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="affiliate_resource.php"><i class="fe fe-star nav-icon"></i>Affiliate
                            Resource Centre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="affiliate_revenue.php"><i class="fe fe-lock nav-icon"></i>Revenue
                            Sharing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="affiliate_shareholder"><i
                                class="fe fe-refresh-cw nav-icon"></i>Livepetal Shareholder</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('affiliate.terms') }}"><i
                                class="fe fe-settings nav-icon"></i>Terms & Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
