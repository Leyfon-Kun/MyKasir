@extends('layout.index')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Jenis Menu</h3>
                <p class="text-subtitle text-muted">Data Jenis Menu</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jenis Menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="/admin/jenismenu/create" class="btn btn-primary">Tambah Jenis Menu</a>
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
                                                <th>Jenis Menu</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jenismenu as $jm)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $jm->jenis }}</td>
                                                    <td>
                                                        <a href="/admin/jenismenu/{{ $jm->id }}/edit" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                                        <form action="/admin/jenismenu/{{ $jm->id }}" class="d-inline" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn icon btn-danger"
                                                            data-confirm="Yakin?|Data yang di hapus tidak dapat di kembalikan?"
                                                            data-confirm-yes="document.querySelector('#delete{{ $jm->id }}').submit()">
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
