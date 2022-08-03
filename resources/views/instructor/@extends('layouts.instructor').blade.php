@extends('layouts.instructor')
@section('page_title')
	Course | {{ $slug }}
@endsection

@section('page_content')
	<div class="pt-5 pb-5">
		<div class="container">
			@include('instructor.course_name')
			<div class="row mt-0 mt-md-4">






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
										<input id="purpose" class="form-control" type="text" placeholder="e.g. Javascript PHP" />
									</div>

									<div class="custom-file-container" data-upload-id="courseCoverImg" id="courseCoverImg">
										<label class="form-label"><b>Course image</b>
											<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
										<label class="custom-file-container__custom-file">
											<input type="file" class="custom-file-container__custom-file__custom-file-input"
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
    </div>

		<script>
		 $(function() {
         });
		</script>
	@endsection
