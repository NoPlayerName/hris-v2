<?php

namespace Tests\Unit;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\HRIS\Karyawan;
use App\Models\HRIS\MasterEis;
use App\Models\HRIS\MasterEisAktif;
use App\Models\HRIS\MasterEisAktifCompact;
use App\Models\HRIS\MasterEisCompact;
use App\Models\HRIS\ViewPosisi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function test_karyawan_table()
    {
        $count_karyawan = Karyawan::count();
        $karyawan = Karyawan::find('1706562');

        $this->assertGreaterThan(0, $count_karyawan);
        $this->assertNotNull($karyawan->Nama);
    }

    public function test_master_eis_table()
    {
        $count_karyawan = MasterEis::count();
        $karyawan = MasterEis::find('1706562');

        $this->assertGreaterThan(0, $count_karyawan);
        $this->assertNotNull($karyawan->Nama);
    }

    public function test_master_eis_compact_table()
    {
        $count_karyawan = MasterEisCompact::count();
        $karyawan = MasterEisCompact::find('1706562');

        $this->assertGreaterThan(0, $count_karyawan);
        $this->assertNotNull($karyawan->Nama);
    }

    public function test_master_eis_aktif_table()
    {
        $karyawanBelumPHK = Karyawan::whereNull('TanggalPHK')->first();
        $karyawanSudahPHK = Karyawan::where('TanggalPHK', '<', today())->first();

        $count_karyawan = MasterEisAktif::count();
        $karyawan = MasterEisAktif::find($karyawanBelumPHK->NIK);
        $karyawanNotFound = MasterEisAktif::find($karyawanSudahPHK->NIK);

        $this->assertGreaterThan(0, $count_karyawan);
        $this->assertNotNull($karyawan);
        $this->assertNull($karyawanNotFound);
    }

    public function test_master_eis_aktif_compact_table()
    {
        $karyawanBelumPHK = Karyawan::whereNull('TanggalPHK')->first();
        $karyawanSudahPHK = Karyawan::where('TanggalPHK', '<', today())->first();

        $count_karyawan = MasterEisAktifCompact::count();
        $karyawan = MasterEisAktifCompact::find($karyawanBelumPHK->NIK);
        $karyawanNotFound = MasterEisAktifCompact::find($karyawanSudahPHK->NIK);

        $this->assertGreaterThan(0, $count_karyawan);
        $this->assertNotNull($karyawan);
        $this->assertNull($karyawanNotFound);
    }

    public function test_v_posisi_table()
    {
        $karyawan = MasterEisAktif::where('Tipe_Karyawan', 1)->first();

        $posisi = ViewPosisi::find($karyawan->KodePosisi);

        $this->assertNotNull($posisi);
    }
}
