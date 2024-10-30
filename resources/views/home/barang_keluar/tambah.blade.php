@extends('layouts.master')
@section('title'.'jenis')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                            <h3>Halaman Tambah Data Barang Keluar</h3>
                            <a class="btn btn-primary" href="/barang_keluar">Kembali</a>
                        </div>  
                        <div class="card-body">
                            <form action="/barang_keluar/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Barang</label>
                                    <select name="id_barang" id="" class="form-control">
                                        <option value="">Pilih Barang</option>
                                        @foreach($barang as $barang)
                                            <option value="{{ $barang->id }}">{{ $barang->nama_barang}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Customer</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_customer"
                                        value="{{ old('nama_customer') }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_customer')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="jumlah"
                                        value="{{ old('jumlah') }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('jumlah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type=submit>Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection