@extends('adminlte::page')

@section('content_header')
    <h1>Menambahkan Entitas Baru</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Entitas Baru</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('entities.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach ([
                    'type' => 'Tipe Entitas',
                    'common_name' => 'Nama Umum',
                    'local_name' => 'Nama Lokal',
                    'latin_name' => 'Nama Latin',
                    'english_translation' => 'Kategori',
                    'biome' => 'Bioma',
                    'description' => 'Deskripsi Entitas',
                    'quantity' => 'Kuantitas',
                    'image_name' => 'Nama Gambar',
                ] as $field => $placeholder)
                    <div class="form-group">
                        <label for="{{ $field }}">{{ $placeholder }}</label>
                        @if ($field === 'quantity')
                            <input type="number" name="{{ $field }}" id="{{ $field }}" class="form-control" required>
                        @elseif ($field === 'image_name')
                            <input type="file" name="{{ $field }}" id="{{ $field }}" class="form-control" required>
                        @else
                            <input type="text" name="{{ $field }}" id="{{ $field }}" class="form-control" required>
                        @endif
                    </div>
                @endforeach
                <button type="submit" class="btn btn-success">Buat Entitas</button>
            </form>
        </div>
    </div>
@stop
