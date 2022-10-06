<?php

namespace Database\Factories\PMS;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PMS\ReferensiPAPertimbangan>
 */
class ReferensiPAPertimbanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pertimbangan' => fake()->paragraph(),
        ];
    }
}
