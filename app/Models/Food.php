<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function ingredients(): BelongsToMany {
        return $this->belongsToMany(Ingredients::class, 'food_ingredients', 'food_id', 'ingredient_id');
    }
    
    // public function ingredients(): BelongsToMany{
    //     return $this->belongsToMany(Ingredients::class, 'food_ingredients', 'id','id');
    // }
}
