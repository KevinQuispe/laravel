@extends('auth.plantilla')
@section('contenido')

	<div class="col-md-4 col-md-offset-4">
		@include('alerts.request')	
		<div class="panel_login">
			<div class="panel panel-primary">
				  <div class="panel-heading">
						<h3 class="panel-title">Iniciar Sesión</h3>
				  </div>
				  <div class="panel-body">
						{!!Form::open(['route'=>'auth/login'])!!}
							<div class="form-group">
								{!!Form::label('Usuario')!!}
								{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'usuario'])!!}
							</div>
							<div class="form-group">
								{!!Form::label('Password')!!}
								{!!Form::password('password',['class'=>'form-control','placeholder'=>'contraseña'])!!}
							</div>
							<div>
								{!!Form::submit('Iniciar sesión',['class'=>'btn btn-primary btn-lg btn-block'])!!}
							</div>
						{!!Form::close()!!}
				  </div>
			</div>
		</div>
	</div>
	

@stop
