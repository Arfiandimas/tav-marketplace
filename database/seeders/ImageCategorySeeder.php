<?php

namespace Database\Seeders;

use App\Models\ImageCategory;
use Illuminate\Database\Seeder;

class ImageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImageCategory::factory()->count(3)->create();
    }
}
