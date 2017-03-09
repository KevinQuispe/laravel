@extends('CRUD.index')
@section('contenido')
<div class="col-md-6 col-md-offset-2">
		@if($errors)
		<div class="alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			</ul>
			@endforeach
		</div>
		@endif
</div>
	<div class="col-md-4 col-md-offset-4">
		<h3 class="text-center">Agregar un nuevo libro</h3>
		<br>
		{{-- <form action="{{URL::to('agenda.store')}}" method="POST" class="form-horizontal" role="form"> --}}
		{!!Form::open(['route'=>'book.store','method'=>'POST'])!!}
			<div class="form-group">
				<label>Name</label>
				<input type="input" name="name" class="form-control" placeholder="Ingrese Nombre" required>
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="input" name="author" class="form-control" placeholder="Ingrese autor"required>
			</div>
			<div class="form-group">
				<label>Year</label>
				<input type="input" name="year" class="form-control" placeholder="Año" required>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" cols="30" rows="3" name="description" placeholder="Ingrese alguna descripcion" required></textarea>
			</div>
			<div class="form-group">
				<label>Paginate</label>
				<input type="input" name="paginate" class="form-control" placeholder="Ingrese numero paginas"required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Guardar</button>
				<a href="{{URL::to('book/')}}" class="btn btn-danger">Cancelar</a>
			</div>
		{{-- </form> --}}
		{!!Form::close()!!}
	</div>

@stop
