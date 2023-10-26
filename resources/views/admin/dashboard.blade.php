@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-hippo"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Jenis Fauna</span>
                <span class="info-box-number">{{ $faunaCount }}</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-tree"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Jenis Flora</span>
                <span class="info-box-number">{{ $floraCount }}</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="info-box">
            <span class="info-box-icon bg-primary"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Pengunjung</span>
                <span class="info-box-number">{{ $totalVisitors }}</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-box"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Flora dan Fauna</span>
                <span class="info-box-number">{{ $totalQuantity }}</span>
            </div>
        </div>
    </div>
</div>

<!-- Card untuk Tabel Jenis Fauna -->
<div class="row">
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Ringkasan Tabel Fauna</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Common Name</th>
                            <th>Local Name</th>
                            <th>Barcode</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faunaData as $fauna)
                        <tr>
                            <td>{{ $fauna->id }}</td>
                            <td>{{ $fauna->entity->common_name }}</td>
                            <td>{{ $fauna->entity->local_name }}</td>
                            <td>
                                <img class="img-thumbnail" style="max-width: 150px; max-height: 150px;"
                                    src="data:image/png;base64,{{ base64_encode(QrCode::format('png')->size(150)->generate($fauna->url)) }}"
                                    alt="Barcode">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Card untuk Tabel Jenis Flora -->
    <div class="col-md-6">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Ringkasan Tabel Flora</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Common Name</th>
                            <th>Local Name</th>
                            <th>Barcode</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($floraData as $flora)
                        <tr>
                            <td>{{ $flora->id }}</td>
                            <td>{{ $flora->entity->common_name }}</td>
                            <td>{{ $flora->entity->local_name }}</td>
                            <td>
                                <img class="img-thumbnail" style="max-width: 150px; max-height: 150px;"
                                    src="data:image/png;base64,{{ base64_encode(QrCode::format('png')->size(150)->generate($flora->url)) }}"
                                    alt="Barcode">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop