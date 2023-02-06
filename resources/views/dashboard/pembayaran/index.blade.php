@extends('layout.index')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pembayaran</h3>
                <p class="text-subtitle text-muted">Proses Pembayaran</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-4">
                <form action="/cari" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="form-group">
                                <label for="basicInput">Kode Menu</label>
                                <input type="text" name="kode_menu" value="" class="form-control" id="basicInput"
                                    placeholder="Kode Menu">
                            </div>
                            {{-- <button class="btn icon btn-success" type="button">
                                    <i class="bi bi-cart"></i>
                            </button> --}}
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="form-group">
                            <label for="disabledInput">Total Harga</label>
                            <input type="text" class="form-control" id="disabledInput" value="{{ $total->total ?? '' }}"
                                disabled="">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Bayar</label>
                            <input type="text" name="jenis" value="" class="form-control" id="basicInput"
                                placeholder="Bayar">
                        </div>
                        <div class="form-group">
                            <label for="disabledInput">Kembalian</label>
                            <input type="text" class="form-control" id="disabledInput" onkeyup="pembayarans(this)"
                                disabled="">
                        </div>
                        <a href="#" class="btn icon btn-success">
                            <i class="bi bi-cash"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="card">
            <div class="card-header">
                <h4>Pembayaran</h4>
            </div>
            <div class="card-body">
                <section class="section">
                    <div class="row" id="table-bordered">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <!-- table bordered -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Menu</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cari as $c)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $c->nama_menu }}</td>
                                                        <td>Rp {{ number_format($c->harga) }}</td>
                                                        <td>
                                                            <form action="/updateJumlah/{{ $c->id }}" method="post">
                                                                @csrf
                                                                <input type="number" onkeyup="updateSubtotal(this)"
                                                                    onfocusout="this.form.submit()" name="subtotal"
                                                                    value="{{ $c->subtotal }}" id="">
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action="/hapus/{{ $c->id }}" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn icon btn-danger">
                                                                    <i class="bi bi-x"></i>
                                                                </button>
                                                            </form>
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
                </section>
            </div>
        </div>
    </div>
@endsection
