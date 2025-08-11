<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Benefit>
 */
class BenefitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rawData = [
            "175 Titik Inspeksi",
            "Harga Pasti, Tidak Ada Biaya Tersembunyi",
            "Garansi 2 Tahun (Mesin, Transmisi, Ac)",
            "Jaminan 30 Hari Uang Kembali",
        ];

        static $number = 0;

        return [
            "benefit" => $rawData[$number++],
            "icon" => 'https://picsum.photos/640/480?random=' . rand(1,10000),
            "link_reference" => fake()->randomElement([null, fake()->url]),
            "is_default" => true
        ];
    }
}
