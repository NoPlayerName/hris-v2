<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RelationTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_has_karyawan()
    {
        $user = User::factory()->create([
            'nik' => '1706562',
        ]);

        $karyawan = $user->karyawan;

        $this->assertNotNull($karyawan);
    }

    public function test_user_has_master_eis()
    {
        $user = User::factory()->create([
            'nik' => '1706562',
        ]);

        $me = $user->masterEis;
        $mec = $user->masterEisCompact;

        $this->assertNotNull($me);
        $this->assertNotNull($mec);
    }

    public function test_user_has_posisi()
    {
        $user = User::factory()->create([
            'nik' => '1706562',
        ]);

        $kodePosisi = $user->masterEisCompact->KodePosisi;
        $posisiModel = $user->masterEisCompact->posisi;

        $this->assertNotNull($kodePosisi);
        $this->assertNotNull($posisiModel);
    }
}
