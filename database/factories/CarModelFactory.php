<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarModel>
 */
class CarModelFactory extends Factory
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
                "brand_id" => Brand::where('name', 'Honda')->value('id'),
                "name" => "BR-V"
            ],
            [
                "brand_id" => Brand::where('name', 'Honda')->value('id'),
                "name" => "BRIO"
            ],
            [
                "brand_id" => Brand::where('name', 'Honda')->value('id'),
                "name" => "CITY"
            ],
            [
                "brand_id" => Brand::where('name', 'Honda')->value('id'),
                "name" => "CR-V"
            ],
            [
                "brand_id" => Brand::where('name', 'Honda')->value('id'),
                "name" => "HR-V"
            ],
            [
                "brand_id" => Brand::where('name', 'Honda')->value('id'),
                "name" => "WR-V"
            ],
            [
                "brand_id" => Brand::where('name', 'Toyota')->value('id'),
                "name" => "AVANZA"
            ],
            [
                "brand_id" => Brand::where('name', 'Toyota')->value('id'),
                "name" => "CALYA"
            ],
            [
                "brand_id" => Brand::where('name', 'Toyota')->value('id'),
                "name" => "KIJANG INNOVA"
            ],
            [
                "brand_id" => Brand::where('name', 'Toyota')->value('id'),
                "name" => "RUSH"
            ],
            [
                "brand_id" => Brand::where('name', 'Toyota')->value('id'),
                "name" => "VELOZ"
            ],
            [
                "brand_id" => Brand::where('name', 'Nissan')->value('id'),
                "name" => "LIVINA"
            ],
            [
                "brand_id" => Brand::where('name', 'Mazda')->value('id'),
                "name" => "CX-5"
            ],
            [
                "brand_id" => Brand::where('name', 'Daihatsu')->value('id'),
                "name" => "AYLA"
            ],
            [
                "brand_id" => Brand::where('name', 'Daihatsu')->value('id'),
                "name" => "SIGRA"
            ],
            [
                "brand_id" => Brand::where('name', 'Daihatsu')->value('id'),
                "name" => "TERIOS"
            ],
            [
                "brand_id" => Brand::where('name', 'Daihatsu')->value('id'),
                "name" => "XENIA"
            ],
            [
                "brand_id" => Brand::where('name', 'Hyundai')->value('id'),
                "name" => "CRETA"
            ],
            [
                "brand_id" => Brand::where('name', 'Mitsubishi')->value('id'),
                "name" => "XPANDER"
            ],
            [
                "brand_id" => Brand::where('name', 'Daihatsu')->value('id'),
                "name" => "ERTIGA"
            ],
            [
                "brand_id" => Brand::where('name', 'Hyundai')->value('id'),
                "name" => "IGNIS"
            ],
            [
                "brand_id" => Brand::where('name', 'Mitsubishi')->value('id'),
                "name" => "XL7"
            ],
        ];

        static $number = 0;

        return $rawData[$number++];
    }
}
