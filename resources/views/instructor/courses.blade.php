@extends('layouts.instructor')
@section('page_title')
    Instructors Dashboard
@endsection

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">
            {!! instructorInfo() !!}



            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('layouts.sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="mb-0">Courses</h3>
                            <span>Manage your courses and its update like live, draft and
                                insight.</span>
                        </div>
                        <div class="card-body">
                            <form class="row">
                                <div class="col-lg-9 col-md-7 col-12 mb-lg-0 mb-2">
                                    <input type="search" class="form-control" placeholder="Search Your Courses" />
                                </div>
                                <div class="col-lg-3 col-md-5 col-12">
                                    <select class="selectpicker" data-width="100%">
                                        <option value="">Date Created</option>
                                        <option value="Newest">Newest</option>
                                        <option value="High Rated">High Rated</option>
                                        <option value="Law Rated">Law Rated</option>
                                        <option value="High Earned">High Earned</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive border-0 overflow-y-hidden">
                            <table class="table mb-0 text-nowrap" id="course_table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="border-0">Courses</th>
                                        <th scope="col" class="border-0">Students</th>
                                        <th scope="col" class="border-0">Rating</th>
                                        <th scope="col" class="border-0">Status</th>
                                        <th scope="col" class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            fetchCourses();

            function fetchCourses() {
                $.ajax({
                    method: 'get',
                    url: api_url + 'admin/fetch_my_course',
                }).done(function(res) {
                    body = $('#course_table tbody')
                    body.html('')
                    console.log(res.data.data)
                    res.data.data.map(cat => {
                        body.append(`
                        <tr>
										<td class="border-top-0">
											<div class="d-lg-flex">
												<div>
													<a href="#">
														<img src="{{ asset('assets/images/course/course-wordpress.jpg') }}" alt=""
															class="rounded img-4by3-lg" /></a>
												</div>
												<div class="ms-lg-3 mt-2 mt-lg-0">
													<h4 class="mb-1 h5">
														<a href="/instructor/course/${cat.slug}" class="text-inherit">
															${cat.title}
														</a>
													</h4>
													<ul class="list-inline fs-6 mb-0">

														<li class="list-inline-item">
															<svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																${levelBar(cat.level)}
															</svg>${checkLevel(cat.level)}
														</li>
													</ul>
												</div>
											</div>
										</td>
										<td class="border-top-0">0</td>
										<td class="border-top-0">
											<span class="text-warning">0.0<i class="mdi mdi-star"></i></span>(0)
										</td>
										<td class="border-top-0">
											<span class="badge bg-info">Pending</span>
										</td>
										<td class="text-muted border-top-0">
											<span class="dropdown dropstart">
												<a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown"
													data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown">
													<span class="dropdown-header">Setting </span>
													<a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
												</span>
											</span>
										</td>
									</tr>
                        `)
                    })

                }).fail(function(res) {
                    salat('An error occured while fetching your data', 1);
                })
            }
        });
    </script>
@endsection
