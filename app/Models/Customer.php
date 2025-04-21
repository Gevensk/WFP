<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $table='customers';
    protected $primaryKey ='id';
    public $timestamps = true;

    public function orders()
    {
        return $this->hasMany(Order::class, 'customers_id');
    }
}
