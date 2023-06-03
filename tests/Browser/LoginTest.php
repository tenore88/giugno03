<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testSuccessfulLogin()
    {
	$this->browse(function (Browser $browser) {
            $user = User::factory()->create();
            $browser->visit('/login')
		->type('email', $user->email)
		->type('password', 'password')
	        ->press('LOG IN') 	// Log In ボタンをクリック
                ->assertPathIs('/tweet')
		->assertSee('つぶやきアプリ');
        });
    }
}
