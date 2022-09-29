<?php

namespace App\Data\PMS;

use Spatie\LaravelData\Data;
use Symfony\Contracts\Service\Attribute\Required;

class ReferensiPAPertimbanganData extends Data
{
    public function __construct(
        #[Required]
        public string $pertimbangan
    ) {
    }
}
