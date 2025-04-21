<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredients extends Model
{
    use HasFactory;
    protected $table ='ingredients';
    public $timestamps= true;

    public function foods(): BelongsToMany {
        return $this->belongsToMany(Food::class, 'food_ingredients', 'ingredient_id', 'food_id');
    }
    

    // public function food(): BelongsToMany{
    //     return $this->belongsToMany(Food::class, 'food_ingredients', 'id','id');
    // }
}
