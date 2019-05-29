@extends('layout')

@section('title', 'Projects')

@section('content')
	<h1>Create a new projects</h1>

	<form method="POST" action="/projects">

		@csrf

		<div>
			<input type="text" name="title" placeholder="Project title" value="{{ old('title') }}" required>
		</div>


		<div>
			<textarea name="description" placeholder="Project descriptions" required>{{ old('description') }}</textarea>
		</div>

		<div>
			<input type="Submit" value="Create Project">
		</div>

		@if($errors->any())
			<div>
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</form>

@endsection