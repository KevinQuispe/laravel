@extends('auth.plantilla')
@section('contenido')
@include('alerts.success')

	<div class="row">
		<h3 style="color:white;">Hola {{Auth::user()->name}}, esta es tu lista de contactos...</h3>
		<p class="pull-right"><a class="btn btn-primary" href="{{URL::to('/agenda/create')}}"><span class="glyphicon glyphicon-plus"></span> Nuevo</a></p>		
	</div>

	@if($contactos->count())
	<div class="row">
		<div class="panel panel-primary">
		  	<div class="panel-heading">
				<h3 class="panel-title">Lista de Contactos</h3>
		  	</div>
		  	<div class="panel-body">
				<table class="table">
					<thead>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Celular</th>
						<th>Email</th>
						<th>Dirección</th>
						<th>Opciones</th>
					</thead>
					@foreach($contactos as $contacto)
					<tbody>
						<tr>
							<td>{{$contacto->nombre}}</td>
							<td>{{$contacto->apellidos}}</td>
							<td>{{$contacto->telefono}}</td>
							<td>{{$contacto->email}}</td>
							<td>{{$contacto->direccion}}</td>
							<td>
								<a href="{{ route('agenda.edit', $contacto->id) }}" class="btn btn-default"><span class="glyphicon glyphicon-cog"></span></a>
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
		  </div>
		</div>
	</div>
	@else
		<h4 class="text-center" style="color:white;">Bienvenido!!, para comenzar a registrar tus contactos debes hacer clic en el botón nuevo...</h4>
	@endif
	
@stop