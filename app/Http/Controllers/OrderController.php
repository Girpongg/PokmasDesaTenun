<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrder(){
        $orders = Order::all();
        return view('order', compact('orders'));
    }

    
}
