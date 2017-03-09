@extends('auth.plantilla')
@section('contenido')

    <div class="panel-presentacion">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                    <a href="#" class="thumbnail">
                        <img src={{asset('assets/css/imagenes/fondo/phonebook.jpg')}} alt="">
                    </a>
            </div>
        </div>
        <div class="row">
                <h3 class="text-center" style="color:white; font-family:sans-serif;"><strong><i>phoneBook</i></strong> es una aplicación sencilla que permite administrar tus contactos telefónicos de manera rápida, lo que permite que siempre los tengas a la mano cuando los necesites.
                </h3>
        </div>
    </div>
@stop