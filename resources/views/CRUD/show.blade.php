@extends('CRUD.index')
@section('contenido')
	<div class="col-md-4 col-md-offset-4">
		<h3 class="text-center">Actualizar Datos de Libro</h3>
		<br>
		{{-- <form action="{{URL::to('agenda.store')}}" method="POST" class="form-horizontal" role="form"> --}}
		{!!Form::model($book,['route'=>['book.update',$book->id],'method'=>'PUT'])!!}
			<div class="form-group">
				{!!Form::label('Name')!!}
				{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'nameaksdasa'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Author')!!}
				{!!Form::text('author',null,['class'=>'form-control', 'placeholder'=>'name'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Year')!!}
				{!!Form::text('year',null,['class'=>'form-control', 'placeholder'=>'name'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Description')!!}
				{!!Form::textarea('description',null,['class'=>'form-control','cols'=>'30','rows'=>'3', 'placeholder'=>'name'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Paginate')!!}
				{!!Form::text('paginate',null,['class'=>'form-control', 'placeholder'=>'name'])!!}
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update data</button>

			</div>

		{{-- </form> --}}

		{!!Form::close()!!}

		{!!Form::open(['route'=>['book.destroy',$book->id],'method'=>'DELETE'])!!}
			<div class="form-group">
				<button type="submit" class="btn btn-danger">Delete book</button>
			</div>
		{!!Form::close()!!}

	</div>

@stop
