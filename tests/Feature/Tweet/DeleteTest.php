<?php

namespace Tests\Feature\Tweet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Tweet;

class DeleteTest extends TestCase
{
    use RefreshDatabase;    
	/**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_successed()
    {
        $user = User::factory()->create();	// create user    

	$tweet = Tweet::factory()->create(['user_id' => $user->id]);	// create tweet

        $this->actingAs($user);		// keep login as user

	$response = $this->delete('/tweet/delete/' . $tweet->id);	// created tweetId 

        $response->assertRedirect('/tweet');
    }
}
