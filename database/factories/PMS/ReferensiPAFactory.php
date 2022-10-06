<?php

namespace Database\Factories\PMS;

use App\Enums\ManajerialLevel;
use App\Enums\PAAspek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PMS\ReferensiPA>
 */
class ReferensiPAFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'aspek' => fake()->randomElement(PAAspek::cases()),
            'utama' => fake()->text(255),
            'keterangan' => fake()->paragraph(),
            'bobot' => fake()->randomFloat(2, 0.01, 1),
            'manajerial_level' => fake()->randomElement(ManajerialLevel::cases()),
        ];
    }
}
