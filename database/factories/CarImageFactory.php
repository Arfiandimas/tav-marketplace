<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\ImageCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "car_id" => Car::inRandomOrder()->limit(1)->pluck("id")->first(),
            "image_category_id" => ImageCategory::inRandomOrder()->limit(1)->pluck("id")->first(),
            "image_url" => 'https://picsum.photos/640/480?random=' . rand(1,10000),
        ];
    }
}
