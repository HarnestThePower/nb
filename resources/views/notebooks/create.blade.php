@extends('layouts.base')

@section('content')

<div class="container">

	<h1>Create Notebooks</h1>
									<!--defining route also done in web.php-->
		<form method="GET" action="{{action('NotebooksController@store')}}">
		{{csrf_field()}}
			<div class= "form-group">
				<label for="name">Notebook Name:</label>
				<input class="form-control" type="text" name="name">
				<input class="btn btn-primary" type="submit" value="Done">

			</div>
			
		</form>
</div>

@endsection