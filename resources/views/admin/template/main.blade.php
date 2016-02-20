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
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-10 col-xs-12">				
				<br><br>
				<div class="panel panel-default">		
					<section class="panel-heading">
						<h2>@yield('article_title')</h2>
					</section>				
					<section class="panel-body">
						@include('flash::message')
						@include('admin.template.partials.errors')								
						@yield('content')
					</section>
				</div>
				<br><br>
				<footer class="footer">
					Todos los derechos reservados &copy CodigoJFV 2016.
				</footer>
			</div>
		</div>
	</div>
	@yield('js')
</body>
</html>