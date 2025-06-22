<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primarykey ='id';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'keranjangs', 'order_id', 'food_id')
                    ->withPivot('quantity', 'note');
    }

    public static function createMyTransaction($datas, $request)
    {
        $order = new Order();
        $order->dinein = $request->dinein;
        $order->metode_payment = $request->payment_method;
        $order->status = 'proses';
        $order->total_order = self::hitTotalHarga($datas);
        $order->users_id = Auth::id();
        $order->save();

        $notes = json_decode($request->note_data, true);

        foreach ($datas as $index => $item) {
            $order->foods()->attach($item["id"], [
                'quantity' => $item["quantity"],
                'note'     => $notes[$index] ?? null
            ]);
        }

        return $order;
    }

    public static function hitTotalHarga($datas)
    {
        $total = 0;

        foreach ($datas as $item) {
            $food = Food::find($item["id"]);
            if ($food) {
                $total += $food->harga * $item["quantity"];
            }
        }

        return $total;
    }
}
