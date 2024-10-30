@extends('layouts.master')
@section('title', 'barang_masuk')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if(session('success'))
                            <div class="alert alert-info">
                                {{ session('success') }}
                            </div>
                            @endif
                            <h3>Halaman Data Barang Masuk</h3>
                            <a href="/barang_masuk/tambah" class="btn btn-primary">Tambah</a>
                            <a href="/cetakbarangmasuk" class="btn btn-primary">Cetak</a>
                        </div>
                        <div class="card-body">
                            <div
                                class="table-responsive"
                            >
                                <table
                                    class="table table-bordered table-striped" id="datatable"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Nama Supplier</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Cetak Struk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($barang_masuk as $barang_masuk)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$barang_masuk->barang->nama_barang}}</td>
                                            <td>{{$barang_masuk->supplier->nama_supplier}}</td>
                                            <td>{{$barang_masuk->jumlah}}</td>
                                            <td>
                                                <a href="/barang_masuk/{{$barang_masuk->id}}/show" class="btn btn-info"><i class="fas fa-eye"></i>Detail</a>
                                            </td>
                                            <td>
                                            <td> <a href="/barang_masuk/{{$barang_masuk->id}}/struk" class="btn btn-info"><i class=""></i>Cetak</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection