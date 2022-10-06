<?php

namespace App\Models\HRIS;

use Illuminate\Database\Eloquent\Model;

class ViewPosisi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public_hris.vPosisi';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'posisi_kodejabatan';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
