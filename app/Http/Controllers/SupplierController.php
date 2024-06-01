<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function list()
    {
        $suppliers = Supplier::all();
        return view('supplier.list', ['suppliers' => $suppliers]);
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect("/");
    }

    public function show($supplierId)
    {
        $supplier = Supplier::findOrFail($supplierId);

        return view('supplier.show', ['supplier' => $supplier]);
    }

    public function edit($supplierId)
    {
        $supplier = Supplier::findOrFail($supplierId);
        return view('supplier.edit', ['supplier' => $supplier]);
    }

    public function update(Request $request, $supplierId)
    {
        $supplier = Supplier::findOrFail($supplierId);
    
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
    
        $supplier->save();
    
        return redirect("/");
    }

    public function destroy($supplierId)
    {
        $supplier = Supplier::findOrFail($supplierId);
        $supplier->delete();

        return redirect('/');
    }

}
