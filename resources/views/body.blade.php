
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
	<div class="sticky-toolbar">	    
        @include('layouts.sideBar')
	</div>
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
</body>
