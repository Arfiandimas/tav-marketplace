<?php

namespace Database\Seeders;

use App\Models\InspectionSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InspectionSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InspectionSubCategory::factory()->count(25)->create();
    }
}
