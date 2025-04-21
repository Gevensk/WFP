<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjangs';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }
}
