@extends('layout.index')

@section('content')
<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah Pegawai</h3>
                <p class="text-subtitle text-muted">Multiple form layout you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <form action="/admin/users" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>Masukkan Pegawai</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="basicInput">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" id="basicInput" placeholder="Nama">
                    @error('nama')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="basicInput">Username</label>
                    <input type="text" name="username" value="{{ old('username') }}" class="form-control" id="basicInput" placeholder="Username">
                    @error('username')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="basicInput">Password</label>
                    <input type="text" name="password" value="{{ old('password') }}" class="form-control" id="basicInput" placeholder="Password">
                    @error('password')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                    <button class="btn btn-primary mr-1" type="submit">Tambah</button>
            </div>
        </div>
    </form>
@endsection
