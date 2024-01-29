@extends('adminlte::page')

@section('title', 'Daftar Barcode')

@section('content_header')
    <h1>Daftar Barcode</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('admin.barcodes.download-all') }}" class="btn btn-primary">Unduh Semua Kode QR</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipe</th>
                                    <th>Nama Lokal</th>
                                    <th>URL</th>
                                    <th>Kode QR</th>
                                    <th>Dibuat Pada</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barcodes as $barcode)
                                    <tr>
                                        <td>{{ $barcode->id }}</td>
                                        <td>{{ $barcode->entity_type }}</td>
                                        <td>{{ $barcode->entity->local_name }}</td>
                                        <td>{{ $barcode->url }}</td>
                                        <td>
                                            <a href="{{ route('admin.barcodes.download', $barcode->id) }}" class="btn btn-primary">Unduh Kode QR</a>
                                        </td>
                                        <td>{{ $barcode->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
