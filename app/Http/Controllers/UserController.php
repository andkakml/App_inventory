<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('home.user.index', compact('user'));
    }

    public function create()
    {
        return view('home.user.tambah');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->name),
        ]);
        return redirect('/user')->with("success", "Data Berhasil Ditambah");
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('home.user.edit', compact('user'));
    }
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->name),
        ]);
        return redirect('/user')->with("success", "Data Berhasil Diubah");
    }
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect('/user')->with("success", "Data Berhasil Dihapus");

    }
}
