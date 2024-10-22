<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{

    use RefreashDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_user_can_register()
{
    $response = $this->post('/register', [
        'username' => 'John Doe',
        'email' => 'john.doe@example.com',
        'password'=> 'secret',
        'password_confirmation' => 'secret',
    ]);

    $response->assertRedirect('/home');
    $this->assertAuthenticated();
}

}
