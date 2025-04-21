<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    use HasFactory;

    protected $table = 'nutritions';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'nutrition_facts', 'nutrition_id', 'food_id');
    }
}
