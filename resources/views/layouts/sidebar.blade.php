<nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
	<a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="javascript:void(0)">Menu</a>
	<button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
		data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="fe fe-menu"></span>
	</button>
	<!-- Navbar Collapse -->
	<div class="collapse navbar-collapse" id="sidenav">
		<div class="navbar-nav flex-column">
			<span class="navbar-header">Dashboard</span>
			<ul class="list-unstyled ms-n2 mb-4">
				<li class="nav-item">
					<a class="nav-link" href="/instructor/dashboard"><i class="fe fe-home nav-icon"></i>My Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('instructor.courses') }}"><i class="fe fe-book nav-icon"></i>My Courses</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fe fe-pie-chart nav-icon"></i>Earnings</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fe fe-user nav-icon"></i>Students</a>
				</li>
			</ul>
			<span class="navbar-header">Account Settings</span>
			<ul class="list-unstyled ms-n2 mb-0">
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0)"><i class="fe fe-settings nav-icon"></i>Edit Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0)"><i class="fe fe-refresh-cw nav-icon"></i>Social Profiles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('logout') }}"><i class="fe fe-power nav-icon"></i>Sign Out</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
