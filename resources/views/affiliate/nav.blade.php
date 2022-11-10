<div class="col-lg-3 col-md-4 col-12">
    <!-- User profile -->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
        <!-- Menu -->
        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
        <!-- Button -->
        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#sidenav"
                aria-controls="sidenav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="fe fe-menu"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav">
            <div class="navbar-nav flex-column">
                <span class="navbar-header">Dashboard</span>
                <ul class="list-unstyled ms-n2 mb-4">
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <a class="nav-link"
                           href="{{route('affiliate.dashboard')}}"><i class="fe fe-home nav-icon"></i>My
                            Dashboard</a>
                    </li>

                    <li class="nav-item" id="sideNavbar">
                        <a class="nav-link  "
                           href="#!"
                           data-bs-toggle="collapse"
                           data-bs-target="#navDashboard"
                           aria-expanded="false"
                           aria-controls="navDashboard">
                            <i class="nav-icon fe fe-book me-2"></i> Trainings & Tutorials
                        </a>
                        <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link  active " href="{{route('affiliate.how')}}">
                                    <i class="fe fe-star nav-icon"></i>How to get started
                                    </a>
                                </li>
                                
                                <li class="nav-item ">
                                    <a class="nav-link  active " href="{{route('affiliate.how')}}">
                                    <i class="fe fe-star nav-icon"></i>Affiliate Success Challenge
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{route('affiliate.marketing')}}">
                                    <i class="fe fe-star nav-icon"></i>Digital Marketing Training

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{route('affiliate.statistics')}}"><i class="fe fe-star nav-icon"></i>Marketing
                            Statistics</a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link  "
                           href="#!"
                           data-bs-toggle="collapse"
                           data-bs-target="#navDashboard"
                           aria-expanded="false"
                           aria-controls="navDashboard">
                            <i class="nav-icon fe fe-book me-2"></i>Referral List & Analysis
                        </a>
                        <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item active ">
                                    <a class="nav-link  active " href="{{route('affiliate.active-users')}}">
                                    <i class="fe fe-star nav-icon"></i>Active Referrals
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{route('affiliate.inactive-users')}}">
                                    <i class="fe fe-star nav-icon"></i>Inactive Referrals
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{route('affiliate.leadership-team')}}">
                                    <i class="fe fe-star nav-icon"></i>Leadership Team
                                    </a>
                                </li>
                                <!-- <li class="nav-item ">
                                    <a class="nav-link " href="{{route('affiliate.membership')}}">
                                    <i class="fe fe-star nav-icon"></i>Categorization by membership Package
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{route('affiliate.leadership')}}">
                                    <i class="fe fe-star nav-icon"></i>Categorization by Leadership
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('affiliate.compensation')}}">
                            <i class="fe fe-shopping-bag nav-icon"></i>Compensation plan</a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                     <a class="nav-link"
                           href="{{route('affiliate.linkshared')}}"><i class="fe fe-book nav-icon"></i>Campaign
                            Analysis</a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="affiliate_resource.php"><i
                                    class="fe fe-star nav-icon"></i>Affiliate Resource Centre</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="affiliate_revenue.php"><i
                                    class="fe fe-lock nav-icon"></i>Revenue Sharing</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="affiliate_shareholder"><i
                                    class="fe fe-refresh-cw nav-icon"></i>Livepetal Shareholder</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('affiliate.terms')}}"><i
                                    class="fe fe-settings nav-icon"></i>Terms & Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
