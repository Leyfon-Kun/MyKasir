@extends('layout.index')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah Jenis Menu</h3>
                <p class="text-subtitle text-muted">Multiple form layout you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jenis Menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <form action="/admin/menu" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>Masukkan Menu</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="basicInput">Nama Menu</label>
                    <input type="text" name="nama_menu" value="{{ old('nama_menu') }}" class="form-control" id="basicInput"
                        placeholder="Jenis Menu">
                    @error('nama_menu')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="basicInput">Stok</label>
                    <input type="number" name="stok" value="{{ old('stok') }}" class="form-control" id="basicInput"
                        placeholder="Stok Menu">
                    @error('stok')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="basicInput">Harga</label>
                    <input type="number" name="harga" value="{{ old('harga') }}" class="form-control" id="basicInput"
                        placeholder="Harga Menu">
                    @error('harga')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="basicInput">Jenis Menu</label>
                    <fieldset class="form-group">
                        <select name="id_jenis_menu" class="form-select" id="basicSelect">
                            <option disabled selected>Pilih Jenis Menu</option>
                            @foreach ($jenismenu as $jm)
                                <option value="{{ $jm->id }}">{{ $jm->jenis }}</option>
                            @endforeach
                        </select>
                    </fieldset>
                    @error('id_jenis_menu')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary mr-1" type="submit">Tambah</button>
            </div>
        </div>
    </form>
@endsection
