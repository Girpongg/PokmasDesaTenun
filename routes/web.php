<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseController;
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

Route::get('admin/login', function () {
    return view('admin.login.login');
});


Route::prefix('admin')->group(function () {

    Route::prefix('kategori')->group(function () {
        Route::get('/', [AdminController::class, 'viewKategori'])->name('viewKategori');
        Route::post('/', [AdminController::class, 'store'])->name('kategori.store');
        Route::put('/{id}', [AdminController::class, 'updatenama'])->name('kategori.update');
        Route::delete('/{id}', [AdminController::class, 'destroy'])->name('kategori.destroy');
    });

    Route::prefix('supplier')->group(function () {
        Route::get('/', [SupplierController::class, 'viewSupplier'])->name('viewSupplier');
        Route::post('/', [SupplierController::class, 'store'])->name('supplier.store');
        Route::put('/{id}', [SupplierController::class, 'update'])->name('supplier.update');
        Route::delete('/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
    });

    Route::prefix('purchase')->group(function () {
        Route::get('/', [PurchaseController::class, 'viewPurchase'])->name('viewPurchase');
        Route::post('/', [PurchaseController::class, 'store'])->name('purchase.store');
        Route::put('/{id}', [PurchaseController::class, 'update'])->name('purchase.update');
        Route::delete('/{id}', [PurchaseController::class, 'destroy'])->name('purchase.destroy');
        Route::post('/purchase/update-status/{id}', [PurchaseController::class, 'editStatus'])->name('purchase.editStatus');
    });

    Route::get('/order', function () {
        return view('admin.order');
    });

});
