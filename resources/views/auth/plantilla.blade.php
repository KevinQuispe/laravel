<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	{!!Html::style('assets/css/bootstrap.min.css')!!}
	{!!Html::style('assets/css/estilos.css')!!}
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!!URL::to('/agenda')!!}"><i>phoneBook</i></a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::guest())
						<li><a href="{{route('auth/login')}}"><span class="glyphicon glyphicon-log-in"></span> Inicio Sesión</a></li>
						<li><a href="{{route('auth/register')}}"><span class="glyphicon glyphicon-copy"></span> Registrarse</a></li>
					@else
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}}</a></li>
						<li><a href="{{route('auth/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
					@endif
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="container">
		@yield('contenido')
	</div>
	


	{!!Html::script('assets/js/jquery.js')!!}
	{!!Html::script('assets/js/bootstrap.min.js')!!}
</body>
</html>