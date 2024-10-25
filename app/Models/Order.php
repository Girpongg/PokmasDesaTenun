<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_wa',
        'address',
        'status',
        'is_done',
        'title',
        'order_date',
        'desc',
        'total_price',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
