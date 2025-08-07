<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rawData = [
            [
                "name" => "2018 Honda CR-V TURBO PRESTIGE 1.5",
                "store_location_id" => fake()->randomElement([1,2,3]),
                "brand_id" => 2,
                "type_id" => 3,
                "transmission_id" => 2,
                "color_id" => fake()->randomElement([1,2,3,4]),
                "fuel_type" => "Bensin",
                "number_of_seats" => 4,
                "registration_type" => "Perorangan",
                "spare_key" => fake()->randomElement([true, false]),
                "factory_warranty" => false,
                "registration_date" => fake()->randomElement(["2018-05-01", "2018-01-01", "2018-09-01"]),
                "current_mileage" => rand(11111, 99999),
                "service_book" => fake()->randomElement([true, true, false]),
                "stnk_validity_period" => fake()->randomElement(["2026-05-01", "2026-01-01", "2026-09-01"]),
                "is_booking" => false
            ],
            [
                "name" => "2024 Toyota AVANZA G 1.5",
                "store_location_id" => fake()->randomElement([1,2,3]),
                "brand_id" => 1,
                "type_id" => 4,
                "transmission_id" => 2,
                "color_id" => fake()->randomElement([1,2,3,4]),
                "fuel_type" => "Bensin",
                "number_of_seats" => 7,
                "registration_type" => "Perorangan",
                "spare_key" => fake()->randomElement([true, false]),
                "factory_warranty" => false,
                "registration_date" => fake()->randomElement(["2024-05-01", "2024-01-01", "2024-09-01"]),
                "current_mileage" => rand(1111, 9999),
                "service_book" => fake()->randomElement([true, true, false]),
                "stnk_validity_period" => fake()->randomElement(["2026-05-01", "2026-01-01", "2026-09-01"]),
                "is_booking" => false,
            ],
            [
                "name" => "2023 Mitsubishi XPANDER CROSS PLUS 1.5",
                "store_location_id" => fake()->randomElement([1,2,3]),
                "brand_id" => 5,
                "type_id" => 4,
                "transmission_id" => 2,
                "color_id" => fake()->randomElement([1,2,3,4]),
                "fuel_type" => "Bensin",
                "number_of_seats" => 7,
                "registration_type" => "Perorangan",
                "spare_key" => fake()->randomElement([true, false]),
                "factory_warranty" => false,
                "registration_date" => fake()->randomElement(["2023-05-01", "2023-01-01", "2023-09-01"]),
                "current_mileage" => rand(1111, 9999),
                "service_book" => fake()->randomElement([true, true, false]),
                "stnk_validity_period" => fake()->randomElement(["2026-05-01", "2026-01-01", "2026-09-01"]),
                "is_booking" => false,
            ]
        ];
        
        return $rawData[rand(0,2)];
    }
}
