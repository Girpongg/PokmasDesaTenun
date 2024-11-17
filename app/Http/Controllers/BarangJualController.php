<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangJual;

class BarangJualController extends Controller
{
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

    public function addToCart($id)
    {
        // dd($id);
        $barang = BarangJual::find($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'image' => $barang->image,
                'id' => $barang->id,
                'name' => $barang->name,
                'price' => $barang->price,
                'description' => $barang->description,
                'quantity' => 1,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }

    public function deleteFromCart($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            } else {
                unset($cart[$id]);
            }
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Item removed from cart successfully!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart');
        $data = [
            'cart' => $cart,
        ];
        return view('user.cart', $data);
    }
}
