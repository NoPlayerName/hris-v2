<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkiSk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ref_ski_sk';
    protected $guarded = ['id_ref_ski_sk'];

    public function SkiTemplate()
    {
        return $this->belongsTo(SkiTemplate::class, 'id_ref_ski');
    }

    public function kelompok()
    {
        return $this->belongsTo(KelompokSk::class, 'id_kelompok_sk');
    }
}
