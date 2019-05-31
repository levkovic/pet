<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Events\ProjectCreated;

class ProjectsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$projects = auth()->user()->projects;

		return view('projects.index', compact('projects'));
	}

	public function store()
	{
		$attributes = $this->validateProject();

		$attributes['owner_id'] = auth()->id();

		Project::create($attributes);

		// event(new ProjectCreated($project));

		return redirect('/projects');
	}

	public function create()
	{
		return view('projects.create');
	}

	public function show(Project $project)
	{
		$this->authorize('view', $project);

		return view('projects.show', compact('project'));
	}

	public function update(Project $project)
	{
		$project->update(request(['title', 'description']));

		return redirect('/projects');
	}

	public function destroy(Project $project)
	{
		$project->delete();

		return redirect('/projects');
	}

	public function edit(Project $project)
	{
		return view('projects.edit', compact('project'));
	}

	protected function validateProject()
	{

		return request()->validate([
			'title' => ['required', 'min:3'],
			'description' => 'required'
		]);
	}
}
