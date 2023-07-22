@extends('welcome')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Social widgets</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Widgets</li>
								<li class="breadcrumb-item active" aria-current="page">Social widgets</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  <div class="col-12">
			  	<div class="box">
					<div class="box-header no-border">
						<h4 class="box-title">Advanced User Info</h4>
					</div>
				</div>
			  </div>
			  <div class="col-lg-4 col-12">
			  	<div class="box">
					<div class="box-body">
						<div class="d-flex flex-row">
							<div class=""><img src="../images/avatar/avatar-2.png" alt="user" class="rounded-circle bg-success-light" width="100" /></div>
							<div class="ps-20">
								<h3>Johen Doe</h3>
								<h6>Web Designer</h6>
								<button class="btn btn-info-light"><i class="ti-plus"></i> Follow</button>
							</div>
						</div>
						<div class="row mt-40">
							<div class="col b-r text-center">
								<h2 class="font-light">1254</h2>
								<h6>Photos</h6></div>
							<div class="col b-r text-center">
								<h2 class="font-light">1254</h2>
								<h6>Videos</h6></div>
							<div class="col text-center">
								<h2 class="font-light">1587</h2>
								<h6>Tasks</h6></div>
						</div>
					</div>
					<div class="box-body">
						<p class="text-center aboutscroll">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae.
						</p>
						<ul class="list-inline text-center">
							<li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="Website"><i class="fa fa-globe fs-20"></i></a></li>
							<li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="twitter"><i class="fa fa-twitter fs-20"></i></a></li>
							<li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="Facebook"><i class="fa fa-facebook-square fs-20"></i></a></li>
						</ul>
					</div>
				</div>
			  </div>			  
			  <div class="col-lg-4 col-12">
				<div class="box">
					<div class="box-body text-center">
						<div class="mb-20 mt-20">
							<img src="../images/avatar/avatar-12.png" width="150" class="rounded-circle bg-info-light" alt="user" />
							<h4 class="mt-20 mb-0">johen doe</h4>
							<a href="mailto:dummy@gmail.com">dummy@gmail.com</a>
						</div>
						<div class="badge badge-pill badge-info-light fs-16">Dashboard</div>
						<div class="badge badge-pill badge-primary-light fs-16">UI</div>
						<div class="badge badge-pill badge-danger-light fs-16">UX</div>
						<div class="badge badge-pill badge-warning-light fs-16" data-bs-toggle="tooltip" data-placement="top" title="3 more">+10</div>
					</div>
					<div class="p-25 mt-15 bt-1">
						<div class="row text-center">
							<div class="col-6 be-1">
								<a href="#" class="link d-flex align-items-center justify-content-center font-medium">
									<span class="icon-Mail fs-20 me-5"></span>Message</a>
							</div>
							<div class="col-6">
								<a href="#" class="link d-flex align-items-center justify-content-center font-medium">
									<span class="icon-Code1 fs-20 me-5"><span class="path1"></span><span class="path2"></span></span>Portfolio</a>
							</div>
						</div>
					</div>
				</div>
			  </div>
			  <div class="col-lg-4 col-12">
				<div class="box">
				  <div class="text-white box-body bg-img text-center py-50" style="background-image: url(../images/gallery/creative/img-12.jpg);" data-overlay="5">
					<a href="#">
					  <img class="avatar avatar-xxl rounded-circle bg-warning-light" src="../images/avatar/avatar-16.png" alt="">
					</a>
					<h5 class="mt-2 mb-0"><a class="text-white" href="#">Maika Khalif</a></h5>
					<span>Designer</span>
				  </div>
				  <ul class="flexbox flex-justified text-center p-20">
					<li>
					  <span class="text-muted">Followers</span><br>
					  <span class="fs-20">6.6K</span>
					</li>
					<li class="be-1 bs-1 border-light">
					  <span class="text-muted">Following</span><br>
					  <span class="fs-20">5148</span>
					</li>
					<li>
					  <span class="text-muted">Tweets</span><br>
					  <span class="fs-20">2154</span>
					</li>
				  </ul>
				</div>
			  </div> 
			  <div class="col-md-6 col-lg-4">
				<div class="box p-30 pt-50 text-center">
				  <div>
					<a class="avatar avatar-xxl status-success mb-3 bg-transparent" href="#">
					  <img src="../images/avatar/avatar-10.png" class="rounded-circle bg-primary-light" alt="...">
					</a>
				  </div>
				  <h5 class="mt-5 "><a class="text-default hover-primary" href="#">Harmani Potter</a></h5>
				  <p><small class="fs-12">Designer</small></p>
				  <p class="text-fade fs-12 mb-50">Hello everyone, I am Maryam. My designs are used in several big companies in United State and other countries.</p>
				  <div class="gap-items fs-16">
					<a class="text-facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="text-instagram" href="#"><i class="fa fa-instagram"></i></a>
					<a class="text-google" href="#"><i class="fa fa-google"></i></a>
					<a class="text-twitter" href="#"><i class="fa fa-twitter"></i></a>
				  </div>
				</div>
			  </div>
			  <div class="col-lg-4 col-12">
				  <div class="box box-widget widget-user">
					<div class="widget-user-header bg-img" style="background: url(../images/gallery/creative/img-8.jpg) center center;" data-overlay="5">
					  <h3 class="widget-user-username text-white">Michael Jorden</h3>
					  <h6 class="widget-user-desc text-white">Designer</h6>
					</div>
					<div class="widget-user-image">
					  <img class="rounded-circle bg-warning-light" src="../images/avatar/avatar-2.png" alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row mt-30">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">12K</h5>
							<span class="description-text">FOLLOWERS</span>
						  </div>
						</div>
						<div class="col-sm-4 be-1 bs-1">
						  <div class="description-block">
							<h5 class="description-header">550</h5>
							<span class="description-text">FOLLOWERS</span>
						  </div>
						</div>
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">158</h5>
							<span class="description-text">TWEETS</span>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
			  </div>
			<div class="col-xl-4 col-lg-6 col-12">
			  <div class="box box-widget widget-user-2">
				<div class="widget-user-header bg-primary">
				  <div class="widget-user-image">
					<img class="rounded-circle bg-success-light" src="../images/avatar/avatar-5.png" alt="User Avatar">
				  </div>
				  <h3 class="widget-user-username">Amanda Clark </h3>
				  <h6 class="widget-user-desc">Developer</h6>
				</div>
				<div class="box-footer no-padding">
				  <ul class="nav d-block nav-stacked">
					<li class="nav-item"><a href="#" class="nav-link">Sales <span class="pull-right badge bg-info-light">1310</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link">Projects <span class="pull-right badge bg-success-light">120</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link">Followers <span class="pull-right badge bg-warning-light">8K</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link">Tasks <span class="pull-right badge bg-danger-light">58</span></a></li>
				  </ul>
				</div>
			  </div>
			</div>
			<div class="col-xl-4 col-lg-6 col-12">
			  <div class="box box-widget widget-user-4">
				<div class="widget-user-header bg-img" style="background: url('../images/photo1.png');" data-overlay="5">
				   <div class="box-body text-white">
					   <div class="widget-user-image">
						  <img class="rounded-circle bg-success-light" src="../images/avatar/avatar-10.png" alt="User Avatar">
						</div>
						  <h3 class="widget-user-username">James Anderson</h3>
						  <h6 class="widget-user-desc">Owner &amp; CEO</h6>
				   </div>
				</div>
				<div class="box-footer">
				  <div class="row">
					<div class="col-sm-4">
					  <div class="description-block">
						<h5 class="description-header">12K</h5>
						<span class="description-text">Followers</span>
					  </div>
					</div>
					<div class="col-sm-4 be-1 bs-1">
					  <div class="description-block">
						<h5 class="description-header">550</h5>
						<span class="description-text">Following</span>
					  </div>
					</div>
					<div class="col-sm-4">
					  <div class="description-block">
						<h5 class="description-header">1158</h5>
						<span class="description-text">Tweets</span>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-xl-4 col-lg-6 col-12">
			  <div class="box box-widget widget-user-4">
				<div class="widget-user-header bg-info">
				   <div class="overlay overlay-none">
					   <div class="widget-user-image">
						  <img class="rounded-circle bg-info-light" src="../images/avatar/avatar-3.png" alt="User Avatar">
						</div>
						  <h3 class="widget-user-username">James Anderson</h3>
						  <h6 class="widget-user-desc">Owner &amp; CEO</h6>
				   </div>
				</div>
				<div class="box-footer">
				  <div class="row">
					<div class="col-sm-4">
					  <div class="description-block">
						<h5 class="description-header">12K</h5>
						<span class="description-text">Followers</span>
					  </div>
					</div>
					<div class="col-sm-4 be-1 bs-1">
					  <div class="description-block">
						<h5 class="description-header">550</h5>
						<span class="description-text">Following</span>
					  </div>
					</div>
					<div class="col-sm-4">
					  <div class="description-block">
						<h5 class="description-header">1158</h5>
						<span class="description-text">Tweets</span>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-xl-4 col-lg-6 col-12">
			  <div class="box box-widget widget-user-3">
				  <div class="box-body bg-img text-white"  style="background: url(../images/gallery/creative/img-7.jpg);" data-overlay="5">
					<div class="widget-user-header">
					  <div class="info-user">
						  <h3 class="widget-user-username">Michael Jorden</h3>
						  <h6 class="widget-user-desc">Developer</h6>
					  </div>
					  <div class="widget-user-image clearfix">
						<img class="rounded-circle bg-primary-light" src="../images/avatar/avatar-7.png" alt="User Avatar">
					  </div>
					</div>
				  </div>
				<div class="box-footer no-padding">
				  <ul class="nav d-block nav-stacked">
					<li class="nav-item"><a href="#" class="nav-link">Sales <span class="pull-right badge bg-info-light">1310</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link">Projects <span class="pull-right badge bg-success-light">120</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link">Followers <span class="pull-right badge bg-warning-light">8K</span></a></li>
					<li class="nav-item"><a href="#" class="nav-link">Tasks <span class="pull-right badge bg-danger-light">58</span></a></li>
				  </ul>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			  <div class="col-12">
			  	<div class="box">
					<div class="box-header no-border">
						<h4 class="box-title">Minimal User Info</h4>
					</div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				<a class="box box-body box-hover-shadow" href="#">
				  <div class="flexbox align-items-center">
					<div>
					  <h6 class="mb-0">Natasha Clark</h6>
					  <small>Web Developrt</small>
					</div>
					<img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="...">
				  </div>
				</a>
			  </div>
			  <div class="col-md-6 col-lg-3">
				<a class="box box-body box-hover-shadow" href="#">
				  <div class="flexbox align-items-center">
					<img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="...">
					<div class="text-end">
					  <h6 class="mb-0">Kevin Black</h6>
					  <small>Web Designer</small>
					</div>
				  </div>
				</a>
			  </div>
			  <div class="col-md-6 col-lg-3">
				<a class="box box-body box-inverse box-primary" href="#">
				  <div class="flexbox align-items-center">
					<div>
					  <h6 class="mb-0">Adom Tony</h6>
					  <small>PHP Designer</small>
					</div>
					<img class="avatar avatar-lg avatar-bordered" src="../images/avatar/4.jpg" alt="...">
				  </div>
				</a>
			  </div>
			  <div class="col-md-6 col-lg-3">
				<a class="box box-inverse box-body bg-img" href="#" style="background-image: url(../images/gallery/thumb-sm/1.jpg)" data-overlay="4">
				  <div class="flexbox align-items-center">
					<img class="avatar avatar-lg avatar-bordered" src="../images/avatar/3.jpg" alt="...">
					<div class="text-end">
					  <h6 class="mb-0">Monty Hulk</h6>
					  <small>Project Mg.</small>
					</div>
				  </div>
				</a>
			  </div>
		  </div>
		  <div class="row">
			  <div class="col-12">
			  	<div class="box">
					<div class="box-header no-border">
						<h4 class="box-title">User Header</h4>
					</div>
				</div>
			  </div>	
			  <div class="col-12">
				<div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
				  <div class="flexbox px-20 pt-20">
					<label class="toggler toggler-danger text-white">
					  <input type="checkbox">
					  <i class="fa fa-heart"></i>
					</label>
					<div class="dropdown">
					  <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-white"></i></a>
					  <div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
						<a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
					  </div>
					</div>
				  </div>

				  <div class="box-body text-center pb-50">
					<a href="#">
					  <img class="avatar avatar-xxl avatar-bordered" src="../images/avatar/5.jpg" alt="">
					</a>
					<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">Roben Parkar</a></h4>
					<span><i class="fa fa-map-marker w-20"></i> Miami</span>
				  </div>

				  <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
					<li>
					  <span class="opacity-60">Followers</span><br>
					  <span class="fs-20">8.6K</span>
					</li>
					<li>
					  <span class="opacity-60">Following</span><br>
					  <span class="fs-20">8457</span>
					</li>
					<li>
					  <span class="opacity-60">Tweets</span><br>
					  <span class="fs-20">2154</span>
					</li>
				  </ul>
				</div>
			  </div>
			  <div class="col-12">
				<div class="box card-inverse bg-img" style="background-image: url(../images/gallery/full/2.jpg); padding-top: 275px">
				  <div class="flexbox align-items-center px-20" data-overlay="4">
					<div class="flexbox align-items-center me-auto">
					  <a href="#">
						<img class="avatar avatar-xl avatar-bordered" src="../images/avatar/4.jpg" alt="">
					  </a>
					  <div class="ps-10 d-none d-md-block">
						<h5 class="mb-0"><a class="hover-primary text-white" href="#">Roben Clark</a></h5>
						<span>Designer</span>
					  </div>
					</div>

					<ul class="flexbox flex-justified text-center py-20">
					  <li class="px-10">
						<span class="opacity-60">Followers</span><br>
						<span class="fs-20">9.6K</span>
					  </li>
					  <li class="px-10">
						<span class="opacity-60">Following</span><br>
						<span class="fs-20">9845</span>
					  </li>
					  <li class="ps-10">
						<span class="opacity-60">Tweets</span><br>
						<span class="fs-20">8456</span>
					  </li>
					</ul>
				  </div>

				</div>
			  </div>
		  </div>
		  <div class="row">
			  <div class="col-12">
			  	<div class="box">
					<div class="box-header no-border">
						<h4 class="box-title">Social Networks Feed</h4>
					</div>
				</div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box box-inverse bg-google">
					<div class="box-body">
					  <h3 class="text-white mt-0">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</h3>
					  <small>14 April, 2018 via web</small>
					  <div class="mt-20">
						<i class="fa fa-google-plus fs-26"></i>
						<ul class="list-inline float-end mb-0">
						  <li class="list-inline-item">
							<i class="fa fa-thumbs-o-up"></i> 845
						  </li>
						  <li class="list-inline-item">
							<i class="fa fa-share"></i> 956
						  </li>
						</ul>
					  </div>
					</div>
				  </div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box box-inverse bg-twitter">
					<div class="box-body">
					  <h3 class="text-white mt-0">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</h3>
					  <small>14 April, 2018 via web</small>
					  <div class="mt-20">
						<i class="fa fa-twitter fs-26"></i>
						<ul class="list-inline float-end mb-0">
						  <li class="list-inline-item">
							<i class="fa fa-heart"></i> 845
						  </li>
						  <li class="list-inline-item">
							<i class="fa fa-thumbs-up"></i> 956
						  </li>
						</ul>
					  </div>
					</div>
				  </div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box box-inverse bg-facebook">
					<div class="box-body">
					  <h3 class="text-white mt-0">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</h3>
					  <small>14 April, 2018 via web</small>
					  <div class="mt-20">
						<i class="fa fa-facebook fs-26"></i>
						<ul class="list-inline float-end mb-0">
						  <li class="list-inline-item">
							<i class="fa fa-thumbs-o-up"></i> 845
						  </li>
						  <li class="list-inline-item">
							<i class="fa fa-star"></i> 956
						  </li>
						</ul>
					  </div>
					</div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-4">
				<div class="box box-inverse bg-twitter">
				  <div class="box-header no-border">
					<span class="fa fa-twitter fs-30"></span>
					  <div class="box-tools pull-right">
						<h5 class="box-title">Latest Tweets</h5>
					  </div>
				  </div>
				  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
					<p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
					<div class="flexbox">
					  <time class="text-white" datetime="2017-11-21 20:00">21 November, 2017</time>
					  <span><i class="fa fa-heart"></i> 45</span>
					</div>
				  </blockquote>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-4">
				<div class="box box-inverse bg-facebook">
				  <div class="box-header no-border">
					<span class="fa fa-facebook fs-30"></span>
					  <div class="box-tools pull-right">
						<h5 class="box-title">Facebook feed</h5>
					  </div>
				  </div>

				  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
					<p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
					<div class="flexbox">
					  <time class="text-white" datetime="2017-11-21 20:00">21 November, 2017</time>
					  <span><i class="fa fa-heart"></i> 75</span>
					</div>
				  </blockquote>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-4">
				<div class="box box-inverse box-carousel slide bg-twitter">
				  <div class="box-header no-border">
					<span class="fa fa-twitter fs-30"></span>
					  <div class="box-tools pull-right">
						<h5 class="box-title">Carousel feed</h5>
					  </div>
				  </div>
				  <div class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-inner">
						  <div class="carousel-item active">
							  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
								  <p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
								  <div class="flexbox">
									<time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
									<span><i class="fa fa-heart"></i> 62</span>
								  </div>
							  </blockquote>
						  </div>
						  <div class="carousel-item">
							  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
								  <p>Uniquely revolutionize leveraged catalysts for change for world-class web services. Efficiently underwhelm competitive.</p>
								  <div class="flexbox">
									<time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
									<span><i class="fa fa-heart"></i> 45</span>
								  </div>
							  </blockquote>
						  </div>
						  <div class="carousel-item">
							  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
								  <p>Enthusiastically optimize cross-media manufactured products without process-centric web services. Conveniently.</p>
								  <div class="flexbox">
									<time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
									<span><i class="fa fa-heart"></i> 65</span>
								  </div>
							  </blockquote>
						  </div>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box box-inverse box-success">
					<div class="box-body">
					  <a class="avatar float-start me-20" href="javascript:void(0)">
						<img src="../images/avatar/5.jpg" alt="">
					  </a>
					  <div>
						<small class="float-end">Today, 16:05</small>
						<div class="fs-18">Johen Doe</div>
						<div class="fs-14 mb-10">Designer</div>
						<blockquote class="blockquote my-20 fs-16 text-white">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</blockquote>
					  </div>
					</div>
				  </div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box box-inverse box-primary">
					<div class="box-body">
					  <div>
						<blockquote class="blockquote cover-quote fs-16 text-white mt-0">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.
							<div class="fs-16 mt-10">Johen Doe</div>
							<div class="fs-14 mb-10">Designer</div>  
						</blockquote>
					  </div>
					</div>
				  </div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box box-inverse box-info">
					<div class="box-body">
					  <a class="avatar float-start me-20" href="javascript:void(0)">
						<img src="../images/avatar/5.jpg" alt="">
					  </a>
					  <div>
						<small class="float-end">Today, 16:05</small>
						<div class="fs-18">Johen Doe</div>
						<div class="fs-14 mb-10">Designer</div>
						<blockquote class="blockquote cover-quote fs-16 text-white">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</blockquote>
					  </div>
					</div>
				  </div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box">
					<div class="box-header no-border" style="position: absolute;width: 100%;z-index: 9;">
						<ul class="list-inline pull-left">
							<li>
								<a href="#" class="text-white"><i class="fa fa-expand"></i></a>
							</li>
							<li>
								<a href="#" class="text-white"><i class="fa fa-heart-o"></i></a>
							</li>
						</ul>
						<span class="badge badge-dot pull-right badge-danger" data-bs-toggle="tooltip" data-bs-original-title="Label"></span>
					</div>
					<div class="box-body bg-img py-70 bbsr-0 bber-0" style="background-image: url(../images/gallery/thumb/5.jpg)" data-overlay="5">
						<blockquote class="blockquote blockquote-inverse no-border no-margin">
						  <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
						  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
						</blockquote>
					</div>
					<div class="box-body">
						<h4>volutpat metus commodo.</h4>
						<div class="flexbox">
							<div class="time">Few seconds ago</div>
							<ul class="flexbox">
								<li><a href="#">845 <i class="fa fa-comment-o"></i></a></li>
								<li><a href="#">85K <i class="fa fa-heart-o"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="box-footer p-0">
						<div class="media-list media-list-hover">
							<a href="#" class="media media-single">
								<img class="avatar pull-left me-10" src="../images/avatar/2.jpg" alt="" />
								<div>
									<h5 class="mb-0">Stevan Smith</h5>
									<p class="text-fade mb-0">Shared a photo on your wall</p>							
								</div>
							</a>
						</div>
					</div>
				  </div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box">
					<div class="box-header p-0">
						<div class="media-list media-list-hover">
							<a href="#" class="media media-single">
								<img class="avatar pull-left me-10" src="../images/avatar/4.jpg" alt="" />
								<div>
									<h5 class="mb-0">Stevan Smith</h5>
									<p class="text-fade mb-0">Shared a photo on your wall</p>							
								</div>
							</a>
						</div>
					</div>
					<div class="box-body bg-img py-70 bar-0" style="background-image: url(../images/gallery/thumb/12.jpg)" data-overlay="5">
						<blockquote class="blockquote blockquote-inverse no-border no-margin">
						  <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
						  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
						</blockquote>
					</div>
					<div class="box-body">
						<h4>volutpat metus commodo.</h4>
						<div class="flexbox">
							<div class="time">Few seconds ago</div>
							<ul class="flexbox">
								<li><a href="#">845 <i class="fa fa-comment-o"></i></a></li>
								<li><a href="#">85K <i class="fa fa-heart-o"></i></a></li>
							</ul>
						</div>
					</div>
				  </div>
			  </div>
			  <div class="col-xl-4 col-lg-6">
				  <div class="box">
					<div class="box-header p-0">
						<div class="media-list media-list-hover">
							<a href="#" class="media media-single">
								<img class="avatar pull-left me-10" src="../images/avatar/3.jpg" alt="" />
								<div>
									<h5 class="mb-0">Stevan Smith</h5>
									<p class="text-fade mb-0">Shared a photo on your wall</p>							
								</div>
							</a>
						</div>
					</div>
					<div class="box-body">
						<div class="flexbox">
							<div class="time">Few seconds ago</div>
							<ul class="flexbox">
								<li><a href="#">845 <i class="fa fa-comment-o"></i></a></li>
								<li><a href="#">85K <i class="fa fa-heart-o"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="box-body bg-img py-70 btsr-0 bter-0" style="background-image: url(../images/gallery/thumb/1.jpg)" data-overlay="5">
						<blockquote class="blockquote blockquote-inverse no-border no-margin">
						  <p class="fs-22">Donec vitae leo dignissim, sodales purus et, egestas est.</p>
						  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
						</blockquote>
					</div>
				  </div>
			  </div>
		  </div>
		  <div class="row">
			  <div class="col-12">
			  	<div class="box">
					<div class="box-header no-border">
						<h4 class="box-title">Basic User Info</h4>
					</div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-2">
				<div class="box box-body text-center py-30">
				  <a href="#">
					<img class="avatar avatar-xxl" src="../images/avatar/avatar-1.png" alt="">
				  </a>
				  <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Mika Khalif</a></h5>
				  <p class="text-fade">Project Repotar</p>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-2">			  
				<div class="box box-body text-center py-30 box-inverse bg-primary">
				  <a href="#">
					<img class="avatar avatar-xxl" src="../images/avatar/avatar-10.png" alt="">
				  </a>
				  <h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="#">Mika Khalif</a></h5>
				  <p class="text-white">Project Repotar</p>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-2">			  
				<div class="box box-body text-center py-30 bg-img" style="background-image:url(../images/gallery/creative/img-9.jpg)" data-overlay="5">
				  <a href="#">
					<img class="avatar avatar-xxl" src="../images/avatar/avatar-9.png" alt="">
				  </a>
				  <h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="#">Mika Khalif</a></h5>
				  <p class="text-white">Project Repotar</p>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-2">
				<div class="box">
				  <div class="flexbox align-items-center px-20 pt-20">
					<label class="toggler toggler-danger fs-16">
					  <input type="checkbox" checked>
					  <i class="fa fa-heart"></i>
					</label>
					<div class="dropdown">
					  <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
					  <div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
						<a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
					  </div>
					</div>
				  </div>
				  <div class="box-body text-center pt-1 pb-15">
					<a href="#">
					  <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
					</a>
					<h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
					<p class="text-fade">Designer</p>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-2">
				<div class="box box-inverse bg-danger-light">
				  <div class="flexbox align-items-center px-20 pt-20">
					<label class="toggler toggler-info fs-16">
					  <input type="checkbox" checked>
					  <i class="fa fa-heart"></i>
					</label>
					<div class="dropdown">
					  <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-danger"></i></a>
					  <div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
						<a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
					  </div>
					</div>
				  </div>
				  <div class="box-body text-center pt-1 pb-15">
					<a href="#">
					  <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
					</a>
					<h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
					<p class="text-danger">Designer</p>
				  </div>
				</div>			  
			  </div>
			  <div class="col-md-6 col-lg-2">
				<div class="box box-inverse bg-img" style="background-image:url(../images/gallery/creative/img-8.jpg)" data-overlay="5">
				  <div class="flexbox align-items-center px-20 pt-20">
					<label class="toggler toggler-danger fs-16">
					  <input type="checkbox" checked>
					  <i class="fa fa-heart"></i>
					</label>
					<div class="dropdown">
					  <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-white"></i></a>
					  <div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
						<a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
					  </div>
					</div>
				  </div>
				  <div class="box-body text-center pt-1 pb-15">
					<a href="#">
					  <img class="avatar avatar-xxl" src="../images/avatar/avatar-11.png" alt="">
					</a>
					<h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="#">Rostar Joy</a></h5>
					<p class="text-white ">Designer</p>
				  </div>
				</div>			  
			  </div>
		  </div>
		  <div class="row">
			  <div class="col-12">
			  	<div class="box">
					<div class="box-header no-border">
						<h4 class="box-title">Post Block</h4>
					</div>
				</div>
			  </div> 
			  <div class="col-lg-6">
				<div class="box">
				  <div class="media bb-1 border-fade">
					<img class="avatar avatar-lg" src="../images/avatar/3.jpg" alt="...">
					<div class="media-body">
					  <p>
						<strong>Denial Webar</strong>
						<time class="float-end text-fade" datetime="2017">24 min ago</time>
					  </p>
					  <p><small>Designer</small></p>
					</div>
				  </div>
				  <div class="box-body bb-1 border-fade">
					<p class="lead">Authoritatively syndicate goal-oriented leadership skills for clicks-and-mortar outsourcing. Synergistically reconceptualize enabled catalysts for change.</p>
					<div class="gap-items-4 mt-10">
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-thumbs-up me-1"></i> 1254
					  </a>
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-comment me-1"></i> 25
					  </a>
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-share-alt me-1"></i> 12
					  </a>
					</div>
				  </div>
				  <div class="media-list media-list-divided">
					<div class="media">
					  <a class="avatar" href="#">
						<img src="../images/avatar/6.jpg" alt="...">
					  </a>
					  <div class="media-body">
						<p>
						  <a href="#"><strong>Rock Tele</strong></a>
						  <time class="float-end text-fade" datetime="2017-07-14 20:00">Just now</time>
						</p>
						<p>Uniquely enhance world-class channels with just in time schemas.</p>

						<div class="media px-0 mt-20">
						  <a class="avatar" href="#">
							<img src="../images/avatar/8.jpg" alt="...">
						  </a>
						  <div class="media-body">
							<p>
							  <a href="#"><strong>Brock Lensar</strong></a>
							  <time class="float-end text-fade" datetime="2017-07-14 20:00">26 mins ago</time>
							</p>
							<p>Thank you for your nice comment.</p>
						  </div>
						</div>

					  </div>
					</div>
					<div class="media">
					  <a class="avatar" href="#">
						<img src="../images/avatar/9.jpg" alt="...">
					  </a>
					  <div class="media-body">
						<p>
						  <a href="#"><strong>Tony Stark</strong></a>
						  <time class="float-end text-fade" datetime="2017-07-14 20:00">2 hours ago</time>
						</p>
						<p>Continually drive user friendly solutions through performance based infomediaries.</p>
					  </div>
					</div>
				  </div>
				  <form class="publisher bt-1 border-fade">
					<img class="avatar avatar-sm" src="../images/avatar/4.jpg" alt="...">
					<input class="publisher-input" type="text" placeholder="Add Your Comment">
					<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
					<span class="publisher-btn file-group">
					  <i class="fa fa-camera file-browser"></i>
					  <input type="file">
					</span>
				  </form>
				</div>
			  </div>
			  <div class="col-lg-6">
				<div class="box">
				  <div class="media bb-1 border-fade">
					<img class="avatar avatar-lg" src="../images/avatar/4.jpg" alt="...">
					<div class="media-body">
					  <p>
						<strong>Robin Hood</strong>
						<time class="float-end text-fade" datetime="2017">24 min ago</time>
					  </p>
					  <p><small>Designer</small></p>
					</div>
				  </div>
				  <a href="#">
					<img src="../images/gallery/thumb/11.jpg" alt="..." data-provide="lity">
				  </a>
				  <div class="card-body py-12">
					<div class="gap-items-4">
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-thumbs-up me-1"></i> 45
					  </a>
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-comment me-1"></i> 14
					  </a>
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-share-alt me-1"></i> 2
					  </a>
					</div>
				  </div>
				  <form class="publisher bg-transparent bt-1 border-fade">
					<img class="avatar avatar-sm" src="../images/avatar/2.jpg" alt="...">
					<input class="publisher-input" type="text" placeholder="Add Comment">
					<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
					<span class="publisher-btn file-group">
					  <i class="fa fa-camera file-browser"></i>
					  <input type="file">
					</span>
				  </form>
				</div>
			  </div>
			  <div class="col-lg-6">
				<div class="box">
				  <div class="media bb-1 border-fade">
					<img class="avatar avatar-lg" src="../images/avatar/5.jpg" alt="...">
					<div class="media-body">
					  <p>
						<strong>Ronit Roy</strong>
						<time class="float-end text-fade" datetime="2017">24 min ago</time>
					  </p>
					  <p><small>Designer</small></p>
					</div>
				  </div>
				  <div class="box-body">
					<p>Best memory from the beach...</p>
				  </div>
				  <div class="row" data-provide="photoswipe">
					<a class="col-6" href="#">
					  <img src="../images/gallery/thumb/12.jpg" alt="...">
					</a>
					<a class="col-6" href="#">
					  <img src="../images/gallery/thumb/10.jpg" alt="...">
					</a>
				  </div>
				  <div class="box-body py-12">
					<div class="gap-items-4">
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-thumbs-up me-1"></i> 541
					  </a>
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-comment me-1"></i> 254
					  </a>
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-share-alt me-1"></i> 30
					  </a>
					</div>
				  </div>
				  <div class="media-list media-list-divided bg-lighter">
					<div class="media">
					  <a class="avatar" href="#">
						<img src="../images/avatar/7.jpg" alt="...">
					  </a>
					  <div class="media-body">
						<p>
						  <a href="#"><strong>Tony stark</strong></a>
						  <time class="float-end text-fade" datetime="2017-07-14 20:00">25 Jan</time>
						</p>
						<p>Continually drive user friendly solutions through performance based infomediaries.</p>
					  </div>
					</div>
				  </div>
				  <form class="publisher bg-transparent bt-1 border-fade">
					<img class="avatar avatar-sm" src="../images/avatar/5.jpg" alt="...">
					<input class="publisher-input" type="text" placeholder="Add Comment">
					<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
					<span class="publisher-btn file-group">
					  <i class="fa fa-camera file-browser"></i>
					  <input type="file">
					</span>
				  </form>
				</div>
			  </div>
			  <div class="col-lg-6">
				<div class="box">
				  <div class="media bb-1 border-fade">
					<img class="avatar avatar-lg" src="../images/avatar/3.jpg" alt="...">
					<div class="media-body">
					  <p>
						<strong>Harmaini</strong>
						<time class="float-end text-fade" datetime="2017">24 min ago</time>
					  </p>
					  <p><small>Designer</small></p>
					</div>
				  </div>
				  <div class="box-body">
					<p class="lead">Check this out. It is the next big thing!!</p>
				  </div>
				  <div class="ratio ratio-16x9">
					<iframe src="https://www.youtube.com/embed/k85mRPqvMbE" allowfullscreen=""></iframe>
				  </div>
				  <div class="box-body py-12">
					<div class="gap-items-4">
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-thumbs-up me-1"></i> 145
					  </a>
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-comment me-1"></i> 512
					  </a>
					  <a class="text-fade hover-light" href="#">
						<i class="fa fa-share-alt me-1"></i> 42
					  </a>
					</div>
				  </div>
				  <form class="publisher bg-transparent bt-1 border-fade">
					<img class="avatar avatar-sm" src="../images/avatar/4.jpg" alt="...">
					<input class="publisher-input" type="text" placeholder="Add Comment">
					<a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
					<span class="publisher-btn file-group">
					  <i class="fa fa-camera file-browser"></i>
					  <input type="file">
					</span>
				  </form>
				</div>
			  </div>
		  </div>
		  <div class="row">
			<div class="col-xl-6 col-lg-12">
			  <div class="box box-widget">
				<div class="box-header with-border">
				  <div class="user-block">
					<img class="avatar" src="../images/user1-128x128.jpg" alt="User Image">
					<span class="username"><a href="#">John Doe</a></span>
					<span class="description">Shared publicly - 8:30 AM Today</span>
				  </div>
				  <ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					  <li><a class="" data-bs-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-bs-original-title="Contacts"><i class="ti-comments"></i></a></li>
				  </ul>
				</div>
				<div class="box-body">
				  <img class="img-fluid mb-15" src="../images/photo2.png" alt="Photo">
				  <p>Featured Hydroflora Pots Garden & Outdoors</p>
				  <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-share"></i> Share</button>
				  <button type="button" class="btn btn-sm btn-success"><i class="fa fa-thumbs-o-up"></i> Like</button>
				  <span class="pull-right text-muted">15 likes - 2 comments</span>
				</div>
				<div class="box-footer box-comments bbsr-0 bber-0">
				  <div class="box-comment">
					<img class="avatar" src="../images/user3-128x128.jpg" alt="User Image">
					<div class="comment-text">
						  <span class="username">
							Ruhi Doe
							<span class="text-muted pull-right">1:03 AM Today</span>
						  </span>
					  Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
					</div>
				  </div>
				  <div class="box-comment">
					<img class="avatar" src="../images/user4-128x128.jpg" alt="User Image">
					<div class="comment-text">
						  <span class="username">
							Amayra Lusi
							<span class="text-muted pull-right">11:03 PM Today</span>
						  </span>
					  Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
					</div>
				  </div>
				</div>
				<div class="box-footer">
				  <form action="#" method="post">
					<div class="input-group">
					  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
					  <div class="input-group-addon">
						<div class="align-self-end gap-items">
						  <span class="publisher-btn file-group">
							<i class="fa fa-paperclip file-browser"></i>
							<input type="file">
						  </span>
						  <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
						  <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
						</div>
					  </div>
					</div>
				  </form>
				</div>
			  </div>
			</div>
			<div class="col-xl-6 col-lg-12">
			  <div class="box box-widget">
				<div class="box-header with-border">
				  <div class="user-block">
					<img class="avatar" src="../images/user1-128x128.jpg" alt="User Image">
					<span class="username"><a href="#">John Doe</a></span>
					<span class="description">Shared publicly - 8:30 AM Today</span>
				  </div>             
				  <ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					  <li><a class="" data-bs-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-bs-original-title="Contacts"><i class="ti-comments"></i></a></li>
				  </ul>
				</div>
				<div class="box-body">
				  <p>Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt</p>
				  <p>Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt</p>
				  <div class="attachment-block clearfix">
					<img class="attachment-img" src="../images/photo1.png" alt="Attachment Image">
					<div class="attachment-pushed">
					  <h5 class="attachment-heading"><a href="http://www.lipsum.com/">Featured Hydroflora Pots Garden & Outdoors</a></h5>
					  <div class="attachment-text">
						Lorem Ipsum is simply dummy text of the printing & type setting industry... <a href="#">more</a>
					  </div>
					</div>
				  </div>
				  <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-share"></i> Share</button>
				  <button type="button" class="btn btn-sm btn-success"><i class="fa fa-thumbs-o-up"></i> Like</button>
				  <span class="pull-right text-muted">84 likes - 2 comments</span>
				</div>
				<div class="box-footer box-comments bbsr-0 bber-0">
				  <div class="box-comment">
					<img class="avatar" src="../images/user3-128x128.jpg" alt="User Image">
					<div class="comment-text">
						  <span class="username">
							Amayra Lusi
							<span class="text-muted pull-right">9:03 PM Today</span>
						  </span>
					 Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
					</div>
				  </div>
				  <div class="box-comment">
					<img class="avatar" src="../images/user5-128x128.jpg" alt="User Image">
					<div class="comment-text">
					  <span class="username">
						Amayra Lusi
						<span class="text-muted pull-right">10:03 AM Today</span>
					  </span>
					  Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.
					</div>
				  </div>
				</div>
				<div class="box-footer">
				  <form action="#" method="post">
					<div class="input-group">
					  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
						  <div class="input-group-addon">
							<div class="align-self-end gap-items">
							  <span class="publisher-btn file-group">
								<i class="fa fa-paperclip file-browser"></i>
								<input type="file">
							  </span>
							  <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
							  <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
							</div>
						  </div>
					</div>
				  </form>
				</div>
			  </div>
			</div>
		  </div>
		</section>
		<!-- /.content -->	  
	  </div>
  </div>
@endsection

