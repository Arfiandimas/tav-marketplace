<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transmission>
 */
class TransmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $datas = [
            "Manual",
            "Automatic",
            "CVT",
            "Dual Clutch (DCT)",
            "Tiptronic"
        ];

        static $number = 0;
        
        return ["name" => $datas[$number++]];
    }
}
