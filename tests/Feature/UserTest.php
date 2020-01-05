<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function register()
    {
        $response = $this->json('POST', '/api/login', ['email' => 'osamaismaeel5@gmail.com','password'=>'osama']);

        $response->assertStatus(401);
    }
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function login()
    {
        $response = $this->json('POST', '/api/login', ['email' => 'osamaismaeel4@gmail.com','password'=>'osama']);

        $response->assertStatus(200);
    }
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function loginWithWrongPassword()
    {
        $response = $this->json('POST', '/api/login', ['email' => 'osamaismaeel5@gmail.com','password'=>'osama1']);

        $response->assertStatus(401);
    }
}
