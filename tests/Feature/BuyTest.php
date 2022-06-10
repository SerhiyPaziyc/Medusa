<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BuyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_submit()
    {
        $response = $this->withHeaders([
            'X-Header' => 'string',

        ])->post('/buy',
            ['firstname' => 'Den',
            'lastname' => 'Holend',
            'telephonenumber' => '+380000000000',
            'address' => 'New Yurk',
            'product_id' => '2']);

        $response->assertStatus(405);
    }


public function test_submit_good()
{
    $response = $this->withHeaders([
        'X-Header' => 'string',

    ])->get('/buy',
        ['firstname' => 'Den',
            'lastname' => 'Holend',
            'telephonenumber' => '+380000000000',
            'address' => 'New Yurk',
            'product_id' => '2']);

    $response->assertStatus(200);
}

    public function test_submit_nomatter()
    {
        $response = $this->withHeaders([
            'X-Header' => 'string',

        ])->get('/buy',
            ['firstname' => '',
                'lastname' => '',
                'telephonenumber' => '+380000000000',
                'address' => 'New Yurk',
                'product_id' => '2']);

        $response->assertStatus(200);
    }

    public function test_submit_phoneplus()
    {
        $response = $this->withHeaders([
            'X-Header' => 'string',

        ])->get('/buy',
            ['firstname' => 'Den',
                'lastname' => 'Holend',
                'telephonenumber' => '+380000000000211',
                'address' => 'New Yurk',
                'product_id' => '2']);

        $response->assertStatus(200);
    }
    public function test_repairsubmit_function()
    {
        $response = $this->post('/buy/submit');

        $token = session('_token');

        $response = $this->withHeaders([
            'X-Header' => 'string',
        ])->get('/repair/submit', [
            'firstname' => 'Den',
            'lastname' => 'Holend',
            'telephonenumber' => '+380000000000211',
            'address' => 'New Yurk',
            'product_id' => '2',
            '_token' => $token,
        ]);

        $response->assertStatus(405);
    }
    public function test_buysubmit_token()
    {
        $response = $this->post('/buy/submit');

        $token = session('_token');

        $response = $this->post('/buy/submit', [
            'firstname' => 'Den',
            'lastname' => 'Holend',
            'telephonenumber' => '+380000000000211',
            'address' => 'New Yurk',
            'product_id' => '2',
            '_token' => $token,
        ]);

        $response->assertStatus(302);
    }
    public function test_buysubmit_notoken()
    {
        $response = $this->post('/buy/submit');


        $response = $this->post('/buy/submit', [
            'firstname' => 'Den',
            'lastname' => 'Holend',
            'telephonenumber' => '+380000000000211',
            'address' => 'New Yurk',
            'product_id' => '2',
        ]);

        $response->assertStatus(419);
    }
}
