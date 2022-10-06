<?php

namespace App\Enums;

use Illuminate\Support\Collection;

enum PAAspek: string
{
    case Teknis = 'teknis';
    case Manajerial = 'manajerial';
    case Perilaku = 'perilaku';

    public static function all(): Collection
    {
        return collect(PAAspek::cases())->map(
            fn (PAAspek $aspek) => ['name' => $aspek->name, 'value' => $aspek->value]
        );
    }
}
