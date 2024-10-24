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
        return view('user.milih-barang', $data);
    }
}
