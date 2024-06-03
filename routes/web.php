<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Supplier;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/supplier/list', [SupplierController::class, 'list'])
     ->name('supplier.list');
Route::get('/supplier/create', [SupplierController::class, 'create']);
Route::post('/supplier/store', [SupplierController::class, 'store']);
Route::get('/supplier/get/{supplierId}', [SupplierController::class, 'show']);
Route::get('/supplier/edit/{supplierId}', [SupplierController::class, 'edit']);
Route::put('/supplier/update/{supplierId}', [SupplierController::class, 'update']);
Route::get('/supplier/delete/{supplierId}', [SupplierController::class, 'destroy']);

Route::get('/product', function () {
    return redirect()->route('product.list');
});

Route::get('/product/list', [ProductController::class, 'list'])
    ->name('product.list');
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/get/{productId}', [ProductController::class, 'show']);
Route::get('/product/edit/{productId}', [ProductController::class, 'edit']);
Route::put('/product/update/{productId}', [ProductController::class, 'update']);
Route::get('/product/delete/{productId}', [ProductController::class, 'destroy']);