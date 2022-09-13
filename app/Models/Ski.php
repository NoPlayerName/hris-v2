<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ski extends Model
{
    use HasFactory;

    protected $guarded = ['id_ref_ski'];
}
