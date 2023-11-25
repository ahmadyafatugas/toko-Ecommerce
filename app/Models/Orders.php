<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', "id");
    }
}
