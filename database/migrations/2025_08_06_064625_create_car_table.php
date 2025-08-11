<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('store_location_id');
            $table->foreignId('brand_id');
            $table->foreignId('type_id');
            $table->foreignId('transmission_id');
            $table->foreignId('color_id');
            $table->foreignId('car_model_id');
            $table->foreignId('variation_id')->nullable();
            $table->string('no_plat', 20);
            $table->string('fuel_type', 100);
            $table->tinyInteger('number_of_seats');
            $table->string('registration_type', 100);
            $table->boolean('spare_key');
            $table->boolean('factory_warranty');
            $table->date('registration_date');
            $table->foreignId('current_mileage');
            $table->boolean('service_book');
            $table->date('stnk_validity_period');
            $table->boolean('is_booking');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car');
    }
};
