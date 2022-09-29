<?php

namespace Tests\Feature;

use App\Data\PMS\ReferensiPAData;
use App\Enums\ManajerialLevel;
use App\Enums\PAAspek;
use App\Models\PMS\ReferensiPA;
use App\Models\PMS\ReferensiPAPertimbangan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ReferensiPATest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUser();
    }

    public function test_referensi_pa_redirect_manajerial_level()
    {
        $response = $this->get(route('pms.referensi-pa.index'));
        $response->assertRedirect(route('pms.referensi-pa.index', ['level' => ManajerialLevel::SeniorLeader]));
    }

    public function test_referensi_pa_get_list_referensi_if_ajax_index()
    {
        $refPA = ReferensiPA::factory(state: [
            'manajerial_level' => ManajerialLevel::SeniorLeader,
        ])->has(ReferensiPAPertimbangan::factory()->count(3), 'pertimbangan')->create();

        $diff = ReferensiPAData::collection([$refPA]);

        $this->ajax();
        $response = $this->getJson(route('pms.referensi-pa.index', ['level' => ManajerialLevel::SeniorLeader]));

        $response->assertJson(
            fn (AssertableJson $json) => $json->has('data')
        );

        $response->assertJson(['data' => $diff->toArray()]);
    }

    public function test_referensi_pa_menambahkan_referensi()
    {
        $paPertimbangan = [
            [
                'pertimbangan' => 'Memiliki pengetahuan tentang bidang pekerjaannya.',
            ],
            [
                'pertimbangan' => 'Mampu melaksanakan tugas berdasarkan sistem dan prosedur.',
            ],
        ];

        $data = ReferensiPAData::from([
            'aspek' => PAAspek::Teknis,
            'utama' => 'Pengetahuan Pekerjaan & Penguasaan Bidang Keahlian',
            'keterangan' => 'Aspek teknis yang diukur yaitu kompetensi yang berkaitan dengan pengetahuan dan penguasaan bidang pekerjaan/keahlian termasuk didalamnya ketrampilan teknis yang mendukung pekerjaan.',
            'bobot' => 0.2,
            'manajerial_level' => ManajerialLevel::IndividualContributor,
            'pertimbangan' => $paPertimbangan,
        ]);

        $response = $this->post(route('pms.referensi-pa.store'), $data->toArray());

        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('pms.referensi-pa.index'));

        $this->assertDatabaseHas('ref_pa', [
            'aspek' => $data->aspek,
            'utama' => $data->utama,
            'keterangan' => $data->keterangan,
            'bobot' => $data->bobot,
            'manajerial_level' => $data->manajerialLevel,
        ]);

        foreach ($paPertimbangan as $pertimbangan) {
            $this->assertDatabaseHas('ref_pa_pertimbangan', $pertimbangan);
        }
    }

    public function test_referensi_pa_menambahkan_referensi_ajax()
    {
        $paPertimbangan = [
            [
                'pertimbangan' => 'Memiliki pengetahuan tentang bidang pekerjaannya.',
            ],
            [
                'pertimbangan' => 'Mampu melaksanakan tugas berdasarkan sistem dan prosedur.',
            ],
        ];

        $data = ReferensiPAData::from([
            'aspek' => PAAspek::Teknis,
            'utama' => 'Pengetahuan Pekerjaan & Penguasaan Bidang Keahlian',
            'keterangan' => 'Aspek teknis yang diukur yaitu kompetensi yang berkaitan dengan pengetahuan dan penguasaan bidang pekerjaan/keahlian termasuk didalamnya ketrampilan teknis yang mendukung pekerjaan.',
            'bobot' => 0.2,
            'manajerial_level' => ManajerialLevel::IndividualContributor,
            'pertimbangan' => $paPertimbangan,
        ]);

        $this->ajax();
        $response = $this->post(route('pms.referensi-pa.store'), $data->toArray());

        $response->assertSessionHasNoErrors();
        $this->assertAjaxRedirect($response, route('pms.referensi-pa.index'), statusCode:Response::HTTP_CREATED);

        $this->assertDatabaseHas('ref_pa', [
            'aspek' => $data->aspek,
            'utama' => $data->utama,
            'keterangan' => $data->keterangan,
            'bobot' => $data->bobot,
            'manajerial_level' => $data->manajerialLevel,
        ]);

        foreach ($paPertimbangan as $pertimbangan) {
            $this->assertDatabaseHas('ref_pa_pertimbangan', $pertimbangan);
        }
    }

    public function test_referensi_pa_invalid_form_data()
    {
        $paPertimbangan = [
            [
                'pertimbangan' => 'Memiliki pengetahuan tentang bidang pekerjaannya.',
            ],
            [
                'pertimbangan' => 'Mampu melaksanakan tugas berdasarkan sistem dan prosedur.',
            ],
        ];

        $data = [
            'aspek' => 'ada',
            'utama' => 'Pengetahuan Pekerjaan & Penguasaan Bidang Keahlian',
            'keterangan' => 'Aspek teknis yang diukur yaitu kompetensi yang berkaitan dengan pengetahuan dan penguasaan bidang pekerjaan/keahlian termasuk didalamnya ketrampilan teknis yang mendukung pekerjaan.',
            'bobot' => 'ada',
            'manajerial_level' => 'ada',
            'pertimbangan' => $paPertimbangan,
        ];

        $response = $this->post(route('pms.referensi-pa.store'), $data);

        $response->assertSessionHasErrors(['aspek', 'bobot', 'manajerial_level']);
    }

    public function test_referensi_pa_mengubah_referensi()
    {
        $refPA = ReferensiPA::factory()->has(ReferensiPAPertimbangan::factory()->count(3), 'pertimbangan')->create();

        $refPAPertimbanganEdit = [
            [
                'pertimbangan' => 'Pembuatan dan perbaikan SOP.',
            ],
            [
                'pertimbangan' => 'Perluasan wawasan untuk meningkatkan efektivitas pekerjaan.',
            ],
        ];

        $dataEdit = ReferensiPAData::from([
            'aspek' => PAAspek::Teknis,
            'utama' => 'Improvement',
            'keterangan' => 'Perbaikan dan atau pengembangan metode, teknik dan ketrampilan yang dapat diimplementasikan, untuk meningkatkan efisiensi dan efektivitas pekerjaan.',
            'bobot' => 0.1,
            'manajerial_level' => ManajerialLevel::IndividualContributor,
            'pertimbangan' => $refPAPertimbanganEdit,
        ]);

        $response = $this->put(route('pms.referensi-pa.update', $refPA), $dataEdit->toArray());
        $response->assertRedirect(route('pms.referensi-pa.index'));

        $this->assertDatabaseHas('ref_pa', [
            'aspek' => $dataEdit->aspek,
            'utama' => $dataEdit->utama,
            'keterangan' => $dataEdit->keterangan,
            'bobot' => $dataEdit->bobot,
            'manajerial_level' => $dataEdit->manajerialLevel,
        ]);

        foreach ($refPAPertimbanganEdit as $pertimbangan) {
            $this->assertDatabaseHas('ref_pa_pertimbangan', $pertimbangan);
        }
    }

    public function test_referensi_pa_mengubah_referensi_ajax()
    {
        $refPA = ReferensiPA::factory()->has(ReferensiPAPertimbangan::factory()->count(3), 'pertimbangan')->create();

        $refPAPertimbanganEdit = [
            [
                'pertimbangan' => 'Pembuatan dan perbaikan SOP.',
            ],
            [
                'pertimbangan' => 'Perluasan wawasan untuk meningkatkan efektivitas pekerjaan.',
            ],
        ];

        $dataEdit = ReferensiPAData::from([
            'aspek' => PAAspek::Teknis,
            'utama' => 'Improvement',
            'keterangan' => 'Perbaikan dan atau pengembangan metode, teknik dan ketrampilan yang dapat diimplementasikan, untuk meningkatkan efisiensi dan efektivitas pekerjaan.',
            'bobot' => 0.1,
            'manajerial_level' => ManajerialLevel::IndividualContributor,
            'pertimbangan' => $refPAPertimbanganEdit,
        ]);

        $this->ajax();
        $response = $this->put(route('pms.referensi-pa.update', $refPA), $dataEdit->toArray());

        $response->assertSessionHasNoErrors();
        $this->assertAjaxRedirect($response, route('pms.referensi-pa.index'));

        $this->assertDatabaseHas('ref_pa', [
            'aspek' => $dataEdit->aspek,
            'utama' => $dataEdit->utama,
            'keterangan' => $dataEdit->keterangan,
            'bobot' => $dataEdit->bobot,
            'manajerial_level' => $dataEdit->manajerialLevel,
        ]);

        foreach ($refPAPertimbanganEdit as $pertimbangan) {
            $this->assertDatabaseHas('ref_pa_pertimbangan', $pertimbangan);
        }
    }

    public function test_referensi_pa_menghapus_referensi()
    {
        $refPA = ReferensiPA::factory()->has(ReferensiPAPertimbangan::factory()->count(3), 'pertimbangan')->create();

        $response = $this->delete(route('pms.referensi-pa.destroy', $refPA));

        $response->assertRedirect(route('pms.referensi-pa.index'));

        $this->assertSoftDeleted('ref_pa', [
            'aspek' => $refPA->aspek,
            'utama' => $refPA->utama,
            'keterangan' => $refPA->keterangan,
            'bobot' => $refPA->bobot,
            'manajerial_level' => $refPA->manajerial_level,
        ]);

        foreach ($refPA->pertimbangan as $pertimbangan) {
            $this->assertSoftDeleted('ref_pa_pertimbangan', ['pertimbangan' => $pertimbangan]);
        }
    }

    public function test_referensi_pa_menghapus_referensi_ajax()
    {
        $refPA = ReferensiPA::factory()->has(ReferensiPAPertimbangan::factory()->count(3), 'pertimbangan')->create();

        $this->ajax();
        $response = $this->delete(route('pms.referensi-pa.destroy', $refPA));

        $this->assertAjaxRedirect($response, route('pms.referensi-pa.index'));

        $this->assertSoftDeleted('ref_pa', [
            'aspek' => $refPA->aspek,
            'utama' => $refPA->utama,
            'keterangan' => $refPA->keterangan,
            'bobot' => $refPA->bobot,
            'manajerial_level' => $refPA->manajerial_level,
        ]);

        foreach ($refPA->pertimbangan as $pertimbangan) {
            $this->assertSoftDeleted('ref_pa_pertimbangan', ['pertimbangan' => $pertimbangan]);
        }
    }
}
