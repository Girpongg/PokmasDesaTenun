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
        'size',
        'color',
        'order_date',
        'title',
        'total_price',
        'desc',
        'is_done',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
