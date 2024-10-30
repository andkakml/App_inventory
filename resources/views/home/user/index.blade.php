@extends('layouts.master')
@section('title', 'user')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data User</h3>
                            <a href="/user/tambah" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div
                                 class="table-responsive"
                            >
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $user)
                                        <tr>
                                            <td>{{$loop ->iteration}}</td>
                                            <td>{{$user ->name}}</td>
                                            <td>{{$user ->email}}</td>
                                            <td><a href="/user/{{ $user->id}}/show" class="btn btn-warning">Edit</a> | 
                                                <a href="/user/{{ $user->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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