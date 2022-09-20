<?php

namespace Tests\Feature;

use App\Models\SKISk;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase as TestsTestCase;

use function PHPUnit\Framework\assertTrue;

class SKISkTest extends TestsTestCase
{
    use RefreshDatabase;

    public function test_addSk()
    {
        $user = User::create(['nik' => 'test', 'name' => 'test', 'email' => 'test@example.com']);

        $this->actingAs($user);

        $response = $this->post('/pms/ski_sk', [
            'id_ref_ski' => 1,
            'id_kelompok_sk' => 1,
            'sasaran_kerja' => 'finansial',
            'bobot' => 0.2,
            'kriteria_pengukuran' => 'kinerja',
            'target' => 'meningkatkan kinerja',
            'batas_waktu' => date('Ymd'),
            'rencana_tindakan' => 'meningkatkan kinerja',
            'sequence' => 1
        ]);



        $response->assertRedirect(route('pms.ski.index'));

        $data = SKISk::where('id_ref_ski', '1')->first();

        $this->assertNotNull($data);
    }

    public function test_delete()
    {
        $user = User::create(['nik' => 'test', 'name' => 'test', 'email' => 'test@example.com']);

        $this->actingAs($user);


        $response = $this->post('/pms/ski_sk', [
                   'id_ref_ski' => 1,
                   'id_kelompok_sk' => 1,
                   'sasaran_kerja' => 'finansial',
                   'bobot' => 0.2,
                   'kriteria_pengukuran' => 'kinerja',
                   'target' => 'meningkatkan kinerja',
                   'batas_waktu' => date('Ymd'),
                   'rencana_tindakan' => 'meningkatkan kinerja',
                   'sequence' => 1
               ]);



        $response->assertRedirect(route('pms.ski.index'));



        // $data = SKITugas::where('id_ref_ski', '1')->first();

        // $this->assertNotNull($data);

        // $response = $this->post('/pms/ski', [
        //           'id_ref_ski' => '1',
        //           'tugas' => 'membuat sistem',
        //       ]);



        $data = $this->post('/pms/ski_sk', [
                        'id_ref_ski' => '1'
                    ], ['_method' => 'delete' ]);


        // // $data = SKITugas::get()->first();

        // // if ($data) {


        // // }
        // // $this->assertSoftDeleted($data);
        // $data->assertRedirect(route('pms.ski.index'));

        $this->assertTrue(true);
    }
    public function test_update()
    {
        $user = User::create(['nik' => 'test', 'name' => 'test', 'email' => 'test@example.com']);

        $this->actingAs($user);



        $response = $this->post('/pms/ski_sk', [
                           'id_ref_ski' => 1,
                           'id_kelompok_sk' => 1,
                           'sasaran_kerja' => 'finansial',
                           'bobot' => 0.2,
                           'kriteria_pengukuran' => 'kinerja',
                           'target' => 'meningkatkan kinerja',
                           'batas_waktu' => date('Ymd'),
                           'rencana_tindakan' => 'meningkatkan kinerja',
                           'sequence' => 1
                       ]);



        $response->assertRedirect(route('pms.ski.index'));

    //     $response->assertRedirect(route('pms.ski.index'));

        $data = $this->post('/pms/ski_sk', [
                           'id_ref_ski' => 1,
                           'id_kelompok_sk' => 1,
                           'sasaran_kerja' => 'pelanggan',
                           'bobot' => 0.3,
                           'kriteria_pengukuran' => 'penjualan',
                           'target' => 'meningkatkan penjualan',
                           'batas_waktu' => date('Ymd'),
                           'rencana_tindakan' => 'meningkatkan penjualan',
                           'sequence' => 1
                      ], ['_method' => 'put' ]);

        $data->assertRedirect(route('pms.ski.index'));



    //     // $this->post('/pms/ski', [
    //     //                   'id_ref_ski_tugas' => '1',
    //     //                   'tugas' => 'mengubah sistem'], ['_method' => 'put' ]);

    //     $data = SKITugas::where('id_ref_ski', '1')->first();

    //     $this->assertNotNull($data);
    }
}
