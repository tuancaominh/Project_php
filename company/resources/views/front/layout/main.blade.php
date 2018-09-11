<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hùng Đại Dương Co.,LTD</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("front/index/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="{{ asset("front/index/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
	<link href="{{ asset("front/index/css/animate.css")}}" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="{{ asset("front/index/css/style.css")}}" rel="stylesheet">
	<link href="{{ asset("front/index/color/default.css")}}" rel="stylesheet">
    <!-- Core JavaScript Files -->
    <script src="{{ asset("front/index/js/jquery.min.js") }}"></script>
    <script src="{{ asset("front/index/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("front/index/js/jquery.easing.min.js") }}"></script>	
	<script src="{{ asset("front/index/js/jquery.scrollTo.js") }}"></script>
	<script src="{{ asset("front/index/js/wow.min.js") }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset("front/index/js/custom.js") }}"></script>
	@yield('script_extend')
	@yield('css_extend')

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    @include('front.layout.menu')
	    <!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h4>Công Ty TNHH Thương Mại & Sản Xuất</h4>
			<h2>HÙNG ĐẠI DƯƠNG</h2>
		</div>
    </section>
	<!-- /Section: intro -->
    @yield('content')
	@include('front.layout.footer')


</body>

</html>
