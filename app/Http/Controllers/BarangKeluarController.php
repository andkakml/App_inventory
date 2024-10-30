<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $barang_keluar = BarangKeluar::all();
            return view('home.barang_keluar.index', compact('barang_keluar'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=User::all();
        $barang = Barang::all();
        return view('home.barang_keluar.tambah', compact('barang','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_barang" => 'required',
            "nama_customer" => 'required',
            "jumlah" => 'required|numeric'
        ]);

        $id = $request->id_barang;
        $barang = Barang::find($id);
        
        if ($barang->stok < $request->jumlah) {
            return redirect('/barang_keluar')->with('error', 'Stok barang tidak mencukupi !!');
        }

        $barang->decrement('stok', $request->jumlah);
        BarangKeluar::create([
        "id_barang" => $request->id_barang,
        "nama_customer" => $request->nama_customer,
        "jumlah" => $request->jumlah
        ]);
        return redirect('/barang_keluar')->with('success','Barang keluar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang_keluar = BarangKeluar::find($id);
        return view('home.barang_keluar.show', compact('barang_keluar'));
    }

    public function cetak()
    {
        $barang_keluar=BarangKeluar::all();
        return view('home.barang_keluar.cetak', compact('barang_keluar'));
    }

    public function struk(string $id)
    {
        $barang_keluar = BarangKeluar::find($id);
        return view('home.barang_keluar.struk', compact('barang_keluar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
