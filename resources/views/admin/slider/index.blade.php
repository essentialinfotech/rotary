@extends('layout.admin_layout.master')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin::Card-->
			@include('error.message')
			<div class="card card-custom gutter-b">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title">
						<h3 class="card-label">Main Banner List
						
					</div>
					<div class="card-toolbar">
					
						<a href="{{route('admin.slider.create')}}" class="btn btn-primary font-weight-bolder">
						<span >
			
						</span>Add Slider</a>
						<!--end::Button-->
					</div>
				</div>
				<div class="card-body">
					<!--begin: Datatable-->
					<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
						<thead>
							<tr>
								<th>Serial No:</th>
								<th>Slider Title</th>
								<th>Slider Description</th>
								<th>Image</th>
								<th>Status</th>
                             <th>Action</th>


							</tr>
						</thead>
						<tbody>
							@foreach($sliders as $slider)
							<tr>
								<td>{{$loop->index+1}}</td>
                                <td>{{$slider->title}}</td>
								<td>{{$slider->description}}</td>
								<td>

									<img src="{{asset('/images/backend_images/sliders/'.$slider->image)}}" style="width: 60px"></td>

								<td><input type="checkbox" {{$slider->status=='active'? 'checked':''}} id="sliderStatus" data-id="{{$slider->id}}" data-toggle="toggle" data-style="ios" data-on="Active" data-off="Inactive" data-offStyle="danger" data-onStyle="success">
								</td>
								<td>
									<a href="{{route('admin.slider.update',$slider->id)}}" class=" btn btn-success">
                                 Edit
									</a>

									
									<a href="javascript:void(0)" class="confirmDelete btn btn-danger" record="slider" recordid="{{ $slider->id }}">

									Delete
									</a>
								</td>


							</tr>
						@endforeach
						</tbody>
					</table>
					<!--end: Datatable-->
				</div>
			</div>
			<!--end::Card-->
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->
@endsection
