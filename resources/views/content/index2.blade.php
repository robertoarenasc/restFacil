@extends('welcome')
@section('content')
<div class="content-wrapper">
	<div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-6 col-12">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="box box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="text-start">
										<h5>Total Menu</h5>
										<h3 class="mb-0 fw-500">325</h3>
									</div>
									<div>
										<div id="progressbar1" class="mx-auto w-100 position-relative"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="box box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="text-start">
										<h5>Total Revenue</h5>
										<h3 class="mb-0 fw-500">$425k</h3>
									</div>
									<div>
										<div id="progressbar2" class="mx-auto w-100 position-relative"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="box box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="text-start">
										<h5>Total Orders</h5>
										<h3 class="mb-0 fw-500">415</h3>
									</div>
									<div>
										<div id="progressbar3" class="mx-auto w-100 position-relative"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="box box-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="text-start">
										<h5>Total Customers</h5>
										<h3 class="mb-0 fw-500">985</h3>
									</div>
									<div>
										<div id="progressbar4" class="mx-auto w-100 position-relative"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-flex justify-content-between">
								<div>
									<h4 class="box-title mb-0">Daily Revenue</h4>
									<p class="mb-0 text-mute">Lorem ipsum dolor</p>
								</div>
								<div class="text-end">
									<h3 class="box-title mb-0 fw-500">$ 154K</h3>
									<p class="mb-0"><span class="text-success">+ 1.5%</span> than last week</p>
								</div>
							</div>
							<div id="chart" class="mt-20"></div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Favourite Items</h4>
						</div>
						<div class="box-body">
							<div class="owl-carousel">
								<div class="item">
									<div class="pe-20">
										<img src="../images/food/biryanis.jpg" class="img-fluid rounded15 mb-15" alt="" />
										<h5>Biryanis Pulav</h5>
										<div class="mb-15 d-flex text-warning align-items-center">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<span class="text-fade ms-10">(150 Review)</span>
										</div>
										<a href="#" class="waves-effect waves-light btn btn-sm btn-info-light"><i class="fa fa-heart me-10"></i> 12k Like it</a>
									</div>
								</div>
								<div class="item">
									<div class="pe-20">
										<img src="../images/food/burgers.jpg" class="img-fluid rounded15 mb-15" alt="" />
										<h5>king Burgers</h5>
										<div class="mb-15 d-flex text-warning align-items-center">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<span class="text-fade ms-10">(150 Review)</span>
										</div>
										<a href="#" class="waves-effect waves-light btn btn-sm btn-info-light"><i class="fa fa-heart me-10"></i> 12k Like it</a>
									</div>
								</div>
								<div class="item">
									<div class="pe-20">
										<img src="../images/food/dals.jpg" class="img-fluid rounded15 mb-15" alt="" />
										<h5>Dal Palak Recipe</h5>
										<div class="mb-15 d-flex text-warning align-items-center">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<span class="text-fade ms-10">(150 Review)</span>
										</div>
										<a href="#" class="waves-effect waves-light btn btn-sm btn-info-light"><i class="fa fa-heart me-10"></i> 12k Like it</a>
									</div>
								</div>
								<div class="item">
									<div class="pe-20">
										<img src="../images/food/noodles.jpg" class="img-fluid rounded15 mb-15" alt="" />
										<h5>Pan Noodles</h5>
										<div class="mb-15 d-flex text-warning align-items-center">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<span class="text-fade ms-10">(150 Review)</span>
										</div>
										<a href="#" class="waves-effect waves-light btn btn-sm btn-info-light"><i class="fa fa-heart me-10"></i> 12k Like it</a>
									</div>
								</div>
								<div class="item">
									<div class="pe-20">
										<img src="../images/food/main.jpg" class="img-fluid rounded15 mb-15" alt="" />
										<h5>Vegetable Jalfrezi</h5>
										<div class="mb-15 d-flex text-warning align-items-center">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<span class="text-fade ms-10">(150 Review)</span>
										</div>
										<a href="#" class="waves-effect waves-light btn btn-sm btn-info-light"><i class="fa fa-heart me-10"></i> 12k Like it</a>
									</div>
								</div>
								<div class="item">
									<div class="pe-20">
										<img src="../images/food/subziyan.jpg" class="img-fluid rounded15 mb-15" alt="" />
										<h5>Aloo Tamatar Ki Sabzi</h5>
										<div class="mb-15 d-flex text-warning align-items-center">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<span class="text-fade ms-10">(150 Review)</span>
										</div>
										<a href="#" class="waves-effect waves-light btn btn-sm btn-info-light"><i class="fa fa-heart me-10"></i> 12k Like it</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Customer Flow</h4>
							<div id="yearly-comparison"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Order Overview</h4>
							<div id="order-overview"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
</div>
@endsection 

@push('js')
<script src="{{asset('assets/vendor_components/progressbar.js-master/dist/progressbar.js')}}"></script>
<script src="{{asset('assets/vendor_components/OwlCarousel2/dist/owl.carousel.js')}}"></script>
<script src="{{asset('js/pages/dashboard2.js')}}"></script>
@endpush