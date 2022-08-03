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
				</div>

				<div class="col-lg-9 col-md-8 col-12">
					<div class="card mb-4">
						<div class="card-header">
							<h3 class="mb-0">Course Messages</h3>
						</div>
						<div class="card-body">
							<div class="mb-2">
								Write messages to your students (optional) that will be sent automatically when they join or complete your course
								to encourage students to engage with course content. If you do not wish to send a welcome or congratulations
								message, leave the text box blank.
							</div>
							<form>
								<div class="mb-3">
									<label class="form-label"><b>Welcome Message</b></label>
									<textarea class="form-control">

									</textarea>
								</div>
								<div class="mb-3">
									<label class="form-label"><b>Congratulations Message</b></label>
									<textarea class="form-control">

										</textarea>
								</div>
								<div class="d-flex justify-content-end mt-3">
									<button class="btn btn-success btn-block review-btn">Add Message</button>
							</form>
						</div>
					</div>
				</div>



			</div>



		</div>




	</div>


	<script>
	 $(function() {

	  var quill2 = new Quill("#editor2", {
	   theme: 'snow'
	  });

	 })
	</script>
@endsection
