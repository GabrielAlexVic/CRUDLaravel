<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Supplier;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return redirect()->route('supplier.list');
});

Route::get('/supplier/list', [SupplierController::class, 'list'])
     ->name('supplier.list');

Route::get('/supplier/create', [SupplierController::class, 'create']);

Route::post('/supplier/store', [SupplierController::class, 'store']);

Route::get('/supplier/get/{supplierId}', [SupplierController::class, 'show']);

Route::get('/supplier/edit/{supplierId}', [SupplierController::class, 'edit']);

Route::put('/supplier/update/{supplierId}', [SupplierController::class, 'update']);

Route::get('/supplier/delete/{supplierId}', [SupplierController::class, 'destroy']);