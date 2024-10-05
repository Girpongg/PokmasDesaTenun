<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierController;
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

    Route::get('/order', function () {
        return view('admin.order');
    });
    Route::get('/purchasing', function () {
        return view('admin.purchasing');
    });

});
