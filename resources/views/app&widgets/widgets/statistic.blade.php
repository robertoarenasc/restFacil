@extends('welcome')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Statistic widgets</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Widgets</li>
								<li class="breadcrumb-item active" aria-current="page">Statistic widgets</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
			  <div class="col-lg-4 col-12">
			  	<div class="box bg-img" style="background-image: url(../images/abstract-1.svg);background-position: right top; background-size: 30% auto;">
					<div class="box-body">
						<a href="#" class="box-title fw-600 text-muted hover-primary fs-18">Travel Schedule</a>
						<div class="fw-bold text-success mt-20 mb-10">11:30PM</div>
						<p class="text-mute fw-500 fs-16">
							There is no one who loves pain<br> itself, who seeks after...
						</p>
					</div>
				</div>
			  </div>
			  <div class="col-lg-4 col-12">
			  	<div class="box bg-img" style="background-image: url(../images/abstract-2.svg);background-position: right top; background-size: 30% auto;">
					<div class="box-body">
						<a href="#" class="box-title fw-600 text-muted hover-primary fs-18">Anuncio</a>
						<div class="fw-bold text-success mt-20 mb-10">16 Jan 2019</div>
						<p class="text-mute fw-500 fs-16">
							There is no one who loves pain<br> itself, who seeks after...
						</p>
					</div>
				</div>
			  </div>
			  <div class="col-lg-4 col-12">
			  	<div class="box bg-img" style="background-image: url(../images/abstract-3.svg);background-position: right top; background-size: 30% auto;">
					<div class="box-body">
						<a href="#" class="box-title fw-600 text-muted hover-primary fs-18">New Release</a>
						<div class="fw-bold text-success mt-20 mb-10">HTML</div>
						<p class="text-mute fw-500 fs-16">
							There is no one who loves pain<br> itself, who seeks after...
						</p>
					</div>
				</div>
			  </div>
			  
			  <div class="col-lg-4 col-12">
				<div class="box">
					<div class="box-body d-flex align-items-center pb-0">
						<div class="d-flex flex-column flex-grow-1">
							<a href="#" class="box-title text-muted fw-600 fs-18 mb-2 hover-primary">Top Agent</a>
							<span class="fw-500 text-fade">Most Awards Earned</span>
						</div>
						<img src="../images/avatar/avatar-1.png" alt="" class="align-self-end h-100">
					</div>
				</div>
			  </div>			  
			  <div class="col-lg-4 col-12">
				<div class="box">
					<div class="box-body d-flex align-items-center pb-0">
						<div class="d-flex flex-column flex-grow-1">
							<a href="#" class="box-title text-muted fw-600 fs-18 mb-2 hover-primary">New Agent</a>
							<span class="fw-500 text-fade">Rising Stars</span>
						</div>
						<img src="../images/avatar/avatar-2.png" alt="" class="align-self-end h-100">
					</div>
				</div>
			  </div>			  
			  <div class="col-lg-4 col-12">
				<div class="box">
					<div class="box-body d-flex align-items-center pb-0">
						<div class="d-flex flex-column flex-grow-1">
							<a href="#" class="box-title text-muted fw-600 fs-18 mb-2 hover-primary">Top Expert</a>
							<span class="fw-500 text-fade">Ask Everything You Wish </span>
						</div>
						<img src="../images/avatar/avatar-4.png" alt="" class="align-self-end h-100">
					</div>
				</div>
			  </div>			  
			  
			<div class="col-xl-4 col-12">
				<div class="box box-body">
				  <div class="fs-18 flexbox align-items-center">
					<span>Users</span>
					<i class="ion ion-ios-person-outline"></i>
				  </div>

				  <div class="progress progress-xxs mt-10 mb-10">
					<div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <small class="fw-300 mb-5">62,158</small>
				</div>
			</div>
			<div class="col-xl-4 col-12">
				<div class="box box-body">
				  <div class="fs-18 flexbox align-items-center">
					<span>Users</span>
					<span>68,951</span>
				  </div>

				  <div class="progress progress-xxs mt-10 mb-10">
					<div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <small class="fw-300 mb-5"><i class="fa fa-sort-down text-danger me-1"></i> %18 decrease from last month</small>
				</div>
			</div>
			<div class="col-xl-4 col-12">
				<div class="box box-body">
				  <div class="fs-18 flexbox align-items-center">
					<span>Users</span>
					<span>15,956</span>
				  </div>

				  <div class="progress progress-xxs mt-10 mb-10">
					<div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <div class="text-end"><small class="fw-300 mb-5"><i class="fa fa-sort-up text-success me-1"></i> %48 up</small></div>
				</div>
			</div>
		  </div>

		  <div class="row">
			<div class="col-12">
				<div class="box">
				  <div class="row g-0 py-2">

					<div class="col-12 col-lg-3">
					  <div class="box-body be-1 border-light">
						<div class="flexbox mb-1">
						  <span>
							  <span class="icon-User fs-40"><span class="path1"></span><span class="path2"></span></span><br>
							New Users
						  </span>
						  <span class="text-primary fs-40">845</span>
						</div>
						<div class="progress progress-xxs mt-10 mb-0">
						  <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					  </div>
					</div>


					<div class="col-12 col-lg-3 hidden-down">
					  <div class="box-body be-1 border-light">
						<div class="flexbox mb-1">
						  <span>
							  <span class="icon-Selected-file fs-40"><span class="path1"></span><span class="path2"></span></span><br>
							Today Invoices
						  </span>
						  <span class="text-info fs-40">952</span>
						</div>
						<div class="progress progress-xxs mt-10 mb-0">
						  <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					  </div>
					</div>


					<div class="col-12 col-lg-3 d-none d-lg-block">
					  <div class="box-body be-1 border-light">
						<div class="flexbox mb-1">
						  <span>
							  <span class="icon-Info-circle fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span><br>
							Open Issues
						  </span>
						  <span class="text-warning fs-40">845</span>
						</div>
						<div class="progress progress-xxs mt-10 mb-0">
						  <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					  </div>
					</div>


					<div class="col-12 col-lg-3 d-none d-lg-block">
					  <div class="box-body">
						<div class="flexbox mb-1">
						  <span>
							  <span class="icon-Group-folders fs-40"><span class="path1"></span><span class="path2"></span></span><br>
							New Projects
						  </span>
						  <span class="text-danger fs-40">158</span>
						</div>
						<div class="progress progress-xxs mt-10 mb-0">
						  <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					  </div>
					</div>


				  </div>
				</div>
			</div>
			<!-- /.col -->

		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-xl-4 col-12">
				<div class="box box-body">
				  <h6>
					<span class="text-uppercase">Revenue</span>
					<span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span>
				  </h6>
				  <br>
				  <p class="fs-26">$845,1258</p>

				  <div class="progress progress-xxs mt-0 mb-10">
					<div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <div class="fs-12"><i class="ion-arrow-graph-down-right text-success me-1"></i> %18 decrease from last month</div>
				</div>
			</div>
			<!-- /.col -->

			<div class="col-xl-4 col-12">
				<div class="box box-body">
				  <h6>
					<span class="text-uppercase">ORDERS</span>
					<span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span>
				  </h6>
				  <br>
				  <p class="fs-26">159,1258</p>

				  <div class="progress progress-xxs mt-0 mb-10">
					<div class="progress-bar bg-purple" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <div class="fs-12"><i class="ion-arrow-graph-down-right text-danger me-1"></i> %95 down</div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
				<div class="box box-body">
				  <h6>
					<span class="text-uppercase">VISITORS</span>
					<span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">View</a></span>
				  </h6>
				  <br>
				  <p class="fs-26">84,9658</p>

				  <div class="progress progress-xxs mt-0 mb-10">
					<div class="progress-bar bg-danger" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <div class="flexbox fs-12">
					<span><i class="ion-arrow-graph-down-right text-success me-1"></i> %54 up</span>
					<span>+90258</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			  
			<div class="col-xl-4">
				<a href="#" class="box bg-danger bg-hover-danger">
					<div class="box-body">
						<span class="text-white icon-Cart2 fs-40"><span class="path1"></span><span class="path2"></span></span>
						<div class="text-white fw-600 fs-18 mb-2 mt-5">Shopping Cart</div>
						<div class="text-white fs-16">Duis, Faucibus, Lorem, Vitae</div>
					</div>
				</a>
		    </div>
			  
			<div class="col-xl-4">
				<a href="#" class="box bg-info bg-hover-info">
					<div class="box-body">
						<span class="text-white icon-Layout-arrange fs-40"><span class="path1"></span><span class="path2"></span></span>
						<div class="text-white fw-600 fs-18 mb-2 mt-5">Apartamentos</div>
						<div class="text-white fs-16">Duis, Faucibus, Lorem, Vitae</div>
					</div>
				</a>
		    </div>
			  
			<div class="col-xl-4">
				<a href="#" class="box bg-success bg-hover-success">
					<div class="box-body">
						<span class="text-white icon-Equalizer fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
						<div class="text-white fw-600 fs-18 mb-2 mt-5">Sales Stats</div>
						<div class="text-white fs-16">70% Up for 2019</div>
					</div>
				</a>
		    </div>
			  
			<div class="col-xl-4">
				<a href="#" class="box">
					<div class="box-body">
						<span class="text-primary icon-Cart2 fs-40"><span class="path1"></span><span class="path2"></span></span>
						<div class="fw-600 fs-18 mb-2 mt-5">Shopping Cart</div>
						<div class="text-fade fs-16">Duis, Faucibus, Lorem, Vitae</div>
					</div>
				</a>
		    </div>
			  
			<div class="col-xl-4">
				<a href="#" class="box bg-info-light bg-hover-info">
					<div class="box-body">
						<span class="text-info icon-Layout-arrange fs-40"><span class="path1"></span><span class="path2"></span></span>
						<div class="text-info fw-600 fs-18 mb-2 mt-5">Apartamentos</div>
						<div class="text-mute fs-16">Duis, Faucibus, Lorem, Vitae</div>
					</div>
				</a>
		    </div>
			  
			<div class="col-xl-4">
				<a href="#" class="box bg-warning-light">
					<div class="box-body">
						<span class="text-warning icon-Equalizer fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
						<div class="text-warning fw-600 fs-18 mb-2 mt-5">Sales Stats</div>
						<div class="text-mute fs-16">70% Up for 2019</div>
					</div>
				</a>
		    </div>

		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-md-6 col-lg-2">
			  <div class="box p-25">
				<div class="text-center">
				  <h1 class="countnm fs-50 m-0">158</h1>
				  <div class="text-uppercase">counters</div>
				</div>
			  </div>
			</div>
			<div class="col-md-6 col-lg-2">
			  <div class="box p-25 bg-info">
				<div class="text-center">
				  <h1 class="countnm fs-50 m-0">-158</h1>
				  <div class="text-uppercase">counters</div>
				</div>
			  </div>
			</div>
			<div class="col-md-6 col-lg-2">
			  <div class="box p-25">
				<div class="text-center">
				  <div class="text-uppercase">counters</div>
				  <h1 class="countnm fs-50 m-0">158</h1>
				</div>
			  </div>
			</div>
			<div class="col-md-6 col-lg-2">
			  <div class="box p-25 bg-danger">
				<div class="text-center">
				  <div class="text-uppercase">counters</div>
				  <h1 class="countnm fs-50 m-0">-158</h1>
				</div>
			  </div>
			</div>
			<div class="col-md-6 col-lg-2">
			  <div class="box box-inverse p-25 bg-img" style="background-image: url(../images/gallery/thumb/15.jpg);" data-overlay="5">
				<div class="text-center">
				  <div class="text-uppercase">counters</div>
				  <h1 class="countnm per fs-50 m-0">58</h1>
				</div>
			  </div>
			</div>
			<div class="col-md-6 col-lg-2">
			  <div class="box p-25">
				<div class="text-center">
				  <h1 class="countnm per fs-50 m-0">-58</h1>
				  <div class="text-uppercase">counters</div>
				</div>
			  </div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="box-group">
					<div class="box overflow-hidden">
					  <div class="vertical-align h-200">
						<div class="vertical-align-middle fs-30 text-center w-p100">
						  <span class="icon-Equalizer fs-50 me-10"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
						  <span class="countnm per">75</span>
						  <div class="fs-24 mt-3 text-fade">More Profit</div>
						</div>
					  </div>
					</div>
					<div class="box overflow-hidden bg-primary-light">
					  <div class="vertical-align text-center p-30 h-200">
						<div class="vertical-align-middle fs-40">
						  <p class="text-primary">Today</p>
						  <p class="text-primary">Sale</p>
						</div>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="box-group">
					<div class="box overflow-hidden">
					  <div class="vertical-align h-200">
						<div class="vertical-align-middle fs-30 text-center w-p100">
						  <span class="icon-Chart-line fs-50 me-10"><span class="path1"></span><span class="path2"></span></span>
						  <span class="countnm per">75</span>
						  <div class="fs-24 mt-3 text-fade">More Profit</div>
						</div>
					  </div>
					</div>
					<div class="box overflow-hidden box-inverse bg-img" style="background-image: url(../images/gallery/full/10.jpg)" data-overlay="5">
					  <div class="vertical-align text-center p-30 h-200">
						<div class="vertical-align-middle fs-40">
						  <p>Today</p>
						  <p>Sale</p>
						</div>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-12">
			  <!-- box -->
			  <div class="box-group">
				<div class="box overflow-hidden">
				  <div class="bg-warning-light vertical-align h-150">
					<div class="vertical-align-middle text-center w-p100 fs-40">
					  <div class="mb-5"><span class="icon-Play"></span></div>
					  <span class="countnm text-warning">8457</span>
					</div>
				  </div>
				</div>
				<div class="box overflow-hidden p-0">
				  <div class="bg-danger vertical-align h-150">
					<div class="vertical-align-middle text-center w-p100 fs-40">
					  <div class="mb-5"><span class="icon-Image"></span></div>
					  <span class="countnm">1254</span>
					</div>
				  </div>
				</div>
				<div class="box overflow-hidden p-0">
				  <div class="bg-success-light vertical-align h-150">
					<div class="vertical-align-middle text-center w-p100 fs-40">
					  <div class="mb-5"><span class="icon-Active-call"><span class="path1"></span><span class="path2"></span></span></div>
					  <span class="countnm text-success">9563</span>
					</div>
				  </div>
				</div>
			  </div>			
			</div>
			<div class="col-xl-6 col-lg-12">
			  <!-- box -->
			  <div class="box-group">
				<div class="box">
				  <div class="vertical-align h-150">
					<div class="vertical-align-middle text-center w-p100 fs-40">
					  <span class="countnm per">42</span>
					  <div class="mb-5 text-info"><span class="icon-Play"></span></div>
					</div>
				  </div>
				</div>
				<div class="box p-0">
				  <div class="vertical-align h-150">
					<div class="vertical-align-middle text-center w-p100 fs-40">
					  <span class="countnm per">50</span>
					  <div class="mb-5 text-primary"><span class="icon-Image"></span></div>
					</div>
				  </div>
				</div>
				<div class="box p-0">
				  <div class="vertical-align h-150">
					<div class="vertical-align-middle text-center w-p100 fs-40">
					  <span class="countnm per">84</span>
					  <div class="mb-5 text-success"><span class="icon-Active-call"><span class="path1"></span><span class="path2"></span></span></div>
					</div>
				  </div>
				</div>
			  </div>			
			</div>
		  </div>


		  <div class="row">
			  <div class="col-lg-6 col-12">
				  <div class="row">
					<div class="col-12 col-md-4">
						<a class="box box-link-shadow text-center" href="javascript:void(0)">
						<div class="box-body py-25">
							<p class="mt-5"><span class="icon-Shield-check fs-50"><span class="path1"></span><span class="path2"></span></span></p>
							<p class="fw-600">Badges</p>
						</div>
						</a>
					</div>
					<div class="col-12 col-md-4">
						<a class="box box-link-shadow text-center" href="javascript:void(0)">
							<div class="box-body py-25">
								<p class="mt-5">
									<span class="icon-Incoming-mail fs-50 text-success"><span class="path1"></span><span class="path2"></span></span>
								</p>
								<p class="fw-600">Inbox</p>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4">
						<a class="box box-link-shadow text-center" href="javascript:void(0)">
							<div class="box-body py-25">
								<p class="mt-5">
									<span class="icon-Cart fs-50 text-danger"><span class="path1"></span><span class="path2"></span></span>
								</p>
								<p class="fw-600">Cart</p>
							</div>
						</a>
					</div>

				  </div>
				  <!-- /.row -->
			  </div>
			  <div class="col-lg-6 col-12">	
				  <div class="row">
					<div class="col-12 col-md-4">
						<a class="box box-link-pop text-center" href="javascript:void(0)">
							<div class="box-body py-25">
								<p class="fs-40">
									<strong>$499</strong>
								</p>
								<p class="fw-600">
									<span class="icon-Money me-5 text-info"><span class="path1"></span><span class="path2"></span></span>Earnings
								</p>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4">
						<a class="box box-link-pop text-center" href="javascript:void(0)">
							<div class="box-body py-25">
								<p class="fs-40 text-success">
									<strong>10</strong>
								</p>
								<p class="fw-600">
									<span class="icon-Incoming-mail me-5 text-success"><span class="path1"></span><span class="path2"></span></span> Messages
								</p>
							</div>
						</a>
					</div>
					<div class="col-12 col-md-4">
						<a class="box box-link-pop text-center" href="javascript:void(0)">
							<div class="box-body py-25">
								<p class="fs-40 text-danger">
									<strong>3</strong>
								</p>
								<p class="fw-600">
									<span class="icon-Cart me-5 text-danger"><span class="path1"></span><span class="path2"></span></span> Products
								</p>
							</div>
						</a>
					</div>
				  </div>
				  <!-- /.row -->
			  </div>
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-6 col-md-4 col-xl-2">
				<a class="box box-link-shadow text-center" href="javascript:void(0)">
					<div class="box-body py-25 bg-info-light bbsr-0 bber-0">
						<p class="fw-600 text-info">Badges</p>
					</div>
					<div class="box-body">
						<p class="mt-5">
							<span class="icon-Shield-check fs-50 text-info"><span class="path1"></span><span class="path2"></span></span>
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-4 col-xl-2">
				<a class="box box-link-shadow text-center" href="javascript:void(0)">
					<div class="box-body py-25 bg-success-light bbsr-0 bber-0">
						<p class="fw-600">Inbox</p>
					</div>
					<div class="box-body">
						<p class="mt-5">
							<span class="icon-Incoming-mail fs-50 text-success"><span class="path1"></span><span class="path2"></span></span>
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-4 col-xl-2">
				<a class="box box-link-shadow text-center" href="javascript:void(0)">
					<div class="box-body py-25 bg-danger-light bbsr-0 bber-0">
						<p class="fw-600">Cart</p>
					</div>
					<div class="box-body">
						<p class="mt-5">
							<span class="icon-Cart fs-50 text-danger"><span class="path1"></span><span class="path2"></span></span>
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-4 col-xl-2">
				<a class="box box-link-pop text-center" href="javascript:void(0)">
					<div class="box-body">
						<p class="fs-40 text-danger">
							<strong>987&euro;</strong>
						</p>
					</div>
					<div class="box-body py-25 bg-danger-light btsr-0 bter-0">
						<p class="fw-600">
							<span class="icon-Money me-5 text-danger"><span class="path1"></span><span class="path2"></span></span> Balance
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-4 col-xl-2">
				<a class="box box-link-pop text-center" href="javascript:void(0)">
					<div class="box-body">
						<p class="fs-40 text-info">
							<strong>35</strong>
						</p>
					</div>
					<div class="box-body py-25 bg-info-light btsr-0 bter-0">
						<p class="fw-600">
							<span class="icon-Airplay-video me-5 text-info"><span class="path1"></span><span class="path2"></span></span> Videos
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-md-4 col-xl-2">
				<a class="box box-link-pop text-center" href="javascript:void(0)">
					<div class="box-body">
						<p class="fs-40 text-warning">
							<strong>15</strong>
						</p>
					</div>
					<div class="box-body py-25 bg-warning-light btsr-0 bter-0">
						<p class="fw-600">
							<span class="icon-Ticket me-5 text-warning"></span> Tickets
						</p>
					</div>
				</a>
			</div>
		 </div>

		  <!-- /.row -->
		  <div class="row">
			<div class="col-xl-4 col-12">
				<div class="box">
				  <div class="progress progress-sm mt-0 mb-0 bbsr-0 bber-0">
					<div class="progress-bar bg-primary bbsr-0 bber-0" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <div class="card-body bg-white">
					<span class="text-muted me-1">Completed:</span>
					<span class="text-dark">125</span>
				  </div>

				  <div class="box-body bg-primary btsr-0 bter-0">
					<div class="flexbox pull-right">
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>
						<div class="dropdown-menu dropdown-menu-end">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>

					<div class="text-center">
					  <h5 class="m-0">Tasks</h5>
					  <div class="fs-60 text-white">425</div>
					  <span class="text-white">Due Tasks</span>
					</div>
				  </div>
				</div>
			</div>
			<!-- /.col -->

			<div class="col-xl-4 col-12">
				<div class="box">
				  <div class="progress progress-sm mt-0 mb-0 bbsr-0 bber-0">
					<div class="progress-bar bg-info bbsr-0 bber-0" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <div class="box-body">
					<span class="text-muted me-1">Closed today:</span>
					<span class="text-dark">176</span>
				  </div>
				  <div class="box-body bg-img box-inverse btsr-0 bter-0" style="background-image: url(../images/gallery/thumb/9.jpg);" data-overlay="5">
					<div class="flexbox pull-right">
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>
						<div class="dropdown-menu dropdown-menu-end">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>
					<div class="text-center">
					  <h3 class="m-0">Issues</h3>
					  <div class="fs-60">252</div>
					  <span>Open</span>
					</div>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
				<div class="box bg-img box-inverse" style="background-image: url(../images/gallery/thumb/14.jpg);" data-overlay="5">
				  <div class="box-body">
					<div class="flexbox">
					  <h5>Features</h5>
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
						<div class="dropdown-menu dropdown-menu-end">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>

					<div class="text-center my-2">
					  <div class="fs-60 text-white">489</div>
					  <span class="text-white">Proposals</span>
					</div>
				  </div>

				  <div class="box-body bg-white bar-0">
					<span class="text-muted me-1">Implemented:</span>
					<span class="text-dark">156</span>
				  </div>

				  <div class="progress progress-sm mt-0 mb-0 btsr-0 bter-0">
					<div class="progress-bar bg-danger btsr-0 bter-0" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				</div>
			</div>
			<!-- /.col -->		  
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-xl-4 col-12">
				<div class="box">

				  <div class="progress progress-sm mt-0 mb-0 bbsr-0 bber-0">
					<div class="progress-bar bg-info bbsr-0 bber-0" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>

				  <div class="card-body bg-lightest">
					<span class="text-muted me-1">Completed:</span>
					<span class="text-dark">125</span>
				  </div>

				  <div class="box-body">
					<div class="flexbox pull-right">
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>
						<div class="dropdown-menu dropdown-menu-end">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>

					<div class="text-center">
					  <h5 class="m-0">Tasks</h5>
					  <div class="fs-60 text-info">154</div>
					  <span class="text-muted">Due Tasks</span>
					</div>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
				<div class="box">
				  <div class="box-body">
					<div class="flexbox">
					  <h5>Overdue</h5>
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
						<div class="dropdown-menu dropdown-menu-end">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>

					<div class="text-center my-2">
					  <div class="fs-60 text-red">145</div>
					  <span class="text-muted">Tasks</span>
					</div>
				  </div>

				  <div class="box-body bg-lightest bar-0">
					<span class="text-muted me-1">Yesterday's overdue:</span>
					<span class="text-dark">48</span>
				  </div>

				  <div class="progress progress-sm mt-0 mb-0 btsr-0 bter-0">
					<div class="progress-bar bg-danger btsr-0 bter-0" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				</div>
			</div>
			<!-- /.col -->

			<div class="col-xl-4 col-12">
				<div class="box">
				  <div class="progress progress-sm mt-0 mb-0 bbsr-0 bber-0">
					<div class="progress-bar bg-primary  bbsr-0 bber-0" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				  <div class="box-body bg-lightest bar-0">
					<span class="text-muted me-1">Closed today:</span>
					<span class="text-dark">168</span>
				  </div>
				  <div class="box-body">
					<div class="flexbox pull-right">
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>
						<div class="dropdown-menu dropdown-menu-end">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>
					<div class="text-center my-2">
					  <h5 class="m-0">Issues</h5>
					  <div class="fs-60 text-primary">452</div>
					  <span class="text-muted">Open</span>
					</div>
				  </div>
				</div>
			</div>
			<!-- /.col -->

		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-xl-4 col-12">
			  <div class="info-box">
				<span class="info-box-icon bg-info rounded"><span class="icon-Equalizer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span></span>

				<div class="info-box-content">
				  <span class="info-box-number">90<small>%</small></span>
				  <span class="info-box-text">Store Traffic</span>
				</div>
				<!-- /.info-box-content -->
			  </div>
			  <!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
			  <div class="info-box">
				<span class="info-box-icon bg-info rounded"><span class="icon-Shoes"><span class="path1"></span><span class="path2"></span></span></span>

				<div class="info-box-content text-end">
				  <span class="info-box-number">90<small>%</small></span>
				  <span class="info-box-text">Store Traffic</span>
				</div>
				<!-- /.info-box-content -->
			  </div>
			  <!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
			  <div class="info-box">
				<span class="info-box-icon bg-success rounded-circle"><span class="icon-Like"><span class="path1"></span><span class="path2"></span></span></span>

				<div class="info-box-content text-end">
				  <span class="info-box-number">41,410</span>
				  <span class="info-box-text">User Likes</span>
				</div>
				<!-- /.info-box-content -->
			  </div>
			  <!-- /.info-box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-xl-4 col-12">
			  <div class="info-box bg-info">
				<span class="info-box-icon push-bottom rounded"><span class="icon-User"><span class="path1"></span><span class="path2"></span></span></span>

				<div class="info-box-content">
				  <span class="info-box-text">New Clients</span>
				  <span class="info-box-number">450</span>

				  <div class="progress">
					<div class="progress-bar" style="width: 45%"></div>
				  </div>
				  <span class="progress-description">
						45% Increase in 28 Days
					  </span>
				</div>
				<!-- /.info-box-content -->
			  </div>
			  <!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
			  <div class="info-box bg-success">
				<span class="info-box-icon push-bottom rounded-circle"><span class="icon-Smile"><span class="path1"></span><span class="path2"></span></span></span>

				<div class="info-box-content">
				  <span class="info-box-text">Total Visits</span>
				  <span class="info-box-number">15,489</span>

				  <div class="progress">
					<div class="progress-bar" style="width: 40%"></div>
				  </div>
				  <span class="progress-description">
						40% Increase in 28 Days
					  </span>
				</div>
				<!-- /.info-box-content -->
			  </div>
			  <!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
			  <div class="info-box box-inverse bg-img" style="background-image: url(../images/gallery/creative/img-10.jpg);" data-overlay="5">
				<span class="info-box-icon push-bottom rounded"><span class="icon-Cloud-download"><span class="path1"></span><span class="path2"></span></span></span>

				<div class="info-box-content">
				  <span class="info-box-text">Downloads</span>
				  <span class="info-box-number">55,005</span>

				  <div class="progress">
					<div class="progress-bar" style="width: 85%"></div>
				  </div>
				  <span class="progress-description">
						85% Increase in 28 Days
					  </span>
				</div>
				<!-- /.info-box-content -->
			  </div>
			  <!-- /.info-box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->

		  <!-- Small boxes (Stat box) -->
		  <div class="row">
			<div class="col-xl-4 col-12">
			  <!-- small box -->
			  <div class="small-box box-inverse bg-img" style="background-image: url(../images/gallery/thumb/6.jpg);" data-overlay="5">
				<div class="inner">
				  <h3>255</h3>
				  <p>New Orders</p>
				</div>
				<div class="icon text-white">
				  <span class="icon-Cart2"><span class="path1"></span><span class="path2"></span></span>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			<div class="col-xl-4 col-12">
			  <!-- small box -->
			  <div class="small-box box-inverse bg-img" style="background-image: url(../images/gallery/thumb/7.jpg);" data-overlay="5">
				<div class="inner">
				  <h3>67<sup style="font-size: 20px">%</sup></h3>
				  <p>Sales Rate</p>
				</div>
				<div class="icon text-white">
				  <span class="icon-Equalizer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			<div class="col-xl-4 col-12">
			  <!-- small box -->
			  <div class="small-box bg-primary">
				<div class="inner">
				  <h3>78</h3>
				  <p>Registrations</p>
				</div>
				<div class="icon">
				  <span class="icon-Add-user text-white"><span class="path1"></span><span class="path2"></span></span>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
		  </div>
		  <!-- /.row -->

		  <div class="row mb-30">
			<div class="col-xl-4 col-12">
				<div class="flexbox flex-justified text-center bg-white rounded10 overflow-hidden">
				  <div class="no-shrink py-30">
					<span class="icon-Chart-line fs-50 text-success"><span class="path1"></span><span class="path2"></span></span>
				  </div>

				  <div class="py-30 bg-success-light">
					<div class="fs-30">+85</div>
					<span>Sales</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
				<div class="flexbox flex-justified text-center bg-success rounded10 overflow-hidden">
				  <div class="no-shrink py-30">
					<span class="icon-Equalizer fs-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
				  </div>

				  <div class="py-30 bg-white text-dark">
					<div class="fs-30">+85</div>
					<span>Sales</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
				<div class="flexbox flex-justified text-center bg-white rounded10 overflow-hidden">
				  <div class="no-shrink py-30">
					<span class="icon-Like fs-50 text-info"><span class="path1"></span><span class="path2"></span></span>
				  </div>

				  <div class="py-30 bg-info-light">
					<div class="fs-30">+512</div>
					<span>Likes</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->

		  </div>
		  <!-- /.row -->

		  <div class="row">
			<div class="col-xl-4 col-12">
			  <div class="box box-body text-center">
				  <div class="fs-40 fw-200">280</div>
				  <div>Countries</div>
			  </div>
			</div>
			<!-- /.col -->

			<div class="col-xl-4 col-12">
				<div class="box box-body bg-primary">
				  <div class="flexbox">
					<span class="icon-User fs-50"><span class="path1"></span><span class="path2"></span></span>
					<span class="fs-40 fw-200">45,965</span>
				  </div>
				  <div class="text-end">Users</div>
				</div>
			</div>
			<!-- /.col -->

			<div class="col-xl-4 col-12">
				<div class="box box-body">
				  <div class="flexbox">
					<span class="icon-File text-primary fs-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
					<span class="fs-40 fw-200">+859</span>
				  </div>
				  <div class="text-end">Article</div>
				</div>
			</div>
			<!-- /.col -->

		  </div>
		  <!-- /.row -->		

		  <div class="row">
			<div class="col-xl-4 col-12">
				<div class="box box-body">
				  <h6 class="text-uppercase">Today likes</h6>
				  <div class="flexbox mt-2">
					<span class="icon-Heart text-danger fs-40"></span>
					<span class=" fs-30">85,987</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->

			<div class="col-xl-4 col-12">
				<div class="box box-body bg-success">
				  <h6 class="text-uppercase">Today likes</h6>
				  <div class="flexbox mt-2">
					<span class=" fs-30">75,951</span>
					<span class="icon-Like fs-40"><span class="path1"></span><span class="path2"></span></span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-xl-4 col-12">
				<div class="box box-body bg-info">
				  <h6 class="text-uppercase">TODAY COMMENTS</h6>
				  <div class="flexbox mt-2">
					<span class="icon-Group-chat fs-40"><span class="path1"></span><span class="path2"></span></span>
					<span class=" fs-30">15,845</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->		

		</section>
		<!-- /.content -->
	  </div>
  </div>
@endsection

@push('js')
<script src="{{asset('js/pages/statistic.js')}}"></script>
@endpush