<?php

namespace Database\Seeders;

use App\Models\InspectionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InspectionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InspectionCategory::factory()->count(4)->create();
    }
}
