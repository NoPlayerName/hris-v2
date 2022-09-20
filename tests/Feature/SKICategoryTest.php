<?php

namespace Tests\Feature;

use App\Models\SkiSk;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase as TestsTestCase;

use function PHPUnit\Framework\assertTrue;

class SKICategoryTest extends TestsTestCase
{
    use RefreshDatabase;

    public function test_updateKategori()
    {
        $user = User::create(['nik' => 'test', 'name' => 'test', 'email' => 'test@example.com']);

        $this->actingAs($user);

        $response = $this->post('/pms/ski-cat', [
            'category' => 'Dept. Information Technology'
        ]);

        $response->assertRedirect(route('pms.ski.index'));


        $data = $this->post('/pms/ski-cat', [
                                  'id_ref_ski' => 1,
                                   'category' => 'Dept. Information Technology'
                             ], ['_method' => 'put' ]);


        $this->assertNotNull($data);
    }
}
