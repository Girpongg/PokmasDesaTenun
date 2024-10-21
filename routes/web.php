<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('user.home');
});

Route::get('admin/login', function () {
    return view('admin.login.login');
});

Route::get('/barang', function () {
    return view('user.milih-barang');
})->name('milih-barang');

Route::get('/detail-barang', function () {
    return view('user.detail-barang');
})->name('detail-barang');

Route::get('/detail-payment', function () {
    return view('user.detail-payment');
})->name('detail-payment');

Route::get('/form-katalog', function () {
    return view('user.form-katalog');
})->name('form-katalog');

Route::prefix('admin')->group(function () {

    Route::prefix('kategori')->group(function () {
        Route::get('/', [AdminController::class, 'viewKategori'])->name('viewKategori');
        Route::post('/', [AdminController::class, 'store'])->name('kategori.store');
        Route::put('/{id}', [AdminController::class, 'updatenama'])->name('kategori.update');
        Route::delete('/{id}', [AdminController::class, 'destroy'])->name('kategori.destroy');
    });
    Route::prefix('inventory')->group(function(){
        Route::get('/', [AdminController::class, 'viewInventory'])->name('viewInventory');
        Route::post('/', [AdminController::class, 'storeInventory'])->name('inventory.store');
        Route::delete('/{id}', [AdminController::class, 'destroyInventory'])->name('inventory.delete');
        Route::put('/{id}', [AdminController::class, 'updateInventory'])->name('inventory.update');
    });
    Route::prefix('supplier')->group(function () {
        Route::get('/', [SupplierController::class, 'viewSupplier'])->name('viewSupplier');
        Route::post('/', [SupplierController::class, 'store'])->name('supplier.store');
        Route::put('/{id}', [SupplierController::class, 'update'])->name('supplier.update');
        Route::delete('/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
    });

    Route::get('/order', function () {
        return view('admin.order');
    });

    Route::prefix('purchasing')->group(function () {
        Route::get('/', [PurchaseController::class, 'index'])->name('purchase.index');
        Route::post('/store', [PurchaseController::class, 'store'])->name('purchase.store');
        Route::delete('/delete/{purchase:id}', [PurchaseController::class, 'delete'])->name('purchase.delete');
        Route::put('/update/{purchase:id}', [PurchaseController::class, 'update'])->name('purchase.update');
    });
});
