<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function testExample()
    {
        $response = $this->get('/api/product');
        $response->assertStatus(200);
    }
}
