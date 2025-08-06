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
        Schema::create('store_location', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("maps")->nullable();
            $table->time("opening_time");
            $table->time("closing_time");
            $table->string("opening_day", 10);
            $table->string("closing_day", 10);
            $table->string("phone", 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_location');
    }
};
