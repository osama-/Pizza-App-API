<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use APP\User as User;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function CreateOrderWithAllParams()
    {
        $response = $this->json('POST', '/api/order/create', ['delivey_notes' => 'test delivery notes','orderItems'=>['product_id'=>1,'quantity'=>1]]);

        $response->assertStatus(200);
    }
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function  CreateOrderWithoutQuantity()
    {
        $response = $this->json('POST', '/api/order/create', ['delivey_notes' => 'test delivery notes','orderItems'=>['product_id'=>1
        ]]);

        $response->assertStatus(200);

    }


}
