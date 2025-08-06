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
        Schema::create('car_inspection', function (Blueprint $table) {
            $table->id();
            $table->foreignId("car_id");
            $table->foreignId("inspection_id");
            $table->boolean("is_passed");
            $table->string("image_url");
            $table->text("note")->nullable();
            $table->timestamps();
            $table->foreignId('created_by');
            $table->foreignId('updated_by');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_inspection');
    }
};
