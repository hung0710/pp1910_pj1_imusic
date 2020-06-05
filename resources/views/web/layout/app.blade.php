<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="{{url('template_web/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<!-- <link rel="stylesheet" href="{{url('template_web/css/rating.css')}}" type='text/css' /> -->
	<!-- Custom CSS -->
	<link href="{{url('template_web/css/style.css')}}" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="{{url('template_web/css/font-awesome.css')}}" rel="stylesheet"> 
	<!-- jQuery -->
	<!-- lined-icons -->
	<link rel="stylesheet" href="{{url('template_web/css/icon-font.css')}}" type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="{{url('template_web/css/audio.css')}}">
	<link href="{{url('template_web/css/jplayer.blue.monday.min.css')}}" rel="stylesheet" type="text/css">
	<script src="{{url('template_web/js/jquery-2.1.4.js')}}"></script>
	<script type="text/javascript" src="{{url('template_web/js/mediaelement-and-player.min.js')}}"></script>
	
</head> 
<body class="sticky-header left-side-collapsed" >
	<section>
		@include('web.layout.sidebar')
		<div class="main-content">
			@include('web.layout.header')
			<div id="page-wrapper">
				@yield('content')
			</div>
		</div>
		@include('web.layout.footer')
	</section>
	<script src="{{url('template_web/js/jquery.nicescroll.js')}}"></script>
	<script src="{{url('template_web/js/scripts.js')}}"></script>
	<script src="{{url('template_web/js/classie.js')}}"></script>
	<script src="{{url('template_web/js/uisearch.js')}}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{url('template_web/js/bootstrap.js')}}"></script>
</body>
</html>