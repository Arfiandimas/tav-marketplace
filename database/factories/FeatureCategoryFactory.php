<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeatureCategory>
 */
class FeatureCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data = [
            "Convenience",
            "Lighting",
            "Cabin",
            "Safety"
        ];

        static $number = 0;

        return ["name" => $data[$number++]];
    }
}
