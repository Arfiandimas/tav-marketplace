<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Feature;
use App\Models\Variation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            DealerSeeder::class,
            StoreLocationSeeder::class,
            BrandSeeder::class,
            CarModelSeeder::class,
            VariationSeeder::class,
            TypeSeeder::class,
            TransmissionSeeder::class,
            ColorSeeder::class,
            FeatureCategorySeeder::class,
            FeatureSeeder::class,
            InspectionCategorySeeder::class,
            InspectionSubCategorySeeder::class,
            InspectionSeeder::class,
            CarSeeder::class,
            ImageCategorySeeder::class,
            CarImageSeeder::class,
            CarFeatureSeeder::class,
            CarInspectionSeeder::class,
            UserWishlistSeeder::class
        ]);
    }
}
