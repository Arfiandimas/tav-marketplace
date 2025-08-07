<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarFeature>
 */
class CarFeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $carIndex = 0;
        static $featureId = 1;

        static $carIds = null;
        if (is_null($carIds)) {
            $carIds = Car::pluck('id')->toArray();
        }

        if ($featureId > 16) {
            $featureId = 1;
            $carIndex++;
        }

        if (!isset($carIds[$carIndex])) {
            return [];
        }

        return [
            'car_id'     => $carIds[$carIndex],
            'feature_id' => $featureId++,
        ];
    }
}
