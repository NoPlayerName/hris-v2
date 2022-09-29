<?php

namespace App\Data\PMS;

use App\Enums\ManajerialLevel;
use App\Enums\PAAspek;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class ReferensiPAData extends Data
{
    public function __construct(
        #[MapName('id_ref_pa')]
        public int|Optional $id_ref_pa,
        public PAAspek $aspek,
        #[Required]
        public string $utama,
        #[Required]
        public string $keterangan,
        public float $bobot,
        #[MapName('manajerial_level')]
        public ManajerialLevel $manajerialLevel,
        public int|Optional $seq,
        #[DataCollectionOf(ReferensiPAPertimbanganData::class)]
        public DataCollection|Optional $pertimbangan
    ) {
    }
}
