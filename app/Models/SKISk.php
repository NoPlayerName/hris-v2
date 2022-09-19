<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkiSk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ref_ski_sk';
    protected $guarded = ['id_ref_ski_sk'];
}
