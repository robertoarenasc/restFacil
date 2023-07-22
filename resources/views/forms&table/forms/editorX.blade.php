@extends('welcome')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">X-Editable</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">X-Editable</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">X -Editable</h4>
						  <h6 class="box-subtitle">Inline editor</h6>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="d-lg-flex d-block align-items-center">
								<div class="my-3 min-w-lg-350">Simple text field</div>
								<div class="my-3"><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></div>
							</div>
							
							<div class="d-lg-flex d-block align-items-center mt-lg-0 mt-30">
								<div class="my-3 min-w-lg-350">Empty text field, required</div>
								<div class="my-3"><a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></div>
							</div>
							
							<div class="d-lg-flex d-block align-items-center mt-lg-0 mt-30">
								<div class="my-3 min-w-lg-350">Select, local array, custom display</div>
								<div class="my-3"><a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></div>
							</div>
							
							<div class="d-lg-flex d-block align-items-center mt-lg-0 mt-30">
								<div class="my-3 min-w-lg-350">Select, error while loading</div>
								<div class="my-3"><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></div>
							</div>
							
							<div class="d-lg-flex d-block align-items-center mt-lg-0 mt-30">
								<div class="my-3 min-w-lg-350">Combodate</div>
								<div class="my-3"><a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a></div>
							</div>
							
							<div class="d-lg-flex d-block align-items-center mt-lg-0 mt-30">
								<div class="my-3 min-w-lg-350">Textarea, buttons below</div>
								<div class="my-3"><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></div>
							</div>
						</div>
						<!-- /.box-body -->			
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col --> 
			</div>
			<!-- /.row -->

				<!-- /.col --> 

		</section>
		<!-- /.content -->
	  </div>
  </div>
@endsection

@push('js')
<script src="{{asset('assets/vendor_components/moment/src/moment2.js')}}"></script>
<script src="{{asset('assets/vendor_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>
<script src="{{asset('js/pages/form-x-editable.js')}}"></script>
@endpush