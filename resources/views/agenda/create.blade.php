@extends('auth.plantilla');
@section('contenido');

	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-primary">
			  <div class="panel-heading">
					<h3 class="panel-title">Agregar Nuevo Contacto</h3>
			  </div>
			  <div class="panel-body">
					
				{!!Form::open(['route'=>'agenda.store','method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('Nombre')!!} 	
						{!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre','required'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Apellidos')!!}
						{!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Apellidos'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Celular')!!}
						{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'987898923', 'maxlength'=>'9','required'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Email')!!}
						{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'email@hotmail.com'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Dirección')!!}
						{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Calle...','required'])!!}
					</div>
						{!!Form::submit('Guardar',['class'=>'btn btn-primary btn-lg btn-block'])!!}
						{!!Form::close()!!}

			  </div>
		</div>
	</div>

@stop