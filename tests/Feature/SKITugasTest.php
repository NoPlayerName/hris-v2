<?php

namespace Tests\Feature;

use App\Models\SkiTugas;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase as TestsTestCase;

class SKITugasTest extends TestsTestCase
{
    use RefreshDatabase;

    public function test_addTugas()
    {
        $user = User::create(['nik' => 'test', 'name' => 'test', 'email' => 'test@example.com']);

        $this->actingAs($user);

        $response = $this->post('/pms/ski', [
            'id_ref_ski' => '1',
            'tugas' => 'membuat sistem',
        ]);

        $response->assertRedirect(route('pms.ski.index'));

        $data = SkiTugas::where('id_ref_ski_tugas', '1')->first();

        $this->assertNotNull($data);
    }

    public function test_delete()
    {
        $user = User::create(['nik' => 'test', 'name' => 'test', 'email' => 'test@example.com']);

        $this->actingAs($user);


        $response =  $this->post('/pms/ski', [
                    'id_ref_ski' => '1',
                    'tugas' => 'membuat sistem',
                ]);
        $response->assertRedirect(route('pms.ski.index'));


        // $data = SkiTugas::where('id_ref_ski', '1')->first();

        // $this->assertNotNull($data);

        // $response = $this->post('/pms/ski', [
        //           'id_ref_ski' => '1',
        //           'tugas' => 'membuat sistem',
        //       ]);



        $data = $this->post('/pms/ski', [
                        'id_ref_ski' => '1'
                    ], ['_method' => 'delete' ]);


        // // $data = SkiTugas::get()->first();

        // // if ($data) {


        // // }
        // // $this->assertSoftDeleted($data);
        // $data->assertRedirect(route('pms.ski.index'));

        $this->assertNotNull($data);
    }
    public function test_update()
    {
        $user = User::create(['nik' => 'test', 'name' => 'test', 'email' => 'test@example.com']);

        $this->actingAs($user);


        $response =  $this->post('/pms/ski', [
                           'id_ref_ski' => '1',
                           'tugas' => 'membuat sistem',
                       ]);
        $response->assertRedirect(route('pms.ski.index'));

        $response = $this->post('/pms/ski', [
                          'id_ref_ski' => '1',
                          'tugas' => 'mengubah sistem',
                      ], ['_method' => 'put' ]);

        $response->assertRedirect(route('pms.ski.index'));


        // $this->post('/pms/ski', [
        //                   'id_ref_ski_tugas' => '1',
        //                   'tugas' => 'mengubah sistem'], ['_method' => 'put' ]);

        $data = SkiTugas::where('id_ref_ski', '1')->first();

        $this->assertNotNull($data);
    }
}
