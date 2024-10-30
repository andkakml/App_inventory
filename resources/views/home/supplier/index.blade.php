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
                            @if(session('success'))
                            <div class="alert alert-info">
                            {{ session('success') }}
                            </div>
                            @endif
                            <h3>Halaman Data Supplier</h3>
                            <a href="/supplier/tambah" class="btn btn-primary">Tambah</a>
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
                                            <th scope="col">Nama supplier</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Telepon</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($supplier as $supplier)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$supplier->nama_supplier}}</td>
                                            <td>{{$supplier->alamat}}</td>
                                            <td>{{$supplier->no_telp}}</td>
                                            <td><a href="/supplier/{{$supplier->id}}/show" class="btn btn-warning">Edit</a> | 
                                                <a href="/supplier/{{$supplier->id}}/delete" class="btn btn-danger"
                                                    onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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