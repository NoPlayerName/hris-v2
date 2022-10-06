<?php

namespace App\Models\HRIS;

trait MasterEisRelationTrait
{
    public function posisi()
    {
        return $this->hasOne(ViewPosisi::class, 'posisi_kodejabatan', 'KodePosisi');
    }
}
