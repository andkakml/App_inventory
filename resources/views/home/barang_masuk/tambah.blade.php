@extends('layouts.master')
@section('title', 'barang masuk')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Barang Masuk</h3>
                            <a href="/barang_masuk" class="btn btn-primary">Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/barang_masuk/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">ID Barang</label>
                                    <select name="id_barang" id="" class="form-control">
                                        <option value="">Pilih Barang</option>
                                        @foreach($barang as $barang)
                                        <option value="{{ $barang->id }}">{{ $barang->nama_barang}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Supplier</label>
                                    <select name="id_supplier" id="" class="form-control">
                                        <option value="">Pilih Supplier</option>
                                        @foreach($supplier as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_supplier')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Jumlah</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="jumlah"
                                        id=""
                                        value="{{old ('jumlah')}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('jumlah')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection