@extends('layouts.base')
@section('content')
<div class="container">
	<h1>Edit Notebooks</h1>
	<form method="POST" action="{{action('NotebooksController@update', $notebook->id )}}">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<form method="GET" action="{{action('NotebooksController@store')}}">
		{{csrf_field()}}
			<div class= "form-group">
				<label for="name">Notebook:</label>
				<input class="form-control" type="text" value="{{$notebook->name}}" name="name">
			</div>

			<div class= "form-group">
				<label for="body">Note Body:</label>
				<input class="form-control" type="text" value="{{$notebook->body}}" name="body">
			</div>

			<input type ="hidden" name="notebook_id" value="{{$notebook->id}}">

			<input class="btn btn-primary" type="submit" value="Done">
			
		</div>
	</form>
</div>
@endsection