@extends('layouts.instructor')
@section('page_title')
	Course | {{ $slug }}
@endsection

@section('page_content')
    <div class="pt-5 pb-5">
        <div class="container">

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('instructor.side')
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
                            <table class="table mb-0 text-nowrap">
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
                                    <tr>
                                        <td class="border-top-0">
                                            <div class="d-lg-flex">
                                                <div>
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/course/course-wordpress.jpg') }}"
                                                            alt="" class="rounded img-4by3-lg" /></a>
                                                </div>
                                                <div class="ms-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 h5">
                                                        <a href="#" class="text-inherit">
                                                            Create a Website with WordPress
                                                        </a>
                                                    </h4>
                                                    <ul class="list-inline fs-6 mb-0">
                                                        <li class="list-inline-item">
                                                            <i class="far fa-clock me-1"></i>1h 30m
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2"
                                                                    height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2"
                                                                    height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2"
                                                                    height="12" rx="1" fill="#DBD8E9">
                                                                </rect>
                                                            </svg>Beginner
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0">11,200</td>
                                        <td class="border-top-0">
                                            <span class="text-warning">4.5<i class="mdi mdi-star"></i></span>(3,250)
                                        </td>
                                        <td class="border-top-0">
                                            <span class="badge bg-success">Live</span>
                                        </td>
                                        <td class="text-muted border-top-0">
                                            <span class="dropdown dropstart">
                                                <a class="text-muted text-decoration-none" href="#" role="button"
                                                    id="courseDropdown" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                    aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown">
                                                    <span class="dropdown-header">Setting </span>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fe fe-trash dropdown-item-icon"></i>Remove</a>
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

    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    @include('instructor.side')
                </div>

                <div class="col-lg-9 col-md-8 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="mb-0">Course Landing Page</h3>
                        </div>
                        <div class="card-body">

                            <form>
                                <div class="mb-3">
                                    <label for="courseTitle" class="form-label"><b>Course Title</b></label>
                                    <input id="courseTitle" class="form-control" type="text"
                                        placeholder="Course Title" maxlength="60" />
                                    <small>Write a 60 character course title.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="courseSubtitle" class="form-label"><b>Course Subtitle</b></label>
                                    <input id="courseSubtitle" type="text" name="courseSubtitle" class="form-control"
                                        type="text" placeholder="Course Subtitle" />
                                </div>

<<<<<<< HEAD
			<div class="row mt-0 mt-md-4">
				<div class="col-lg-3 col-md-4 col-12">
					@include('instructor.side')
				</div>

				<div class="col-lg-9 col-md-8 col-12">
					<div class="card mb-4">
						<div class="card-header">
							<h3 class="mb-0">Course Landing Page</h3>
						</div>
						<div class="card-body">

							<form>
								<div class="mb-3">
									<label for="courseTitle" class="form-label"><b>Course Title</b></label>
									<input id="courseTitle" class="form-control" type="text" placeholder="Course Title" maxlength="60" />
									<small>Write a 60 character course title.</small>
								</div>
								<div class="mb-3">
									<label for="courseSubtitle" class="form-label"><b>Course Subtitle</b></label>
									<input id="courseSubtitle" type="text" name="courseSubtitle" class="form-control" type="text"
										placeholder="Course Subtitle" />
								</div>

								<div class="mb-3">
									<label class="form-label"><b>Course Description</b></label>
									<textarea class="form-control">
=======
                                <div class="mb-3">
                                    <label class="form-label"><b>Course Description</b></label>
                                    <textarea id="editor" class="form-control">
>>>>>>> d41cb760c2a29ad61debfd18c3f23f18fd0ac6c0

									</textarea>
                                </div>

                                <div class="row">
                                    <label class="form-label"><b>Basic Info</b></label>
                                    <div class="mb-3 col-4">
                                        <select class="selectpicker" data-width="100%">
                                            <option value="">English</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-4">
                                        <select class="selectpicker" data-width="100%">
                                            <option value="">Select level</option>
                                            <option value="intermediate">Intermediate</option>
                                            <option value="Beignners">Beignners</option>
                                            <option value="Advance">Advance</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-4">
                                        <select class="selectpicker" data-width="100%">
                                            <option value="">Select category</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-end">
                                    <div class="mb-3 col-4">
                                        <select class="selectpicker" data-width="100%">
                                            <option value="">Select SubCategory</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="purpose" class="form-label"><b>What is primarily taught in your
                                            course?</b></label>
                                    <input id="purpose" class="form-control" type="text"
                                        placeholder="e.g. Javascript PHP" />
                                </div>

                                <div class="custom-file-container" data-upload-id="courseCoverImg" id="courseCoverImg">
                                    <label class="form-label"><b>Course image</b>
                                        <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                            title="Clear Image"></a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file"
                                            class="custom-file-container__custom-file__custom-file-input"
                                            accept=".jpg,.png,.gif,.jpeg" />
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <small class="mt-3 d-block">Upload your course image here. It must meet
                                        our course image quality standards to be accepted.Important guidelines: 750x422
                                        pixels; .jpg, .jpeg, .gif, or
                                        .png. no text on the image.</small>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>

<<<<<<< HEAD
								<div class="custom-file-container">
									<label class="form-label"><b>Promotional Video</b><a href="javascript:void(0)"
											class="custom-file-container__image-clear" title="Clear Image"></a></label>
									<label class="custom-file-container__custom-file">
										<input type="file" class="custom-file-container__custom-file__custom-file-input" />
										<span class="custom-file-container__custom-file__custom-file-control"></span>
									</label>
								</div>
								<div class="d-flex justify-content-end mt-3">
									<button class="btn btn-success btn-block review-btn" id="submit">Submit For Review</button>
							</form>
						</div>
					</div>
				</div>



			</div>



		</div>




	</div>

	<script>
	 $(function() {
	  function getInfo() {
        $.ajax({
            method: 'GET',
            url: api_url+`admin/`
        })
	  }
	 })
	</script>
=======
                                <div class="custom-file-container">
                                    <label class="form-label"><b>Promotional Video</b><a href="javascript:void(0)"
                                            class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file"
                                            class="custom-file-container__custom-file__custom-file-input" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-success btn-block review-btn">Submit For Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        $(function() {





            $('.con_pay').on('click', function() {
                $('#checkout').modal('show');
            })

            $('.btn-close').on('click', function() {
                $('#checkout').modal('hide');
            })
        })
    </script>
>>>>>>> d41cb760c2a29ad61debfd18c3f23f18fd0ac6c0
@endsection
