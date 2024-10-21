<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\BarangJual;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrder(){
        $data['orders'] = Order::with('barang_jual')->get();
        $data['barang_juals'] = BarangJual::all();
        return view('admin.order', $data);
    }

    

    
}
