<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeamsTest extends TestCase
{
	use RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_project()
    {
    	$this->withoutExceptionHandling();
    	// Given
		$this->actingAs(factory('App\User')->create());
		// When
		$this->post('/projects', [
			'title' => 'acme',
			'description' => 'blabla'
		]);
		// Then
		$this->assertDatabaseHas('projects', ['title'=> 'acme']);

        $this->assertTrue(true);
    }
}
