<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\BarangJual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function viewOrder()
    {
        $order = Order::get();
        $barang = BarangJual::all();

        $data = [
            'orders' => $order,
            'barang_juals' => $barang,
        ];
        return view('admin.order', $data);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $products = $request->get('products');
        $validator = Validator::make(
            $data,
            [
                'customer_name' => 'required|string',
                'customer_wa' => 'required|string',
                'address' => 'required|string',
                'judul_pesan' => 'nullable|string',
                'order_date' => 'required|date',
                'total_price' => 'required|integer',
                'desc' => 'nullable|string',
                'products' => 'required|array',
                'products.*.name' => 'required|string',
                'products.*.quantity' => 'required|integer',
                'products.*.price' => 'required|integer',
            ],
            [
                'customer_name.required' => 'Name is required.',
                'order_date.required' => 'Order date is required.',
                'customer_wa.required' => 'Customer WA is required.',
                'address.required' => 'Customer Address is required.',
                'judul_pesan.required' => 'Judul Pesan is required.',
                'total_price.required' => 'Total Price is required.',
                'desc.required' => 'Description is required.',
                'products.required' => 'Products are required.',
                'products.*.name.required' => 'Product name is required.',
                'products.*.quantity.required' => 'Product quantity is required.',
                'products.*.price.required' => 'Product price is required.',
            ],
        );

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }
        DB::beginTransaction();
        try {
            $order = Order::create($data);
            foreach ($products as $productData) {
                // dd($productData);
                $product = BarangJual::where('name', $productData['name'])->first();
                // dd($product);
                if ($product) {
                    if ($product->stock < $productData['quantity']) {
                        return response()->json(['message' => 'Stock is not enough', 'error' => true]);
                    }
                    OrderDetail::create([
                        'order_id' => $order->id,
                        'barangjual_id' => $product->id,
                        'quantity' => $productData['quantity'],
                        'price' => $productData['price'],
                    ]);
                } else {
                    return response()->json(['message' => 'Product not found', 'error' => true]);
                }
                $product->update([
                    'stock' => $product->stock - $productData['quantity'],
                ]);
            }
            DB::commit();
            return response()->json(['message' => 'Data successfully stored', 'success' => true]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to store data', 'error' => true] . $e->getMessage());
        }
    }

    public function detailOrder(Order $order)
    {
        $detail = OrderDetail::with('barangJual')
            ->where('order_id', $order->id)
            ->get();
        $barang = BarangJual::all();

        $data = [
            'nama' => $order,
            'order' => $detail,
            'barang_juals' => $barang,
        ];
        // dd('halo');
        return view('admin.detail_order', $data);
    }

    public function declineOrder(OrderDetail $order)
    {
        $order->update([
            'status' => 0,
        ]);
        return response()->json(['message' => 'Order successfully accepted', 'success' => true]);
    }
    public function acceptOrder(OrderDetail $order)
    {
        $order->update([
            'status' => 2,
        ]);
        return response()->json(['message' => 'Order successfully accepted', 'success' => true]);
    }

    public function DoneOrder(Order $order)
    {
        $order->update([
            'is_done' => 1,
        ]);
        return response()->json(['message' => 'Order successfully accepted', 'success' => true]);
    }
}
