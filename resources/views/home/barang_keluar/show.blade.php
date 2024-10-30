@extends('layouts.master')
@section('title', 'barang_keluar')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Card Kiri -->
                <div class="col-md-3 mt-5">
                    <div class="card h-100">
                        {{-- ganti sesuai database --}}
                        <img src="/storage/products/{{ $barang_keluar->barang->gambar }}" class="card-img-top img-fluid" alt="...">
                    </div>
                </div>

                <!-- Card Kanan -->
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            {{-- ganti sesuai database --}}
                            <h5 class="card-title fs-75">{{ $barang_keluar->barang->nama_barang }}</h5>
                            <br>
                            <hr>
                            {{-- ganti sesuai database $barang_keluar->barang->harga_beli --}}
                            <p class="card-text">Rp. {{ number_format($barang_keluar->barang->harga_beli) }}</p>

                            {{-- ganti sesuai database $barang_keluar->created_at format nya ikutin --}}
                            <p class="card-text">{{ $barang_keluar->created_at->format('d-m-Y H:i') }}</p>
                            <hr>

                            {{-- ganti jumlah sesuai database --}}
                            <p class="card-text"><small class="text-body-secondary">Jumlah : {{ $barang_keluar->jumlah }}</small></p>
                        </div>
                    </div>

                    {{-- ganti href sesuai web.php barangmasuk --}}
                    <a href="/barang_keluar" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection