@extends('layouts.instructor')
@section('page_title')
	Course |
@endsection

@section('page_content')
	<div class="pt-5 pb-5">
		<div class="container">





			<div class="row mt-0 mt-md-4">
				<div class="col-lg-3 col-md-4 col-12">
					@include('instructor.side')
					<div class="mt-3">
						<button class="btn btn-success btn-block">Submit For Review</button>

					</div>
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
									<textarea id="editor" class="form-control">

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
									<label for="purpose" class="form-label"><b>What is primarily taught in your course?</b></label>
									<input id="purpose" class="form-control" type="text" placeholder="e.g. Javascript PHP" />
								</div>

								<div class="custom-file-container" data-upload-id="courseCoverImg" id="courseCoverImg">
									<label class="form-label"><b>Course image</b>
										<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
									<label class="custom-file-container__custom-file">
										<input type="file" class="custom-file-container__custom-file__custom-file-input" />
										<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
										<span class="custom-file-container__custom-file__custom-file-control"></span>
									</label>
									<small class="mt-3 d-block">Upload your course image here. It must meet
										our course image quality standards to be accepted.Important guidelines: 750x440 pixels; .jpg, .jpeg, .gif, or
										.png. no text on the image.</small>
									<div class="custom-file-container__image-preview"></div>
								</div>

								<div class="custom-file-container" data-upload-id="promotionalVideo">
									<label class="form-label"><b>Promotional Video</b><a href="javascript:void(0)"
											class="custom-file-container__image-clear" title="Clear Image"></a></label>
									<label class="custom-file-container__custom-file">
										<input type="file" class="custom-file-container__custom-file__custom-file-input" />
										<span class="custom-file-container__custom-file__custom-file-control"></span>
									</label>
									<small class="mt-3 d-block"></small>
									<div class="custom-file-container__image-preview"></div>
								</div>
						</div>
					</div>
					</form>


				</div>



			</div>




		</div>
	</div>
	</div>
	</div>





	<div class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title mb-0" id="newCatgoryLabel">
						Create New Category
					</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="mb-3 mb-2">
							<label class="form-label" for="title">Title<span class="text-danger">*</span></label>

							<input type="text" class="form-control" placeholder="Write a Category" id="title" required>
							<small>Field must contain a unique value</small>




						</div>
						<div class="mb-3 mb-2">
							<label class="form-label">Slug</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="slug">https://example.com</span>
								</div>
								<input type="text" class="form-control" id="basic-url" aria-describedby="slug"
									placeholder="designcourses" required>


							</div>
							<small>Field must contain a unique value</small>
						</div>
						<div class="mb-3 mb-2">
							<label class="form-label">Parent</label>
							<select class="selectpicker" data-width="100%">
								<option value="">Select</option>
								<option value="Course">Course</option>
								<option value="Tutorial">Tutorial</option>
								<option value="Workshop">Workshop</option>
								<option value="Company">Company</option>
							</select>
						</div>
						<div class="mb-3 mb-3">
							<label class="form-label">Description</label>
							<div id="editor">
								<br>
								<h4>One Ring to Rule Them All</h4>
								<br>
								<p>
									Three Rings for the
									<i> Elven-kingsunder</i> the sky,
									<br> Seven for the
									<u>Dwarf-lords</u> in halls of stone, Nine for Mortal Men,
									<br> doomed to die, One for the Dark Lord on his dark throne.
									<br> In the Land of Mordor where the Shadows lie.
									<br>
									<br>
								</p>
							</div>
						</div>
						<div class="mb-2">
							<label class="form-label">Enabled</label>
							<div class="form-check form-switch">
								<input type="checkbox" class="form-check-input" id="customSwitch1" checked>
								<label class="form-check-label" for="customSwitch1"></label>
							</div>
						</div>
						<div>
							<button type="submit" class="btn btn-primary">Add New Category</button>
							<button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">
								Close
							</button>
						</div>
					</form>
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
@endsection
