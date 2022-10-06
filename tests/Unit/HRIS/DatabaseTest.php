<?php

namespace Tests\Unit;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\HRIS\Karyawan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_karyawan_table()
    {
        $count_karyawan = Karyawan::count();
        $karyawan = Karyawan::find('1706562');

        $this->assertGreaterThan(0, $count_karyawan);
        $this->assertnotnull($karyawan->Nama);
    }
}
