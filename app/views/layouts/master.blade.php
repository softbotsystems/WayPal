<!DOCTYPE html>
<html lang="en" ng-app="wayApp" ng-init="base = '{{ URL::to('/') }}' ">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WayPal</title>

		<!-- Bootstrap CSS -->
		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->

		{{ HTML::style(asset('assets/css/bootstrap.min.css')) }}
		{{ HTML::style(asset('assets/css/style.css')) }}

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container">

			@include('partials.navs.top')
			
			<div class="row">
				@yield('content')
			</div>

			@include('partials.footer')

		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		{{ HTML::script(asset('libs/angular/angular.min.js')) }}
		{{ HTML::script(asset('libs/angular-route/angular-route.min.js')) }}
		{{ HTML::script(asset('assets/src/app.js')) }}
		{{ HTML::script(asset('assets/src/controllers.js')) }}

	</body>
</html>