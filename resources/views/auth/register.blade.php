@extends('auth.plantilla')

@section('contenido')

<div class="col-md-4 col-md-offset-4">
    @include('alerts.request')
            <div class="panel panel-primary">
                <div class="panel-heading">Registrarse</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!}
 
                        <div class="form-group">
                            <label>Nombre</label>
                            {!! Form::input('text', 'name', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            {!! Form::password('password', ['class'=> 'form-control']) !!}
                        </div>
 
                        <div class="form-group">
                            <label>Confirmar Password</label>
                            {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
                        </div>
 
                        <div>
                            {!! Form::submit('Registrar',['class' => 'btn btn-primary btn-lg btn-block']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>

@stop