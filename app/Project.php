<?php

namespace App;

use App\Events\ProjectCreated;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
//    protected $fillable = [
//		'title',
//		'description'
//	];

	protected $dispatchesEvents = [
		'created' => ProjectCreated::class
	];

	protected $guarded = [];

	protected static function boot()
	{
		parent::boot();

		static::created(function($project) {
			// event on Project created
		});
	}

    public function tasks()
	{
		return $this->hasMany(Task::class);
	}

	public function addTask($task)
	{
		$this->tasks()->create($task);
	}

	public function owner()
	{
		$this->belongsTo(User::class);
	}
}
