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
        Schema::table('foods', function(Blueprint $table){
            $table->string('nutrition_facts', 3000);
            $table->string('ingredients', 3000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foods', function(Blueprint $table){
            $table->dropColumn(['nutrition_facts']);
            $table->dropColumn(['ingredients']);
        });
    }
};
