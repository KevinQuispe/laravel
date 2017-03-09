@extends('auth.plantilla');
@section('contenido');

	<div class="col-md-4 col-md-offset-4">

		<div class="panel panel-primary">
			  <div class="panel-heading">
					<h3 class="panel-title"></h3>
			  </div>
			  <div class="panel-body">
					
				{!!Form::model($contacto,['route'=>['agenda.update',$contacto->id],'method'=>'PUT'])!!}

					<div class="form-group">
						{!!Form::label('Nombre')!!} 	
						{!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Apellidos')!!}
						{!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Apellidos'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Celular')!!}
						{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'987898923', 'maxlength'=>'9'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Email')!!}
						{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'email@hotmail.com'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('Dirección')!!}
						{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Calle...'])!!}
					</div><hr>
						{!!Form::submit('Actualizar Contacto',['class'=>'btn btn-primary btn-lg btn-block'])!!}
				{!!Form::close()!!}

				<!--Formulario para eliminar datos-->

				{!!Form::open(['route'=>['agenda.destroy',$contacto->id],'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar Contacto',['class'=>'btn btn-danger btn-lg btn-block'])!!}
				{!!Form::close()!!}
			  </div>
		</div>
	</div>
@stop