<?php

namespace App\Models\PMS;

use App\Enums\ManajerialLevel;
use App\Enums\PAAspek;
use HighSolutions\EloquentSequence\Sequence;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReferensiPA extends Model
{
    use Sequence;
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_pa';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_ref_pa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'aspek',
        'utama',
        'keterangan',
        'bobot',
        'manajerial_level',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'aspek' => PAAspek::class,
        'bobot' => 'float',
        'manajerial_level' => ManajerialLevel::class,
    ];

    public function sequence()
    {
        return [
            'group' => ['manajerial_level', 'aspek'],
        ];
    }

    public function pertimbangan()
    {
        return $this->hasMany(ReferensiPAPertimbangan::class, 'id_ref_pa');
    }
}
