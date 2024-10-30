<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view('home.supplier.index', compact('supplier'));
    }

    public function create()
    {
        return view('home.supplier.tambah');
    }

    public function store(Request $request)
    {
        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        return redirect('/supplier');
    }
    public function show($id)
    {
        $supplier = Supplier::find($id);
        return view('home.supplier.edit', compact('supplier'));
    }
    public function update(Request $request, string $id)
    {
        $supplier = Supplier::find($id);
        $supplier->update([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);
        return redirect('/supplier');
    }
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();

        return redirect('/supplier')->with(['success'=>'Data Berhasil Dihapus']);


    }
}
