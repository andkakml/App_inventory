@extends('layouts.master')
@section('title'.'barang_keluar')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        @if(session('succes'))
                            <div class="alert alert-info">
                                    {{ session('succes') }}
                            </div>
                            @endif
                            <h3>Halaman Data Barang Keluar</h3>
                            <a class="btn btn-primary" href="/barang_keluar/tambah">Tambah Data</a>
                            <a href="/cetakbarangkeluar" class="btn btn-primary">Cetak</a>
                        </div>  
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Id Barang</th>
                                            <th scope="col">Nama Customer</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Cetak Struk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($barang_keluar as $barang_keluar)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $barang_keluar->barang->nama_barang}}</td>
                                            <td>{{ $barang_keluar->nama_customer}}</td>
                                            <td>{{ $barang_keluar->jumlah}}</td>
                                            <td> <a href="/barang_keluar/{{$barang_keluar->id}}/show" class="btn btn-info"><i class="fas fa-eye"></i>Detail</a>
                                            <td> <a href="/barang_keluar/{{$barang_keluar->id}}/struk" class="btn btn-info"><i class=""></i>Cetak</a>
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
