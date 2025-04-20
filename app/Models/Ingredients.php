<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ingredients extends Model
{
    use HasFactory;

    public function foodIngredients(): HasMany{
        return $this->hasMany(FoodIngredients::class, 'ingredient_id', 'id');
    }
}
