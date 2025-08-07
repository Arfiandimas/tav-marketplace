<?php

namespace Database\Seeders;

use App\Models\UserWishlist;
use Illuminate\Database\Seeder;

class UserWishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserWishlist::factory()->count(100)->create();
    }
}
