<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Riday - Restaurant Bootstrap Admin Template Webapp</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('css/vendors_css.css')}}">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="{{asset('css/horizontal-menu.css')}}"> 
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/skin_color.css')}}">
	
</head>

<body class="layout-top-nav light-skin theme-primary fixed">

<div class="wrapper">
	<div id="loader"></div>
    <header class="main-header">
        @include('layouts.header')
    </header>

    <nav class="main-nav" role="navigation">
    @include('layouts.nav')
    </nav>

    //contenido
    @yield('content')

    <div class="right-bar">
        @include('layouts.contentRigthSideBar')
    </div>

    <footer class="main-footer">
        @include('layouts.footer')
    </footer>

  <aside class="control-sidebar control-dark">
	  
	@include('layouts.contentSettingsHeader')
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	    
    @include('layouts.sideBar')
	
    <!-- Vendor JS -->
	<script src="{{asset('js/vendors.min.js')}}"></script>
	<script src="{{asset('js/pages/chat-popup.js')}}"></script>
	<script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>	

	
	<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
	
	<!-- Riday Admin App -->
	<script src="{{asset('js/jquery.smartmenus.js')}}"></script>
	<script src="{{asset('js/menus.js')}}"></script>
	<script src="{{asset('js/template.js')}}"></script>
	
@stack('js')
@stack('js_applications')
@stack('js_candidates')
</body>
</html>
