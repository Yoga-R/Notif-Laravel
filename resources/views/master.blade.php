<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.3 | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/nalika-icon.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('asset/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    @include('tools.side')
    <!-- Start Welcome area -->
    {{-- @include('tools.header') --}}
    @yield('content')

    <!-- jquery
		============================================ -->
    <script src="{{asset('asset/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('asset/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('asset/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('asset/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('asset/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('asset/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('asset/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('asset/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('asset/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('asset/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('asset/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('asset/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('asset/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('asset/js/calendar/fullcalendar-active.js')}}"></script>
	<!-- float JS
		============================================ -->
    <script src="{{asset('asset/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('asset/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('asset/js/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('asset/js/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('asset/js/flot/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('asset/js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('asset/js/flot/flot-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('asset/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('asset/js/main.js')}}"></script>
</body>

</html>