<?php

namespace Database\Factories;

use App\Models\InspectionCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InspectionSubCategory>
 */
class InspectionSubCategoryFactory extends Factory
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
                "inspection_category_id" => InspectionCategory::where('name', 'Eksterior')->value('id'),
                "name" => "Bagian Bodi & Bumper"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Eksterior')->value('id'),
                "name" => "Pintu, Kap Mesin & Bagasi"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Eksterior')->value('id'),
                "name" => "Kaca & Spion"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Eksterior')->value('id'),
                "name" => "Lampu Eksterior"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Eksterior')->value('id'),
                "name" => "Velg & Ban"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Interior')->value('id'),
                "name" => "Sabuk Pengaman"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Interior')->value('id'),
                "name" => "Audio & Sistem Alarm"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Interior')->value('id'),
                "name" => "Pemanas Kaca, Sistem Udara, Ac, Kabut & Penghilang Embun"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Interior')->value('id'),
                "name" => "Kelengkapan Interior"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Interior')->value('id'),
                "name" => "Karpet & Cover"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Interior')->value('id'),
                "name" => "Sunroof, Moonroof, Convertible Top"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Interior')->value('id'),
                "name" => "Jendela & Sistem Penguncian"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Interior')->value('id'),
                "name" => "Ruang Bagasi"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Tes Jalan')->value('id'),
                "name" => "Mesin"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Tes Jalan')->value('id'),
                "name" => "Transmisi, Roda Penggerak & Kopling"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Tes Jalan')->value('id'),
                "name" => "Kemudi & Rem"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Cairan"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Mesin"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Sistem Pendingin"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Sistem Kelistrikan"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Sistem Pembuangan"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Transmisi & Sistem Penggerak"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Sistem Kemudi"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Suspensi"
            ],
            [
                "inspection_category_id" => InspectionCategory::where('name', 'Bagian Bawah')->value('id'),
                "name" => "Rem"
            ]
        ];

        static $number = 0;

        return $rawData[$number++];
    }
}
