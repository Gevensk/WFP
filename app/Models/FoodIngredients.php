<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodIngredients extends Model
{
    use HasFactory;

    public function foods(): BelongsTo{
        return $this->belongsTo(Food::class, 'food_id');
    }

    public function ingredients():BelongsTo{
        return $this->belongsTo(Ingredients::class,'ingredient_id');
    }
}
