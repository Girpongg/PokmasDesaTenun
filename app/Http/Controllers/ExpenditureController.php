<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpenditureController extends Controller
{
    public function index()
    {
        $data['expenditures'] = Expenditure::all();
        return view('admin.expenditure', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'category' => 'required',
            'order_date' => 'required',
        ], [
            'name.required' => 'Nama barang wajib diisi.',
            'quantity.required' => 'Jumlah/kuantitas wajib diisi.',
            'price.required' => 'Harga wajib diisi.',
            'unit.required' => 'Satuan wajib diisi.',
            'category.required' => 'Kategori wajib diisi.',
            'order_date.required' => 'Tanggal pemesanan wajib diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }
        Expenditure::create($request->all());
        return response()->json(['message' => 'Data berhasil disimpan', 'success' => true]);
    }

    public function delete(Expenditure $expenditure)
    {
        $expenditure->delete();
        return response()->json(['message' => 'Data berhasil dihapus', 'success' => true]);
    }

    public function update(Request $request, Expenditure $expenditure)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'category' => 'required',
            'order_date' => 'required',
        ], [
            'name.required' => 'Nama barang wajib diisi.',
            'quantity.required' => 'Jumlah/kuantitas wajib diisi.',
            'price.required' => 'Harga wajib diisi.',
            'unit.required' => 'Satuan wajib diisi.',
            'category.required' => 'Kategori wajib diisi.',
            'order_date.required' => 'Tanggal pemesanan wajib diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }
        $expenditure->update($request->all());
        return response()->json(['message' => 'Data berhasil diupdate', 'success' => true]);
    }
}
