<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    /** @test */
    public function a_user_can_have_a_project()
    {
        $user = factory('App\User')->create();

        $user->projects()->create(['title' => 'blaba', 'description' => 'ladfj;adsfj;ldsa']);

        $this->assertEquals('blaba', $user->projects->first()->title);
    }
}
