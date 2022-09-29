<?php

namespace App\Models\PMS;

use HighSolutions\EloquentSequence\Sequence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReferensiPAPertimbangan extends Model
{
    use Sequence;
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_pa_pertimbangan';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_ref_pa_pertimbangan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pertimbangan',
    ];

    public function sequence()
    {
        return [
            'group' => 'id_ref_pa',
        ];
    }

    public function referensi()
    {
        return $this->belongsTo(ReferensiPA::class, 'id_ref_pa');
    }
}
