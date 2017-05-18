@extends('layouts.base')

@section('content')

<div class="container">

	<h1>Create Notes</h1>
									<!--defining route also done in web.php-->
		<form method="GET" action="{{action('NotesController@store')}}">
		{{csrf_field()}}
			<div class= "form-group">
				<label for="title">Note Title:</label>
				<input class="form-control" type="text" name="title">
			</div>

			<div class= "form-group">
				<label for="body">Note Body:</label>
				<input class="form-control" type="text" name="body">
			</div>

			 <input type ="hidden" name="notebook_id" value="{{notebook->$id}}">
 
			<input class="btn btn-primary" type="submit" value="Done">
			
			
		</form>
</div>

@endsection