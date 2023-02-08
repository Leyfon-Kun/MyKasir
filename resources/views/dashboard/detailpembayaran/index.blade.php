@extends('layout.index')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Pembayaran</h3>
                <p class="text-subtitle text-muted">Multiple form layout you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pembayaran</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Detail Pembayaran</h4>
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
                                                <th>Nama Kasir</th>
                                                <th>Pembayaran</th>
                                                <th>Kembalian</th>
                                                <th>Total Harga</th>
                                                <th>Tanggal Pembayaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $p)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $p->kasir->nama }}</td>
                                                    <td>{{ $p->pembayaran }}</td>
                                                    <td>{{ $p->kembalian }}</td>
                                                    <td>{{ $p->total_harga }}</td>
                                                    <td>{{ $p->created_at }}</td>
                                                    <td>
                                                        <form action="/hapus/{{ $p->id }}" method="post">
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
@endsection
