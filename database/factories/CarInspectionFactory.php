<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarInspection>
 */
class CarInspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $carIndex = 0;
        static $inspectionId = 1;

        static $carIds = null;
        if (is_null($carIds)) {
            $carIds = Car::pluck('id')->toArray();
        }

        if ($inspectionId > 175) {
            $inspectionId = 1;
            $carIndex++;
        }

        if (!isset($carIds[$carIndex])) {
            return [];
        }

        return [
            'car_id'     => $carIds[$carIndex],
            'inspection_id' => $inspectionId++,
            'status' => fake()->randomElement(['passed', 'passed', 'passed', 'passed', 'passed', 'not passed', 'na']),
            'image_url' => fake()->imageUrl($width = 640, $height = 480),
            'note' => null
        ];
    }
}
