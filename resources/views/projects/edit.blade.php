@extends('layout')

@section('title', 'Projects')

@section('content')
	<h1>Edit Project</h1>

	<form method="POST" action="/projects/{{ $project->id }}">

		@method('PATCH')
		@csrf

		<div>
			<input type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
		</div>


		<div>
			<textarea name="description" placeholder="Project descriptions">{{ $project->description }}</textarea>
		</div>

		<div>
			<input type="Submit" value="Update Project">
		</div>
	</form>

@endsection