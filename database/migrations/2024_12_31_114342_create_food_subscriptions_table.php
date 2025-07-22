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
        Schema::create('food_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('goal')->nullable();
            $table->string('diet_type')->nullable();
            $table->string('plan')->nullable();
            $table->longText('plan_detail')->nullable();
            $table->string('dietary')->nullable();
            $table->longText('meal_type')->nullable();
            $table->decimal('actualprice', 10, 2)->nullable();
            $table->decimal('discount', 10, 2)->nullable();
            $table->decimal('totalprice', 10, 2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_subscriptions');
    }
};
