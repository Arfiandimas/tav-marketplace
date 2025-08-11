<?php

namespace Database\Factories;

use App\Models\FeatureCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
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
                "parent" => "Convenience",
                "child" => [
                    "Spidometer Digital",
                    "Sistem Penguncian Pintu Keyless",
                    "Rem Parkir",
                    "Kamera Mundur",
                    "Pengisi Daya Nirkabel",
                    "Cruise Control",
                    "Penahan Rem Otomatis",
                    "Bluetooth"
                ]
            ],
            [
                "parent" => "Lighting",
                "child" => [
                    "LED Daytime Running Lights"
                ]
            ],
            [
                "parent" => "Cabin",
                "child" => [
                    "AC Belakang",
                    "Soket Listrik"
                ]
            ],
            [
                "parent" => "Safety",
                "child" => [
                    "Sinyal Berhenti Darurat",
                    "ABS/EBD",
                    "ISOFIX",
                    "Airbag",
                    "Kontrol Keseimbangan/Stabilitas",
                ]
            ]
        ];

        static $flattened = null;
        static $index = 0;

        if (is_null($flattened)) {
            $flattened = [];
            foreach ($rawData as $group) {
                $parentName = $group['parent'];
                foreach ($group['child'] as $childName) {
                    $flattened[] = [
                        'parent' => $parentName,
                        'child' => $childName
                    ];
                }
            }
        }

        $entry = $flattened[$index++];
        $featureCategoryId = FeatureCategory::where('name', $entry['parent'])->value('id');

        return [
            'feature_category_id' => $featureCategoryId,
            'is_default' => fake()->randomElement([true, true, false]),
            'name' => $entry['child'],
            'icon' => 'https://picsum.photos/640/480?random=' . rand(1,10000),
        ];
    }
}
