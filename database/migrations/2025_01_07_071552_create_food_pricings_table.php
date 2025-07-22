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
        Schema::create('food_pricings', function (Blueprint $table) {
            $table->id();
            $table->string('plan')->nullable()->index();
            $table->string('goal')->nullable()->index();
            $table->longText('vegetarian')->nullable();
            $table->longText('nonvegetarian')->nullable();
            $table->longText('eggetarian')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_pricings');
    }
};
