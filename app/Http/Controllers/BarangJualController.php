<?php

namespace App\Http\Controllers;

use App\Models\BarangJual;
use Illuminate\Http\Request;

class BarangJualController extends Controller
{

    public function viewCatalog()
    {
        $catalog = BarangJual::all();
        $data = [
            'catalog' => $catalog,
        ];
        // dd($data);
        return view('user.milih-barang', $data);
    }

    public function viewDetail(BarangJual $barang)
    {
        $data = [
            'barang' => $barang,
        ];
        // dd($data);
        return view('user.detail-barang', $data);
    }


    public function addToCart(Request $request)
    {
        if (!session()->has('cart')) {
            $cart = [];
        } else {
            $cart = session()->get('cart');
        }
        
        $request->session()->put('cart', $cart);
        return response()->json(['message' => 'Item added to cart', 'cart' => $cart]);
    }
}
