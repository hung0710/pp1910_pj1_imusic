<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>Music</title>

    <!-- Styles -->
    <link href="template_web/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src ="{{url('template_web/js/css3-mediaqueries.js') }}"></script>
    <script type="text/javascript" href ="{{url('template_web/js/Search.js') }}"></script>
    <link rel="stylesheet" href="{{url('template_web/css/style_menu.css') }}" type="text/css"> 
    <link rel="stylesheet" href="{{url('template_web/css/slider.css') }}">

  </head>
  <body >
   <!-- menu -->
   @include('web.menu')
  <div class="container">
  		@include('web.contain')
	  	@yield('content')
	  	@include('web.list')
	</div>
  	<div class="panel panel-primary" >
		  <div class="panel-footer" style="background-color: #FAFAD2">
			  <div class="container">
				  <div class="caption">
					  <p style="text-align: center;color: blue;">Copyright (@) Imusic Team</p>
				  </div>
			  </div>
		  </div>
	  </div>	
	<script src="{{url('template_web/js/app.js') }}"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://vodkabears.github.io/vide/js/jquery.vide.min.js"></script>
  </body>
</html>