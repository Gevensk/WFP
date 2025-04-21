<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primarykey ='id';
    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customers_id');
    }

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'keranjangs', 'order_id', 'food_id')
                    ->withPivot('quantity');
    }

    public function keranjangs()
    {
        return $this->hasMany(Keranjang::class, 'order_id');
    }
}
