<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class jenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::all();
        return view('home.jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('home.jenis.tambah');
    }

    public function store(Request $request)
    {
        Jenis::create([
            'nama_jenis' => $request->nama_jenis,
        ]);
        return redirect('/jenis');
    }
    public function show($id)
    {
        $jenis = Jenis::find($id);
        return view('home.jenis.edit', compact('jenis'));
    }
    public function update(Request $request, string $id)
    {
        $jenis = Jenis::find($id);
        $jenis->update([
            'nama_jenis' => $request->nama_jenis,
        ]);
        return redirect('/jenis');
    }
    public function destroy(string $id)
    {
        $jenis = Jenis::find($id);

        $jenis->delete();

        return redirect('/jenis')->with(['success'=>'Data Berhasil Dihapus']);


    }
}
