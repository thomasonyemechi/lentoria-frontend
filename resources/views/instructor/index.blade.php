@extends('layouts.instructor')
@section('page_title')
    Instructors Dashboard
@endsection

@section('page_content')
    
	<div class="pt-5 pb-5">
		<div class="container">
			<!-- User info -->
			<div class="row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-12">
					<!-- Bg -->
					<div class="pt-16 rounded-top-md" style="
								background: url(assets/images/background/profile-bg.jpg) no-repeat;
								background-size: cover;
							"></div>
					<div
						class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
						<div class="d-flex align-items-center">
							<div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
								<img src="assets/images/avatar/avatar-1.jpg" class="avatar-xl rounded-circle border border-4 border-white position-relative"
									alt="" />
								<a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip" data-placement="top" title=""
									data-original-title="Verified">
									<img src="assets/images/svg/checked-mark.svg" alt="" height="30" width="30" />
								</a>
							</div>
							<div class="lh-1">
								<h2 class="mb-0">Jenny Wilson</h2>
								<p class="mb-0 d-block">@Jennywilson</p>
							</div>
						</div>
						<div>
							<a href="add-course.html" class="btn btn-primary btn-sm d-none d-md-block">Create New Course</a>
						</div>
					</div>
				</div>
			</div>

	    <!-- Content -->

			<div class="row mt-0 mt-md-4">
				<div class="col-lg-3 col-md-4 col-12">
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
								<span class="navbar-header">Dashboard</span>
								<ul class="list-unstyled ms-n2 mb-4">
									<!-- Nav item -->
									<li class="nav-item active">
										<a class="nav-link" href="dashboard-instructor.html"><i class="fe fe-home nav-icon"></i>My
											Dashboard</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="instructor-courses.html"><i class="fe fe-book nav-icon"></i>My Courses</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="instructor-reviews.html"><i class="fe fe-star nav-icon"></i>Reviews</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="instructor-earning.html"><i
												class="fe fe-pie-chart nav-icon"></i>Earnings</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="instructor-order.html"><i
												class="fe fe-shopping-bag nav-icon"></i>Orders</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="instructor-students.html"><i class="fe fe-users nav-icon"></i>Students</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="instructor-payouts.html"><i
												class="fe fe-dollar-sign nav-icon"></i>Payouts</a>
									</li>
								</ul>
								<!-- Navbar header -->
								<span class="navbar-header">Account Settings</span>
								<ul class="list-unstyled ms-n2 mb-0">
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="profile-edit.html"><i class="fe fe-settings nav-icon"></i>Edit Profile</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="security.html"><i class="fe fe-user nav-icon"></i>Security</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="social-profile.html"><i class="fe fe-refresh-cw nav-icon"></i>Social
											Profiles</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="notifications.html"><i class="fe fe-bell nav-icon"></i>Notifications</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="profile-privacy.html"><i class="fe fe-lock nav-icon"></i>Profile
											Privacy</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="delete-profile.html"><i class="fe fe-trash nav-icon"></i>Delete
											Profile</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="index.html"><i class="fe fe-power nav-icon"></i>Sign Out</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<div class="row">
						<div class="col-lg-4 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<div class="p-4">
									<span class="fs-6 text-uppercase fw-semi-bold">Revenue</span>
									<h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
										$467.34
									</h2>
									<span class="d-flex justify-content-between align-items-center">
										<span>Earning this month</span>
										<span class="badge bg-success ms-2">$203.23</span>
									</span>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<div class="p-4">
									<span class="fs-6 text-uppercase fw-semi-bold">students Enrollments</span>
									<h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
										12,000
									</h2>
									<span class="d-flex justify-content-between align-items-center">
										<span>New this month</span>
										<span class="badge bg-info ms-2">120+</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<div class="p-4">
									<span class="fs-6 text-uppercase fw-semi-bold">Courses Rating</span>
									<h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
										4.80
									</h2>
									<span class="d-flex justify-content-between align-items-center">
										<span>Rating this month</span>
										<span class="badge bg-warning ms-2">10+</span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card -->
					<div class="card mb-4">
						<!-- Card header -->
						<div class="card-header">
							<h3 class="h4 mb-0">Earnings</h3>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<div id="earning" class="apex-charts"></div>
						</div>
					</div>
					<!-- Card -->
					<div class="card mb-4">
						<!-- Card header -->
						<div class="card-header">
							<h3 class="h4 mb-0">Order</h3>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<div id="orderColumn" class="apex-charts"></div>
						</div>
					</div>
					<div class="card mb-4">
						<!-- Card header -->
						<div class="card-header border-bottom-0">
							<h3 class="h4 mb-0">Best Selling Courses</h3>
						</div>
						<!-- Table -->
						<div class="table-responsive border-0">
							<table class="table mb-0">
								<!-- Table head -->
								<thead class="table-light">
									<tr>
										<th scope="col" class="border-0">COURSES</th>
										<th scope="col" class="border-0">SALES</th>
										<th scope="col" class="border-0">AMOUNT</th>
										<th scope="col" class="border-0"></th>
									</tr>
								</thead>
								<!-- Table body -->
								<tbody>
									<tr>
										<td class="align-middle border-top-0">
											<a href="#">
												<div class="d-lg-flex align-items-center">
													<img src="assets/images/course/course-laravel.jpg" alt="" class="rounded img-4by3-lg" />
													<h5 class="mb-0 ms-lg-3 mt-2 mt-lg-0 text-primary-hover">
														Building Scalable APIs with GraphQL
													</h5>
												</div>
											</a>
										</td>
										<td class="align-middle border-top-0">34</td>
										<td class="align-middle border-top-0">$3,145.23</td>
										<td class="text-muted align-middle border-top-0">
											<span class="dropdown dropstart">
												<a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown1"
													data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown1">
													<span class="dropdown-header">Setting </span>
													<a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
												</span>
											</span>
										</td>
									</tr>
									<tr>
										<td class="align-middle">
											<a href="#">
												<div class="d-lg-flex align-items-center">
													<img src="assets/images/course/course-sass.jpg" alt="" class="rounded img-4by3-lg" />
													<h5 class="mb-0 ms-lg-3 mt-2 mt-lg-0 text-primary-hover">
														HTML5 Web Front End Development
													</h5>
												</div>
											</a>
										</td>
										<td class="align-middle">30</td>
										<td class="align-middle">$2,611.82</td>
										<td class="text-muted align-middle">
											<span class="dropdown dropstart">
												<a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown2"
													data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown2">
													<span class="dropdown-header">Setting </span>
													<a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
												</span>
											</span>
										</td>
									</tr>
									<tr>
										<td class="align-middle">
											<a href="#">
												<div class="d-lg-flex align-items-center">
													<img src="assets/images/course/course-vue.jpg" alt="" class="rounded img-4by3-lg" />
													<h5 class="mb-0 ms-lg-3 mt-2 mt-lg-0 text-primary-hover">
														Learn JavaScript Courses from Scratch
													</h5>
												</div>
											</a>
										</td>
										<td class="align-middle">26</td>
										<td class="align-middle">$2,372.19</td>
										<td class="text-muted align-middle">
											<span class="dropdown dropstart">
												<a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown3"
													data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown3">
													<span class="dropdown-header">Setting </span>
													<a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
												</span>
											</span>
										</td>
									</tr>
									<tr>
										<td class="align-middle border-bottom-0">
											<a href="#">
												<div class="d-lg-flex align-items-center">
													<img src="assets/images/course/course-react.jpg" alt="" class="rounded img-4by3-lg" />
													<h5 class="mb-0 ms-lg-3 mt-2 mt-lg-0 text-primary-hover">
														Get Started: React Js Courses
													</h5>
												</div>
											</a>
										</td>
										<td class="align-middle border-bottom-0">20</td>
										<td class="align-middle border-bottom-0">$1,145.23</td>
										<td class="text-muted align-middle border-bottom-0">
											<span class="dropdown dropstart">
												<a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown4"
													data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown4">
													<span class="dropdown-header">Setting </span>
													<a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
												</span>
											</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection