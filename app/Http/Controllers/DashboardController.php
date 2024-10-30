<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $totalBarangMasuk = BarangMasuk::sum('jumlah');
        $totalBarangKeluar = BarangKeluar::sum('jumlah');
        $totalSupplier = Supplier::count();
        $historyBarangMasuk = BarangMasuk::latest()->first();
        $historyBarangKeluar = BarangKeluar::latest()->first();

        return view('home.dashboard',compact('totalBarang','totalBarangMasuk','totalBarangKeluar','totalSupplier','historyBarangMasuk','historyBarangKeluar'));
    }
}
