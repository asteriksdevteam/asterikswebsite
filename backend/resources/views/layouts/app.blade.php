<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
	
	<!-- vector map CSS -->
    <link href="{{asset('vendors/vectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{asset('vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="{{asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
  <div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<div class="hk-wrapper hk-vertical-nav">
    @include('layouts.navbar')
    {{-- @include('layouts.header') --}}
    <div class="hk-pg-wrapper">
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>

    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dist/js/dataTables-data.js')}}"></script>



    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('dist/js/toggle-data.js')}}"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="{{asset('vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="{{asset('vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('vendors/morris.js/morris.min.js')}}"></script>
	
	<!-- EChartJS JavaScript -->
    <script src="{{asset('vendors/echarts/dist/echarts-en.min.js')}}"></script>
    
	<!-- Sparkline JavaScript -->
    <script src="{{asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
	
	<!-- Vector Maps JavaScript -->
    <script src="{{asset('vendors/vectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('dist/js/vectormap-data.js')}}"></script>

	<!-- Owl JavaScript -->
    <script src="{{asset('vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	
	<!-- Toastr JS -->
    <script src="{{asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{asset('dist/js/init.js')}}"></script>
	<script src="{{asset('dist/js/dashboard-data.js')}}"></script>
     <script src="{{asset('dist/js/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    @stack('scripts')
</body>
</html>
