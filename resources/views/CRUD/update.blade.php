@extends('CRUD.index')
@section('contenido')

	<div class="col-md-4 col-md-offset-4">
		<h3 class="text-center">Actualizar datos</h3>
		<br>
		{{-- <form action="{{URL::to('agenda.store')}}" method="POST" class="form-horizontal" role="form"> --}}
		{!!Form::model(['route'=>'book.update','method'=>'POST'])!!}
			<div class="form-group">
				<label>Name</label>
				<input type="input" name="name" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="input" name="author" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Year</label>
				<input type="input" name="year" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" cols="30" rows="3" name="description" required></textarea>
			</div>
			<div class="form-group">
				<label>Paginate</label>
				<input type="input" name="paginate" class="form-control" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		{{-- </form> --}}
		{!!Form::close()!!}
	</div>

@stop