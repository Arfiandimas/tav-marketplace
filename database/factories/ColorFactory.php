<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Color>
 */
class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data = [
            [
                "name" => "Hitam",
                "hex" => "#101211"
            ],
            [
                "name" => "Putih",
                "hex" => "#FFFFFF"
            ],
            [
                "name" => "Abu-abu",
                "hex" => "#B0B0B0"
            ],
            [
                "name" => "Silver",
                "hex" => "#C0C0C0"
            ],
            [
                "name" => "Merah",
                "hex" => "#FF0000"
            ],
            [
                "name" => "Biru",
                "hex" => "#0000FF"
            ],
            [
                "name" => "Hijau",
                "hex" => "#008000"
            ],
            [
                "name" => "Kuning",
                "hex" => "#FFFF00"
            ],
            [
                "name" => "Coklat",
                "hex" => "#8B4513"
            ],
            [
                "name" => "Orange",
                "hex" => "#FFA500"
            ]
        ];

        static $number = 0;

        return $data[$number++];
    }
}
