<?php

namespace App\Models\HRIS;

use Illuminate\Database\Eloquent\Model;

class MasterEisCompact extends Model
{
    use MasterEisRelationTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'public_hris.MasterEisCompact';

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
