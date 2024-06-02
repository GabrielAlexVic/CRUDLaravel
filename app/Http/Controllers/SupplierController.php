<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Product;

class SupplierController extends Controller
{
    public function create()
    {
        return view('supplier.create');
    }

    public function list()
    {
        $suppliers = Supplier::all();
        return view('supplier.list', compact('suppliers'));
    }

    public function store(Request $request)
    {
        Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect()->route('supplier.list');
    }

    public function show($supplierId)
    {
        $supplier = Supplier::findOrFail($supplierId);
        
        $products = Product::where('supplier_id', $supplierId)->get();

        return view('supplier.show', compact('supplier', 'products'));
    }

    public function edit($supplierId)
    {
        $supplier = Supplier::findOrFail($supplierId);
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $supplierId)
    {
        $supplier = Supplier::findOrFail($supplierId);
    
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
    
        $supplier->save();
    
        return redirect()->route('supplier.list');
    }

    public function destroy($supplierId)
    {
        $supplier = Supplier::findOrFail($supplierId);
        $supplier->delete();

        return redirect()->route('supplier.list');
    }

}
