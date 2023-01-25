@extends('layout.index')

@section('content')
<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah Jenis Barang</h3>
                <p class="text-subtitle text-muted">Multiple form layout you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jenis Barang</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <form action="/admin/jenismenu" method="POST">
        @csrf
    <div class="card">
        <div class="card-header">
            <h4>Masukkan Jenis Barang</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="basicInput">Jenis Barang</label>
                <input type="text" name="jenis" value="{{ old('jenis') }}" class="form-control" id="basicInput" placeholder="Jenis Barang">
                @error('jenis')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>
                <button class="btn btn-primary mr-1" type="submit">Tambah</button>  
        </div>
    </div>
    </form>
@endsection
