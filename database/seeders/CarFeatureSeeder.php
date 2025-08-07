<?php

namespace Database\Seeders;

use App\Models\CarFeature;
use Illuminate\Database\Seeder;

class CarFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarFeature::factory()->count(1600)->create();
    }
}
