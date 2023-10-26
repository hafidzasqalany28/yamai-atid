@extends('adminlte::page')

@section('title', 'List Barcodes')

@section('content_header')
<h1>List of Barcodes</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Local Name</th>
                            <th>URL</th> <!-- Menambahkan kembali kolom URL -->
                            <th>QR Code</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barcodes as $barcode)
                        <tr>
                            <td>{{ $barcode->id }}</td>
                            <td>{{ $barcode->entity_type }}</td>
                            <td>{{ $barcode->entity->local_name }}</td> <!-- Menampilkan Entity Local Name -->
                            <td>{{ $barcode->url }}</td> <!-- Menampilkan URL -->
                            <td>
                                <img class="img-thumbnail" style="max-width: 150px; max-height: 150px;"
                                    src="data:image/png;base64,{{ base64_encode(QrCode::format('png')->size(150)->generate($barcode->url)) }}">
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
@stop