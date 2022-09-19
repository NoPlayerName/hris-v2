<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkiTugas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ref_ski_tugas';
    protected $guarded = ['id_ref_ski_tugas'];
}
