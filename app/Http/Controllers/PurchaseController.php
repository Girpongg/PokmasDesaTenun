<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PurchaseController extends Controller
{
    public function viewPurchase()
    {
        $purchase = PurchaseOrder::get();
        $suppliers = Supplier::all();
        $i = 0;
        $data = [];
        foreach ($purchase as $purchases) {
            $temp = [];
            $temp['id'] = $purchases->id;
            $temp['no'] = $i + 1;
            $temp['title'] = $purchases->title;
            $temp['orderDate'] = $purchases->orderDate;
            $temp['deliveryDate'] = $purchases->deliveryDate;
            $temp['status'] = $purchases->status;
            $temp['supplier_id'] = $purchases->supplier->name;
            $data[] = $temp;
            $i++;
        }
        $sharedData = [
            'title' => 'Purchase Order',
            'purchase' => json_encode($data),
            'suppliers' => $suppliers,
        ];
        return view('admin.purchasing', $sharedData);
    }

    public function store(Request $request)
    {
        $data = $request->only('title', 'orderDate', 'deliveryDate', 'status', 'supplier_id');
        $valid = Validator::make(
            $data,
            [
                'title' => 'required|string|max:255',
                'orderDate' => 'required|date',
                'deliveryDate' => 'required|date',
                'status' => 'required',
                'supplier_id' => 'required|integer|exists:suppliers,id',
            ],
            [
                'title.required' => 'Title harus diisi',
                'orderDate.required' => 'Order Date harus diisi',
                'orderDate.date' => 'Order Date harus berupa tanggal',
                'deliveryDate.required' => 'Delivery Date harus diisi',
                'deliveryDate.date' => 'Delivery Date harus berupa tanggal',
                'status.required' => 'Status harus diisi',
                'supplier_id.required' => 'Supplier ID harus diisi',
                'supplier_id.integer' => 'Supplier ID harus berupa angka',
            ],
        );
        if ($valid->fails()) {
            dd($valid->errors());
            return redirect()->back()->withErrors($valid)->withInput();
        }
        $purchase = PurchaseOrder::create($data);
        return response()->json(['success' => true, 'message' => 'Create new Purchase', 'data' => $purchase], 201);

    }

    public function update(Request $request, $id)
    {
        $data = $request->only('title', 'orderDate', 'deliveryDate', 'status', 'supplier_id');
        $valid = Validator::make(
            $data,
            [
                'title' => 'required|string|max:255',
                'orderDate' => 'required|date',
                'deliveryDate' => 'required|date',
                'status' => 'required|boolean',
                'supplier_id' => 'required|integer',
            ],
            [
                'title.required' => 'Title harus diisi',
                'orderDate.required' => 'Order Date harus diisi',
                'deliveryDate.required' => 'Delivery Date harus diisi',
                'status.required' => 'Status harus diisi',
                'supplier_id.required' => 'Supplier ID harus diisi',
            ],
        );
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        }
        $purchase = PurchaseOrder::find($id);
        $purchase->update($data);
        return response()->json(['success' => true, 'message' => 'Update Purchase', 'data' => $purchase], 200);
    }

    public function destroy($id)
    {
        $purchase = PurchaseOrder::find($id);
        $purchase->delete();
        return response()->json(['success' => true, 'message' => 'Delete Purchase', 'data' => $purchase], 200);
    }
    
    public function editStatus(Request $request, $id)
    {
        $purchase = PurchaseOrder::findOrFail($id);
        $purchase->status = true;
        $purchase->save();
    
        return response()->json(['success' => true]);
    }

    
}
