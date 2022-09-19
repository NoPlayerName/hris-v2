<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokSk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kelompok_sk';
    protected $guarded = ['id_kelompok_sk'];
}
