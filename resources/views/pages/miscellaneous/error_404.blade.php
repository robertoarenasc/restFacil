<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>Riday - Restaurant Bootstrap Admin Template Webapp</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('css/vendors_css.css')}}">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="{{asset('css/horizontal-menu.css')}}"> 
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/skin_color.css')}}">	

</head>
<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-4.jpg)">
	
	<section class="error-page h-p100">
		<div class="container h-p100">
		  <div class="row h-p100 align-items-center justify-content-center text-center">
			  <div class="col-lg-7 col-md-10 col-12">
				  <div class="rounded10 p-50">
					  <img src="../images/auth-bg/404.jpg" class="max-w-200" alt="" />
					  <h1>Page Not Found !</h1>
					  <h3>looks like, page doesn't exist</h3>
					  <div class="my-30"><a href="{{route('main')}}" class="btn btn-danger">Back to dashboard</a></div>				  

					  <form class="search-form mx-auto mt-30 w-p75">
						<div class="input-group rounded5 overflow-h">
						  <input type="text" name="search" class="form-control" placeholder="Search">
						  <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="fa fa-search"></i></button>
						</div>
						<!-- /.input-group -->
					  </form>
				  </div>
			  </div>				
		  </div>
		</div>
	</section>


	<!-- Vendor JS -->
	<script src="{{asset('js/vendors.min.js')}}"></script>
	<script src="{{asset('js/pages/chat-popup.js')}}"></script>
	<script src="{{asset('vendor_components/apexcharts-bundle/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('icons/feather-icons/feather.min.js')}}"></script>	


</body>
</html>
