<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PurchaseController extends Controller
{
    public function index()
    {
        $data['purchases'] = Purchase::with('supplier')->get();
        $data['suppliers'] = Supplier::all();
        return view('admin.purchasing', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'order_date' => 'required',
            'supplier_id' => 'required',
        ], [
            'name.required' => 'Nama barang wajib diisi.',
            'quantity.required' => 'Kuantitas wajib diisi.',
            'price.required' => 'Harga wajib diisi.',
            'unit.required' => 'Satuan wajib diisi.',
            'order_date.required' => 'Tanggal pemesanan wajib diisi.',
            'supplier_id.required' => 'Supplier wajib diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }
        Purchase::create($request->all());
        return response()->json(['message' => 'Data berhasil disimpan', 'success' => true]);
    }

    public function delete(Purchase $purchase)
    {
        $purchase->delete();
        return response()->json(['message' => 'Data berhasil dihapus', 'success' => true]);
    }

    public function update(Request $request, Purchase $purchase)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'order_date' => 'required',
            'supplier_id' => 'required',
        ], [
            'name.required' => 'Nama barang wajib diisi.',
            'quantity.required' => 'Kuantitas wajib diisi.',
            'price.required' => 'Harga wajib diisi.',
            'unit.required' => 'Satuan wajib diisi.',
            'order_date.required' => 'Tanggal pemesanan wajib diisi.',
            'supplier_id.required' => 'Supplier wajib diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }
        $purchase->update($request->all());
        return response()->json(['message' => 'Data berhasil diupdate', 'success' => true]);
    }
}
