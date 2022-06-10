<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RepairTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_repair_function()
    {
        $response = $this->withHeaders([
            'X-Header' => 'string',
        ])->post('/repair', ['telephonenamber' => '+380000000000',
            'choose' => '1'
        ]);

        $response->assertStatus(405);
    }
    public function test_repair_nomatter()
    {
        $response = $this->withHeaders([
            'X-Header' => 'string',
        ])->get('/repair', ['telephonenamber' => '',
        'choose' => '1']);

        $response->assertStatus(200);
    }
    public function test_repair_phoneplus()
    {
        $response = $this->withHeaders([
            'X-Header' => 'string',
        ])->get('/repair', ['telephonenamber' => '+3800000000002111',
            'choose' => '1']);

        $response->assertStatus(200);
    }
    public function test_repairsubmit_function()
    {
        $response = $this->withHeaders([
            'X-Header' => 'string',
        ])->get('/repair/submit', ['telephonenamber' => '+380000000000',
            'choose' => '1'
        ]);

        $response->assertStatus(405);
    }

    public function test_repairsubmit_token()
    {
        $response = $this->post('/repair/submit');

        $token = session('_token');

        $response = $this->post('/repair/submit', [
            'telephonenamber' => '+380000000000',
            'choose' => '1',
            '_token' => $token,
        ]);

        $response->assertStatus(302);
    }
    public function test_repairsubmit_notoken()
    {
        $response = $this->post('/repair/submit');


        $response = $this->post('/repair/submit', [
            'telephonenamber' => '+380000000000',
            'choose' => '1',
        ]);

        $response->assertStatus(419);
    }
}
