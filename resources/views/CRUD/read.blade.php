@extends('CRUD.index')
@section('contenido')

	<h3 class="pull-left">Lista de libros</h3>
		<p class="text-right"><a href="{{URL::to('book/create')}}" class="btn btn-info">Nuevo</a></p>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead class="btn-primary">
				<tr>
					<th>Title</th>
					<th>Author</th>
					<th>Year</th>
					<th>Description</th>
					<th>Paginate</th>
					<th>Settings</th>
				</tr>
			</thead>
			@foreach($books as $book)
				<tbody>
					<tr>
						<td>{{$book->name}}</td>
						<td>{{$book->author}}</td>
						<td>{{$book->year}}</td>
						<td>{{$book->description}}</td>
						<td>{{$book->paginate}}</td>
						<td>
							<a href="{{route('book.show',$book->id)}}" class="btn btn-success btn-xs">Update</a>
							<a href="{{route('book.destroy',$book->id)}}" class="btn btn-danger btn-xs">Delete</a>
						</td>
					</tr>
				</tbody>
			@endforeach
		</table>
		
		{!! str_replace('/?','?', $books->render())!!}
	</div>

@stop