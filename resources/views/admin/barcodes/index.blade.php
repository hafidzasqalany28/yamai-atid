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
                <div class="mb-3">
                    <a href="{{ route('admin.barcodes.download-all') }}" class="btn btn-primary">Download All QR
                        Codes</a>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Local Name</th>
                            <th>URL</th>
                            <th>QR Code</th>
                            <th>Created At</th>
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
                                <a href="{{ route('admin.barcodes.download', $barcode->id) }}"
                                    class="btn btn-primary">Download QR Code</a>
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