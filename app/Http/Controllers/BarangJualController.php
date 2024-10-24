<?php

namespace App\Http\Controllers;

use App\Models\BarangJual;
use Illuminate\Http\Request;

class BarangJualController extends Controller
{
    
    public function viewCatalog() {
        $catalog = BarangJual::all();
        $data = [
            'catalog' => $catalog,
        ];
        // dd($data);
        return view('user.milih-barang', $data);
    }

    public function viewDetail(BarangJual $barang) {
        $data = [
            'barang' => $barang,
        ];
        // dd($data);
        return view('user.detail-barang', $data);
    }
}
