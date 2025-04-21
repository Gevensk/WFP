<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NutritionFacts extends Model
{
    use HasFactory;

    protected $table='nutrition_facts';
    public $timestamps = true;
    protected $fillable = [
        'food_id', 
        'nutrition_id',
    ];

    public function foods(): BelongsTo{
        return $this->belongsTo(Food::class, 'food_id');
    }

    public function nutritions():BelongsTo{
        return $this->belongsTo(Nutrition::class,'nutrition_id');
    }
}
