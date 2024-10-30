@extends('layouts.master')
@section('title', 'supplier')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Supplier</h3>
                            <a href="/supplier" class="btn btn-primary">Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/supplier/{{$supplier->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Supplier</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_supplier"
                                        value="{{old('nama_supplier',$supplier->nama_supplier)}}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_supplier')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        value="{{old('alamat',$supplier->alamat)}}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Telepon</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        value="{{old('no_telp',$supplier->no_telp)}}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('no_telp')
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