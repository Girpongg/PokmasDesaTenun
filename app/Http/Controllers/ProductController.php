<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\BarangJual;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends BaseController
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function index()
    {
        $data['product'] = Product::all();
        return view('admin.product', $data);
    }

    public function catalog()
    {
        return view('admin.catalog');
    }

    public function catalogstore(Request $request){
        $data = $request->only(['name', 'price', 'quantity', 'description','image']);
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'name.required' => 'Nama harus diisi',
            'price.required' => 'Harga harus diisi',
            'quantity.required' => 'Quantity harus diisi',
            'description.required' => 'Deskripsi harus diisi',
            'image.required' => 'Gambar harus diisi',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg',
            'image.max' => 'Ukuran gambar maksimal 2MB',
        ]);
        if($validator->fails()){
            return redirect()->back()->with('error', $validator->errors()->first());
        }
        $file = $request->file('image');
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = $originalName . '_' . time() . '_' . uniqid() . '.' . $extension;
        $validatedData['image'] = $file->storeAs('Catalog', $fileNameToStore);

        $finalData = [
            'name' => $data['name'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'description' => $data['description'],
            'image' => $validatedData['image'],
        ];
        BarangJual::create($finalData);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }

    
}