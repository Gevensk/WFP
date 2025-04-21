<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primaryKey ='id';
    public $timestamps = true;

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class, 'customers_id');
    }
    
    public function keranjangs(){
        return $this->hasMany(Keranjang::class, 'order_id', 'id');
    }
}
