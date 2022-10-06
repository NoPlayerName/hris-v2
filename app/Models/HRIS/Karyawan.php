<?php

namespace App\Models\HRIS;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
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

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
