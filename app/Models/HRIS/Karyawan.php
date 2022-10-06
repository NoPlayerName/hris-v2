<?php

namespace App\Models\HRIS;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    // protected $connection = 'hris';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public_hris.Karyawan';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'NIK';
}
