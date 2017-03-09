<!DOCTYPE html>
<html>
<head>
	{!!Html::style('assets/css/bootstrap.css')!!}
	{!!Html::style('assets/css/estilos.css')!!}
	<title>Laravel App</title>
</head>
<body>
	<div class="navbar navbar-inverse">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{URL::to('book/')}}">LaravelApp-Alyssa</a>
			<ul class="nav navbar-nav">
				<li class="">
				   <a href="{{URL::to('book/')}}">Home</a>
				</li>
				<li class="dropdown">
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Llibros<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="{{URL::to('book/create')}}">Registrar Libros</a></li>
						<div class="divider">
						</div>
				    <li><a href="{{URL::to('book/')}}">Listar Libros</a></li>
				  </ul>
		   </li>
				<li class="dropdown">
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agenda<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="">Registrar Contactos</a></li>
						<div class="divider">
						</div>
				    <li><a href="#">Listar Contactos</a></li>
				  </ul>
		   </li>
				<li>
					<a href="#">Usuarios</a>
				</li>

			</ul>
		</div>
	</div>

	<div class="container">
	 <div class="col-md-12">
	 	@yield('contenido')
	 </div>

	</div>
    <div class="pie">
    	<footer>
    	 <small>&copy Derechos reservados</small>
    </footer>
    </div>

	{{-- Scripts --}}
	{!!Html::script('assets/js/jquery.js')!!}
	{!!Html::script('assets/js/bootstrap.min.js')!!}

</body>
</html>
