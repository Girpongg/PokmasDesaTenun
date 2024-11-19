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
        $order_catalog_validate = Order::where('is_validated', 1)->where('tipe', 1)->get();
        $order_request_validate = Order::where('is_validated', 1)->where('tipe', 2)->get();
        $order_catalog_notvalidate = Order::where('is_validated', 0)->where('tipe', 1)->get();
        $order = Order::get();
        $barang = BarangJual::all();

        $data = [
            'order_catalog_validate' => $order_catalog_validate,
            'order_request_validate' => $order_request_validate,
            'order_catalog_notvalidate' => $order_catalog_notvalidate,
            'barang_juals' => $barang,
        ];
        return view('admin.order', $data);
    }

    public function storeRequest(Request $request)
    {
        $data = $request->all();

        // Decode the JSON string back into an array
        if (isset($data['products'])) {
            $data['products'] = json_decode($data['products'], true);
        }

        // Validate the request
        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'total_price' => 'required|numeric',
            'desc' => 'required|string',
            'products' => 'required|array',
            'products.*.name' => 'required|string|max:255',
            'products.*.quantity' => 'required|integer|min:1',
            // Add other validation rules as needed
        ], [
            'title.required' => 'Title is required.',
            'total_price.required' => 'Total price is required.',
            'desc.required' => 'Description is required.',
            'products.required' => 'Products are required.',
            'products.*.name.required' => 'Product name is required.',
            'products.*.quantity.required' => 'Product quantity is required.',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }

        DB::beginTransaction();
        try {
            $data['is_validated'] = 1;
            $data['tipe'] = 2;
            $order = Order::create($data);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = 'public/uploads/request';
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileNameToStore = $originalName . '_' . time() . '_' . uniqid() . '.' . $extension;
                $file->storePubliclyAs($path, $fileNameToStore);

                $finalData = [
                    'name' => $data['title'],
                    'price' => $data['total_price'] ?? 0,
                    'stock' => 1,
                    'description' => $data['desc'],
                    'tipe' => 2,
                    'image' => $fileNameToStore,
                ];

                $barangterjual = BarangJual::create($finalData);
                OrderDetail::create([
                    'order_id' => $order->id,
                    'barangjual_id' => $barangterjual->id,
                    'quantity' => 1,
                    'price' => $order->total_price,
                ]);

                // Process products
                foreach ($data['products'] as $productsData) {
                    $bahan = Product::where('name', $productsData['name'])->first();
                    if ($bahan) {
                        BarangJualDetail::create([
                            'barang_jual_id' => $barangterjual->id,
                            'product_id' => $bahan->id,
                        ]);
                    } else {
                        return response()->json(['message' => 'Product not found', 'error' => true]);
                    }
                }
            }

            DB::commit();
            return response()->json(['message' => 'Data successfully stored', 'success' => true]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to store data', 'error' => true, 'details' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        // dd(session('cart'));
        // $cart = session('cart');
        $data = $request->all();
        $products = session('cart');
        $validator = Validator::make(
            $data,
            [
                'customer_name' => 'required|string',
                'customer_wa' => 'required|string',
                'address' => 'required|string',
                'judul_pesan' => 'nullable|string',
                // 'order_date' => 'required|date',
                // 'total_price' => 'required|integer',
                'desc' => 'nullable|string',
                // 'products' => 'required|array',
                // 'products.*.name' => 'nullable|string',
                // 'products.*.quantity' => 'required|integer',
                // 'products.*.price' => 'required|integer',
            ],
            [
                'customer_name.required' => 'Name is required.',
                // 'order_date.required' => 'Order date is required.',
                'customer_wa.required' => 'Customer WA is required.',
                'address.required' => 'Customer Address is required.',
                'judul_pesan.required' => 'Judul Pesan is required.',
                'total_price.required' => 'Total Price is required.',
                'desc.required' => 'Description is required.',
                // 'products.required' => 'Products are required.',
                // 'products.*.name.required' => 'Product name is required.',
                // 'products.*.quantity.required' => 'Product quantity is required.',
                // 'products.*.price.required' => 'Product price is required.',
            ],
        );

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(), 'error' => true]);
        }

        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product['quantity'] * $product['price'];
        }
        $data['total_price'] = $totalPrice;
        $data['order_date'] = today();
        DB::beginTransaction();
        try {
            $data['is_validated'] = 1;
            $data['tipe'] = 1;
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
            }
            DB::commit();
            session()->forget('cart');
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
        $order->update(['status' => 0]);
    
        $parentOrder = $order->order; 
        if ($parentOrder->orderDetails->every(fn($detail) => $detail->status == 0)) {
            $parentOrder->delete();
            return response()->json(['redirect' => url('/admin/order')]);
        }
        else{
            return response()->json(['message' => 'Order successfully declined', 'success' => true]);
        }
    
        
    }
    public function acceptOrder(OrderDetail $order)
    {
        $order->update([
            'status' => 2,
        ]);
        $kurang = BarangJual::find($order->barangjual_id);
        $kurang->stock = $kurang->stock - $order->quantity;
        $kurang->save();
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
