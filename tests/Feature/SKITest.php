<?php

namespace Tests\Feature;

use App\Models\SKITugas ;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase as TestsTestCase;

class SKITest extends TestsTestCase
{
    use RefreshDatabase;

    public function test_ski()
    {
        $user = User::create(['nik' => 'test', 'name' => 'test', 'email' => 'test@example.com']);

        $this->actingAs($user);

        $response = $this->post('/pms/ski', [
            'id_ref_ski' => '1',
            'tugas' => 'membuat sistem',
        ]);

        $response->assertRedirect(route('pms.ski.index'));

        $data = SKITugas::where('id_ref_ski', '1')->first();

        $this->assertNotNull($data);
    }
}
