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
        Schema::create('soil_params', function (Blueprint $table) {
            $table->id();
            $table->json('polygon');
            $table->string('land_type');
            $table->string('soil_type');
            $table->string('soil_temperature');
            $table->string('soil_moisture');
            $table->string('soil_ph');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soil_params');
    }
};
