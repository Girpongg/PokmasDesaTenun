<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use App\Models\Purchase;
use App\Models\Expenditures;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\PurchaseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function index()
    {
        $data['purchases'] = Purchase::with('supplier','purchaseDetails.product')->get();
        $data['products'] = Product::get();
        $data['purchaseDetail'] = PurchaseDetail::all();
        $data['suppliers'] = Supplier::all();
        return view('admin.purchasing', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->only('title', 'order_date', 'shipped_date', 'supplier_id');
        $products = $request->get('products'); // Ambil data produk secara terpisah

        $validator = Validator::make(
            $request->all(),
            [
                // Purchase validation rules
                'order_date' => 'required|date',
                'shipped_date' => 'required|date',
                'supplier_id' => 'required|exists:suppliers,id',
                // Product validation rules
                'products' => 'required|array',
                'products.*.name' => 'required|string',
                'products.*.quantity' => 'required|integer',
                'products.*.price' => 'required|integer',
                'products.*.unit' => 'required|string',
            ],
            [
                // Purchase validation messages
                'order_date.required' => 'Order date is required.',
                'order_date.date' => 'Order date must be a valid date.',
                'shipped_date.required' => 'Shipped date is required.',
                'shipped_date.date' => 'Shipped date must be a valid date.',
                'supplier_id.required' => 'Supplier is required.',
                'supplier_id.exists' => 'Supplier must exist.',
                'products.required' => 'Products are required.',
                'products.*.name.required' => 'Product name is required.',
                'products.*.quantity.required' => 'Product quantity is required.',
                'products.*.price.required' => 'Product price is required.',
                'products.*.unit.required' => 'Product unit is required.',
            ],
        );

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }

        DB::beginTransaction();
        try {
            // Create Purchase
            $purchase = Purchase::create($data);
            $totalOrderPrice = 0;
            // Process Products and update their quantities
            foreach ($products as $productData) {
                $totalPrice = 0;
                $product = Product::where('name', $productData['name'])->first();
                if ($product) {
                    $product->quantity += $productData['quantity'];
                    $product->unit = $productData['unit'];
                    $product->price = $productData['price']; //update price yo gir
                    $totalPrice = $productData['price'] * $productData['quantity'];
                    $product->save();
                } else {
                    $product = Product::create([
                        'name' => $productData['name'],
                        'quantity' => $productData['quantity'],
                        'unit' => $productData['unit'],
                        'price' => $productData['price'],
                    ]);
                    $totalPrice += $productData['price'] * $productData['quantity'];
                } 
                
                $totalOrderPrice += $totalPrice;

                PurchaseDetail::create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $product->id,
                    'quantity' => $productData['quantity'],
                    'price' => $productData['price'],
                ]);
                
            }
            Expenditures::create([
                'title' => $data['title'],
                'total_price' => $totalOrderPrice,
                'exp_date' => $data['order_date'],
            ]);

            DB::commit();
            return response()->json(['message' => 'Data successfully stored', 'success' => true]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to store data', 'error' => true].$e->getMessage());
        }
    }

    public function delete(Purchase $purchase)
    {
        $purchase->delete();
        return response()->json(['message' => 'Data successfully deleted', 'success' => true]);
    }

    public function update(Request $request, Purchase $purchase)
    {
        $validator = Validator::make(
            $request->all(),
            [
                // Purchase validation rules
                'title' => 'required',
                'order_date' => 'required',
                'shipped_date' => 'required',
                'supplier_id' => 'required',
            ],
            [
                // Purchase validation messages
                'title.required' => 'Title is required.',
                'order_date.required' => 'Order date is required.',
                'shipped_date.required' => 'Shipped date is required.',
                'supplier_id.required' => 'Supplier is required.',
            ],
        );

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }

        DB::beginTransaction();

        try {
            // Update Purchase
            $purchase->update($request->only(['title', 'order_date', 'shipped_date', 'supplier_id']));

            DB::commit();
            return response()->json(['message' => 'Data successfully updated', 'success' => true]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to update data', 'error' => true]);
        }
    }
}