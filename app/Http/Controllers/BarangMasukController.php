<?php


namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barang_masuk = BarangMasuk::all();
        return view('home.barang_masuk.index', compact('barang_masuk'));
    }

    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view('home.barang_masuk.tambah', compact('barang','supplier'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "id_barang" => 'required',
            "id_supplier" => 'required',
            "jumlah" => 'required|numeric'
        ]);

        $id = $request->id_barang;
        $barang = Barang::find($id);
        $barang->increment('stok',$request->jumlah);

        BarangMasuk::create([
            "id_barang" =>$request->id_barang,
            "id_supplier" =>$request->id_supplier,
            "jumlah" =>$request->jumlah
        ]);
        return redirect('/barang_masuk')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $barang_masuk = BarangMasuk::find($id);
        return view('home.barang_masuk.show', compact('barang_masuk'));
    }

    public function cetak()
    {
        $barang_masuk=BarangMasuk::all();
        return view('home.barang_masuk.cetak', compact('barang_masuk'));
    }

    public function struk(string $id)
    {
        $barang_masuk = BarangMasuk::find($id);
        return view('home.barang_masuk.struk', compact('barang_masuk'));
    }
}
