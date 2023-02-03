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
    <form action="/menu/{{ $menu->id }}" method="POST">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>Masukkan Menu</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="basicInput">Nama Menu</label>
                    <input type="text" name="nama_menu" value="{{ old('nama_menu', $menu->nama_menu) }}" class="form-control" id="basicInput"
                        placeholder="Jenis Barang">
                    @error('jenis')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="basicInput">Stok</label>
                    <input type="number" name="stok" value="{{ old('stok', $menu->stok) }}" class="form-control" id="basicInput"
                        placeholder="Stok Barang">
                    @error('stok')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="basicInput">Harga</label>
                    <input type="number" name="harga" value="{{ old('harga', $menu->harga) }}" class="form-control" id="basicInput"
                        placeholder="Harga Barang">
                    @error('harga')
                        <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="basicInput">Jenis Menu</label>
                    <fieldset class="form-group">
                        <select name="id_jenis_menu" class="form-select" id="basicSelect">
                            <option disabled selected>Pilih Jenis Menu</option>
                            <option selected value="{{ $menu->id_jenis_menu }}">{{ $menu->jenis->jenis }}</option>
                            @foreach ($jenismenu as $jm)
                                <option value="{{ $jm->id }}">{{ $jm->jenis }}</option>
                            @endforeach
                        </select>
                    </fieldset>
                </div>
                <button class="btn btn-primary mr-1" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
