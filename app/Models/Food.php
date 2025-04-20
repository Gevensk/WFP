<?php

namespace App\Models;

use Database\Seeders\FoodIngredientsSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function foodIngredients(): HasMany{
        return $this->hasMany(FoodIngredients::class, 'food_id', 'id');
    }
}
