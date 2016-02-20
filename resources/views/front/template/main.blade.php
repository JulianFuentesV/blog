<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Default') | CodigoJFV</title>
	<!-- Fonts -->
    	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    	<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    	<link href='https://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css'>
    	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <!-- Fin Fonts -->
	<link rel="stylesheet" href=" {{ asset('css/css.css') }} ">
	<link rel="stylesheet" href=" {{ asset('plugins/bootstrap336/css/bootstrap.css') }} ">
	<link rel="stylesheet" href=" {{ asset('plugins/chosen/chosen.css') }} ">
	<link rel="stylesheet" href=" {{ asset('plugins/trumbowyg/ui/trumbowyg.css') }} ">
	<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap336/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
</head>
<body>
	<div id="app-layout" class="lato">
		@include('admin.template.partials.nav')		
	</div>
	<br><br><br>
	<a href=" {{ route('home') }} ">
		<div class="jumbotron" id="portada" style="background: url({{ asset('imgs/portadacod.jpg') }});">
			<div class="container">
				<div class="jumbo">
					<h1 id="txt-jumbo" class="lobster text-center">"En un mundo que evoluciona, el que no avanza retrocede."</h1>
				</div>
			</div>
		</div>
	</a>
	<div class="container">
		<div class="col-md-9 col-sm-9 col-xs-12">
			<div>				
				<h1 class="bangers">@yield('article_title')</h1><hr>
			</div>
			<div class="row">
				@yield('content')
			</div>			
		</div>
		<div class="row" style="margin: auto;">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<br><br><br><br><br>
				@yield('content2')
				<a href="http://www.youtube.com/channel/UCLMRzcDHNvB7oUPtqERSIqw?sub_confirmation=1" target="_blank"><img src=" {{ asset('imgs/youtube.png') }} " alt="YouTube" width="49%" height="125" style="border: 1px solid #FF0000;" /></a>
				<a href="http://api.hostinger.co/redir/6156461" target="_blank"><img src="http://www.hostinger.co/banners/co/hostinger-125x125-powered-1.gif" alt="Hosting" border="0" width="48%" height="125" /></a>
			</div>
		</div>
		<div class="text-center">@yield('render')</div>
		<br><br>
		<footer class="footer">
			<h1 class="marvel fsM text-center">Todos los derechos reservados &copy CodigoJFV 2016.</h1>
		</footer>
	</div>
	@yield('js')	
</body>
</html>