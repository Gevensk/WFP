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
        Schema::create('nutrition_facts', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unsignedBigInteger('food_id');
            $table->foreign('food_id')->references('id')->on('foods');

            $table->unsignedBigInteger('nutrition_id');
            $table->foreign('nutrition_id')->references('id')->on('nutritions');

            $table->string('jumlah', 45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritionfacts');
    }
};
