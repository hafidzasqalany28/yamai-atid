@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <!-- Info Box for Fauna -->
        <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fas fa-hippo"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Jenis Fauna</span>
                <span class="info-box-number">{{ $faunaCount }}</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Info Box for Flora -->
        <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fas fa-tree"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Jenis Flora</span>
                <span class="info-box-number">{{ $floraCount }}</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Info Box for Total Visitors -->
        <div class="info-box bg-primary">
            <span class="info-box-icon"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Pengunjung</span>
                <span class="info-box-number">{{ $totalVisitors }}</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Info Box for Total Flora and Fauna -->
        <div class="info-box bg-warning">
            <span class="info-box-icon"><i class="fas fa-box"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Flora dan Fauna</span>
                <span class="info-box-number">{{ $totalQuantity }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- Card for Fauna Table -->
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
                            <td>{{ $fauna->common_name }}</td>
                            <td>{{ $fauna->local_name }}</td>
                            <td>
                                @if($fauna->barcodes->isNotEmpty())
                                <a href="{{ $fauna->barcodes->first()->url }}">{{ $fauna->barcodes->first()->url }}</a>
                                @else
                                No Barcode
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Card for Flora Table -->
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
                            <td>{{ $flora->common_name }}</td>
                            <td>{{ $flora->local_name }}</td>
                            <td>
                                @if($flora->barcodes->isNotEmpty())
                                <a href="{{ $flora->barcodes->first()->url }}">{{ $flora->barcodes->first()->url }}</a>
                                @else
                                No Barcode
                                @endif
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