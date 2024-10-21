<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Utils\HttpResponse;
use App\Utils\HttpResponseCode;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    //

    public function viewKategori()
    {
        
        $kategori = Kategori::get();
        // dd($kategori);
        $i = 0;
        $data = [];
        foreach ($kategori as $k) {
            $temp = [];
            $temp['id'] = $k->id;
            $temp['no'] = $i + 1;
            $temp['nama'] = $k->name;
            $data[] = $temp;
            $i++;
        }
        $sharedData = [
            'title' => 'Kategori',
            'kategori' => json_encode($data),
        ];
        return view('admin.kategori', $sharedData);
    }

    function store(Request $request)
    {
        $data = $request->only('name');
        // dd($data);
        $valid = validator::make(
            $data,
            [
                'name' => 'required|string|max:255',
            ],
            [
                'name.required' => 'Nama kategori harus diisi',
                'name.string' => 'Nama kategori harus berupa string',
                'name.max' => 'Nama kategori maksimal 255 karakter',
            ],
        );
        if ($valid->fails()) {
            return $this->error($valid->errors()->first(), HttpResponseCode::HTTP_NOT_ACCEPTABLE);
        }
        $kategori = Kategori::create($data);
        return response()->json(['success' => true, 'message' => 'Create new Group', 'data' => $kategori], 201);
    }
    public function updatenama(Request $request, $id)
    {
        $data = $request->only('name');
        $valid = validator::make(
            $data,
            [
                'name' => 'required|string|max:255',
            ],
            [
                'name.required' => 'Nama kategori harus diisi',
                'name.string' => 'Nama kategori harus berupa string',
                'name.max' => 'Nama kategori maksimal 255 karakter',
            ],
        );
        if ($valid->fails()) {
            return $this->error($valid->errors()->first(), HttpResponseCode::HTTP_NOT_ACCEPTABLE);
        }
        $kategori = Kategori::find($id);
        if (!$kategori) {
            return response()->json(['success' => false, 'message' => 'Data not found'], 404);
        }
        $kategori->update($data);
        return response()->json(['success' => true, 'message' => 'Update Category Name Success', 'data' => $kategori], 200);
    }
    function destroy($id)
    {
        $kategori = Kategori::find($id);
        if (!$kategori) {
            return response()->json(['success' => false, 'message' => 'Data not found'], 404);
        }
        $kategori->delete();
        return response()->json(['success' => true, 'message' => 'Data has been deleted'], 200);
    }

    public function viewInventory()
    {
        $kategori = Kategori::get();
        $sharedData = [
            'title' => 'Kategori',
            'kategori' => $kategori,
            'unit' => self::units(),
        ];
        return view('admin.inventory', $sharedData);
    }

    private static function units()
    {
        return array_map(fn($unit) => $unit->label(), Unit::cases());
    }


    public function storeInventory(Request $request)
    {
        $units = array_map(fn($unit) => $unit->label(), Unit::cases());
        $data = $request->only('name', 'unit', 'price', 'quantity', 'category');
        $valid = Validator::make(
            $data,
            [
                'name' => 'required|string|max:255',
                'unit' => 'required|in:' . implode(',', $units),
                'price' => 'required|numeric|min:0',
                'quantity' => 'required|numeric|min:0',
                'category' => 'nullable|exists:kategoris,id',
            ],
            [
                'name.required' => 'Nama produk harus diisi',
                'name.string' => 'Nama produk harus berupa string',
                'name.max' => 'Nama produk maksimal 255 karakter',
                'unit.required' => 'Satuan produk harus diisi',
                'unit.in' => 'Satuan produk tidak valid',
                'price.required' => 'Harga produk harus diisi',
                'price.numeric' => 'Harga produk harus berupa angka',
                'price.min' => 'Harga produk minimal 0',
                'quantity.required' => 'Stok produk harus diisi',
                'quantity.numeric' => 'Stok produk harus berupa angka',
                'quantity.min' => 'Stok produk minimal 0',

            ],
        );
        if ($valid->fails()) {
            return $this->error($valid->errors()->first(), HttpResponseCode::HTTP_NOT_ACCEPTABLE);
        }
        $product = Product::create($data);
        return response()->json(['success' => true, 'message' => 'Create new Product', 'data' => $product], 201);
    }
}
enum Unit
{
    case KiloGram;
    case Klosan;

    public function label(): string
    {
        return match ($this) {
            self::KiloGram => 'Kilogram (kg)',
            self::Klosan => 'Klosan',
        };
    }
}
