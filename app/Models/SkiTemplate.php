<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkiTemplate extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ref_ski';
    protected $guarded = ['id_ref_ski'];

    // public function tugas()
    // {
    //     return $this->hasMany(SkiTugas::class, 'id_ref_ski');
    // }
}
