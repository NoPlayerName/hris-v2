<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Testing\TestResponse;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUser()
    {
        $user = User::factory()->create();

        $this->actingAs($user);
    }

    protected function ajax()
    {
        $this->withHeader('HTTP_X_REQUESTED_WITH', 'XMLHttpRequest');
    }

    protected function noAjax()
    {
        $this->withHeader('HTTP_X_REQUESTED_WITH', '');
    }

    protected function assertAjaxRedirect(TestResponse $response, string $redirect, array $value = [], int $statusCode = 200)
    {
        $response->assertJson(['redirect' => $redirect, ...$value]);
        $response->assertStatus($statusCode);
    }
}
