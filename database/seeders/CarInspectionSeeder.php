<?php

namespace Database\Seeders;

use App\Models\CarInspection;
use Illuminate\Database\Seeder;

class CarInspectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarInspection::factory()->count(17500)->create();
    }
}
