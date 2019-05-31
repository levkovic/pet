@extends('layout')

@section('title', 'Project')

@section('content')
	<h1>{{ $project->title }}</h1>

	<p>{{ $project->description }}</p>

	@if($project->tasks->count())
		@foreach($project->tasks as $task)
			<div>
				<form method='POST' action="/tasks/{{ $task->id }}">
					@method('PATCH')
					@csrf
					<label for="completed">
						<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
						{{ $task->description }}
					</label>
				</form>
			</div>
		@endforeach
	@endif

	<form method="POST" action="/project/{{ $project->id }}/tasks">
		@csrf
		<h3>New Task</h3>

		<input type="text" class="input" name="description" placeholder="New Task" required>

		<input type="submit" value="Add Task">
	</form>

	@include('errors')

	<a href="/projects/{{ $project->id }}/edit">Edit</a>

	<form method="POST" action="/projects/{{ $project->id }}">
		@method('DELETE')
		@csrf
		<input type="submit" value="DELETE">
	</form>

@endsection