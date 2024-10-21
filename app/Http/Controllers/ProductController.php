<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
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
}