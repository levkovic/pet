@extends('layout')

@section('title', 'Project')

@section('content')
	<h1>{{ $project->title }}</h1>

	<p>{{ $project->description }}</p>

	<a href="/projects/{{ $project->id }}/edit">Edit</a>

	<form method="POST" action="/projects/{{ $project->id }}">
		@method('DELETE')
		@csrf
		<input type="submit" value="DELETE">
	</form>

@endsection