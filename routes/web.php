<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Supplier;

Route::get('/', function () {
    return view('supplierCreate');
});

Route::post('/create-supplier', function (Request $data) {
    $supplier = Supplier::create([
        'name' => $data->name,
        'email' => $data->email,
        'phone' => $data->phone,
        'address' => $data->address
    ]);
    return redirect("/get-supplier/{$supplier->id}");
});

Route::get('/get-supplier/{supplierID}', function ($supplierId) {
    $supplier = Supplier::findOrFail($supplierId);
    echo 'name: ';
    echo $supplier->name;
    echo '<br/>';

    echo 'email: ';
    echo $supplier->email;
    echo '<br/>';

    echo 'phone: ';
    echo $supplier->phone;
    echo '<br/>';

    echo 'address: ';
    echo $supplier->address;
});

Route::get('/edit-supplier/{supplierID}', function ($supplierId) {
    $supplier = Supplier::findOrFail($supplierId);
    return view('supplierUpdate', ['supplier' => $supplier]);
});

Route::put('update-supplier/{supplierID}', function (Request $data, $supplierId) {
    $supplier = Supplier::findOrFail($supplierId);

    $supplier->name = $data->name;
    $supplier->email = $data->email;
    $supplier->phone = $data->phone;
    $supplier->address = $data->address;

    $supplier->save();

    return redirect("/get-supplier/{$supplierId}");
});

Route::get('delete-supplier/{supplierId}', function ($supplierId) {
    $supplier = Supplier::findOrFail($supplierId);
    $supplier->delete();

    return redirect('/');
});