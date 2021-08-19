@extends('layout.admin_layout.master')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<div class="row">
				<div class="col-lg-12">
					<!--begin::Card-->
					<div class="card card-custom example example-compact">
						<div class="card-header">
							<h3 class="card-title">SLider Details</h3>
							<a href="{{route('admin.slider.index')}}">
							<h3 class="card-title btn btn-success text-white">Back</h3>
							</a>

						</div>
						<!--begin::Form-->
						<form class="form" id="kt_form_1" method="post" action="{{route('admin.slider.insert')}}"enctype="multipart/form-data">
						@csrf
							<div class="card-body">

								<div class="alert alert-custom alert-light-danger d-none" role="alert" id="kt_form_1_msg">
									<div class="alert-icon">
										<i class="flaticon2-information"></i>
									</div>
									<div class="alert-text font-weight-bold">Oh snap! Change a few things up and try submitting again.</div>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span>
												<i class="ki ki-close"></i>
											</span>
										</button>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-3 col-sm-12">Banner Title *</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<input type="text" class="form-control" name="title" id="slider_title" placeholder="Enter your slider name"/>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label text-right col-lg-3 col-sm-12">Banner Description *</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
									<textarea class="form-control" name="description" rows="8" cols="80" id="slider_description" required></textarea>

									</div>
								</div>
								<style>
									.custom-file-input:lang(en)~.custom-file-label::after {
										content: "Upload Image";
									}
								</style>
								<div class="form-group row">
									<label class="col-form-label text-right col-lg-3 col-sm-12">Banner Image *</label>
									<div class="col-lg-9 col-md-9 col-sm-12">
										<div class="custom-file">
											<input type="file" name="image" class="custom-file-input"
												id="slider_image" required/>
											<label class="custom-file-label"
												for="customFile">Select an image to upload</label>
										</div>
										<span class="form-text text-muted">Recommended Image Size: 1366 x 400 (Ratio: 3.415)</span>
									</div>
									
								</div>

							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-9 ml-lg-auto">
										<button type="submit" class="btn btn-primary font-weight-bold mr-2" name="submitButton">Add Slider</button>

									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
				</div>

			</div>
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->
@endsection
