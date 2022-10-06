<?php

namespace App\Enums;

enum ManajerialLevel: int
{
    case SeniorLeader = 1;
    case MidLevelLeader = 2;
    case FirstLevelLeader = 3;
    case IndividualContributor = 4;

    public function text()
    {
        return match ($this) {
            self::SeniorLeader => 'Senior Leader',
            self::MidLevelLeader => 'Mid Level Leader',
            self::FirstLevelLeader => 'First Level Leader',
            self::IndividualContributor => 'Individual Contributor',
        };
    }
}
