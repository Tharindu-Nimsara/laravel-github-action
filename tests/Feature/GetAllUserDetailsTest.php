<?php

namespace Tests\Feature;

use Tests\TestCase;

class GetAllUserDetailsTest extends TestCase
{

    public function test_get_all_users_details()
    {
        $response = $this->getJson('/api/get-all-users');


        $response->assertStatus(200);
    }
}
