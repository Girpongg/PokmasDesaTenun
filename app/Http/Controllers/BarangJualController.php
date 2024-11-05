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

    public function viewBarangJual()
    {
        $barang_juals = BarangJual::get();
        $i = 0;
        $data = [];
        foreach ($barang_juals as $barang_jual) {
            $temp = [];
            $temp['id'] = $barang_jual->id;
            $temp['no'] = $i + 1;
            $temp['image'] = $barang_jual->image;
            $temp['name'] = $barang_jual->name;
            $temp['price'] = $barang_jual->price;
            $temp['stock'] = $barang_jual->stock;
            $temp['tipe'] = $barang_jual->tipe;
            $temp['description'] = $barang_jual->description;
            $data[] = $temp;
            $i++;
        }
        $sharedData = [
            'title' => 'Barang Jual',
            'barang_juals' => json_encode($data),
        ];
        return view('admin.katalog', $sharedData);
        
    }



}

