<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InspectionCategory>
 */
class InspectionCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rawData = [
            "Eksterior",
            "Interior",
            "Tes Jalan",
            "Bagian Bawah"
        ];

        static $number = 0;

        return [
            "name" => $rawData[$number++],
            "icon" => 'https://picsum.photos/640/480?random=' . rand(1,10000),
        ];
    }
}
