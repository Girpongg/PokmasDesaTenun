<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Kelompok;
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
