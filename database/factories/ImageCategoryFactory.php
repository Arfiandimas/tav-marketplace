<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImageCategory>
 */
class ImageCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rawData = [
            "Cover",
            "Eksterior",
            "Interior"
        ];

        static $number = 0;
        
        return ["name" => $rawData[$number++]];
    }
}
