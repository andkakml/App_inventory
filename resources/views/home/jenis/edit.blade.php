@extends('layouts.master')
@section('title', 'jenis')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Jenis</h3>
                            <a href="/jenis" class="btn btn-primary">Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/jenis/{{$jenis->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Jenis</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_jenis"
                                        value="{{old('nama_jenis',$jenis->nama_jenis)}}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_jenis')
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